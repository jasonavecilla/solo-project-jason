<?php

include("../includes/db-connect.php");

if ($dbConn == true) {
    $vEmail = $_POST['email'];

    if($vEmail) {
        $qQuery = "SELECT * FROM `u955154186_db_llanes`.`tbl_users` WHERE `email` = '$vEmail' AND `deletedate` IS NULL";
        $eQuery = mysqli_query($dbConn, $qQuery);
        $rows = mysqli_fetch_assoc($eQuery);
        $nRowCount = mysqli_num_rows($eQuery);
        if ($nRowCount > 0) {
            $nId = $rows['id'];
            echo $nId;
        } else {
            echo "does not exist";
        }
    }

}