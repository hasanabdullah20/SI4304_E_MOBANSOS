<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Tambah RT</title>
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
                    <p class="h1 mt-5" style="font-size: 35px">
                        Daftarkan RT baru
                    </p>
                    <p class="h5 mt-3" style="font-size: 20px">
                        Silahkan isi form dibawah untuk mendaftarkan RT baru
                    </p>
                    <form action="/registRT" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="kota">Nama Kota</label>
                            <input
                                class="form-control"
                                type="text"
                                name="kota"
                                id="kota"
                                placeholder="Masukan Nama Kota RT Berada"
                            />
                        </div>
                        <div class="form-group">
                            <label for="kecamatan">Kecamatan</label>
                            <input
                                class="form-control"
                                type="text"
                                name="kecamatan"
                                id="kecamatan"
                                placeholder="Masukan Nama Kecamatan"
                            />
                        </div>
                        <div class="form-group">
                            <label for="kelurahan">Kelurahan</label>
                            <input
                                class="form-control"
                                type="text"
                                name="kelurahan"
                                id="kelurahan"
                                placeholder="Masukan Nama Kelurahan"
                            />
                        </div>
                        <div class="form-group">
                            <label for="rt">Rt</label>
                            <input
                                class="form-control"
                                type="text"
                                name="rt"
                                id="rt"
                                placeholder="Masukan angka RT"
                            />
                        </div>
                        <div class="form-group">
                            <label for="rw">Rw</label>
                            <input
                                class="form-control"
                                type="text"
                                name="rw"
                                id="rw"
                                placeholder="Masukan angka RW"
                            />
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama Ketua</label>
                            <input
                                class="form-control"
                                type="text"
                                name="nama"
                                id="nama"
                                placeholder="Masukan nama Ketua RT"
                            />
                        </div>
                        <div class="form-group">
                            <label for="email">Email Ketua</label>
                            <input
                                class="form-control"
                                type="text"
                                name="email"
                                id="email"
                                placeholder="Masukan Email yang akan digunakan untuk Login RT"
                            />
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input
                                class="form-control"
                                type="password"
                                name="password"
                                id="password"
                                placeholder="Masukan Password yang akan digunakan untuk Login RT"
                            />
                        </div>
                        <div class="form-group">
                            <button
                                class="btn btn-primary"
                                type="submit"
                                style="width: 25%"
                            >
                                Register
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
