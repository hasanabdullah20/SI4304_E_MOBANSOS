@extends('layouts.main')

@section('content')
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
@endsection