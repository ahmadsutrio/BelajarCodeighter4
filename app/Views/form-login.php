<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Hello, world!</title>
    <style>
        .background {
            background-image: url('img/background.png');
        }

        .rounded-6 {
            border-radius: 15px 50px 30px 5px;
        }
    </style>
</head>

<body class="background">
    <div class="container-fluid d-flex flex-column justify-content-center px-5" style="height: 100vh;">
        <div class="bg-white mx-5 mt-5 mt-lg-0 mt-md-0 mt-sm-0 py-5 rounded-6">
            <div class="row mt-5 align-items-center">
                <div class="col-lg-6 col-md-6 col-sm-12 d-flex  justify-content-center ">
                    <div class="d-block">
                        <h3 class="text-center d-block w-100 h-5 mb-3 ">E-School</h3>
                        <img src="img/logo-elhaqqa.png" alt="" class="d-block">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12  ">
                    <div class="row justify-content-sm-center">
                        <form action="" method="post" class="col-lg-7 col-md-10 col-sm-5 col-12 mt-lg-0 mt-md-0 mt-3 pb-2 pt-2 px-3 rounded-lg shadow-lg bg-white">
                            <h3 class="text-center mb-4 mt-3">Login</h3>
                            <p class=""></p>
                            <input type="email" name="" id="" class="form-control mb-3" placeholder="Masukan email" required>
                            <div class="input-group  mb-3 ">
                                <input type="password" name="password" id="password" class="form-control rounded-3  p-2" placeholder="Masukan Kata Sandi" autocomplete="off" required>
                                <button type="button" onclick="btn_show()" class="input-group-text ounded-3 " id="basic-addon1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" id="lihat" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                        <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
                                        <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z" />
                                    </svg>
                                </button>
                            </div>
                            <button type="submit" class="btn btn-success w-100 mb-1">Login</button>
                            <p class="">Belum punya akun ? <a href="" class="">Sign up</a></p>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>


    <script>
        const show = document.getElementById('lihat');
        const input = document.getElementById('password');

        function btn_show() {
            if (input.type === 'password') {
                input.type = 'text';
                btn_show.classList.add('hide');
            } else {
                input.type = 'password';
                btn_show.remove('hide');
            }
        }
    </script>
    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>

</html>