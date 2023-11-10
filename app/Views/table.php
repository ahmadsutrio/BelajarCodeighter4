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
            </div>
        </div>

        <?php if (isset($message)) : ?>
            <div class="alert alert-primary" role="alert">
                A simple primary alert—check it out!
            </div>
        <?php endif; ?>
        <div class="col-9">
            <div class="row h-100">
                <div class="col-12 d-flex justify-content-end">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop">
                        Tambah
                    </button>
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
                        <th scope="col" rowspan="2" class="align-middle">Aksi</th>
                    </tr>
                    <tr class="text-center">
                        <th scope="col" class="text-capitalize ">Hal yang disampaikan</th>
                        <th scope="col" class="text-uppercase ">ttd guru</th>
                        <th scope="col" class="text-capitalize ">tanggapan orang tua</th>
                        <th scope="col" class=" ">TTD orang tua</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1 ?>
                    <?php foreach ($data as $item) : ?>
                        <tr>
                            <td scope="col" class="align-middle"><?= $no++ ?></td>
                            <td scope="col"><?= $item->tanggal ?></td>
                            <td scope="col"><?= $item->nama_siswa ?></td>
                            <td scope="col" class="text-capitalize"><?= $item->pesan_guru ?></td>
                            <td scope="col" class="text-capitalize ">
                                <div class="d-flex justify-content-center">
                                    <img src="img/background.png" alt="" class="img-fluid" width="80">
                                </div>
                            </td>
                            <td scope="col" class="text-capitalize"><?= $item->pesan_orang_tua ?></td>
                            <td scope="col" class="text-capitalize"><?= $item->ttd_orang_tua ?></td>
                            <td class=" ">
                                <div class="d-flex justify-content-center ">
                                    <button class="btn bg-danger me-2" data-toggle="modal" data-target="#delete-<?= $item->id ?>">
                                        <svg viewBox="0 0 24 24" fill="none" width="20" height="20" xmlns="http://www.w3.org/2000/svg" stroke="#fffffff">
                                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                            <g id="SVGRepo_iconCarrier">
                                                <path d="M10 11V17" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path d="M14 11V17" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path d="M4 7H20" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path d="M6 7H12H18V18C18 19.6569 16.6569 21 15 21H9C7.34315 21 6 19.6569 6 18V7Z" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path d="M9 5C9 3.89543 9.89543 3 11 3H13C14.1046 3 15 3.89543 15 5V7H9V5Z" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </g>
                                        </svg>
                                    </button>
                                    <button class="btn bg-success" data-toggle="modal" data-target="#update-<?= $item->id ?>">
                                        <svg viewBox="0 0 24 24" fill="none" width="20" height="20" xmlns="http://www.w3.org/2000/svg">
                                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                            <g id="SVGRepo_iconCarrier">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M21.1213 2.70705C19.9497 1.53548 18.0503 1.53547 16.8787 2.70705L15.1989 4.38685L7.29289 12.2928C7.16473 12.421 7.07382 12.5816 7.02986 12.7574L6.02986 16.7574C5.94466 17.0982 6.04451 17.4587 6.29289 17.707C6.54127 17.9554 6.90176 18.0553 7.24254 17.9701L11.2425 16.9701C11.4184 16.9261 11.5789 16.8352 11.7071 16.707L19.5556 8.85857L21.2929 7.12126C22.4645 5.94969 22.4645 4.05019 21.2929 2.87862L21.1213 2.70705ZM18.2929 4.12126C18.6834 3.73074 19.3166 3.73074 19.7071 4.12126L19.8787 4.29283C20.2692 4.68336 20.2692 5.31653 19.8787 5.70705L18.8622 6.72357L17.3068 5.10738L18.2929 4.12126ZM15.8923 6.52185L17.4477 8.13804L10.4888 15.097L8.37437 15.6256L8.90296 13.5112L15.8923 6.52185ZM4 7.99994C4 7.44766 4.44772 6.99994 5 6.99994H10C10.5523 6.99994 11 6.55223 11 5.99994C11 5.44766 10.5523 4.99994 10 4.99994H5C3.34315 4.99994 2 6.34309 2 7.99994V18.9999C2 20.6568 3.34315 21.9999 5 21.9999H16C17.6569 21.9999 19 20.6568 19 18.9999V13.9999C19 13.4477 18.5523 12.9999 18 12.9999C17.4477 12.9999 17 13.4477 17 13.9999V18.9999C17 19.5522 16.5523 19.9999 16 19.9999H5C4.44772 19.9999 4 19.5522 4 18.9999V7.99994Z" fill="#ffffff"></path>
                                            </g>
                                        </svg>
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <div class="modal fade" id="update-<?= $item->id ?>" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="staticBackdropLabel">Edit Data</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form action="/edit" method="post">
                                        <div class="modal-body">

                                            <input type="hidden" name="id" value="<?= $item->id ?>">
                                            <div class="form-group mb-4">
                                                <label for="nama_siswa" class="fw-bold fs-6">Nama Siswa</label>
                                                <input type="text" name="nama_siswa" id="nama_siswa" class="form-control" value="<?= $item->nama_siswa ?>">
                                            </div>
                                            <div class="form-group mb-4">
                                                <label for="pesan_guru" class="fw-bold fs-6">Pesan guru</label>
                                                <textarea name="pesan_guru" id="pesan_guru" rows="3" class="form-control w-100"><?= $item->pesan_guru ?></textarea>
                                            </div>
                                            <div class="form-group mb-4">
                                                <label for="ttd_guru" class="mb-3 fw-bold fs-6">Tanda tangan guru</label>
                                                <div class="custom-file mb-3 border p-2">
                                                    <input type="file" class="custom-file-input" id="ttd_guru" name="ttd_guru">
                                                    <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                                                    <div class="invalid-feedback">Example invalid custom file feedback</div>
                                                </div>
                                            </div>
                                            <div class="form-group mb-4">
                                                <label for="pesan_orang_tua" class="fw-bold fs-6">Pesan Orang Tua</label>
                                                <textarea name="pesan_orang_tua" id="pesan_orang_tua" rows="3" class="form-control w-100"><?= $item->pesan_orang_tua ?></textarea>
                                            </div>
                                            <div class="form-group mb-4">
                                                <label for="ttd_orang_tua" class="mb-3 fw-bold fs-6">Tanda Tangan Orang Tua</label>
                                                <div class="custom-file mb-3 border p-2">
                                                    <input type="file" class="custom-file-input" id="ttd_orang_tua" name="ttd_orang_tua">
                                                    <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                                                    <div class="invalid-feedback">Example invalid custom file feedback</div>
                                                </div>
                                            </div>
                                            <div class="form-group mb-4">
                                                <label for="date" class="fw-bold fs-6">Hari/Tanggal/Tahun</label>
                                                <input type="date" name="tangga" id="date" class="form-control" value="<?= $item->tanggal ?>">
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary" id="simpan">simpan</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <!-- hapus -->
                        <div class="modal fade" id="delete-<?= $item->id ?>" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="staticBackdropLabel">Modal Hapus</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form action="/delete/<?= $item->id ?>" method="post">
                                        <div class="modal-body">
                                            <input type="hidden" name="id" value="<?= $item->id ?>">
                                            <h5 class="text-black-50">Apakah anda yakin akan menghapus data dengan nama <span class="text-danger"><?= $item->nama_siswa ?></span></h5>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                            <button type="submit" class="btn btn-danger">Iya</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                    <?php endforeach; ?>

                </tbody>
            </table>
        </div>
    </div>
</div>


<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Tambah Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="/add" method="post">
                <div class="modal-body">
                    
                    <?php if (session()->getFlashdata('error')) : ?>
                        <div class=" alert alert-danger"><?= session()->getFlashdata('error') ?></div>
                    <?php endif; ?>

                    <div class="form-group mb-4">
                        <label for="nama_siswa" class="fw-bold fs-6">Nama Siswa</label>
                        <input type="text" name="nama_siswa" id="nama_siswa" class="form-control">
                    </div>
                    <div class="form-group mb-4">
                        <label for="pesan_guru" class="fw-bold fs-6">Pesan guru</label>
                        <textarea name="pesan_guru" id="pesan_guru" rows="3" class="form-control w-100"></textarea>
                    </div>
                    <div class="form-group mb-4">
                        <label for="ttd_guru" class="mb-3 fw-bold fs-6">Tanda tangan guru</label>
                        <div class="custom-file mb-3 border p-2">
                            <input type="file" class="custom-file-input" id="ttd_guru" name="ttd_guru">
                            <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                            <div class="invalid-feedback">Example invalid custom file feedback</div>
                        </div>
                    </div>
                    <div class="form-group mb-4">
                        <label for="pesan_orang_tua" class="fw-bold fs-6">Pesan Orang Tua</label>
                        <textarea name="pesan_orang_tua" id="pesan_orang_tua" rows="3" class="form-control w-100"></textarea>
                    </div>
                    <div class="form-group mb-4">
                        <label for="ttd_orang_tua" class="mb-3 fw-bold fs-6">Tanda Tangan Orang Tua</label>
                        <div class="custom-file mb-3 border p-2">
                            <input type="file" class="custom-file-input" id="ttd_orang_tua" name="ttd_orang_tua">
                            <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                            <div class="invalid-feedback">Example invalid custom file feedback</div>
                        </div>
                    </div>
                    <div class="form-group mb-4">
                        <label for="date" class="fw-bold fs-6">Hari/Tanggal/Tahun</label>
                        <input type="date" name="tangga" id="date" class="form-control">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" id="simpan">simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection() ?>