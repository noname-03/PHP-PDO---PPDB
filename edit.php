<?php
include "conn.php";
$sql = $conn->prepare("SELECT * FROM mhs WHERE nim= :nim");
$sql->bindParam(":nim", $_GET['tid']);
$sql->execute();
while($r=$sql->fetch()) {
echo $r['nim'];
?>


<!DOCTYPE html>
<html lang="en">
<body>
    <form action="update.php" method="post">
        <input type="hidden" name="tid" value="<?php echo $r['nim'];?>"><p></p>
        <label for="">NIM</label>
        <input type="text" name="nim" size="20" value="<?php echo $r['nim'];?>"><p></p>
        <label for="">nama</label>
        <input type="text" name="nama" value="<?php echo $r['nama'];?>"><p></p>
        <label for="">alamat</label>
        <input type="text" name="alamat" value="<?php echo $r['alamat'];?>"><p></p>
        <label for="">email</label>
        <input type="text" name="email" value="<?php echo $r['email'];?>"><p></p>
        <input type="submit" value="Save Changes" name="submit">
    </form>
</body>
</html>

<?php } ?>
