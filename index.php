<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Porfolio</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">

  
  </head>
  <body>

    <!-- navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">

          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

          <a href="" class="navbar-brand page-scroll">Rahmad Dio</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#about" class="page-scroll">About</a></li>
            <li><a href="#portfolio" class="page-scroll">Portfolio</a></li>
            <li><a href="#contact" class="page-scroll">Contact</a></li>
          </ul>
        </div>

      </div>
    </nav>
    <!-- akhir navbar -->



    <!-- jumbotron -->
    <div class="jumbotron text-center">
      <img src="img/1.jpeg" class="img-circle">
      <h1>Rahmad dio</h1>
      <p>Design | Pemrograman | YouTuber</p>
    </div>
    <!-- akhir jumbotron -->

    <!-- about -->
    <section class="about" id="about">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <h2 class="text-center">About</h2>
            <hr>
          </div>
        </div>
        <div class="row">
        <div class="col-sm-5 col-sm-offset-1">
          <p> Hobi saya mencakup tiga bidang yang berbeda namun saling melengkapi: desain, pemrograman, dan konten YouTube. Setiap bidang ini memberikan saya peluang untuk mengeksplorasi kreativitas digital dengan cara yang unik. Pertama-tama, desain menjadi fondasi dari minat kreatif saya. Melalui desain grafis, saya dapat mengungkapkan ide-ide dan visi saya secara visual. Menggabungkan warna, bentuk, dan elemen-elemen desain lainnya memberi saya platform untuk menciptakan karya seni digital yang menginspirasi dan memikat. Selain itu, pemrograman menjadi pilar kedua dalam perjalanan hobi saya. Keterampilan pemrograman memberi saya keahlian untuk menciptakan solusi teknis untuk berbagai masalah. Dari pengembangan aplikasi hingga pembuatan situs web, saya menemukan kegembiraan dalam menyelesaikan tantangan dan menciptakan produk digital yang dapat meningkatkan efisiensi dan memberikan pengalaman pengguna yang lebih baik.</p>
        </div>
        <div class="col-sm-5">
          <p>YouTube menjadi wadah ekspresi ketiga saya. Melalui kanal YouTube pribadi saya, saya dapat berbagi pengetahuan tentang desain dan pemrograman, menjelajahi tren terkini, serta memberikan pandangan pribadi tentang perkembangan industri kreatif. Gabungan dari ketiga hobi ini menciptakan lingkungan di mana saya dapat terus mengasah kreativitas saya, terus belajar, dan memberikan dampak positif pada komunitas digital. Keseluruhan perjalanan ini tidak hanya tentang mengasah keterampilan desain dan pemrograman, tetapi juga tentang berbagi pengetahuan dan inspirasi melalui saluran YouTube pribadi saya. Hobi ini bukan hanya kegiatan rutin, tetapi merupakan bentuk investasi dalam perkembangan diri saya, dan saya bersemangat untuk terus mengeksplorasi potensi kreatif di dunia digital.</p>
        </div>
        </div>
      </div>    
    </section>
    <!-- akhir about -->

    <!-- portfolio -->
    <section class="portfolio" id="portfolio">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 text-center">
            <h2>Portfolio</h2>
            <hr>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-4">
            <a href="" class="thumbnail">
              <img src="img/portfolio/1.jpg" >
            </a>
          </div> 
          <div class="col-sm-4">
            <a href="" class="thumbnail">
              <img src="img/portfolio/2.jpg" >
            </a>
          </div>
          <div class="col-sm-4">
            <a href="" class="thumbnail">
              <img src="img/portfolio/3.jpeg" >
            </a>
          </div>
          
        </div>

      </div>
    </section>
    <!-- akhir portfolio -->

    <!-- contact -->
    <section class="contact" id="contact">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 text-center">
            <h2>Contact</h2>
            <hr>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-8 col-sm-offset-2">
            <form>
              <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" id="nama" class="form-control" placeholder="Masukkan nama">
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" class="form-control" placeholder="Masukkan email">
              </div>
              <div class="form-group">
                <label for="telp">No Telepon</label>
                <input type="tel" id="telp" class="form-control" placeholder="Masukkan No Telepon">
              </div>
              <select class="form-control">
                <option>-- Pilih Kategory --</option>
                <option>Pemrograman</option>
                <option>Design</option>
              </select>
              <div class="form-group">
                <label for="pesan">Pesan</label>
                <textarea class="form-control" rows="10" placeholder="Masukkan pesan"></textarea>
              </div>
              <button type="submit" class="btn btn-success">Kirim Pesan</button>
            </form>
          </div>
        </div>
      </div>
    </section>
    <!-- akhir contact -->

    <!-- footer -->
    <footer>
      <div class="container text-center">
        <div class="row">
          <div class="col-sm-12">
            <!-- gambar copyright= $copy; -->
            <p><i class="glyphicon glyphicon-copyright-mark"></i> copyright 2023 | built with <i class="glyphicon glyphicon-heart"></i> by. <a href="https://facebook.com/rahmaddio">Rahmad dio</a>.</p>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <a href="https://www.youtube.com/@codecraftdio/featured" class="btn btn-danger" target="_blank"><i class="glyphicon glyphicon-play"></i> Subcribe Ke YouTube saya</a>
          </div>
        </div>
      </div>
    </footer>
    <!-- akhir footer -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="jquery/jquery-3.6.3.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    
    <!-- <script src="js/script.js"></script> -->
  </body>
</html>