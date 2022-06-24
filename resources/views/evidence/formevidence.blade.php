@extends('layoutswarga.mainWarga')

@section('content')
    <div class="container">
        <div class="col-sm-9 h-25 ml-5 mt-3 w-100 rounded" style="background-color: rgb(40, 86, 146); color: white">

            <div class="ml-5 mr-5">
                <p class="h1 mt-5" style="font-size: 35px">
                    Bukti Penerimaan Bansos
                </p>
                <p class="h5 mt-3" style="font-size: 20px">
                    Jika telah menerima bansos, isi form berikut untuk mengkonfirmasi penerimaan bansos!
                </p>
                <div class="mt-5 mb-3">
                    <form action="/submitEvidence" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" value="{{ request()->route('idBansos') }}" name="idBansos" readonly>
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama Penerima Bansos</label>
                            <input type="text" class="form-control" id="nama">
                        </div>
                        <div class="mb-3">
                            <label for="rt" class="form-label">Nama Ketua RT</label>
                            <input type="text" class="form-control" id="rt">
                        </div>
                        <div>
                            <label for="bukti" class="form-label">Evidence</label>
                            <input type="file" class="form-control" id="bukti" name="bukti">
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