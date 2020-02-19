<?php


include "../libs/SimpleXLSX.php";
include "db.php";
if ($xlsx = SimpleXLSX::parse($_FILES['file']['tmp_name'])) {
    foreach ($xlsx->rows() as $key => $row) {
        if ($key > 0) {
            $sql = "insert into student (acc_id,name ,phone,major) values ('$row[0]','$row[1]','$row[2]' ,'$row[3]') ";
            $result = $pdo->exec($sql);
        }
        if ($result) {
            echo " <script>location.replace('show.php') </script> ";
            //	header('location:user_info.php');
        } else {
            echo "error ";
        }
    }
} else {
    echo SimpleXLSX::parseError();
}



