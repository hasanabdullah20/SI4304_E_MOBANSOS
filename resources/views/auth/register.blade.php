<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Register</title>
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
        <style>
            .register-photo {
                padding: 7% 0;
            }

            @media (max-width: 576px) {
                .register-photo .image-holder {
                    display: table-cell;
                    width: auto;
                    background-size: cover;
                    display: none !important;
                }
            }

            .register-photo .image-holder {
                display: table-cell;
                width: auto;
                background: url(images/bansos.jpg);
                background-size: cover;
            }

            .register-photo .form-container {
                display: table;
                max-width: 900px;
                width: 90%;
                margin: 0 auto;
                box-shadow: 1px 1px 5px rgba(0, 0, 0, 0.1);
            }

            .register-photo form {
                display: table-cell;
                width: 400px;
                background-color: #ffffff;
                padding: 40px 60px;
                color: #505e6c;
            }

            @media (max-width: 991px) {
                .register-photo form {
                    padding: 40px;
                }
            }

            .register-photo form h2 {
                font-size: 24px;
                line-height: 1.5;
                margin-bottom: 30px;
            }

            .register-photo form .form-control {
                background: transparent;
                border: none;
                border-bottom: 1px solid #dfe7f1;
                border-radius: 0;
                box-shadow: none;
                outline: none;
                color: inherit;
                text-indent: 6px;
                height: 40px;
            }

            .register-photo form .form-check {
                font-size: 13px;
                line-height: 20px;
            }

            .register-photo form .btn-primary {
                background: rgb(72, 180, 227);
                border: none;
                border-radius: 4px;
                padding: 11px;
                box-shadow: none;
                margin-top: 35px;
                text-shadow: none;
                outline: none !important;
            }

            .register-photo form .already {
                display: block;
                text-align: center;
                font-size: 12px;
                color: #6f7a85;
                opacity: 0.9;
                text-decoration: none;
            }
        </style>
    </head>
    <body>
        <div class="register-photo">
            <div class="form-container">
                <form action="/registerKeluarga" method="POST">
                    @csrf
                    <h2 class="text-center">Register</h2>
                    <div class="form-group">
                        <input
                            class="form-control"
                            type="text"
                            name="nik"
                            placeholder="NIK"
                        />
                    </div>
                    <div class="form-group">
                        <input
                            class="form-control"
                            type="text"
                            name="nama"
                            placeholder="Nama Kepala Keluarga"
                        />
                    </div>
                    <div class="form-group">
                        <input
                            class="form-control"
                            type="email"
                            name="email"
                            placeholder="Email"
                        />
                    </div>
                    <div class="form-group">
                        <input
                            class="form-control"
                            type="password"
                            name="password"
                            placeholder="Password"
                        />
                    </div>
                    <div class="form-group">
                        <input
                            class="form-control"
                            type="text"
                            name="nohp"
                            placeholder="Nomer Handphone"
                        />
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block">
                            Register
                        </button>
                    </div>
                    <a class="already" href="/login"
                        >You already have an account? Login here.</a
                    >
                </form>
                <div class="image-holder"></div>
            </div>
        </div>
    </body>
</html>
