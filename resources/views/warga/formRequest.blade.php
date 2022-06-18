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
        <p class="h1 mt-5" style="font-size: 35px">Request Bansos</p>
        <p class="h5 mt-3" style="font-size: 20px">Silahkan isi form dibawah untuk melakukan Request Bansos</p>
        <form action="/submitRequest" method="POST">
            @csrf @foreach ($dataWarga as $data)
                @foreach ($detailWarga as $detail)
                <input type="hidden" value="{{ request('idbatch') }}" name="idbatch" readonly />
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama Kepala Keluarga</label>
                        <input type="hidden" value="{{ $detail->id_rt }}" name="rt" readonly />
                        <input class="form-control" type="text" name="nama" id="nama" value="{{ $data->nama_kepala_keluarga }}" readonly />
                    </div>
                    <div class="mb-3">
                        <label for="nik" class="form-label">NIK Kepala Keluarga</label>
                        <input class="form-control" type="text" name="nik" id="nik" value="{{ $data->nik_keluarga }}" readonly />
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
                        <input class="form-control" type="text" name="nohp" id="nohp" value="{{ $data->nohp }}" readonly />
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Register</button>
                    </div>
                @endforeach
            @endforeach
        </form>
    </div>
    {{-- <div class="col-sm-9"> --}}
    {{-- <div class="ml-5">
            <p class="h1 mt-5" style="font-size: 35px">
                Request Bansos
            </p>
            <p class="h5 mt-3" style="font-size: 20px">
                Silahkan isi form dibawah untuk melakukan Request Bansos
            </p>
            <form action="/submitRequest" method="POST">
                @csrf @foreach ($dataWarga as $data)
                    @foreach ($detailWarga as $detail)
                        <div class="form-group">
                            <label for="nama">Nama Kepala Keluarga</label>
                            <input type="hidden" value="{{ $detail->id_rt }}" name="rt" readonly />
                            <input class="form-control" type="text" name="nama" id="nama"
                                value="{{ $data->nama_kepala_keluarga }}" readonly />
                        </div>
                        <div class="form-group">
                            <label for="nik">NIK Kepala Keluarga</label>
                            <input class="form-control" type="text" name="nik" id="nik" value="{{ $data->nik_keluarga }}"
                                readonly />
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <textarea class="form-control" type="text" name="alamat" id="alamat" readonly>{{ $detail->alamat }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="inputState">Jenis Bantuan Sosial</label>
                            <select id="inputState" class="form-control" name="jenis">
                                <option value="sandang">Sandang</option>
                                <option value="pangan">Pangan</option>
                                <option value="obat">Obat obatan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="nohp">Nomer yang bisa dihubungi</label>
                            <input class="form-control" type="text" name="nohp" id="nohp" value="{{ $data->nohp }}"
                                readonly />
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary" type="submit" style="width: 25%">
                                Request
                            </button>
                        </div>
                    @endforeach
                @endforeach
            </form>
        </div> --}}
    {{-- </div>
    </div> --}}
    </body>