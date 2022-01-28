<?php
    
    include('../../../../server/session.php');
    require('../../../../server/fpdf/fpdf.php');
    
    $ProjectId = $_GET['projectid'];
    date_default_timezone_set('Asia/Colombo');
    $date = date('m/d/Y h:i:s a', time());
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "ucsc_alumni_diaries";
    $port = "3306";
    
    $conn = mysqli_connect($servername, $username, $password, $dbname, $port);
    
    $query = "SELECT Name FROM projects WHERE Id = '{$ProjectId}'";
    $query2 = "SELECT Id, ItemName, Quantity FROM projectitems WHERE ProjectId = '{$ProjectId}'";
    
    $results = mysqli_query($conn, $query);
    $results2 = mysqli_query($conn, $query2);
    
    ob_end_clean();
    ob_start();
    $pdf = new FPDF();
    $pdf->AddPage();
    
    $pdf->Image('../../../../assets/images/logo.jpeg', 10, 8, 33);
    $pdf->SetFont('Arial', 'B', 20);
    $pdf->Cell(80);
    $pdf->Cell(50, 20, 'UCSC Alumni Association', 0, 0, 'C');
    $pdf->Ln(20);
    $pdf->SetFont('Arial', 'U', 15);
    $pdf->Cell(207, 30, 'Ongoing project items summary', 0, 0, 'C');
    $pdf->Write(35, "\n", '', 0, 'C', true, 0, false, false, 0);
    
    while ($row = mysqli_fetch_assoc($results)) {
        $pdf->SetFont('Arial','',12);
        $pdf->Cell(20, 10, 'Project ID:');
        $pdf->Cell(15);
        $pdf->Cell(20, 10, $ProjectId);
        $pdf->Ln();
            
        $pdf->Cell(20, 10, 'Project Name:');
        $pdf->Cell(15);
        $pdf->Cell(20, 10, $row['Name']);
        $pdf->Ln();
            
        $pdf->Cell(20, 10, 'Generated by:');
        $pdf->Cell(15);
        $pdf->Cell(20, 10, $_SESSION['FirstName'] . " " . $_SESSION['LastName'] . " | " . $_SESSION['Email']);
        $pdf->Ln();
            
        $pdf->Cell(20, 10, 'Time:');
        $pdf->Cell(15);
        $pdf->Cell(20, 10, $date);
        $pdf->Ln();
        $pdf->Write(10, "\n", '', 0, 'C', true, 0, false, false, 0);
    
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(40,10, 'Item Id',1,0,'C');
        $pdf->Cell(100,10, 'Item Name',1,0,'C');
        $pdf->Cell(50,10, 'Available Quantity',1,0,'C');
        $pdf->Ln();
    
        $pdf->SetFont('Arial','',10);
        
        if (mysqli_num_rows($results2) > 0) {
            while ($row2 = mysqli_fetch_assoc($results2)) {
                $pdf->Cell(40,10, $row2['Id'],1,0,'C');
                $pdf->Cell(100,10, $row2['ItemName'],1,0,'C');
                $pdf->Cell(50,10, $row2['Quantity'],1,0,'C');
                $pdf->Ln();
            }
        } else {
            $pdf->Cell(190,10, "No data",1,0,'C');
        }
    }
    
    $pdf->Output();
    ob_end_flush();
    
    // Activity
    $query16 = "
        INSERT INTO activitylog (Email, Section, Activity)
        VALUES ('{$_SESSION['Email']}', 'Projects - Ongoing', 'Item summary of Project (ID): {$ProjectId} - Report generated')
    ";
    mysqli_query($conn, $query16);