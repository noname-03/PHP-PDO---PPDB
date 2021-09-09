<?php
include "conn.php";
 
try{
$sql = "DELETE FROM mhs WHERE nim = '$_GET[tid]' ";
 
// use exec() because no results are returned
$conn->exec($sql);
echo "Record deleted successfully";
}
catch(PDOException $e){
echo $sql . "<br>" . $e->getMessage();
}
$conn = null;
?>