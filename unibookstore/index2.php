<?php 
    include('koneksi.php');
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Unibookstore</title>
    <link rel="stylesheet" href="style2.css" />
  </head>
  <body>
    <nav>
      <div class="layar-dalam">
        <div class="logo">
          <a href=""><img src="asset/unibook_putih.png" class="putih" /></a>
          <a href=""><img src="asset/unibook_hitam.png" class="hitam" /></a>
        </div>
        <div class="menu">
          <a href="#" class="tombol-menu">
            <span class="garis"></span>
            <span class="garis"></span>
            <span class="garis"></span>
          </a>
          <ul>
            
            <li><a href="#home">Home</a></li>
            <li><a href="#aboutus">About Us</a></li>
            <li><a href="admin.php">Admin</a></li>
            <li><a href="pengadaan.php">Pengadaan</a></li>
            <li><a href="#buku">List Buku</a></li>
            <li><a href="#blog">Blog</a></li>
            <li><a href="#contact">Contact</a></li>
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
      <main>
        <section id="aboutus">
          <div class="layar-dalam">
            <h3>About Us</h3>
            <p class="ringkasan">
            Unibookstore is the number 2 bookstore at Hogwarts which has a complete collection and affordable prices
            </p>
            <div class="konten-isi">
              <p>
              presents a collection of books in various genres in a comfortable, calm and clean atmosphere. As well as friendly, honest and trustworthy employees.
              </p>
            </div>
          </div>
        </section>
        <section class="abuabu" id="support">
          <div class="layar-dalam support">
            <div>
              <img src="asset/matahari.png" />
              <h6>Sufficient Lighting</h6>
              <p>
              Has a reading room that is well lit, comfortable, clean and quiet.
              </p>
            </div>
            <div>
              <img src="asset/tas.png" />
              <h6>Professional Employees</h6>
              <p>
              The employees are very professional, smiling, friendly and of course honest in greeting consumers.
              </p>
            </div>
            <div>
              <img src="asset/kompas.png" />
              <h6>strategic location</h6>
              <p>
              Strategic location and has several branches that are easily accessible to many people.
              </p>
            </div>
          </div>
        </section>
        <section id="collection">
          <div>
            <center><h6>Fiksi</h6></center>
            <img src="asset/fiksi.jpg" />
          </div>
          <div>
            <center><h6>Keilmuan</h6></center>
            <img src="asset/ilmu.jpg" />
          </div>
          <div>
            <center><h6>Bisnis</h6></center>
            <img src="asset/bisnis.jpg" />
          </div>
          <div>
            <center><h6>Novel</h6></center>
            <img src="asset/novel.jpg" />
          </div>
          <div>
            <center><h6>Majalah</h6></center>
            <img src="asset/majalah.jpg" />
          </div>
          <div>
            <center><h6>Jurnal</h6></center>
            <img src="asset/jurnal.jpeg" />
          </div>
          <div>
            <center><h6>Komik</h6></center>
            <img src="asset/comic.jpg" />
          </div>
          
        </section>
        <section class="quote">
          <div class="layar-dalam">
            <p>Buku adalah Jendela Dunia</p>
          </div>
        </section>
        <section id="buku">
        <div class="layar-dalam">
          <center>
            <h3>List Buku</h3>
            </center>    
            <br> 
                <form method="get" action="">
                      <div class="input-field">
                        <input class="input-box"type="text" name="cari" placeholder="Cari Buku">
                      </div>
                </form>
                <br>
                <table>
                    <thead>
                        <tr>
                            <th>ID Buku</th>
                            <th>Kategori</th>
                            <th>Nama Buku</th>
                            <th>Harga</th>
                            <th>Stok</th>
                            <th>Penerbit</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $query = mysqli_query($link, "SELECT * FROM buku");
                    

                        if (isset($_GET['cari'])) {
                            $query = mysqli_query($link, "SELECT * FROM buku WHERE nama LIKE '%".$_GET['cari']."%'");
                        }
                            $no = 1;
                            while ($row = mysqli_fetch_assoc($query)){
                            ?>
                            <tr>
                                <td><?php echo $row['id_bukuu']; ?></td>
                                <td><?php echo $row['kategori']; ?></td>
                                <td><?php echo $row['nama']; ?></td>
                                <td><?php echo $row['harga']; ?></td>
                                <td><?php echo $row['stok']; ?></td>
                                <td><?php echo $row['penerbit']; ?></td>
                                
                            </tr>
                            
                            <?php 
                            }
                            mysqli_close($link);
                            ?>
                    </tbody>
                    
                </table>
          </div>
        </section>
        <section class="abuabu" id="blog">
          <div class="layar-dalam">
            <h3>Latest Blog</h3>
            <div class="blog">
              <div class="area">
                <div
                  class="gambar"
                  style="background-image: url('asset/blog1.jpg')"
                ></div>
                <div class="text">
                  <article>
                    <h4><a href="#">Best 5 Adventure Books </a></h4>
                    <br>
                    <p>
                    Below we will show recommendations for the 5 best adventure books according to Unibooksotre readers
                    </p>
                  </article>
                </div>
              </div>
              <div class="area">
                <div
                  class="gambar"
                  style="background-image: url('asset/blog3.jpg')"
                ></div>
                <div class="text">
                  <article>
                    <h4><a href="#">Reader's theory about Harry Potter</a></h4>
                    <br>
                    <p>
                    Of course, it can be said that there are quite a few Harry Potter readers, apart from the fact that a good story certainly has a lot of mystery. The following are readers' theories about this series.
                    </p>
                  </article>
                </div>
              </div>
            </div>
          </div>
        </section>
      </main>
      <footer id="contact">
        <div class="layar-dalam">
          
          <div>
            <h5>Info</h5>
            <br>
            <img src="asset/Instagram_26px.png" width="20px"/>  
            <img src="asset/Facebook_32px.png" width="22px"/>
            <img src="asset/Twitter_24px.png" width="25px"/>  
          </div>
          <div>
            <h5>Contact</h5> <br>
            (+62)857-0102-4001 <br>
            nugrohoizza29@gmail.com
          </div>
          <div>
            <h5>Help</h5> <br>
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aperiam,
            sunt?
          </div>
          <div>
            <h5>Sitemap</h5> <br>
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aperiam,
            sunt?
          </div>
        </div>
        <div class="layar-dalam">
          <div class="copyright">&copy; 2021 Unibookstore Hogwarts</div>
        </div>
      </footer>
    </div>
    <script
      src="https://code.jquery.com/jquery-3.6.0.min.js"
      integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
      crossorigin="anonymous"
    ></script>
    <script src="javascript.js"></script>
  </body>
</html>
