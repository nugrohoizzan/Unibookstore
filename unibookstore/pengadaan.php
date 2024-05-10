<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style2.css">
	<title>UNIBOOKSTORE</title>
</head>
<body>
    <nav>
      <div class="layar-dalam">
        <div class="logo">
          <a href="index2.php"><img src="asset/unibook_putih.png" class="putih" /></a>
          <a href="index2.php"><img src="asset/unibook_hitam.png" class="hitam" /></a>
        </div>
        <div class="menu">
          <a href="#" class="tombol-menu">
            <span class="garis"></span>
            <span class="garis"></span>
            <span class="garis"></span>
          </a>
          <ul>
            <li><a href="index2.php">Home</a></li>
            <li><a href="index2.php">About Us</a></li>
            <li><a href="admin.php">Admin</a></li>
            <li><a href="pengadaan.php">Pengadaan</a></li>
            <li><a href="index2.php">List Book</a></li>
            <li><a href="index2.php">Blog</a></li>
            <li><a href="index2.php">Contact</a></li>

          </ul>
        </div>
      </div>
    </nav>
    <div class="layar-penuh">
      <header id="home">
        <div class="overlay"></div>
        <video autoplay muted loop>
          <source src="asset/video-bookstore.mp4" type="video/mp4" />
        </video>
        <div class="intro">
          <h3>Unibookstore</h3>
          <br>
          <p>
            <a href="" class="tombol">MORE INFO</a>
          </p>
        </div>
      </header>
    <?php
    include('koneksi.php');

    $query = "SELECT nama, penerbit, stok FROM buku ORDER BY stok ASC ";
    $result = mysqli_query($link, $query);
    
    ?>
    <section id="buku">
    <div class="layar-dalam">
    <div> 
        <div class="row">
            <div class=>
         
                <center>
                <h3>List Buku</h3>
                <br> 
                <table>
                    <thead>
                        <tr>
                            <th>Nama Buku</th>
                            <th>Stok</th>
                            <th>Penerbit</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $no = 1;
                            while ($row = mysqli_fetch_assoc($result)){
                            ?>
                            <tr>
                                <td><?php echo $row['nama']; ?></td>
                                <td><?php echo $row['stok']; ?></td>
                                <td><?php echo $row['penerbit']; ?></td>
                                
                            </tr>
                            
                            <?php 
                            }
                            mysqli_close($link);
                            ?>
                    </tbody>
                </table>
                <br><br>
                    
               
                </center>
            </div>
        </div>
    </div>
    </div>
    </section>
    <script
      src="https://code.jquery.com/jquery-3.6.0.min.js"
      integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
      crossorigin="anonymous"
    ></script>
    <script src="javascript.js"></script>
</body>
</html>

