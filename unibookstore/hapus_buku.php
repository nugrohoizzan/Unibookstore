<?php
include "koneksi.php";


$id_bukuu = $_GET['id_bukuu'];

$query = $link->prepare("DELETE FROM buku WHERE id_bukuu = ?");
$query->bind_param("s", $id_bukuu);

if ($query->execute()) {
    header("location:admin.php");
} else {
    echo "ERROR, silahkan coba lagi: " . $query->error;
}

$query->close();
mysqli_close($link);
?>
