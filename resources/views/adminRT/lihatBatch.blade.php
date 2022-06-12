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
    <div class="container">
        <a href="/homeRT" class="btn btn-primary mt-5">Kembali</a>
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
                @foreach($dataBatch as $data)
                <tr>
                <th scope="row">{{ $count }}</th>
                <td>{{ $keluarga[0]->nama_kepala_keluarga }}</td>
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
            </tbody>
        </table>
    </div>
    </body>