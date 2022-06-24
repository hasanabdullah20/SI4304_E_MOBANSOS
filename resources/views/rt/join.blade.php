@extends('layoutswarga.mainWarga')

@section('content')
    <div class="col-sm-9">
        <div class="ml-5">
            <p class="h1 mt-5" style="font-size: 35px">
                Daftar ke dalam RT anda
            </p>
            <p class="h5 mt-3" style="font-size: 20px">
                Silahkan isi form dibawah untuk melakukan pendataran masuk RT
            </p>
            <form action="/registRTWarga" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="jumlah">Jumlah Anggota Keluarga</label>
                    <input type="hidden" value="{{ $rt }}" name="rt" readonly>
                    <input class="form-control" type="text" name="jumlah" id="jumlah"
                        placeholder="Masukan Jumlah Anggota Keluarga" />
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat Lengkap</label>
                    <textarea class="form-control" name="alamat" id="alamat" placeholder="Masukan Alamat Lengkap"></textarea>
                </div>
                <div class="form-group">
                    <label for="kk">Kartu Keluarga</label>
                    <input type="file" class="form-control" name="kk" id="kk" />
                </div>
                <div class="form-group">
                    <label for="ktp">KTP Kepala Keluarga</label>
                    <input type="file" class="form-control" name="ktp" id="ktp" />
                </div>
                <div class="form-group">
                    <button class="btn btn-primary" type="submit" style="width: 25%">
                        Daftar
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
