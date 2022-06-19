<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>History Bantuan Sosial</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
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
                <a
                    class="btn btn-warning mt-5 ml-5"
                    href="/"
                    style="width: 65%"
                    >Home</a
                >
                <a
                    class="btn btn-warning mt-3 ml-5"
                    href="/profilWarga"
                    style="width: 65%"
                    >Profil</a
                >
                <a
                    class="btn btn-warning mt-3 ml-5"
                    href="/history"
                    style="width: 65%"
                    >History</a
                >
                <a
                    class="btn btn-warning mt-3 ml-5"
                    href="/listBansos"
                    style="width: 65%"
                    >Konfirmasi Bansos</a
                >
                <a
                    class="btn btn-danger mt-3 ml-5"
                    href="/logoutKeluarga"
                    style="width: 65%"
                    >Logout</a
                >
            </div>
        <div class="col-sm-9">
            <div class="ml-5">
                <p class="h1 mt-5" style="font-size: 35px">
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
                      @if(isset($dataBansos)) @if(count($dataBansos) < 1) <tr>
                      <th scope="row">Belum ada data...</th>
                      </tr>
                      @else @foreach($dataBansos as $data)
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
                      @endforeach @endif @endif
                    </tbody>
                </table>
            </div>
        </div>
</body>

</html>