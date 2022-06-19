<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Home</title>
        <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
            integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
            crossorigin="anonymous"
        />
        <script
            src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"
        ></script>
        <script
            src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
            crossorigin="anonymous"
        ></script>
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"
        ></script>
    </head>
    <body>
        <div class="row">
            <div
                class="col-sm-2 sidebar vh-100"
                style="background-color: rgb(40, 86, 146); color: white"
            >
                <center>
                    <br />
                    <br />
                    <p class="h1" style="font-size: 35px">Halo {{ $_SESSION['nama_kepala_keluarga']}}</p>
                    <!-- <img src="images/logo-lazis.png" alt="logo" class="mt-3" /> -->
                </center>
                <a
                    class="btn btn-warning mt-5 ml-5"
                    href="/"
                    style="width: 65%"
                    >Home</a
                >
                <a
                    class="btn btn-warning mt-3 ml-5"
                    href="/profilWarga"
                    style="width: 65%"
                    >Profil</a
                >
                <a
                    class="btn btn-warning mt-3 ml-5"
                    href="/history"
                    style="width: 65%"
                    >History</a
                >
                <a
                    class="btn btn-warning mt-3 ml-5"
                    href="/listBansos"
                    style="width: 65%"
                    >Konfirmasi Bansos</a
                >
                <a
                    class="btn btn-danger mt-3 ml-5"
                    href="/logoutKeluarga"
                    style="width: 65%"
                    >Logout</a
                >
            </div>
            <div
                class="col-sm-9 h-25 ml-5 mt-3 w-100 rounded"
                style="background-color: rgb(40, 86, 146); color: white"
            >
                <div class="ml-5">
                    <p class="h1 mt-5" style="font-size: 35px">
                        Pembuatan Request Bansos
                    </p>
                    <p class="h5 mt-3" style="font-size: 20px">
                        Request Bansos sekarang, Request akan diterima oleh RT
                        dan diteruskan ke pemerintah untuk segera dikirim !
                    </p>
                    <div>
                        <center>
                            <!-- <a
                                href="/requestWarga"
                                class="mt-3 btn btn-success ml-3 w-75 mb-3"
                                style="background-color: rgb(72, 180, 227)"
                            >
                                Request
                            </a> -->
                            <a
                                href="/pilihBansos"
                                class="mt-3 btn btn-success ml-3 w-75 mb-3"
                                style="background-color: rgb(72, 180, 227)"
                            >
                                Request Bansos
                            </a>
                        </center>
                    </div>
                </div>
                <div class="ml-5">
                    <p class="h1 mt-5" style="font-size: 35px">
                        Join RT
                    </p>
                    <p class="h5 mt-3" style="font-size: 20px">
                        Anda saat ini belum Join RT, ayo join sekarang untuk melakukan request !
                    </p>
                    <div>
                        <center>
                            <a
                                href="/listJoinRT"
                                class="mt-3 btn btn-success ml-3 w-75 mb-3"
                                style="background-color: rgb(72, 180, 227)"
                            >
                                Join RT
                            </a>
                        </center>
                    </div>
                </div>
            </div>
</body>
</html>
<!-- @section('content')
<div class="container">
    <div class="row">
      <div class="col-sm-6">
        <h3>Selamat datang di Mobansos!</h3>
        <p class="text" style="font-size: 18px;">Request Bansosmu sekarang, request akan diterima oleh RT
            dan diteruskan ke pemerintah untuk segera dikirim!</p>
        <div class="pt-3">
            <a href="/requestWarga" class="btn btn-info d-block text-white">Request Bansos</a>
        </div>
      </div>
      <div class="col-sm-6">
        <img src="images/mobansos-home.png" style="margin-left: 70px">
      </div>
    </div>
</div>
@endsection -->