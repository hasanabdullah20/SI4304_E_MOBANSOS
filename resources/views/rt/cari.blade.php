@extends('layoutswarga.mainWarga')

@section('content')
    <div class="container">
        <div class="search" style="margin-top: 8%">
            <h4 class="mr-1">Cari RT</h4>
            <div class="row">
                <form action="/cariRT" method="POST" class="form-inline">
                    @csrf
                    <div class="form-group mb-2">
                        <label for="staticEmail2" class="sr-only">Kota</label>
                        <input type="text" class="form-control w-100" name="kota" placeholder="Kota" />
                    </div>
                    <div class="form-group mx-sm-3 mb-2">
                        <label for="kecamatan" class="sr-only">Kecamatan</label>
                        <input type="text" class="form-control" id="kecamatan" name="kecamatan"
                            placeholder="Kecamatan" />
                    </div>
                    <button type="submit" class="btn btn-primary mb-2">
                        Cari RT
                    </button>
                </form>
            </div>
            @if (isset($rt))
                @if (count($rt) < 1)
                    <tr>
                        <th scope="row">Belum ada data...</th>
                    </tr>
                @else
                    @foreach ($rt as $data)
                        <div class="row mt-3">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Nama Ketua</th>
                                        <th scope="col">RT</th>
                                        <th scope="col">Kelurahan</th>
                                        <th scope="col">Kecamatan</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>{{ $data->nama_ketua }}</td>
                                        <td>{{ $data->rt }}</td>
                                        <td>{{ $data->kelurahan }}</td>
                                        <td>{{ $data->kecamatan }}</td>
                                        <td>
                                            <a class="btn btn-success" style="color: white"
                                                href="/joinRT/{{ $data->id_rt }}">
                                                Join RT
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
