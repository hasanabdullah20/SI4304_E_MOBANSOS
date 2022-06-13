<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Pilih Batch</title>
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
        <a href="/homeRT" class="btn btn-primary mt-5">Kembali</a>
        <p class="h5 mt-3" style="font-size: 35px">Kelurahan {{ $profil[0]->kelurahan }}</p>
        <div>
            <div class="row">
                <div class="col">
                    <img src="https://multimedia.beritajakarta.id/photo/2014_508c75c8507a2ae5223dfd2faeb98122/563c7d8494ed19c8453a46360d8e0f68.jpg" height="250px" width="350px" style="border-radius: 10px;">
                </div>
                <div class="col" style="margin-left: -290px">
                    <p class="h5 mt-3" style="font-size: 20px">Jumlah Warga : {{ $profil[0]->jumlah_penduduk }}</p>
                    <p class="h5 mt-3" style="font-size: 20px">Ketua : {{ $profil[0]->nama_ketua }}</p>
                    <p class="h5 mt-3" style="font-size: 20px">Email : {{ $profil[0]->email_ketua }}</p>
                </div>
            </div>
        <p class="h5 mt-3" style="font-size: 15px">Data Warga</p>
        <table class="table">
            <thead>
                <tr>
                <th scope="col">Nama Keluarga</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
            @if(isset($warga)) @if(count($warga) < 1)
            <tr>
                <th>belum ada data...</th>
            </tr>
            @else @foreach($warga as $data)
            <tr>
                <td>{{ $data->nama_warga }}</td>
                <td><a href="/track-record/{{ $data->id_keluarga }}" class="btn btn-primary">Lihat Track Record Bansos</a></td>
            </tr>
            @endforeach @endif @endif
            </tbody>
        </table>
        </div>
    </div>
    </body>