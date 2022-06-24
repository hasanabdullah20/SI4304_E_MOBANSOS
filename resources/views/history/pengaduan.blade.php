@extends('layoutswarga.mainWarga')

@section('content')
    <div class="container">
        <p class="h5 mt-3" style="font-size: 35px">Pengaduan Warga</p>
        <form action="/pengaduan" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" class="form-control" value="{{ request()->route('idBansos') }}" name="idbansos">
            <div>
                <div>
                    <label for="pengaduan" class="form-label">Deskripsi Pengaduan</label>
                    <textarea class="form-control" id="pengaduan" rows="4" name="pengaduan"> </textarea>
                </div>
            </div>
            <div class="mt-2">
                <label for="pengaduangambar" class="form-label">Gambar Pendukung</label>
                <input type="file" class="form-control" id="pengaduangambar" name="pengaduangambar">
            </div>
            <div class="mt-3">
                <div class="d-grid gap-2 d-md-block">
                    <button type="submit" class="btn btn-success btn-sm">Submit</button>
                </div>
            </div>
        </form>
    </div>
@endsection
