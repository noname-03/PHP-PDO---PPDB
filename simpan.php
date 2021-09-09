<?php
include "conn.php";
 
$nim = $_POST['nim'];
$nm = $_POST['nama'];
$almt = $_POST['alamat'];
$email = $_POST['email'];
 
$cek_nim = $conn->prepare("SELECT nim FROM mhs WHERE nim = :nim");
$cek_nim->bindParam(":nim", $nim);
$cek_nim->execute();
$num_rows = $cek_nim->fetchColumn();
 
if($num_rows){
echo "<script>alert('NIM sudah terdaftar.');</script>";
echo "<meta http-equiv='refresh' content='0;url=new.php'>";
exit();
}
else{
try{
$sql = "INSERT INTO mhs (nim, nama, alamat, email)
VALUES ('$nim','$nm','$almt','$email')";
$conn->exec($sql);
echo "New record created successfully";
}
catch(PDOException $e){
echo $sql . "<br>" . $e->getMessage();
}
}
?>