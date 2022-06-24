@extends('layoutswarga.mainWarga')

@section('content')
    <div class="container">
        <div class="col-sm-12">
            <div class="ml-5">
                <p class="h1 mt-2" style="font-size: 35px">
                    Daftar Bansos yang belum dikonfirmasi
                </p>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Tanggal</th>
                            <th scope="col">Jenis Bansos</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $count = 1; ?>
                        @if (isset($dataBansos))
                            @if (count($dataBansos) < 1)
                                <tr>
                                    <th scope="row">Belum ada data...</th>
                                </tr>
                            @else
                                @foreach ($dataBansos as $data)
                                    <tr>
                                        <th scope="row">{{ $count }}</th>
                                        <td>{{ $data->created_at }}</td>
                                        <td>{{ $data->jenis_bansos }}</td>
                                        <td>{{ $data->status }}</td>
                                        <td>
                                            <a class="btn btn-success" style="color: white"
                                                href="/formevidence/{{ $data->id_request }}">
                                                Konfirmasi Selesai
                                            </a>
                                        </td>
                                    </tr>
                                    <?php $count++; ?>
                                @endforeach
                            @endif
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection