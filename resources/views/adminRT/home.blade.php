@extends('layoutsRT.mainRT')

@section('content')
    <div class="container">
        <div class="col-sm-12">
            <div class="ml-5 h-25 ml-5 w-100 rounded" style="background-color: rgb(40, 86, 146); color: white">
                <p class="h1 mt-2 ml-5 pt-3" style="font-size: 35px; margin-left: 10px">
                    List Join RT
                </p>
                <p class="h5 mt-3 ml-5" style="font-size: 20px; margin-left: 10px">
                    Click disini untuk menerima Warga baru di RT anda
                </p>
                <div>
                    <center>
                        <a href="/wargaJoinRT" class="mt-3 btn btn-success ml-3 w-75 mb-3"
                            style="background-color: rgb(72, 180, 227)">
                            Acc Join RT
                        </a>
                    </center>
                </div>
            </div>
        </div>
    </div>
@endsection