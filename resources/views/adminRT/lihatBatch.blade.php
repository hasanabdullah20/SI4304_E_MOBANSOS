@extends('layoutsRT.mainRT')

@section('content')
    <div class="container">
        <p class="h1 mt-5" style="font-size: 35px">{{ $batch[0]->nama_batch }}</p>
        <p class="h5 mt-3" style="font-size: 20px">Tekan ACC untuk menerima request bansos</p>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama Keluarga</th>
                    <th scope="col">Jenis Bansos</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $count = 1; ?>
                @foreach ($dataBatch as $data)
                    <tr>
                        <th scope="row">{{ $count }}</th>
                        <td>{{ $data->nama_keluarga }}</td>
                        <td>{{ $data->jenis_bansos }}</td>
                        <td>{{ $data->status }}</td>
                        <td>
                            <a class="btn btn-success" style="color: white"
                                href="/verifikasiBansos/{{ $data->id_request }}">
                                ACC Bansos
                            </a>
                            <a class="btn btn-primary" style="color: white" target="_blank"
                                href="/lihatEvidence/{{ $data->id_request }}">
                                Lihat Evidence
                            </a>
                        </td>
                    </tr>
                    <?php $count++; ?>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
