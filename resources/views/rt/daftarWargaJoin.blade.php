@extends('layoutsRT.mainRT')

@section('content')
    <div class="container">
        <div class="search" style="margin-top: 2%">
            <h4 class="mr-1">List Join</h4>
            @if (isset($listJoin))
                @if (count($listJoin) < 1)
                    <tr>
                        <th scope="row">Belum ada data...</th>
                    </tr>
                @else
                    @foreach ($listJoin as $data)
                        <div class="row mt-3">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">ID Keluarga</th>
                                        <th scope="col">Jumlah Anggota Keluarga</th>
                                        <!-- <th scope="col">Kelurahan</th>
                                        <th scope="col">Kecamatan</th> -->
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>{{ $data->id_keluarga }}</td>
                                        <td>{{ $data->jumlah_anggota_keluarga }}</td>
                                        <!-- <td>{{ $data->kelurahan }}</td>
                                        <td>{{ $data->kecamatan }}</td> -->
                                        <td>
                                            <a class="btn btn-success" style="color: white" target="_blank"
                                                href="{{ asset('storage/' . $data->ktp) }}">
                                                Lihat KTP
                                            </a>
                                            <a class="btn btn-success" style="color: white" target="_blank"
                                                href="{{ asset('storage/' . $data->kk) }}">
                                                Lihat KK
                                            </a>
                                            <a class="btn btn-primary" style="color: white"
                                                href="/accJoinRT/{{ $data->id_pendaftaran_rt }}">
                                                Acc Join RT
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    @endforeach
                @endif
            @endif
        </div>
    </div>
@endsection