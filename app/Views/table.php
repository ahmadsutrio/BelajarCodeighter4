<?php $this->extend('layout/master.php') ?>

<?= $this->section('content') ?>
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-lg-12 text-center">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <h2 class="text-uppercase">Buku penghubung orang tua siswa sd negeri balonggandu iv</h2>
                    <h4 class="text-uppercase">tahun pelajaran 2013/2014</h4>
                </div>
                <div class="col-lg-1">
                    <div class="row align-items-center  h-100">
                        <div class="col-12">
                            <button class="border px-5 py-2 border-2 bg-white">Menu</button>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-10 table-responsive border-0">
            <table class="table table-bordered ">
                <thead>
                    <tr class="text-center">
                        <th scope="col" rowspan="2" class="align-middle">No</th>
                        <th scope="col" rowspan="2" class="align-middle">Hari Tanggal</th>
                        <th scope="col" rowspan="2" class="align-middle">Nama Siswa</th>
                        <th scope="col" class="text-uppercase" colspan="2" class="align-middle">Dari Guru Kelas/mata pelajaran</th>
                        <th scope="col" class="text-uppercase" colspan="2" class="align-middle">dari orang tua siswa</th>
                    </tr>
                    <tr class="text-center">
                        <th scope="col" class="text-capitalize ">Hal yang disampaikan</th>
                        <th scope="col" class="text-uppercase ">ttd guru</th>
                        <th scope="col" class="text-capitalize ">tanggapan orang tua</th>
                        <th scope="col" class=" ">TTD orang tua</th>
                    </tr>
                </thead>
                <tbody>
                    <?php for ($i = 1; $i <= 10; $i++) : ?>
                        <tr>
                            <td scope="col" class="align-middle"><?= $i ?></td>
                            <td scope="col"><?= date("d/m/Y") ?></td>
                            <td scope="col">Nama Random</td>
                            <td scope="col" class="text-capitalize">ini pesan yang disampaikan oleh guru</td>
                            <td scope="col" class="text-capitalize">ini tanda tangan guru</td>
                            <td scope="col" class="text-capitalize">ini pesan yang disampaikan oleh guru</td>
                            <td scope="col" class="text-capitalize">ini tanda tangan guru</td>
                        </tr>
                    <?php endfor; ?>

                </tbody>
            </table>
        </div>
    </div>
</div>

<?= $this->endSection() ?>