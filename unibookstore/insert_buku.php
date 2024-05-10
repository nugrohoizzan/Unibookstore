<?php

include 'koneksi.php';
$id_bukuu = $_POST['id_bukuu'];
$kategori = $_POST['kategori'];
$nama = $_POST['nama'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];
$penerbit = $_POST['penerbit'];
$sukses     = "";
$error      = "";

$query = "INSERT INTO buku(id_bukuu, kategori, nama, harga, stok, penerbit) VALUES('$id_bukuu','$kategori','$nama','$harga','$stok','$penerbit')";
if(mysqli_query($link,$query)){
    header("location:admin.php");
}
else{
    echo "ERROR, silahkan coba lagi". mysqli_error($link);
}

mysqli_close($link);

?>