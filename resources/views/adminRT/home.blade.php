<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>
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
        <div class="col-sm-2 sidebar vh-100" style="background-color: rgb(40, 86, 146); color: white">
            <center>
                <br />
                <br />
                <p class="h1" style="font-size: 35px"></p>
                <img src="images/logo-lazis.png" alt="logo" class="mt-3" />
            </center>
            <a class="btn btn-warning mt-5 ml-5" href="/admin" style="width: 65%">Home</a>
            <a class="btn btn-warning mt-3 ml-5" href="/profilRT" style="width: 65%">Profil</a>
            <a class="btn btn-warning mt-3 ml-5" href="/batchRT" style="width: 65%">Batch</a>
            <a class="btn btn-danger mt-3 ml-5" href="/logoutKeluarga" style="width: 65%">Logout</a>
        </div>
        <div class="col-sm-9">
            <div class="ml-5 h-25 ml-5 mt-3 w-100 rounded" style="background-color: rgb(40, 86, 146); color: white">
                <p class="h1 mt-5 ml-5 pt-3" style="font-size: 35px">
                    List Join RT
                </p>
                <p class="h5 mt-3 ml-5" style="font-size: 20px">
                    Click disini untuk menerima Warga baru di RT anda
                </p>
                <div>
                    <center>
                        <a href="/listJoinRT" class="mt-3 btn btn-success ml-3 w-75 mb-3"
                            style="background-color: rgb(72, 180, 227)">
                            Acc Join RT
                        </a>
                    </center>
                </div>
            </div>
        </div>
    </div>
</body>

</html>