<?= $this->extend('layout/bendahara'); ?>
<?= $this->section('content'); ?>

<div class="container-fluid">
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
                <table class="table table-bordered table-striped " id="datatable" width="100%" cellspacing="0">
                    <thead class="table table-primary">
                        <tr class="text-center">
                            <th rowspan="2"> NO </th>
                            <th rowspan="2"> Nama </th>
                            <th rowspan="2"> Tagihan </th>
                            <th colspan="13">BULAN</th>
                        </tr>
                        <tr class="text-center">
                            <td> Januari </td>
                            <td> Februari </td>
                            <td> Maret </td>
                            <td> April </td>
                            <td> Mei </td>
                            <td> Juni </td>
                            <td> Juli </td>
                            <td> Agustus </td>
                            <td> September </td>
                            <td> Oktober </td>
                            <td> November</td>
                            <td> Desember </td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="text-center">
                            <td>
                                1
                            </td>
                            <td>
                                Lyana Zahira Safni
                            </td>
                            <td>
                                500.000
                            </td>
                            <td>
                                <span class="badge text-bg-success">Lunas</span>
                            </td>
                            <td>
                                <span class="badge text-bg-success">Lunas</span>

                            </td>
                            <td>
                                <span class="badge text-bg-success">Lunas</span>

                            </td>
                            <td>
                                <span class="badge text-bg-success">Lunas</span>

                            </td>
                            <td>
                                <span class="badge text-bg-success">Lunas</span>

                            </td>
                            <td>
                                <span class="badge text-bg-success">Lunas</span>

                            </td>
                            <td>
                                <span class="badge text-bg-success">Lunas</span>

                            </td>
                            <td>
                                <span class="badge text-bg-success">Lunas</span>

                            </td>
                            <td>
                                <span class="badge text-bg-success">Lunas</span>

                            </td>
                            <td>
                                <span class="badge text-bg-success">Lunas</span>

                            </td>
                            <td>
                                <span class="badge text-bg-danger">Belum Lunas</span>
                            </td>
                            <td>

                            </td>
                        </tr>
                        <tr class="text-center">
                            <td>
                                2
                            </td>
                            <td>
                                Adzkia Qonita
                            </td>
                            <td>
                                500.000
                            </td>
                            <td>
                                <span class="badge text-bg-success">Lunas</span>
                            </td>
                            <td>
                                <span class="badge text-bg-success">Lunas</span>

                            </td>
                            <td>
                                <span class="badge text-bg-success">Lunas</span>

                            </td>
                            <td>
                                <span class="badge text-bg-success">Lunas</span>

                            </td>
                            <td>
                                <span class="badge text-bg-success">Lunas</span>

                            </td>
                            <td>
                                <span class="badge text-bg-success">Lunas</span>

                            </td>
                            <td>
                                <span class="badge text-bg-success">Lunas</span>

                            </td>
                            <td>
                                <span class="badge text-bg-success">Lunas</span>

                            </td>
                            <td>
                                <span class="badge text-bg-success">Lunas</span>

                            </td>
                            <td>
                                <span class="badge text-bg-success">Lunas</span>

                            </td>
                            <td>
                                <span class="badge text-bg-success">Lunas</span>
                            </td>
                            <td>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="table-responsive kelas-X d-none">
                <table class="table table-bordered table-striped " id="datatable" width="100%" cellspacing="0">
                    <thead class="table table-primary">
                        <tr class="text-center">
                            <th rowspan="2"> NO </th>
                            <th rowspan="2"> Nama </th>
                            <th rowspan="2"> Tagihan </th>
                            <th colspan="13">BULAN</th>
                        </tr>
                        <tr class="text-center">
                            <td> Januari </td>
                            <td> Februari </td>
                            <td> Maret </td>
                            <td> April </td>
                            <td> Mei </td>
                            <td> Juni </td>
                            <td> Juli </td>
                            <td> Agustus </td>
                            <td> September </td>
                            <td> Oktober </td>
                            <td> November</td>
                            <td> Desember </td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="text-center">
                            <td>
                                1
                            </td>
                            <td>
                                Lyana Zahira Safni
                            </td>
                            <td>
                                500.000
                            </td>
                            <td>
                                <span class="badge text-bg-success">Lunas</span>
                            </td>
                            <td>
                                <span class="badge text-bg-success">Lunas</span>

                            </td>
                            <td>
                                <span class="badge text-bg-success">Lunas</span>

                            </td>
                            <td>
                                <span class="badge text-bg-success">Lunas</span>

                            </td>
                            <td>
                                <span class="badge text-bg-success">Lunas</span>

                            </td>
                            <td>
                                <span class="badge text-bg-success">Lunas</span>

                            </td>
                            <td>
                                <span class="badge text-bg-success">Lunas</span>

                            </td>
                            <td>
                                <span class="badge text-bg-success">Lunas</span>

                            </td>
                            <td>
                                <span class="badge text-bg-success">Lunas</span>

                            </td>
                            <td>
                                <span class="badge text-bg-success">Lunas</span>

                            </td>
                            <td>
                                <span class="badge text-bg-danger">Belum Lunas</span>
                            </td>
                            <td>

                            </td>
                        </tr>
                        <tr class="text-center">
                            <td>
                                2
                            </td>
                            <td>
                                Adzkia Qonita
                            </td>
                            <td>
                                500.000
                            </td>
                            <td>
                                <span class="badge text-bg-success">Lunas</span>
                            </td>
                            <td>
                                <span class="badge text-bg-success">Lunas</span>

                            </td>
                            <td>
                                <span class="badge text-bg-success">Lunas</span>

                            </td>
                            <td>
                                <span class="badge text-bg-success">Lunas</span>

                            </td>
                            <td>
                                <span class="badge text-bg-success">Lunas</span>

                            </td>
                            <td>
                                <span class="badge text-bg-success">Lunas</span>

                            </td>
                            <td>
                                <span class="badge text-bg-success">Lunas</span>

                            </td>
                            <td>
                                <span class="badge text-bg-success">Lunas</span>

                            </td>
                            <td>
                                <span class="badge text-bg-success">Lunas</span>

                            </td>
                            <td>
                                <span class="badge text-bg-success">Lunas</span>

                            </td>
                            <td>
                                <span class="badge text-bg-success">Lunas</span>
                            </td>
                            <td>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
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

<?= $this->endSection() ?>