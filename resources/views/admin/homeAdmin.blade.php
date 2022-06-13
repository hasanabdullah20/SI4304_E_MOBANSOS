@extends('layouts.main')

@section('content')
<div class="container">
    <div class="row">
      <div class="col-sm-6">
        <h3>Penambahan Akun RT</h3>
        <p class="text" style="font-size: 18px;">Klik disini untuk menambahkan RT baru</p>
        <div class="pt-3">
            <a href="/tambahRT" class="btn btn-info d-block text-white">Tambah RT</a>
        </div>
      </div>
      <div class="col-sm-6">
        <img src="images/mobansos-home.png" style="margin-left: 70px">
      </div>
    </div>
</div>
@endsection