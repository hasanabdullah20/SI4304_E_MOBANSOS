@extends('layouts.main') @section('content')
<div class="container">
    <a href="/tambahBatch" class="btn btn-primary">Tambah Batch</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama Bansos</th>
                <th scope="col">Deadline</th>
                <th scope="col">Deskripsi</th>
                <!-- <th scope="col">Action</th> -->
            </tr>
        </thead>
        <tbody>
            @if(isset($dataBatch)) @if(count($dataBatch) < 1)
            <tr>
                <th>belum ada data...</th>
            </tr>
            @else @foreach($dataBatch as $data)
            <tr>
                <td>{{ $data->id_batch }}</td>
                <td>{{ $data->nama_batch }}</td>
                <td>{{ $data->deadline }}</td>
                <td>{{ $data->deskripsi }}</td>
            </tr>
            @endforeach @endif @endif
        </tbody>
    </table>
</div>
@endsection
