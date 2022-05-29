<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Status Bansos</title>
        <link
            rel="stylesheet"
            href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
            integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
            crossorigin="anonymous"
        />
        <script
            src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"
        ></script>
        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
            crossorigin="anonymous"
        ></script>
        <script
            src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"
        ></script>
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
            href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap"
            rel="stylesheet"
        />
        <style>
            body {
                overflow: hidden;
            }
        </style>
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
                    <p class="h1" style="font-size: 35px"></p>
                    <img src="images/logo-lazis.png" alt="logo" class="mt-3" />
                </center>
                <a
                    class="btn btn-warning mt-5 ml-5"
                    href="/admin"
                    style="width: 65%"
                    >Home</a
                >
                <a
                    class="btn btn-warning mt-3 ml-5"
                    href="/infaqAdmin"
                    style="width: 65%"
                    >Profil</a
                >
                <a
                    class="btn btn-danger mt-3 ml-5"
                    href="/logout"
                    style="width: 65%"
                    >Logout</a
                >
            </div>
            <div class="col-sm-9">
                <div class="ml-5">
                    <p class="h1 mt-5" style="font-size: 35px">Status Request Bansos</p>
                    <p class="h5 mt-3" style="font-size: 20px">
                        Status Bansos yang Anda ajukan
                    </p>
                    <a href="/" class="btn mt-3" style= "background-color: rgb(40, 86, 146)">
                        Request Bansos Baru
                    </a>
                    <a href="/daftarCrowdfunding" class="btn mt-3" style= "background-color: rgb(40, 86, 146)">
                        Lihat Daftar Bansos saat ini
                    </a>
                    <p class="h1 mt-5" style="font-size: 35px">
                        Request Anda
                    </p>
                    <table class="table table-hover mt-4">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">id user</th>
                                <th scope="col">id request</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Tanggal</th>
                                <th scope="col">Jenis Bansos</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">Belum ada data...</th>
                            </tr>
                            <tr>
                                <th scope="row">1</th>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>
                                    <a
                                        href="/"
                                        >Lihat Paket</a
                                    >
                                </td>
                                <td>
                                    <a class="btn class="btn mt-3" style= "background-color: rgb(40, 86, 146)" href="/"
                                        >Konfirmasi Crowdfunding</a
                                    >
                                    <a class="btn btn-warning" href=""
                                        >Lihat Status</a
                                    >
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>

