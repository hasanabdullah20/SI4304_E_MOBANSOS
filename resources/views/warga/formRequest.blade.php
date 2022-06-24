@extends('layoutswarga.mainWarga')

@section('content')
    <div class="container">
        <p class="h1 mt-5" style="font-size: 35px">Request Bansos</p>
        <p class="h5 mt-3" style="font-size: 20px">Silahkan isi form dibawah untuk melakukan Request Bansos</p>
        <form action="/submitRequest" method="POST">
            @csrf @foreach ($dataWarga as $data)
                @foreach ($detailWarga as $detail)
                    <input type="hidden" value="{{ request('idbatch') }}" name="idbatch" readonly />
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama Kepala Keluarga</label>
                        <input type="hidden" value="{{ $detail->id_rt }}" name="rt" readonly />
                        <input class="form-control" type="text" name="nama" id="nama"
                            value="{{ $data->nama_kepala_keluarga }}" readonly />
                    </div>
                    <div class="mb-3">
                        <label for="nik" class="form-label">NIK Kepala Keluarga</label>
                        <input class="form-control" type="text" name="nik" id="nik"
                            value="{{ $data->nik_keluarga }}" readonly />
                    </div>
                    <div class="mb-3">
                        <label for="alamat">Alamat</label>
                        <textarea class="form-control" type="text" name="alamat" id="alamat" readonly>{{ $detail->alamat }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="inputState">Jenis Bantuan Sosial</label>
                        <select id="inputState" class="form-control" name="jenis">
                            <option value="sandang">Sandang</option>
                            <option value="pangan">Pangan</option>
                            <option value="obat">Obat obatan</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="nohp">Nomor yang bisa dihubungi</label>
                        <input class="form-control" type="text" name="nohp" id="nohp" value="{{ $data->nohp }}"
                            readonly />
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Request</button>
                    </div>
                @endforeach
            @endforeach
        </form>
    </div>
@endsection
