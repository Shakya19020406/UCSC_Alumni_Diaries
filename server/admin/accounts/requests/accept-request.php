<?php

include('../../../../db/db-conn.php');
include('../../../email/body-templates/MemberAccountRequestAccepted.php');
include('../../../code-generator/PasswordGenerator.php');

$Id = $_POST['Id'];

$query = "SELECT * FROM memberaccountrequests WHERE Id='{$Id}'";
$result = mysqli_query($conn, $query);
while ($row = mysqli_fetch_assoc($result)) {
    $random_password = PasswordGenerator();
    $random_password_encrypted = md5($random_password);
    $timestamp = date('Y-m-d H:i:s');
    $dueTimeStamp = date('Y-m-d H:i:s', strtotime($timestamp . " +1 month"));
    
    if (mail(
        $row['Email'],
        "Member account request accepted",
        MemberAccountRequestAccepted($row['FirstName'], $row['LastName'], $random_password),
        "From: ucsc.alumni.diaries@gmail.com"
    )) {
        $query = "
            INSERT INTO registeredmembers (
                Email,
                FirstName,
                LastName,
                NameWithInitials,
                Gender,
                Address,
                NIC,
                ContactNumber,
                Batch,
                IndexNumber,
                PicSrc,
                Password,
                AccType,
                SubscriptionType,
                SubscriptionDue
            ) VALUES (
                '${row['Email']}',
                '${row['FirstName']}',
                '${row['LastName']}',
                '${row['NameWithInitials']}',
                '${row['Gender']}',
                '${row['Address']}',
                '${row['NIC']}',
                '${row['ContactNumber']}',
                '${row['Batch']}',
                '${row['IndexNumber']}',
                '../assets/images/user-default.png',
                '${random_password_encrypted}',
                'Member',
                'Monthly',
                '${dueTimeStamp}'
            )
        ";
        if (mysqli_query($conn, $query)) {
            $query = "DELETE FROM memberaccountrequests WHERE Id='${row['Id']}'";
            if (mysqli_query($conn, $query)) {
                echo "
                    <div class='success-message'>
                        <b>{$row['FirstName']} {$row['LastName']}</b> member account request has been accepted
                    </div>
                ";
            } else {
                echo "<div class='error-message'>Server Error: " . mysqli_error($conn) . "</div>";
            }
        } else {
            echo "<div class='error-message'>Server Error: " . mysqli_error($conn) . "</div>";
        }
    } else {
        echo "<div class='error-message'>email not sent</div>";
    }
}