@extends('layoutsRT.mainRT')

@section('content')
    <div class="container">
        <div class="col-sm-9">
            <div class="ml-5">
                <p class="h1 mt-5" style="font-size: 35px">
                    Monitor Track Record Bantuan Sosial
                </p>
                <br>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Tanggal</th>
                            <th scope="col">Jenis Bansos</th>
                            <th scope="col">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (isset($warga))
                            @if (count($warga) < 1)
                                <tr>
                                    <th scope="row">Belum ada data...</th>
                                </tr>
                            @else
                                @foreach ($warga as $data)
                                    <tr>
                                        <td>{{ $data->created_at }}</td>
                                        <td>{{ $data->jenis_bansos }}</td>
                                        <td>{{ $data->status }}</td>
                                    </tr>
                                @endforeach
                            @endif
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection