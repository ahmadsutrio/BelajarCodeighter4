<?= $this->extend('layout/bendahara'); ?>
<?= $this->section('content'); ?>

<div class="container-fluid" style="margin-top:-80px">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="row">
                <div class="col-12">
                    <div class="page-header">
                        <h4 class="page-title text-primary">Rekapitulasi SPP
                        </h4>
                        <div class="float-right">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?= base_url('/bendahara'); ?>">Home</a></li>
                                <li class="breadcrumb-item"><a href="<?= base_url('bendahara/all_payment'); ?>">Pembayaran</a>
                                </li>
                                <li class="breadcrumb-item active">Rekapitulasi SPP
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-2">
                <div class="col-md">
                    <div class="form-floating">
                        <div class="row g-2">
                            <div class="col-md">
                                <div class="form-floating">
                                    <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                                        <option selected></option>
                                        <option>IX</option>
                                        <option>X</option>
                                        <option>XI</option>
                                    </select>
                                    <label> Kelas</label>
                                </div>
                            </div>
                        </div><br>
                        <div class="table-responsive kelas-IX d-none">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="d-flex overflow-auto  bg-white">
                                        <button class="nama-bulan nav-link border-bottom-0 py-2 px-3 border" id="januari">Januari</button>
                                        <button class="nama-bulan nav-link py-2 px-3 border" id="februari">Februari</button>
                                        <button class=" nama-bulan nav-link py-2 px-3 border" id="maret">Maret</button>
                                        <button class="nama-bulan nav-link py-2 px-3 border" id="april">April</button>
                                        <button class="nama-bulan nav-link py-2 px-3 border" id="mei">Mei</button>
                                        <button class="nama-bulan nav-link py-2 px-3 border" id="juni">Juni</button>
                                        <button class="nama-bulan nav-link py-2 px-3 border" id="juli">Juli</button>
                                        <button class="nama-bulan nav-link py-2 px-3 border" id="agustus">Agustus</button>
                                        <button class="nama-bulan nav-link py-2 px-3 border" id="september">September</button>
                                        <button class="nama-bulan nav-link py-2 px-3 border" id="oktober">Oktober</button>
                                        <button class="nama-bulan nav-link py-2 px-3 border" id="november">November</button>
                                        <button class="nama-bulan nav-link py-2 px-3 border" id="desember">Desember</button>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="table-responsive border-top-0 rounded-0 ">
                                        <table class="table table-bordered  table-striped " id="datatable" width="100%" cellspacing="0">
                                            <thead class="table table-primary">
                                                <tr class="text-center">
                                                    <th rowspan="2"> NO </th>
                                                    <th rowspan="2"> Nama </th>
                                                    <th rowspan="2"> Status </th>
                                                </tr>
                                            </thead>
                                            <!-- Januari -->
                                            <tbody class=" bulan" id="satu">
                                                <tr class="">
                                                    <td class="">1</td>
                                                    <td class="">Lyana Zahira Safni</td>
                                                    <td class=""><span class="badge text-bg-success">Lunas</span></td>
                                                </tr>
                                                <tr class="">
                                                    <td class="">1</td>
                                                    <td class="">Lyana Zahira Safni</td>
                                                    <td class=""><span class="badge text-bg-danger">Belum Lunas</span></td>
                                                </tr>
                                                <tr class="">
                                                    <td class="">1</td>
                                                    <td class="">Lyana Zahira Safni</td>
                                                    <td class=""><span class="badge text-bg-success">Lunas</span></td>
                                                </tr>
                                                <tr class="">
                                                    <td class="">1</td>
                                                    <td class="">Lyana Zahira Safni</td>
                                                    <td class=""><span class="badge text-bg-danger">Belum Lunas</span></td>
                                                </tr>
                                                <tr class="">
                                                    <td class="">1</td>
                                                    <td class="">Lyana Zahira Safni</td>
                                                    <td class=""><span class="badge text-bg-success">Lunas</span></td>
                                                </tr>
                                                <tr class="">
                                                    <td class="">1</td>
                                                    <td class="">Lyana Zahira Safni</td>
                                                    <td class=""><span class="badge text-bg-danger">Belum Lunas</span></td>
                                                </tr>
                                                <tr class="">
                                                    <td class="">1</td>
                                                    <td class="">Lyana Zahira Safni</td>
                                                    <td class=""><span class="badge text-bg-success">Lunas</span></td>
                                                </tr>
                                            </tbody>
                                            <!-- Februari -->
                                            <tbody class="d-none bulan" id="dua">
                                                <tr class="">
                                                    <td class="">1</td>
                                                    <td class="">Lyana Zahira Safni</td>
                                                    <td class=""><span class="badge text-bg-danger">Belum Lunas</span></td>
                                                </tr>
                                                <tr class="">
                                                    <td class="">1</td>
                                                    <td class="">Lyana Zahira Safni</td>
                                                    <td class=""><span class="badge text-bg-success">Lunas</span></td>
                                                </tr>
                                                <tr class="">
                                                    <td class="">1</td>
                                                    <td class="">Lyana Zahira Safni</td>
                                                    <td class=""><span class="badge text-bg-danger">Belum Lunas</span></td>
                                                </tr>
                                                <tr class="">
                                                    <td class="">1</td>
                                                    <td class="">Lyana Zahira Safni</td>
                                                    <td class=""><span class="badge text-bg-success">Lunas</span></td>
                                                </tr>
                                                <tr class="">
                                                    <td class="">1</td>
                                                    <td class="">Lyana Zahira Safni</td>
                                                    <td class=""><span class="badge text-bg-danger">Belum Lunas</span></td>
                                                </tr>
                                                <tr class="">
                                                    <td class="">1</td>
                                                    <td class="">Lyana Zahira Safni</td>
                                                    <td class=""><span class="badge text-bg-success">Lunas</span></td>
                                                </tr>
                                                <tr class="">
                                                    <td class="">1</td>
                                                    <td class="">Lyana Zahira Safni</td>
                                                    <td class=""><span class="badge text-bg-success">Lunas</span></td>
                                                </tr>
                                            </tbody>
                                            <!-- Maret -->
                                            <tbody class="d-none bulan" id="tiga">
                                                <tr class="">
                                                    <td class="">1</td>
                                                    <td class="">Lyana Zahira Safni</td>
                                                    <td class=""><span class="badge text-bg-success">Lunas</span></td>
                                                </tr>
                                                <tr class="">
                                                    <td class="">1</td>
                                                    <td class="">Lyana Zahira Safni</td>
                                                    <td class=""><span class="badge text-bg-danger">Belum Lunas</span></td>
                                                </tr>
                                                <tr class="">
                                                    <td class="">1</td>
                                                    <td class="">Lyana Zahira Safni</td>
                                                    <td class=""><span class="badge text-bg-success">Lunas</span></td>
                                                </tr>
                                                <tr class="">
                                                    <td class="">1</td>
                                                    <td class="">Lyana Zahira Safni</td>
                                                    <td class=""><span class="badge text-bg-danger">Belum Lunas</span></td>
                                                </tr>
                                                <tr class="">
                                                    <td class="">1</td>
                                                    <td class="">Lyana Zahira Safni</td>
                                                    <td class=""><span class="badge text-bg-success">Lunas</span></td>
                                                </tr>
                                                <tr class="">
                                                    <td class="">1</td>
                                                    <td class="">Lyana Zahira Safni</td>
                                                    <td class=""><span class="badge text-bg-danger">Belum Lunas</span></td>
                                                </tr>
                                                <tr class="">
                                                    <td class="">1</td>
                                                    <td class="">Lyana Zahira Safni</td>
                                                    <td class=""><span class="badge text-bg-success">Lunas</span></td>
                                                </tr>
                                            </tbody>
                                            <!-- April -->
                                            <tbody class="d-none bulan" id="empat">
                                                <tr class="">
                                                    <td class="">1</td>
                                                    <td class="">Lyana Zahira Safni</td>
                                                    <td class=""><span class="badge text-bg-success">Lunas</span></td>
                                                </tr>
                                                <tr class="">
                                                    <td class="">1</td>
                                                    <td class="">Lyana Zahira Safni</td>
                                                    <td class=""><span class="badge text-bg-success">Lunas</span></td>
                                                </tr>
                                                <tr class="">
                                                    <td class="">1</td>
                                                    <td class="">Lyana Zahira Safni</td>
                                                    <td class=""><span class="badge text-bg-success">Lunas</span></td>
                                                </tr>
                                                <tr class="">
                                                    <td class="">1</td>
                                                    <td class="">Lyana Zahira Safni</td>
                                                    <td class=""><span class="badge text-bg-success">Lunas</span></td>
                                                </tr>
                                                <tr class="">
                                                    <td class="">1</td>
                                                    <td class="">Lyana Zahira Safni</td>
                                                    <td class=""><span class="badge text-bg-success">Lunas</span></td>
                                                </tr>
                                                <tr class="">
                                                    <td class="">1</td>
                                                    <td class="">Lyana Zahira Safni</td>
                                                    <td class=""><span class="badge text-bg-success">Lunas</span></td>
                                                </tr>
                                                <tr class="">
                                                    <td class="">1</td>
                                                    <td class="">Lyana Zahira Safni</td>
                                                    <td class=""><span class="badge text-bg-success">Lunas</span></td>
                                                </tr>
                                            </tbody>
                                            <!-- Mei -->
                                            <tbody class="d-none bulan" id="lima">
                                                <tr class="">
                                                    <td class="">1</td>
                                                    <td class="">Lyana Zahira Safni</td>
                                                    <td class=""><span class="badge text-bg-success">Lunas</span></td>
                                                </tr>
                                                <tr class="">
                                                    <td class="">1</td>
                                                    <td class="">Lyana Zahira Safni</td>
                                                    <td class=""><span class="badge text-bg-danger">Belum Lunas</span></td>
                                                </tr>
                                                <tr class="">
                                                    <td class="">1</td>
                                                    <td class="">Lyana Zahira Safni</td>
                                                    <td class=""><span class="badge text-bg-success">Lunas</span></td>
                                                </tr>
                                                <tr class="">
                                                    <td class="">1</td>
                                                    <td class="">Lyana Zahira Safni</td>
                                                    <td class=""><span class="badge text-bg-danger">Belum Lunas</span></td>
                                                </tr>
                                                <tr class="">
                                                    <td class="">1</td>
                                                    <td class="">Lyana Zahira Safni</td>
                                                    <td class=""><span class="badge text-bg-success">Lunas</span></td>
                                                </tr>
                                                <tr class="">
                                                    <td class="">1</td>
                                                    <td class="">Lyana Zahira Safni</td>
                                                    <td class=""><span class="badge text-bg-danger">Belum Lunas</span></td>
                                                </tr>
                                                <tr class="">
                                                    <td class="">1</td>
                                                    <td class="">Lyana Zahira Safni</td>
                                                    <td class=""><span class="badge text-bg-success">Lunas</span></td>
                                                </tr>
                                            </tbody>
                                            <!-- Juni -->
                                            <tbody class="d-none bulan" id="enam">
                                                <tr class="">
                                                    <td class="">1</td>
                                                    <td class="">Lyana Zahira Safni</td>
                                                    <td class=""><span class="badge text-bg-success">Lunas</span></td>
                                                </tr>
                                                <tr class="">
                                                    <td class="">1</td>
                                                    <td class="">Lyana Zahira Safni</td>
                                                    <td class=""><span class="badge text-bg-success">Lunas</span></td>
                                                </tr>
                                                <tr class="">
                                                    <td class="">1</td>
                                                    <td class="">Lyana Zahira Safni</td>
                                                    <td class=""><span class="badge text-bg-success">Lunas</span></td>
                                                </tr>
                                                <tr class="">
                                                    <td class="">1</td>
                                                    <td class="">Lyana Zahira Safni</td>
                                                    <td class=""><span class="badge text-bg-success">Lunas</span></td>
                                                </tr>
                                                <tr class="">
                                                    <td class="">1</td>
                                                    <td class="">Lyana Zahira Safni</td>
                                                    <td class=""><span class="badge text-bg-success">Lunas</span></td>
                                                </tr>
                                                <tr class="">
                                                    <td class="">1</td>
                                                    <td class="">Lyana Zahira Safni</td>
                                                    <td class=""><span class="badge text-bg-success">Lunas</span></td>
                                                </tr>
                                                <tr class="">
                                                    <td class="">1</td>
                                                    <td class="">Lyana Zahira Safni</td>
                                                    <td class=""><span class="badge text-bg-success">Lunas</span></td>
                                                </tr>
                                            </tbody>
                                            <!-- Juli -->
                                            <tbody class="d-none bulan" id="tujuh">
                                                <tr class="">
                                                    <td class="">1</td>
                                                    <td class="">Lyana Zahira Safni</td>
                                                    <td class=""><span class="badge text-bg-success">Lunas</span></td>
                                                </tr>
                                                <tr class="">
                                                    <td class="">1</td>
                                                    <td class="">Lyana Zahira Safni</td>
                                                    <td class=""><span class="badge text-bg-danger">Belum Lunas</span></td>
                                                </tr>
                                                <tr class="">
                                                    <td class="">1</td>
                                                    <td class="">Lyana Zahira Safni</td>
                                                    <td class=""><span class="badge text-bg-success">Lunas</span></td>
                                                </tr>
                                                <tr class="">
                                                    <td class="">1</td>
                                                    <td class="">Lyana Zahira Safni</td>
                                                    <td class=""><span class="badge text-bg-danger">Belum Lunas</span></td>
                                                </tr>
                                                <tr class="">
                                                    <td class="">1</td>
                                                    <td class="">Lyana Zahira Safni</td>
                                                    <td class=""><span class="badge text-bg-success">Lunas</span></td>
                                                </tr>
                                                <tr class="">
                                                    <td class="">1</td>
                                                    <td class="">Lyana Zahira Safni</td>
                                                    <td class=""><span class="badge text-bg-danger">Belum Lunas</span></td>
                                                </tr>
                                                <tr class="">
                                                    <td class="">1</td>
                                                    <td class="">Lyana Zahira Safni</td>
                                                    <td class=""><span class="badge text-bg-success">Lunas</span></td>
                                                </tr>
                                            </tbody>
                                            <!-- Agustus -->
                                            <tbody class="d-none bulan" id="delapan">
                                                <tr class="">
                                                    <td class="">1</td>
                                                    <td class="">Lyana Zahira Safni</td>
                                                    <td class=""><span class="badge text-bg-success">Lunas</span></td>
                                                </tr>
                                                <tr class="">
                                                    <td class="">1</td>
                                                    <td class="">Lyana Zahira Safni</td>
                                                    <td class=""><span class="badge text-bg-success">Lunas</span></td>
                                                </tr>
                                                <tr class="">
                                                    <td class="">1</td>
                                                    <td class="">Lyana Zahira Safni</td>
                                                    <td class=""><span class="badge text-bg-success">Lunas</span></td>
                                                </tr>
                                                <tr class="">
                                                    <td class="">1</td>
                                                    <td class="">Lyana Zahira Safni</td>
                                                    <td class=""><span class="badge text-bg-success">Lunas</span></td>
                                                </tr>
                                                <tr class="">
                                                    <td class="">1</td>
                                                    <td class="">Lyana Zahira Safni</td>
                                                    <td class=""><span class="badge text-bg-success">Lunas</span></td>
                                                </tr>
                                                <tr class="">
                                                    <td class="">1</td>
                                                    <td class="">Lyana Zahira Safni</td>
                                                    <td class=""><span class="badge text-bg-success">Lunas</span></td>
                                                </tr>
                                                <tr class="">
                                                    <td class="">1</td>
                                                    <td class="">Lyana Zahira Safni</td>
                                                    <td class=""><span class="badge text-bg-success">Lunas</span></td>
                                                </tr>
                                            </tbody>
                                            <!-- September -->
                                            <tbody class="d-none bulan" id="sembilan">
                                                <tr class="">
                                                    <td class="">1</td>
                                                    <td class="">Lyana Zahira Safni</td>
                                                    <td class=""><span class="badge text-bg-success">Lunas</span></td>
                                                </tr>
                                                <tr class="">
                                                    <td class="">1</td>
                                                    <td class="">Lyana Zahira Safni</td>
                                                    <td class=""><span class="badge text-bg-danger">Belum Lunas</span></td>
                                                </tr>
                                                <tr class="">
                                                    <td class="">1</td>
                                                    <td class="">Lyana Zahira Safni</td>
                                                    <td class=""><span class="badge text-bg-success">Lunas</span></td>
                                                </tr>
                                                <tr class="">
                                                    <td class="">1</td>
                                                    <td class="">Lyana Zahira Safni</td>
                                                    <td class=""><span class="badge text-bg-danger">Belum Lunas</span></td>
                                                </tr>
                                                <tr class="">
                                                    <td class="">1</td>
                                                    <td class="">Lyana Zahira Safni</td>
                                                    <td class=""><span class="badge text-bg-success">Lunas</span></td>
                                                </tr>
                                                <tr class="">
                                                    <td class="">1</td>
                                                    <td class="">Lyana Zahira Safni</td>
                                                    <td class=""><span class="badge text-bg-danger">Belum Lunas</span></td>
                                                </tr>
                                                <tr class="">
                                                    <td class="">1</td>
                                                    <td class="">Lyana Zahira Safni</td>
                                                    <td class=""><span class="badge text-bg-success">Lunas</span></td>
                                                </tr>
                                            </tbody>
                                            <!-- Oktober -->
                                            <tbody class="d-none bulan" id="sepuluh">
                                                <tr class="">
                                                    <td class="">1</td>
                                                    <td class="">Lyana Zahira Safni</td>
                                                    <td class=""><span class="badge text-bg-success">Lunas</span></td>
                                                </tr>
                                                <tr class="">
                                                    <td class="">1</td>
                                                    <td class="">Lyana Zahira Safni</td>
                                                    <td class=""><span class="badge text-bg-success">Lunas</span></td>
                                                </tr>
                                                <tr class="">
                                                    <td class="">1</td>
                                                    <td class="">Lyana Zahira Safni</td>
                                                    <td class=""><span class="badge text-bg-success">Lunas</span></td>
                                                </tr>
                                                <tr class="">
                                                    <td class="">1</td>
                                                    <td class="">Lyana Zahira Safni</td>
                                                    <td class=""><span class="badge text-bg-success">Lunas</span></td>
                                                </tr>
                                                <tr class="">
                                                    <td class="">1</td>
                                                    <td class="">Lyana Zahira Safni</td>
                                                    <td class=""><span class="badge text-bg-success">Lunas</span></td>
                                                </tr>
                                                <tr class="">
                                                    <td class="">1</td>
                                                    <td class="">Lyana Zahira Safni</td>
                                                    <td class=""><span class="badge text-bg-success">Lunas</span></td>
                                                </tr>
                                                <tr class="">
                                                    <td class="">1</td>
                                                    <td class="">Lyana Zahira Safni</td>
                                                    <td class=""><span class="badge text-bg-success">Lunas</span></td>
                                                </tr>
                                            </tbody>
                                            <!-- November -->
                                            <tbody class="d-none bulan" id="sebelas">
                                                <tr class="">
                                                    <td class="">1</td>
                                                    <td class="">Lyana Zahira Safni</td>
                                                    <td class=""><span class="badge text-bg-success">Lunas</span></td>
                                                </tr>
                                                <tr class="">
                                                    <td class="">1</td>
                                                    <td class="">Lyana Zahira Safni</td>
                                                    <td class=""><span class="badge text-bg-danger">Belum Lunas</span></td>
                                                </tr>
                                                <tr class="">
                                                    <td class="">1</td>
                                                    <td class="">Lyana Zahira Safni</td>
                                                    <td class=""><span class="badge text-bg-success">Lunas</span></td>
                                                </tr>
                                                <tr class="">
                                                    <td class="">1</td>
                                                    <td class="">Lyana Zahira Safni</td>
                                                    <td class=""><span class="badge text-bg-danger">Belum Lunas</span></td>
                                                </tr>
                                                <tr class="">
                                                    <td class="">1</td>
                                                    <td class="">Lyana Zahira Safni</td>
                                                    <td class=""><span class="badge text-bg-success">Lunas</span></td>
                                                </tr>
                                                <tr class="">
                                                    <td class="">1</td>
                                                    <td class="">Lyana Zahira Safni</td>
                                                    <td class=""><span class="badge text-bg-danger">Belum Lunas</span></td>
                                                </tr>
                                                <tr class="">
                                                    <td class="">1</td>
                                                    <td class="">Lyana Zahira Safni</td>
                                                    <td class=""><span class="badge text-bg-success">Lunas</span></td>
                                                </tr>
                                            </tbody>
                                            <!-- Desember -->
                                            <tbody class="d-none bulan" id="duabelas">
                                                <tr class="">
                                                    <td class="">1</td>
                                                    <td class="">Lyana Zahira Safni</td>
                                                    <td class=""><span class="badge text-bg-success">Lunas</span></td>
                                                </tr>
                                                <tr class="">
                                                    <td class="">1</td>
                                                    <td class="">Lyana Zahira Safni</td>
                                                    <td class=""><span class="badge text-bg-success">Lunas</span></td>
                                                </tr>
                                                <tr class="">
                                                    <td class="">1</td>
                                                    <td class="">Lyana Zahira Safni</td>
                                                    <td class=""><span class="badge text-bg-success">Lunas</span></td>
                                                </tr>
                                                <tr class="">
                                                    <td class="">1</td>
                                                    <td class="">Lyana Zahira Safni</td>
                                                    <td class=""><span class="badge text-bg-success">Lunas</span></td>
                                                </tr>
                                                <tr class="">
                                                    <td class="">1</td>
                                                    <td class="">Lyana Zahira Safni</td>
                                                    <td class=""><span class="badge text-bg-success">Lunas</span></td>
                                                </tr>
                                                <tr class="">
                                                    <td class="">1</td>
                                                    <td class="">Lyana Zahira Safni</td>
                                                    <td class=""><span class="badge text-bg-success">Lunas</span></td>
                                                </tr>
                                                <tr class="">
                                                    <td class="">1</td>
                                                    <td class="">Lyana Zahira Safni</td>
                                                    <td class=""><span class="badge text-bg-success">Lunas</span></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive kelas-X d-none">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="d-flex overflow-auto  bg-white">
                                        <button class="bulan nav-link border-bottom-0 py-2 px-3 border" id="januari">Januari</button>
                                        <button class="bulan nav-link py-2 px-3 border" id="februari">Februari</button>
                                        <button class=" bulan nav-link py-2 px-3 border" id="maret">Maret</button>
                                        <button class="bulan nav-link py-2 px-3 border" id="april">April</button>
                                        <button class="bulan nav-link py-2 px-3 border" id="mei">Mei</button>
                                        <button class="bulan nav-link py-2 px-3 border" id="juni">Juni</button>
                                        <button class="bulan nav-link py-2 px-3 border" id="juli">Juli</button>
                                        <button class="bulan nav-link py-2 px-3 border" id="agustus">Agustus</button>
                                        <button class="bulan nav-link py-2 px-3 border" id="september">September</button>
                                        <button class="bulan nav-link py-2 px-3 border" id="oktober">Oktober</button>
                                        <button class="bulan nav-link py-2 px-3 border" id="november">November</button>
                                        <button class="bulan nav-link py-2 px-3 border" id="desember">Desember</button>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="table-responsive border-top-0 rounded-0 ">
                                        <table class="table table-bordered  table-striped " id="datatable" width="100%" cellspacing="0">
                                            <thead class="table table-primary">
                                                <tr class="text-center">
                                                    <th rowspan="2"> NO </th>
                                                    <th rowspan="2"> Nama </th>
                                                    <th rowspan="2"> Status </th>
                                                </tr>
                                            </thead>
                                            <!-- Januari -->
                                            <tbody class=" " id="satu">
                                                <tr class="">
                                                    <td class="">1</td>
                                                    <td class="">Lyana Zahira Safni</td>
                                                    <td class=""><span class="badge text-bg-success">Lunas</span></td>
                                                </tr>
                                                <tr class="">
                                                    <td class="">1</td>
                                                    <td class="">Lyana Zahira Safni</td>
                                                    <td class=""><span class="badge text-bg-danger">Belum Lunas</span></td>
                                                </tr>
                                                <tr class="">
                                                    <td class="">1</td>
                                                    <td class="">Lyana Zahira Safni</td>
                                                    <td class=""><span class="badge text-bg-success">Lunas</span></td>
                                                </tr>
                                                <tr class="">
                                                    <td class="">1</td>
                                                    <td class="">Lyana Zahira Safni</td>
                                                    <td class=""><span class="badge text-bg-danger">Belum Lunas</span></td>
                                                </tr>
                                                <tr class="">
                                                    <td class="">1</td>
                                                    <td class="">Lyana Zahira Safni</td>
                                                    <td class=""><span class="badge text-bg-success">Lunas</span></td>
                                                </tr>
                                                <tr class="">
                                                    <td class="">1</td>
                                                    <td class="">Lyana Zahira Safni</td>
                                                    <td class=""><span class="badge text-bg-danger">Belum Lunas</span></td>
                                                </tr>
                                                <tr class="">
                                                    <td class="">1</td>
                                                    <td class="">Lyana Zahira Safni</td>
                                                    <td class=""><span class="badge text-bg-success">Lunas</span></td>
                                                </tr>
                                            </tbody>
                                            <!-- Februari -->
                                            <tbody class="d-none " id="dua">
                                                <tr class="">
                                                    <td class="">1</td>
                                                    <td class="">Lyana Zahira Safni</td>
                                                    <td class=""><span class="badge text-bg-danger">Belum Lunas</span></td>
                                                </tr>
                                                <tr class="">
                                                    <td class="">1</td>
                                                    <td class="">Lyana Zahira Safni</td>
                                                    <td class=""><span class="badge text-bg-success">Lunas</span></td>
                                                </tr>
                                                <tr class="">
                                                    <td class="">1</td>
                                                    <td class="">Lyana Zahira Safni</td>
                                                    <td class=""><span class="badge text-bg-danger">Belum Lunas</span></td>
                                                </tr>
                                                <tr class="">
                                                    <td class="">1</td>
                                                    <td class="">Lyana Zahira Safni</td>
                                                    <td class=""><span class="badge text-bg-success">Lunas</span></td>
                                                </tr>
                                                <tr class="">
                                                    <td class="">1</td>
                                                    <td class="">Lyana Zahira Safni</td>
                                                    <td class=""><span class="badge text-bg-danger">Belum Lunas</span></td>
                                                </tr>
                                                <tr class="">
                                                    <td class="">1</td>
                                                    <td class="">Lyana Zahira Safni</td>
                                                    <td class=""><span class="badge text-bg-success">Lunas</span></td>
                                                </tr>
                                                <tr class="">
                                                    <td class="">1</td>
                                                    <td class="">Lyana Zahira Safni</td>
                                                    <td class=""><span class="badge text-bg-success">Lunas</span></td>
                                                </tr>
                                            </tbody>
                                            <!-- Maret -->
                                            <tbody class="d-none " id="tiga">
                                                <tr class="">
                                                    <td class="">1</td>
                                                    <td class="">Lyana Zahira Safni</td>
                                                    <td class=""><span class="badge text-bg-success">Lunas</span></td>
                                                </tr>
                                                <tr class="">
                                                    <td class="">1</td>
                                                    <td class="">Lyana Zahira Safni</td>
                                                    <td class=""><span class="badge text-bg-danger">Belum Lunas</span></td>
                                                </tr>
                                                <tr class="">
                                                    <td class="">1</td>
                                                    <td class="">Lyana Zahira Safni</td>
                                                    <td class=""><span class="badge text-bg-success">Lunas</span></td>
                                                </tr>
                                                <tr class="">
                                                    <td class="">1</td>
                                                    <td class="">Lyana Zahira Safni</td>
                                                    <td class=""><span class="badge text-bg-danger">Belum Lunas</span></td>
                                                </tr>
                                                <tr class="">
                                                    <td class="">1</td>
                                                    <td class="">Lyana Zahira Safni</td>
                                                    <td class=""><span class="badge text-bg-success">Lunas</span></td>
                                                </tr>
                                                <tr class="">
                                                    <td class="">1</td>
                                                    <td class="">Lyana Zahira Safni</td>
                                                    <td class=""><span class="badge text-bg-danger">Belum Lunas</span></td>
                                                </tr>
                                                <tr class="">
                                                    <td class="">1</td>
                                                    <td class="">Lyana Zahira Safni</td>
                                                    <td class=""><span class="badge text-bg-success">Lunas</span></td>
                                                </tr>
                                            </tbody>
                                            <!-- April -->
                                            <tbody class="d-none " id="empat">
                                                <tr class="">
                                                    <td class="">1</td>
                                                    <td class="">Lyana Zahira Safni</td>
                                                    <td class=""><span class="badge text-bg-success">Lunas</span></td>
                                                </tr>
                                                <tr class="">
                                                    <td class="">1</td>
                                                    <td class="">Lyana Zahira Safni</td>
                                                    <td class=""><span class="badge text-bg-success">Lunas</span></td>
                                                </tr>
                                                <tr class="">
                                                    <td class="">1</td>
                                                    <td class="">Lyana Zahira Safni</td>
                                                    <td class=""><span class="badge text-bg-success">Lunas</span></td>
                                                </tr>
                                                <tr class="">
                                                    <td class="">1</td>
                                                    <td class="">Lyana Zahira Safni</td>
                                                    <td class=""><span class="badge text-bg-success">Lunas</span></td>
                                                </tr>
                                                <tr class="">
                                                    <td class="">1</td>
                                                    <td class="">Lyana Zahira Safni</td>
                                                    <td class=""><span class="badge text-bg-success">Lunas</span></td>
                                                </tr>
                                                <tr class="">
                                                    <td class="">1</td>
                                                    <td class="">Lyana Zahira Safni</td>
                                                    <td class=""><span class="badge text-bg-success">Lunas</span></td>
                                                </tr>
                                                <tr class="">
                                                    <td class="">1</td>
                                                    <td class="">Lyana Zahira Safni</td>
                                                    <td class=""><span class="badge text-bg-success">Lunas</span></td>
                                                </tr>
                                            </tbody>
                                            <!-- Mei -->
                                            <tbody class="d-none " id="lima">
                                                <tr class="">
                                                    <td class="">1</td>
                                                    <td class="">Lyana Zahira Safni</td>
                                                    <td class=""><span class="badge text-bg-success">Lunas</span></td>
                                                </tr>
                                                <tr class="">
                                                    <td class="">1</td>
                                                    <td class="">Lyana Zahira Safni</td>
                                                    <td class=""><span class="badge text-bg-danger">Belum Lunas</span></td>
                                                </tr>
                                                <tr class="">
                                                    <td class="">1</td>
                                                    <td class="">Lyana Zahira Safni</td>
                                                    <td class=""><span class="badge text-bg-success">Lunas</span></td>
                                                </tr>
                                                <tr class="">
                                                    <td class="">1</td>
                                                    <td class="">Lyana Zahira Safni</td>
                                                    <td class=""><span class="badge text-bg-danger">Belum Lunas</span></td>
                                                </tr>
                                                <tr class="">
                                                    <td class="">1</td>
                                                    <td class="">Lyana Zahira Safni</td>
                                                    <td class=""><span class="badge text-bg-success">Lunas</span></td>
                                                </tr>
                                                <tr class="">
                                                    <td class="">1</td>
                                                    <td class="">Lyana Zahira Safni</td>
                                                    <td class=""><span class="badge text-bg-danger">Belum Lunas</span></td>
                                                </tr>
                                                <tr class="">
                                                    <td class="">1</td>
                                                    <td class="">Lyana Zahira Safni</td>
                                                    <td class=""><span class="badge text-bg-success">Lunas</span></td>
                                                </tr>
                                            </tbody>
                                            <!-- Juni -->
                                            <tbody class="d-none " id="enam">
                                                <tr class="">
                                                    <td class="">1</td>
                                                    <td class="">Lyana Zahira Safni</td>
                                                    <td class=""><span class="badge text-bg-success">Lunas</span></td>
                                                </tr>
                                                <tr class="">
                                                    <td class="">1</td>
                                                    <td class="">Lyana Zahira Safni</td>
                                                    <td class=""><span class="badge text-bg-success">Lunas</span></td>
                                                </tr>
                                                <tr class="">
                                                    <td class="">1</td>
                                                    <td class="">Lyana Zahira Safni</td>
                                                    <td class=""><span class="badge text-bg-success">Lunas</span></td>
                                                </tr>
                                                <tr class="">
                                                    <td class="">1</td>
                                                    <td class="">Lyana Zahira Safni</td>
                                                    <td class=""><span class="badge text-bg-success">Lunas</span></td>
                                                </tr>
                                                <tr class="">
                                                    <td class="">1</td>
                                                    <td class="">Lyana Zahira Safni</td>
                                                    <td class=""><span class="badge text-bg-success">Lunas</span></td>
                                                </tr>
                                                <tr class="">
                                                    <td class="">1</td>
                                                    <td class="">Lyana Zahira Safni</td>
                                                    <td class=""><span class="badge text-bg-success">Lunas</span></td>
                                                </tr>
                                                <tr class="">
                                                    <td class="">1</td>
                                                    <td class="">Lyana Zahira Safni</td>
                                                    <td class=""><span class="badge text-bg-success">Lunas</span></td>
                                                </tr>
                                            </tbody>
                                            <!-- Juli -->
                                            <tbody class="d-none " id="tujuh">
                                                <tr class="">
                                                    <td class="">1</td>
                                                    <td class="">Lyana Zahira Safni</td>
                                                    <td class=""><span class="badge text-bg-success">Lunas</span></td>
                                                </tr>
                                                <tr class="">
                                                    <td class="">1</td>
                                                    <td class="">Lyana Zahira Safni</td>
                                                    <td class=""><span class="badge text-bg-danger">Belum Lunas</span></td>
                                                </tr>
                                                <tr class="">
                                                    <td class="">1</td>
                                                    <td class="">Lyana Zahira Safni</td>
                                                    <td class=""><span class="badge text-bg-success">Lunas</span></td>
                                                </tr>
                                                <tr class="">
                                                    <td class="">1</td>
                                                    <td class="">Lyana Zahira Safni</td>
                                                    <td class=""><span class="badge text-bg-danger">Belum Lunas</span></td>
                                                </tr>
                                                <tr class="">
                                                    <td class="">1</td>
                                                    <td class="">Lyana Zahira Safni</td>
                                                    <td class=""><span class="badge text-bg-success">Lunas</span></td>
                                                </tr>
                                                <tr class="">
                                                    <td class="">1</td>
                                                    <td class="">Lyana Zahira Safni</td>
                                                    <td class=""><span class="badge text-bg-danger">Belum Lunas</span></td>
                                                </tr>
                                                <tr class="">
                                                    <td class="">1</td>
                                                    <td class="">Lyana Zahira Safni</td>
                                                    <td class=""><span class="badge text-bg-success">Lunas</span></td>
                                                </tr>
                                            </tbody>
                                            <!-- Agustus -->
                                            <tbody class="d-none " id="delapan">
                                                <tr class="">
                                                    <td class="">1</td>
                                                    <td class="">Lyana Zahira Safni</td>
                                                    <td class=""><span class="badge text-bg-success">Lunas</span></td>
                                                </tr>
                                                <tr class="">
                                                    <td class="">1</td>
                                                    <td class="">Lyana Zahira Safni</td>
                                                    <td class=""><span class="badge text-bg-success">Lunas</span></td>
                                                </tr>
                                                <tr class="">
                                                    <td class="">1</td>
                                                    <td class="">Lyana Zahira Safni</td>
                                                    <td class=""><span class="badge text-bg-success">Lunas</span></td>
                                                </tr>
                                                <tr class="">
                                                    <td class="">1</td>
                                                    <td class="">Lyana Zahira Safni</td>
                                                    <td class=""><span class="badge text-bg-success">Lunas</span></td>
                                                </tr>
                                                <tr class="">
                                                    <td class="">1</td>
                                                    <td class="">Lyana Zahira Safni</td>
                                                    <td class=""><span class="badge text-bg-success">Lunas</span></td>
                                                </tr>
                                                <tr class="">
                                                    <td class="">1</td>
                                                    <td class="">Lyana Zahira Safni</td>
                                                    <td class=""><span class="badge text-bg-success">Lunas</span></td>
                                                </tr>
                                                <tr class="">
                                                    <td class="">1</td>
                                                    <td class="">Lyana Zahira Safni</td>
                                                    <td class=""><span class="badge text-bg-success">Lunas</span></td>
                                                </tr>
                                            </tbody>
                                            <!-- September -->
                                            <tbody class="d-none " id="sembilan">
                                                <tr class="">
                                                    <td class="">1</td>
                                                    <td class="">Lyana Zahira Safni</td>
                                                    <td class=""><span class="badge text-bg-success">Lunas</span></td>
                                                </tr>
                                                <tr class="">
                                                    <td class="">1</td>
                                                    <td class="">Lyana Zahira Safni</td>
                                                    <td class=""><span class="badge text-bg-danger">Belum Lunas</span></td>
                                                </tr>
                                                <tr class="">
                                                    <td class="">1</td>
                                                    <td class="">Lyana Zahira Safni</td>
                                                    <td class=""><span class="badge text-bg-success">Lunas</span></td>
                                                </tr>
                                                <tr class="">
                                                    <td class="">1</td>
                                                    <td class="">Lyana Zahira Safni</td>
                                                    <td class=""><span class="badge text-bg-danger">Belum Lunas</span></td>
                                                </tr>
                                                <tr class="">
                                                    <td class="">1</td>
                                                    <td class="">Lyana Zahira Safni</td>
                                                    <td class=""><span class="badge text-bg-success">Lunas</span></td>
                                                </tr>
                                                <tr class="">
                                                    <td class="">1</td>
                                                    <td class="">Lyana Zahira Safni</td>
                                                    <td class=""><span class="badge text-bg-danger">Belum Lunas</span></td>
                                                </tr>
                                                <tr class="">
                                                    <td class="">1</td>
                                                    <td class="">Lyana Zahira Safni</td>
                                                    <td class=""><span class="badge text-bg-success">Lunas</span></td>
                                                </tr>
                                            </tbody>
                                            <!-- Oktober -->
                                            <tbody class="d-none " id="sepuluh">
                                                <tr class="">
                                                    <td class="">1</td>
                                                    <td class="">Lyana Zahira Safni</td>
                                                    <td class=""><span class="badge text-bg-success">Lunas</span></td>
                                                </tr>
                                                <tr class="">
                                                    <td class="">1</td>
                                                    <td class="">Lyana Zahira Safni</td>
                                                    <td class=""><span class="badge text-bg-success">Lunas</span></td>
                                                </tr>
                                                <tr class="">
                                                    <td class="">1</td>
                                                    <td class="">Lyana Zahira Safni</td>
                                                    <td class=""><span class="badge text-bg-success">Lunas</span></td>
                                                </tr>
                                                <tr class="">
                                                    <td class="">1</td>
                                                    <td class="">Lyana Zahira Safni</td>
                                                    <td class=""><span class="badge text-bg-success">Lunas</span></td>
                                                </tr>
                                                <tr class="">
                                                    <td class="">1</td>
                                                    <td class="">Lyana Zahira Safni</td>
                                                    <td class=""><span class="badge text-bg-success">Lunas</span></td>
                                                </tr>
                                                <tr class="">
                                                    <td class="">1</td>
                                                    <td class="">Lyana Zahira Safni</td>
                                                    <td class=""><span class="badge text-bg-success">Lunas</span></td>
                                                </tr>
                                                <tr class="">
                                                    <td class="">1</td>
                                                    <td class="">Lyana Zahira Safni</td>
                                                    <td class=""><span class="badge text-bg-success">Lunas</span></td>
                                                </tr>
                                            </tbody>
                                            <!-- November -->
                                            <tbody class="d-none " id="sebelas">
                                                <tr class="">
                                                    <td class="">1</td>
                                                    <td class="">Lyana Zahira Safni</td>
                                                    <td class=""><span class="badge text-bg-success">Lunas</span></td>
                                                </tr>
                                                <tr class="">
                                                    <td class="">1</td>
                                                    <td class="">Lyana Zahira Safni</td>
                                                    <td class=""><span class="badge text-bg-danger">Belum Lunas</span></td>
                                                </tr>
                                                <tr class="">
                                                    <td class="">1</td>
                                                    <td class="">Lyana Zahira Safni</td>
                                                    <td class=""><span class="badge text-bg-success">Lunas</span></td>
                                                </tr>
                                                <tr class="">
                                                    <td class="">1</td>
                                                    <td class="">Lyana Zahira Safni</td>
                                                    <td class=""><span class="badge text-bg-danger">Belum Lunas</span></td>
                                                </tr>
                                                <tr class="">
                                                    <td class="">1</td>
                                                    <td class="">Lyana Zahira Safni</td>
                                                    <td class=""><span class="badge text-bg-success">Lunas</span></td>
                                                </tr>
                                                <tr class="">
                                                    <td class="">1</td>
                                                    <td class="">Lyana Zahira Safni</td>
                                                    <td class=""><span class="badge text-bg-danger">Belum Lunas</span></td>
                                                </tr>
                                                <tr class="">
                                                    <td class="">1</td>
                                                    <td class="">Lyana Zahira Safni</td>
                                                    <td class=""><span class="badge text-bg-success">Lunas</span></td>
                                                </tr>
                                            </tbody>
                                            <!-- Desember -->
                                            <tbody class="d-none " id="duabelas">
                                                <tr class="">
                                                    <td class="">1</td>
                                                    <td class="">Lyana Zahira Safni</td>
                                                    <td class=""><span class="badge text-bg-success">Lunas</span></td>
                                                </tr>
                                                <tr class="">
                                                    <td class="">1</td>
                                                    <td class="">Lyana Zahira Safni</td>
                                                    <td class=""><span class="badge text-bg-success">Lunas</span></td>
                                                </tr>
                                                <tr class="">
                                                    <td class="">1</td>
                                                    <td class="">Lyana Zahira Safni</td>
                                                    <td class=""><span class="badge text-bg-success">Lunas</span></td>
                                                </tr>
                                                <tr class="">
                                                    <td class="">1</td>
                                                    <td class="">Lyana Zahira Safni</td>
                                                    <td class=""><span class="badge text-bg-success">Lunas</span></td>
                                                </tr>
                                                <tr class="">
                                                    <td class="">1</td>
                                                    <td class="">Lyana Zahira Safni</td>
                                                    <td class=""><span class="badge text-bg-success">Lunas</span></td>
                                                </tr>
                                                <tr class="">
                                                    <td class="">1</td>
                                                    <td class="">Lyana Zahira Safni</td>
                                                    <td class=""><span class="badge text-bg-success">Lunas</span></td>
                                                </tr>
                                                <tr class="">
                                                    <td class="">1</td>
                                                    <td class="">Lyana Zahira Safni</td>
                                                    <td class=""><span class="badge text-bg-success">Lunas</span></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <br>

        </div>
    </div>
</div>
<script>
    const selectKelas = document.getElementById('floatingSelect');
    const tabelIX = document.querySelectorAll('.kelas-IX');
    const tabelX = document.querySelectorAll('.kelas-X');

    // Sembunyikan kedua tabel saat halaman dimuat
    tabelIX.forEach.display = 'none';
    tabelX.forEach.display = 'none';

    selectKelas.addEventListener('change', function() {
        if (selectKelas.value === 'IX') {
            tabelIX.forEach(tabel => {
                tabel.classList.remove('d-none')
                tabel.style.display = 'block'; // Tampilkan tabel IX
            });
            tabelX.forEach(tabel => {
                tabel.style.display = 'none'; // Sembunyikan tabel X
                tabel.classList.remove('d-block')
            });
        } else if (selectKelas.value === 'X') {
            tabelIX.forEach(tabel => {
                tabel.classList.remove('d-block')
                tabel.style.display = 'none'; // Sembunyikan tabel IX
            });
            tabelX.forEach(tabel => {
                tabel.classList.remove('d-none')
                tabel.classList.add('d-block') // Tampilkan tabel X
            });
        } else {
            tabelIX.forEach(tabel => {
                tabel.classList.add('d-none') // Tampilkan tabel X // Sembunyikan tabel IX
            });
            tabelX.forEach(tabel => {
                tabel.classList.add('d-none') // Tampilkan tabel X 
            });
        }
    });
</script>
<script>
    const januari = document.querySelector('#januari')
    const februari = document.querySelector('#februari')
    const maret = document.querySelector('#maret')
    const april = document.querySelector('#april')
    const mei = document.querySelector('#mei')
    const juni = document.querySelector('#juni')
    const juli = document.querySelector('#juli')
    const agustus = document.querySelector('#agustus')
    const september = document.querySelector('#september')
    const oktober = document.querySelector('#oktober')
    const november = document.querySelector('#november')
    const desember = document.querySelector('#desember');

    const satu = document.querySelector('#satu')
    const dua = document.querySelector('#dua')
    const tiga = document.querySelector('#tiga')
    const empat = document.querySelector('#empat')
    const lima = document.querySelector('#lima')
    const enam = document.querySelector('#enam')
    const tujuh = document.querySelector('#tujuh')
    const delapan = document.querySelector('#delapan')
    const sembilan = document.querySelector('#sembilan')
    const sepuluh = document.querySelector('#sepuluh')
    const sebelas = document.querySelector('#sebelas')
    const duaBelas = document.querySelector('#duabelas');

    var navLinks = document.querySelectorAll('.nama-bulan');

    navLinks.forEach(link => {
        link.addEventListener('click', function() {
            // Menghapus kelas 'bg-danger' dari semua elemen
            navLinks.forEach(link => {
                link.classList.remove('border-bottom-0');
            });

            // Menambahkan kelas 'bg-danger' pada elemen yang diklik
            this.classList.add('border-bottom-0');
        });
    });
    
    // Tambahkan event listener untuk setiap elemen
    navLinks.forEach(function(link) {
        link.addEventListener('click', function(event) {

            // Dapatkan id dari elemen yang diklik
            var clickedId = event.target.id;
            let tes = document.getElementById(clickedId)


            if (clickedId == 'januari') {
                tes.classList.add('border-bottom-0')
                satu.classList.remove('d-none')
                dua.classList.add('d-none')
                tiga.classList.add('d-none')
                empat.classList.add('d-none')
                lima.classList.add('d-none')
                enam.classList.add('d-none')
                tujuh.classList.add('d-none')
                delapan.classList.add('d-none')
                sembilan.classList.add('d-none')
                sepuluh.classList.add('d-none')
                sebelas.classList.add('d-none')
                duaBelas.classList.add('d-none')
            } else if (clickedId == 'februari') {
                tes.classList.add('border-bottom-0')
                satu.classList.add('d-none')
                dua.classList.remove('d-none')
                tiga.classList.add('d-none')
                empat.classList.add('d-none')
                lima.classList.add('d-none')
                enam.classList.add('d-none')
                tujuh.classList.add('d-none')
                delapan.classList.add('d-none')
                sembilan.classList.add('d-none')
                sepuluh.classList.add('d-none')
                sebelas.classList.add('d-none')
                duaBelas.classList.add('d-none')
            } else if (clickedId == 'maret') {
                tes.classList.add('border-bottom-0')
                satu.classList.add('d-none')
                dua.classList.add('d-none')
                tiga.classList.remove('d-none')
                empat.classList.add('d-none')
                lima.classList.add('d-none')
                enam.classList.add('d-none')
                tujuh.classList.add('d-none')
                delapan.classList.add('d-none')
                sembilan.classList.add('d-none')
                sepuluh.classList.add('d-none')
                sebelas.classList.add('d-none')
                duaBelas.classList.add('d-none')
            } else if (clickedId == 'april') {
                tes.classList.add('border-bottom-0')
                satu.classList.add('d-none')
                dua.classList.add('d-none')
                tiga.classList.add('d-none')
                empat.classList.remove('d-none')
                lima.classList.add('d-none')
                enam.classList.add('d-none')
                tujuh.classList.add('d-none')
                delapan.classList.add('d-none')
                sembilan.classList.add('d-none')
                sepuluh.classList.add('d-none')
                sebelas.classList.add('d-none')
                duaBelas.classList.add('d-none')
            } else if (clickedId == 'mei') {
                tes.classList.add('border-bottom-0')
                satu.classList.add('d-none')
                dua.classList.add('d-none')
                tiga.classList.add('d-none')
                empat.classList.add('d-none')
                lima.classList.remove('d-none')
                enam.classList.add('d-none')
                tujuh.classList.add('d-none')
                delapan.classList.add('d-none')
                sembilan.classList.add('d-none')
                sepuluh.classList.add('d-none')
                sebelas.classList.add('d-none')
                duaBelas.classList.add('d-none')
            } else if (clickedId == 'juni') {
                tes.classList.add('border-bottom-0')
                satu.classList.add('d-none')
                dua.classList.add('d-none')
                tiga.classList.add('d-none')
                empat.classList.add('d-none')
                lima.classList.add('d-none')
                enam.classList.remove('d-none')
                tujuh.classList.add('d-none')
                delapan.classList.add('d-none')
                sembilan.classList.add('d-none')
                sepuluh.classList.add('d-none')
                sebelas.classList.add('d-none')
                duaBelas.classList.add('d-none')
            } else if (clickedId == 'juli') {
                tes.classList.add('border-bottom-0')
                satu.classList.add('d-none')
                dua.classList.add('d-none')
                tiga.classList.add('d-none')
                empat.classList.add('d-none')
                lima.classList.add('d-none')
                enam.classList.add('d-none')
                tujuh.classList.remove('d-none')
                delapan.classList.add('d-none')
                sembilan.classList.add('d-none')
                sepuluh.classList.add('d-none')
                sebelas.classList.add('d-none')
                duaBelas.classList.add('d-none')
            } else if (clickedId == 'agustus') {
                tes.classList.add('border-bottom-0')
                satu.classList.add('d-none')
                dua.classList.add('d-none')
                tiga.classList.add('d-none')
                empat.classList.add('d-none')
                lima.classList.add('d-none')
                enam.classList.add('d-none')
                tujuh.classList.add('d-none')
                delapan.classList.remove('d-none')
                sembilan.classList.add('d-none')
                sepuluh.classList.add('d-none')
                sebelas.classList.add('d-none')
                duaBelas.classList.add('d-none')
            } else if (clickedId == 'september') {
                tes.classList.add('border-bottom-0')
                satu.classList.add('d-none')
                dua.classList.add('d-none')
                tiga.classList.add('d-none')
                empat.classList.add('d-none')
                lima.classList.add('d-none')
                enam.classList.add('d-none')
                tujuh.classList.add('d-none')
                delapan.classList.add('d-none')
                sembilan.classList.remove('d-none')
                sepuluh.classList.add('d-none')
                sebelas.classList.add('d-none')
                duaBelas.classList.add('d-none')
            } else if (clickedId == 'oktober') {
                tes.classList.add('border-bottom-0')
                satu.classList.add('d-none')
                dua.classList.add('d-none')
                tiga.classList.add('d-none')
                empat.classList.add('d-none')
                lima.classList.add('d-none')
                enam.classList.add('d-none')
                tujuh.classList.add('d-none')
                delapan.classList.add('d-none')
                sembilan.classList.add('d-none')
                sepuluh.classList.remove('d-none')
                sebelas.classList.add('d-none')
                duaBelas.classList.add('d-none')
            } else if (clickedId == 'november') {
                tes.classList.add('border-bottom-0')
                satu.classList.add('d-none')
                dua.classList.add('d-none')
                tiga.classList.add('d-none')
                empat.classList.add('d-none')
                lima.classList.add('d-none')
                enam.classList.add('d-none')
                tujuh.classList.add('d-none')
                delapan.classList.add('d-none')
                sembilan.classList.add('d-none')
                sepuluh.classList.add('d-none')
                sebelas.classList.remove('d-none')
                duaBelas.classList.add('d-none')
            } else if (clickedId == 'desember') {
                tes.classList.add('border-bottom-0')
                satu.classList.add('d-none')
                dua.classList.add('d-none')
                tiga.classList.add('d-none')
                empat.classList.add('d-none')
                lima.classList.add('d-none')
                enam.classList.add('d-none')
                tujuh.classList.add('d-none')
                delapan.classList.add('d-none')
                sembilan.classList.add('d-none')
                sepuluh.classList.add('d-none')
                sebelas.classList.add('d-none')
                duaBelas.classList.remove('d-none')
            }
            // Atau lakukan tindakan lain sesuai kebutuhan Anda
        });
    });
</script>

<?= $this->endSection() ?>