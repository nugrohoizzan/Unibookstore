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

$query = mysqli_query($link, "UPDATE buku SET kategori='$kategori', nama='$nama', harga='$harga', stok='$stok', penerbit='$penerbit' WHERE id_bukuu='$id_bukuu'")
or die(mysqli_error($link));

if($query){
    $sukses = "Data berhasil diupdate";
}else {
    $error  = "Data gagal diupdate";
}

if ($error) {
    ?>
        <div class="alert alert-danger" role="alert">
            <?php echo $error ?>
        </div>
    <?php
        header("refresh:3;url=admin.php");//5 : detik
    }
    ?>
    <?php
    if ($sukses) {
    ?>
        <div class="alert alert-success" role="alert">
            <?php echo $sukses ?>
        </div>
    <?php
        header("refresh:3;url=admin.php");
    }
?>
