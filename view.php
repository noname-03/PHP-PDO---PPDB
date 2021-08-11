<?php 
// versi 2 menampilkan kata
include "conn.php";

$sql = $conn->prepare("SELECT * FROM mhs ORDER BY nim DESC");
$sql->execute();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>NIM</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Alamat</th>
            <th>Aksi</th>
        </tr>
            <?php while ($r=$sql->fetch()){ ?>
        <tr>
            <td><?php echo $r['nim']?></td>
            <td><?php echo $r['nama']?></td>
            <td><?php echo $r['email']?></td>
            <td><?php echo $r['alamat']?></td>
            <td>
            <input type="button" name="submit" value="Edit" onclick="window.location='edit.php?tid=<?php echo $r['nim'];?>'">
            <input type="button" name="submit" value="Hapus" onclick="window.location='delete.php?tid=<?php echo $r['nim'];?>'">
            </td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>