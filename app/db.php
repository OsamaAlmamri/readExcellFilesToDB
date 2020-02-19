<?php
$host = 'localhost';
$uname = 'root';
$pass = '';

$connection = "mysql:host=localhost;dbname=excel";
$pdo = new PDO ($connection, $uname, $pass);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


?>