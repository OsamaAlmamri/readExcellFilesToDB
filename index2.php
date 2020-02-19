<?php
include "libs/SimpleXLSX.php";
if ($xlsx = SimpleXLSX::parse('books.xlsx')) {
    foreach ($xlsx->rows() as $key => $row) {


    }
} else {
    echo SimpleXLSX::parseError();
}
?>


