<?php
    
    include('../../session.php');
    include('../../../db/db-conn.php');
    
    $ProjectId = $_POST['ProjectId'];
    $RequestId = $_POST['RequestId'];
    
    $query = "
        SELECT Quantity, SpentQuantity FROM projectitems INNER JOIN projectitemspendings
        ON projectitems.Id = projectitemspendings.ItemId
        WHERE projectitemspendings.Id = '{$RequestId}'
    ";
    $query4 = "UPDATE projectitemspendings SET Status='Accepted' WHERE Id='{$RequestId}'";
    $query2 = "
        SELECT * FROM committeemembers
        WHERE ProjectId='{$ProjectId}' AND Email='{$_SESSION['Email']}' AND Type='Member'
    ";
    $query3 = "
        SELECT * FROM committeemembers
        WHERE ProjectId='{$ProjectId}' AND Email='{$_SESSION['Email']}' AND Type='Coordinator'
    ";
    $query13 = "
        SELECT projectitemspendings.Id, ItemName, SpentQuantity, Description, BillSrc, Status, Timestamp
        FROM projectitemspendings INNER JOIN projectitems ON projectitemspendings.ItemId = projectitems.Id
        WHERE ProjectId='{$ProjectId}'
    ";
    
    $results = mysqli_query($conn, $query);
    while ($row = mysqli_fetch_assoc($results)) {
        if ($row['Quantity'] >= $row['SpentQuantity']) {
            mysqli_query($conn, $query4);
            
            $results2 = mysqli_query($conn, $query2);
            $results3 = mysqli_query($conn, $query3);
            $results13 = mysqli_query($conn, $query13);
    
            $isCommitteeMember = mysqli_num_rows($results2) > 0;
            $isCoordinator = mysqli_num_rows($results3) > 0;
            $isTBMember = $_SESSION['AccType'] == "TopBoard";
    
            echo "
                <tr>
                    <th class='item-approval-h-1'>Id</th>
                    <th class='item-approval-h-2'>Name</th>
                    <th class='item-approval-h-1'>Qty</th>
                    <th class='item-approval-h-3'>Description</th>
                    <th class='item-approval-h-1'>Quotation</th>
                    <th class='item-approval-h-2'>Status</th>
                    <th class='item-approval-h-2'>Timestamp</th>
                    <th class='item-approval-h-2'>Actions</th>
                </tr>
            ";
            
            if (mysqli_num_rows($results13) > 0) {
                $modalId3 = 0;
                while ($row13 = mysqli_fetch_assoc($results13)) {
                    echo "
                <div id='item-spend-approval-bill-{$modalId3}' class='modal'>
                    <div class='modal-content'>
                        <span class='close' onclick=CloseModal3('{$modalId3}')>&times;</span>
                        <img
                            src='../uploads/project-item-spend-request-quotations/{$row13['BillSrc']}'
                            alt='quotation'
                            height='95%'
                        /><br/>
                        <a href='../uploads/project-item-spend-request-quotations/{$row13['BillSrc']}' download>Download</a>
                    </div>
                </div>
                    ";
                    
                    echo "
                <tr>
                    <td>{$row13['Id']}</td>
                    <td>{$row13['ItemName']}</td>
                    <td>{$row13['SpentQuantity']}</td>
                    <td>{$row13['Description']}</td>
                    <td>
                        <button id='myBtn' class='btn view-btn' onclick=OpenModal3('{$modalId3}') style='width: 100%'>
                            View
                        </button>
                    </td>
                    <td>{$row13['Status']}</td>
                    <td>{$row13['Timestamp']}</td>
                    ";
                    
                    $Data3 = $ProjectId . ',' . $row13['Id'];
                    if ($isTBMember) {
                        if ($row13['Status']=='Pending') {
                            echo "
                    <td>
                        <button style='width: 100%' class='btn accept-btn' onclick=AcceptItemSpendRequest('{$Data3}')>
                            Accept
                        </button>
                        <button style='width: 100%' class='btn remove-btn' onclick=RejectItemSpendRequest('{$Data3}')>
                            Reject
                        </button>
                    </td>
                            ";
                        } elseif ($row13['Status']=='Rejected') {
                            echo "
                    <td>
                        <button style='width: 100%' class='btn accept-btn' onclick=AcceptItemSpendRequest('{$Data3}')>
                            Accept
                        </button>
                    </td>
                            ";
                        }
                    } elseif ($isCoordinator) {
                        if ($row13['Status']=='Pending' || $row13['Status']=='Rejected') {
                            echo "
                    <td>
                        <button style='width: 100%' class='btn remove-btn' onclick=DeleteItemSpendRequest('{$Data3}')>
                            Delete
                        </button>
                    </td>
                            ";
                        } elseif ($row13['Status']=='Accepted') {
                            echo "
                    <td>
                        <button style='width: 100%' class='btn accept-btn' onclick=SpendItem('{$Data3}')>Pay</button>
                        <button style='width: 100%' class='btn remove-btn' onclick=DeleteItemSpendRequest('{$Data3}')>
                            Delete
                        </button>
                    </td>
                            ";
                        }
                    }
                    
                    echo "
                </tr>
                    ";
                    $modalId3++;
                }
            } else {
                echo "
                <tr>
                    <td colspan='7'>No data</td>
                </tr>
                ";
            }
        } else {
            echo "No enough items to proceed with the transaction.";
        }
    }