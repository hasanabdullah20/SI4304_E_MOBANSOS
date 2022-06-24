@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="row">
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
                            <input class="form-control" type="text" name="kota" id="kota"
                                placeholder="Masukan Nama Kota RT Berada" />
                        </div>
                        <div class="form-group">
                            <label for="kecamatan">Kecamatan</label>
                            <input class="form-control" type="text" name="kecamatan" id="kecamatan"
                                placeholder="Masukan Nama Kecamatan" />
                        </div>
                        <div class="form-group">
                            <label for="kelurahan">Kelurahan</label>
                            <input class="form-control" type="text" name="kelurahan" id="kelurahan"
                                placeholder="Masukan Nama Kelurahan" />
                        </div>
                        <div class="form-group">
                            <label for="rt">Rt</label>
                            <input class="form-control" type="text" name="rt" id="rt"
                                placeholder="Masukan angka RT" />
                        </div>
                        <div class="form-group">
                            <label for="rw">Rw</label>
                            <input class="form-control" type="text" name="rw" id="rw"
                                placeholder="Masukan angka RW" />
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama Ketua</label>
                            <input class="form-control" type="text" name="nama" id="nama"
                                placeholder="Masukan nama Ketua RT" />
                        </div>
                        <div class="form-group">
                            <label for="email">Email Ketua</label>
                            <input class="form-control" type="text" name="email" id="email"
                                placeholder="Masukan Email yang akan digunakan untuk Login RT" />
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input class="form-control" type="password" name="password" id="password"
                                placeholder="Masukan Password yang akan digunakan untuk Login RT" />
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary" type="submit" style="width: 25%">
                                Register
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
