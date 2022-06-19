@extends('layouts.main') @section('content')
<div class="container">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">Id Request</th>
                        <th scope="col">Deskripsi</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @if(isset($dataPengaduan)) @if(count($dataPengaduan) < 1) <tr>
                      <th scope="row">Belum ada data...</th>
                      </tr>
                      @else @foreach($dataPengaduan as $data)
                      <tr>
                        <td>{{ $data->id_request }}</td>
                        <td>{{ $data->deskripsi }}</td>
                        <td>                                        
                            <a class="btn btn-success" style="color: white"
                                target="_blank"
                                href="{{ asset('storage/' . $data->gambar_pendukung) }}">
                                Lihat Gambar
                            </a>
                        </td>
                      </tr>
                      @endforeach @endif @endif 
                    </tbody>
                  </table>
            </div>
        </div>
        </div>
@endsection