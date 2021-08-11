<?php
$host = "localhost";
$username = "hai";
$passwd = "";

try {
    $conn = new PDO("mysql:host=$host;dbname=ppdb",$username, $passwd);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Coneksi Gagal : " . $e->getMessage();
}
