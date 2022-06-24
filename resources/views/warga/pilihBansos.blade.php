@extends('layoutswarga.mainWarga')

@section('content')
    <div class="container">
        @foreach ($dataBatch as $data)
            <div class="card ml-3 mt-3" style="width: 18rem; height: 18rem;">
                <img class="card-img-top"
                    src="https://media.suara.com/pictures/653x366/2021/01/16/49011-blt-bst-pkh-bnpt-bantuan-sosial-bansos.jpg"
                    alt="Card image cap" style="height: 13rem;">
                <div class="card-body">
                    <h5 class="card-title">{{ $data->nama_batch }}</h5>
                    <p class="card-text">{{ $data->deskripsi }}</p>
                    <a href="/requestWarga/{{ $data->id_batch }}" class="btn btn-primary">Request</a>
                </div>
            </div>
        @endforeach
    </div>
@endsection
