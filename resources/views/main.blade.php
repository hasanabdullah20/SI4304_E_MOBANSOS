<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Monitoring Bantuan Sosial Kota Bandung</title>
        <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
            integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
            crossorigin="anonymous"
        />
        <script>
            src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"
        </script>
        <script>
            src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
            crossorigin="anonymous"
        </script>
        <script>
            src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"
        </script>
    </head>

    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="images/mobansos-blue-logo.png" alt="" width="70" height="70">
                </a>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Tentang</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Lokasi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link">Jenis</a>
                        </li>
                        <li class="nav-item" style="margin-left: 800px">
                            <a class="nav-link" style="color: #285693">Masuk</a>
                        </li>
                        <li class="nav-item">
                            <button type="button" class="btn btn-light" style="background-color: #285693; color: white">Daftar</button>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="beranda">
            <div class="row">
                <div class="col" style="margin-top: 150px; margin-left: 40px">
                    <h3>Bantuan Sosial Kota Bandung</h3>
                    <p>Mari membantu sesama dengan cara yang mudah</p>
                    <button type="button" class="btn btn-light" style="background-color: #48B4E4; color: white">Mulai Berbagi</button>
                </div>
                <div class="col" style="margin-top: 80px; margin-left: 400px">
                    <img src="images/home-mobansos.png" width="400px">
                </div>
            </div>
        </div>

        <div class="tentang">
            <div class="row">
                <div class="col" style="margin-top: 100px; margin-left: 40px">
                    <img src="images/donation-home.png" width="400px">
                </div>
                <div class="col" style="margin-top: 140px; margin-right: 100px">
                   <h3>Tentang <h3 style= "color: #48B4E4">Mobansos</h3>
                   <p>Mobansos adalah sebuah platform website yang menyediakan jasa bantuan sosial untuk masyarakat Indonesia khususnya di kota Bandung untuk memenuhi kebutuhan bantuan sosial seperti kebutuhan sehari-hari</p>
                </div>
            </div>
        </div>

        <div class="lokasi" style="margin-top: 100px">
            <img src="images/maps.png" width="100%">
        </div>

        <div class="lokasi text-center" style="margin-top: 50px">
            <h3>Jenis Bantuan Sosial</h3>
            <div class="row row-cols-1 row-cols-md-3 g-3" style="margin-top: 40px">
                <div class="col">
                  <div class="card" style="background-color: #285693; color: white">
                    <div class="card-body">
                      <h5 class="card-title">Pangan</h5>
                      <img src="emoji/food.png" width="80px" height="80px">
                      <p class="card-text">Kami memberikan bantuan pangan berupa sembako, dan kebutuhan pangan lainnya seperti jagung, sagu, kentang, ubi jalar, dan talas</p>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card" style="background-color: #285693; color: white">
                    <div class="card-body">
                      <h5 class="card-title">Sandang</h5>
                      <img src="emoji/Clothes.png" width="80px" height="80px">
                      <p class="card-text">Kami memberikan bantuan sandang berupa pakaian anak-anak, dewasa, orangtua baik perempuan maupun laki-laki</p>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card" style="background-color: #285693; color: white">
                    <div class="card-body">
                      <h5 class="card-title">Obat-obatan</h5>
                      <img src="emoji/Pill.png" width="80px" height="80px">
                      <p class="card-text">Kami memberikan bantuan obat-obatan untuk anak anak, orangtua, dewasa.</p>
                    </div>
                  </div>
                </div>
            </div>
        </div>

        <div class="bottom footer p-4 mt-5" style="background-color: #F5F5F5">
            <div class="footer-top">
              <div class="container">
                  <div class="row">
        
                      <div class="col-lg-3 col-md-6 footer-contact">
                      <h4 class="judul-footer" style="color:#285693">mobansos</h4>
                      <p>
                        Mobansos adalah sebuah platform website yang menyediakan jasa bantuan sosial untuk masyarakat Indonesia khususnya di kota Bandung untuk memenuhi kebutuhan bantuan sosial seperti kebutuhan sehari-hari
                      </p>
                      </div>
          
                      <div class="col-lg-2 col-md-6 footer-links">
                      <h4 class="judul-footer" style="color:#48B4E4">Links</h4>
                          <li class="link" style="list-style:none;" href="#beranda">Beranda</a></li>
                          <li class="link" style="list-style:none;" href="#tentang">Tentang</li>
                          <li class="link" style="list-style:none;" href="#lokasi">Lokasi</li>
                          <li class="link" style="list-style:none;" href="#jenisbantuan">Jenis Bantuan</li>
                      </div>
        
                    <div class="col-lg-3 col-md-6 footer-links">
                    <h4 class="judul-footer" style="color:#48B4E4">Informasi</h4>
                      <li class="tentang" style="list-style:none;" href="/daftar">Tentang Kami</a></li>
                    <h4 style="margin-top: 20px; color:#48B4E4">Sosial Media</h4>
                        <li class="tentang" style="list-style:none;" href="/daftar">Facebook</a></li>
                        <li class="tentang" style="list-style:none;" href="/daftar">Instagram</a></li>
                    </div>
        
                  <div class="col-lg-4 footer-links">
                    <h4 class="judul-footer" style="color:#48B4E4">Bantuan</h4>
                        <li class="link" style="list-style:none;" href="#faq">FaQ</a></li>
                        <li class="link" style="list-style:none;" href="#pusatbantuan">Pusat Bantuan</li>
                  </div>
        
                </div>
              </div>
            </div>
          </div>
    </body>