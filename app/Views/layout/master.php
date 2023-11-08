<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>ELFAMOUS</title>
    <link rel="icon" type="image/x-icon" href="https://flashsoftindonesia.com/web/politik/assets/img/logo2.png">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>

    <style>
        .navtop {
            font-weight: 450;
        }

        .navtop a {
            color: #FFFFFF;
        }

        .navbar-brand {
            color: #FFFFFF;
        }

        .menu-active a {
            color: #3085C3;
        }

        .menu-active {
            background: #FFFFFF;
            border: 1px solid #FFFFFF;
            border-radius: 20px;
            margin: 0 5px 0 5px;
        }

        .con2 {
            margin-top: -80px;
        }

        .breadcrumb-item a {
            font-size: 12px;
            background: #FFFFFF;
            color: #3085C3;
            text-decoration: none;
            padding: 5px;
            border: 1px solid #FFFFFF;
            border-radius: 20px;
        }

        .table-responsive {
            background: #FFFFFF;
            border: 0.5px solid gainsboro;
            border-radius: 20px;
            padding: 2%;
        }

        canvas {
            border: 0.5px solid gainsboro;
            background: #FFFFFF;
            border-radius: 20px;
            padding: 2%;
            width: 100%;
        }

        h3 {
            color: #FFFFFF;
        }

        .bc-active a {
            background: #ffc107;
            color: #FFFFFF;
            font-weight: 500;
        }

        a {
            text-decoration: none;
        }
    </style>

</head>

<body>


    <!--================ Start Header Area =================-->

    <div class="container">
        <!-- Top Navbar -->
        <nav class="navbar navbar-expand-sm">
            <div class="container-fluid">
                <a class="navbar-brand" href="<?= base_url(); ?>/mobile" style="font-weight: bold;z-index:9;">
                    <img src="https://flashsoftindonesia.com/web/politik/assets/img/logo2.png" width="32px">
                    ELFAMOUS <span style="color:#279EFF;">SCHOOL</span>
                </a>

                <div class="collapse navbar-collapse" id="collapsibleNavbarx">

                    <ul class="navbar-nav ms-auto" style="z-index: 9;">
                        <li class="nav-item navtop navbar-active"><a class="nav-link" href="<?= base_url(); ?>wali">Home</a></li>

                        <li class="nav-item navtop menu-active">
                            <a class="btn text-danger" href="app/login/logout.php" onclick="return confirm('Yakin ingin logout?')">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-left" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z" />
                                    <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z" />
                                </svg>
                                Logout
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Bottom Navbar -->
        <nav class="navbar navbar-white bg-white navbar-expand fixed-bottom d-md-none d-lg-none d-xl-none">
            <ul class="navbar-nav nav-justified w-100">
                <li class="nav-item">
                    <a href="<?= base_url(); ?>/wali" class="nav-link">
                        <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-house" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />
                            <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z" />
                        </svg>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url(); ?>/wali" class="nav-link">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" fill="currentColor" class="bi bi-clipboard2-data" viewBox="0 0 16 16">
                            <path d="M9.5 0a.5.5 0 0 1 .5.5.5.5 0 0 0 .5.5.5.5 0 0 1 .5.5V2a.5.5 0 0 1-.5.5h-5A.5.5 0 0 1 5 2v-.5a.5.5 0 0 1 .5-.5.5.5 0 0 0 .5-.5.5.5 0 0 1 .5-.5h3Z" />
                            <path d="M3 2.5a.5.5 0 0 1 .5-.5H4a.5.5 0 0 0 0-1h-.5A1.5 1.5 0 0 0 2 2.5v12A1.5 1.5 0 0 0 3.5 16h9a1.5 1.5 0 0 0 1.5-1.5v-12A1.5 1.5 0 0 0 12.5 1H12a.5.5 0 0 0 0 1h.5a.5.5 0 0 1 .5.5v12a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5v-12Z" />
                            <path d="M10 7a1 1 0 1 1 2 0v5a1 1 0 1 1-2 0V7Zm-6 4a1 1 0 1 1 2 0v1a1 1 0 1 1-2 0v-1Zm4-3a1 1 0 0 0-1 1v3a1 1 0 1 0 2 0V9a1 1 0 0 0-1-1Z" />
                        </svg>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url(); ?>/wali" class="nav-link">
                        <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-plus-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M14 1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
                            <path fill-rule="evenodd" d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                        </svg>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url(); ?>/wali" class="nav-link">
                        <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-person" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M10 5a2 2 0 1 1-4 0 2 2 0 0 1 4 0zM8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm6 5c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z" />
                        </svg>
                    </a>
                </li>
            </ul>
        </nav>

    </div>

    <div style="width:100%;display:inline-block;margin-top:-300px;background: #633bb8;z-index:-9999;">
        <img src="https://flashsoftindonesia.com/web/politik/assets/img/shape.png" style="float:right;width:400px;opacity:0.3;z-index:-9999;">
    </div>


    <?= $this->renderSection('content'); ?>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
    <script>
        new DataTable('#example');
    </script>
</body>

</html>