<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Profil Warga</title>
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
    <div class="container">
        <a href="/" class="btn btn-primary mt-5">Kembali</a>
        <p class="h5 mt-3" style="font-size: 35px">Profil Kepala Keluarga</p>
        <div>
            <div class="row">
                <div class="col" style="margin-top: 100px">
                    <img src="https://img.freepik.com/free-vector/man-shows-gesture-great-idea_10045-637.jpg?t=st=1655282298~exp=1655282898~hmac=643cba74b08c861bf77c5fbdf6dd9efbaf4313edea07c1ec5d79618dd3ffa969&w=740" height="250px" width="250px" style="border-radius: 50%;">
                </div>
                <div class="col" style="margin-left: -400px">
                <form action="/editProfilWarga" method="POST">
                    @csrf
                    <div>
                        <div class="row">
                            <label for="nik" class="col-form-label">NIK</label>
                        </div>
                        <div class="row">
                            <input type="text" id="nik" class="form-control" value="{{ $dataWarga[0]->nik_keluarga }}" name="nik">
                        </div>
                    </div>

                    <div>
                        <div class="row">
                            <label for="nama" class="col-form-label">Nama</label>
                        </div>
                        <div class="row">
                            <input type="text" id="nama" class="form-control" value="{{ $dataWarga[0]->nama_kepala_keluarga }}" name="nama">
                        </div>
                    </div>

                    <div>
                        <div class="row">
                            <label for="email" class="col-form-label">Email</label>
                        </div>
                        <div class="row">
                            <input type="text" id="email" class="form-control" value="{{ $dataWarga[0]->email }}" name="email">
                        </div>
                    </div>

                    <div>
                        <div class="row">
                            <label for="alamat" class="form-label">Alamat</label>
                            <textarea class="form-control" id="alamt" rows="2" name="alamat"> {{ $dataWarga[0]->alamat }} </textarea>
                        </div>
                    </div>

                    <div>
                        <div class="row">
                            <label for="nohp" class="col-form-label">No HP</label>
                        </div>
                        <div class="row">
                            <input type="text" id="nohp" class="form-control" value="{{ $dataWarga[0]->nohp }}" name="nohp">
                        </div>
                    </div>

                    <div class="mt-3">
                        <div class="row d-grid gap-2 d-md-block">
                            <button type="submit" class="btn btn-warning btn-sm">Edit</button>
                            <button type="button" class="btn btn-danger btn-sm">Cancel</button>
                        </div>
                    </div>
                </form>
                </div>
            </div>
        <p class="h5 mt-5" style="font-size: 15px">Riwayat Bansos</p>
        <table class="table">
            <thead>
                <tr>
                <th scope="col">Batch Bansos</th>
                <th scope="col">Tanggal Pengajuan Bansos</th>
                <th scope="col">Status Bansos</th>
                </tr>
            </thead>
            <tbody>
            @if(isset($dataBansos)) @if(count($dataBansos) < 1)
            <tr>
                <th>belum ada data...</th>
            </tr>
            @else @foreach($dataBansos as $data)
            <tr>
                <td>{{ $data->jenis_bansos }}</td>
                <td>{{ $data->created_at }}</td>
                <td>{{ $data->status}}</td>
            </tr>
            @endforeach @endif @endif
            </tbody>
        </table>
        </div>
    </div>
    </body>