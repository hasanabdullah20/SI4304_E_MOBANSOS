@extends('layoutswarga.mainWarga')

@section('content')
    <div class="container">
        <div class="card" style="background-color: rgb(40, 86, 146); color: white; margin-top: 10px">
            <p class="h1 mt-3" style="font-size: 35px; margin-left: 20px">
                Join RT
            </p>
            <p class="h5 mt-3" style="font-size: 20px; margin-left: 20px">
                Anda saat ini belum Join RT, ayo join sekarang untuk melakukan request !
            </p>
            <div>
                <center>
                    <a href="/listJoinRT" class="mt-3 btn btn-success ml-3 w-75 mb-3"
                        style="background-color: rgb(72, 180, 227)">
                        Join RT
                    </a>
                </center>
            </div>
        </div>
    
        <div class="card" style="background-color: rgb(40, 86, 146); color: white; margin-top: 10px">
            <p class="h1 mt-5" style="font-size: 35px; margin-left: 20px">
                Pembuatan Request Bansos
            </p>
            <p class="h5 mt-3" style="font-size: 20px; margin-left: 20px">
                Request Bansos sekarang, Request akan diterima oleh RT
                dan diteruskan ke pemerintah untuk segera dikirim !
            </p>
            <div>
                <center>
                    <a href="/pilihBansos" class="mt-3 btn btn-success ml-3 w-75 mb-3"
                        style="background-color: rgb(72, 180, 227)">
                        Request Bansos
                    </a>
                </center>
            </div>
        </div>
    </div>
@endsection
