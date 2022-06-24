@extends('layoutsRT.mainRT')

@section('content')
    <div class="container">
        <p class="h5 mt-3" style="font-size: 35px">Kelurahan {{ $profil[0]->kelurahan }}</p>
        <div>
            <div class="row">
                <div class="col">
                    <img src="https://multimedia.beritajakarta.id/photo/2014_508c75c8507a2ae5223dfd2faeb98122/563c7d8494ed19c8453a46360d8e0f68.jpg"
                        height="250px" width="350px" style="border-radius: 10px;">
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
                    @if (isset($warga))
                        @if (count($warga) < 1)
                            <tr>
                                <th>belum ada data...</th>
                            </tr>
                        @else
                            @foreach ($warga as $data)
                                <tr>
                                    <td>{{ $data->nama_warga }}</td>
                                    <td><a href="/track-record/{{ $data->id_keluarga }}" class="btn btn-primary">Lihat
                                            Track Record Bansos</a></td>
                                </tr>
                            @endforeach
                        @endif
                    @endif
                </tbody>
            </table>
        </div>
    </div>
@endsection
