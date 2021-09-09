<?php 
include "conn.php";
try {
    $sql = $conn->prepare("UPDATE mhs SET 
    nim = '$_POST[nim]',
    nama = '$_POST[nama]',
    alamat = '$_POST[alamat]',
    email = '$_POST[email]' WHERE nim = :nim");
    $sql->bindParam(":nim", $_POST['tid']);
    $sql->execute();
    echo $sql->rowCount() . "sukses";
} catch (PDOException $e) {
    echo $e->getMessage();
}
$conn = null;
?>
