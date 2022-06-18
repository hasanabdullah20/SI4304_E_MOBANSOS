<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Pilih Batch</title>
        <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
            integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
            crossorigin="anonymous"
        />
        <script
            src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"
        ></script>
        <script
            src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
            crossorigin="anonymous"
        ></script>
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"
        ></script>
    </head>
    <body>
        <div class="row">
            <div
                class="col-sm-2 sidebar vh-100"
                style="background-color: rgb(40, 86, 146); color: white"
            >
                <center>
                    <br />
                    <br />
                    <p class="h1" style="font-size: 35px"></p>
                    <img src="images/logo-lazis.png" alt="logo" class="mt-3" />
                </center>
            <a class="btn btn-warning mt-5 ml-5" href="/homeRT" style="width: 65%">Home</a>
            <a class="btn btn-warning mt-3 ml-5" href="/infaqAdmin" style="width: 65%">Profil</a>
            <a class="btn btn-warning mt-3 ml-5" href="/batchRT" style="width: 65%">Batch</a>
            <a class="btn btn-danger mt-3 ml-5" href="/logoutKeluarga" style="width: 65%">Logout</a>
            </div>
            @foreach($dataBatch as $data)
            <div class="card ml-3 mt-3" style="width: 18rem; height: 18rem;">
            <img class="card-img-top" src="https://media.suara.com/pictures/653x366/2021/01/16/49011-blt-bst-pkh-bnpt-bantuan-sosial-bansos.jpg" alt="Card image cap" style="height: 13rem;">
            <div class="card-body">
                <h5 class="card-title">{{ $data->nama_batch }}</h5>
                <p class="card-text">{{ $data->deskripsi }}</p>
                <a href="/lihatRequest/{{ $data->id_batch }}" class="btn btn-primary">Lihat Data</a>
            </div>
            </div>
            @endforeach
</body>
</html>