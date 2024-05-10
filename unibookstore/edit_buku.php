<?php

include 'koneksi.php';

// Ambil nilai id_bukuu dari parameter GET
$id_bukuu = $_GET['id_bukuu'];

// Gunakan prepared statement untuk menghindari SQL injection
$query = $link->prepare("SELECT * FROM buku WHERE id_bukuu = ?");
$query->bind_param("s", $id_bukuu);
$query->execute();

// Ambil hasil kueri
$result = $query->get_result();

// Ambil data sebagai array asosiatif
$row = $result->fetch_assoc();

// Tutup prepared statement
$query->close();
?>

<html>
<head>
<link rel="stylesheet" type="text/css" href="project.css">
<title>Tambah buku</title>
<link rel="stylesheet" href="style2.css" />
</head>
<body>
<video autoplay muted loop>
          <source src="asset/video-bookstore.mp4" type="video/mp4" />
</video>
<center>
    <div class="wrapper">
        
        <h3>Form Edit Data</h3><br>
        <form role="form" action="form_edit.php" method="post" enctype="multipart/form-data" class="form-tambah">
        <div class="input-box">
                <div class="input-field">
                    <input type="hidden" name="id_bukuu" value="<?php echo $row['id_bukuu']; ?>">
                    <i class='bx bxs-user'></i>
                </div>
                <div class="input-field">
                    <i class='bx bx-male-female' ></i>
                    <select name="kategori" placeholder = "Kategori" value="<?php echo $row['kategori']; ?>">
                    <option>--</option>
                    <option>Bisnis</option>
                    <option>Keilmuan</option>
                    <option>Novel</option>
                    <option>Sejarah</option>
                    <option>Majalah</option>
                    <option>Komik</option>
                    <option>Jurnal</option>
                    </select>
                </div>
        </div>
        <div class="input-box">
                <div class="input-field">
                    <input type="text" name="nama" placeholder="Nama Buku" value="<?php echo $row['nama']; ?>">
                    <i class='bx bxs-lock-alt'></i>
                </div>
                <div class="input-field">
                    <input type="text" name="harga" placeholder="Harga" value="<?php echo $row['harga']; ?>">
                    <i class='bx bxs-user'></i>
                </div>
        </div>
        <div class="input-box">
                <div class="input-field">
                    <input type="text" name="stok" placeholder="Stok" value="<?php echo $row['stok']; ?>">
                    <i class='bx bxs-lock-alt'></i>
                </div>
                <div class="input-field">
                    <input type="text" name="penerbit" placeholder="Penerbit" value="<?php echo $row['penerbit']; ?>">
                    <i class='bx bxs-user'></i>
                </div>     
        </div>
                
        <button class="register" type="submit" name="submit" value="REGISTER"> Edit </button>
        
        
        </form>
        <br>
        <a href="admin.php"><button class="batal">Batal</button></a>
    </div>
</center>
</body>
</html>
