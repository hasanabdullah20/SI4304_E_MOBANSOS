@extends('layouts.main') @section('content')
<div class="container">
<div class="col-sm-9 h-25 ml-5 mt-3 w-100 rounded">

<div class="ml-5 mr-5">
    <p class="h1 mt-5" style="font-size: 35px">
        Buat batch baru
    </p>
    <p class="h5 mt-3" style="font-size: 20px">
        Buat Batch baru untuk pengguna melakukan request bansos !
    </p>
    <div class="mt-5 mb-3">
        <form action="/submitBatch" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="nama" class="form-label">Nama Batch</label>
                <input type="text" class="form-control" id="nama" name="nama">
            </div>
            <div class="mb-3">
                <label for="desc" class="form-label">Deskripsi Batch</label>
                <textarea class="form-control" id="desc" rows="3" name="desc"></textarea>           
            </div>
            <div>
                <label for="deadline" class="form-label">Deadline</label>
                <input type="date" class="form-control" id="deadline" name="deadline">
                <div class="form-text" style="font-size: 10px">Sertakan file bukti penerimaan bansos dalam
                    bentuk gambar.</div>
            </div>
            <center>
                <button type="submit" class="btn btn-primary mt-3 ml-3 w-75 mb-3"
                    style="background-color: rgb(72, 180, 227)">
                    Submit
                </button>
            </center>
        </form>
    </div>
</div>
</div>
</div>
@endsection
