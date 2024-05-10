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
<?php
    include('koneksi.php');

    $query = "SELECT * FROM buku";
    $result = mysqli_query($link, $query);
    ?>
    <center>
    <div class="wrapper">
        
        <h3>Form Tambah Data</h3><br>
        <form role="form" action="insert_buku.php" method="post" enctype="multipart/form-data" class="form-tambah">
        <div class="input-box">
                <div class="input-field">
                    <input type="text" name="id_bukuu" placeholder="ID Buku" required>
                    <i class='bx bxs-user'></i>
                </div>
                <div class="input-field">
                    <i class='bx bx-male-female' ></i>
                    <select name="kategori" placeholder = "Kategori" required>
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
                    <input type="text" name="nama" placeholder="Nama Buku" required>
                    <i class='bx bxs-lock-alt'></i>
                </div>
                <div class="input-field">
                    <input type="text" name="harga" placeholder="Harga" required>
                    <i class='bx bxs-user'></i>
                </div>
        </div>
        <div class="input-box">
                <div class="input-field">
                    <input type="text" name="stok" placeholder="Stok" required>
                    <i class='bx bxs-lock-alt'></i>
                </div>
                <div class="input-field">
                    <input type="text" name="penerbit" placeholder="Penerbit" required>
                    <i class='bx bxs-user'></i>
                </div>     
        </div>
                
        <button class="register" type="submit" name="submit" value="REGISTER"> Tambah </button>
        
        
        </form>
        <br>
        <a href="admin.php"><button class="batal">Batal</button></a>
    </div>
    </center>
    <br>
    
</body>