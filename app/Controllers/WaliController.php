<?php

namespace App\Controllers;

use Tests\Support\Models\BukuPenghubung;

class WaliController extends BaseController
{
    public function index(): string
    {
        $bukuPenghubung = new BukuPenghubung();
        $data = $bukuPenghubung->findAll();
        return view('table', ['data'=>$data]);
    }

    public function addBukuHubung()
    {
        // Ambil data dari permintaan AJAX
        $nama_siswa = $this->request->getPost('nama_siswa');
        $pesan_guru = $this->request->getPost('pesan_guru');
        $ttd_guru = $this->request->getPost('ttd_guru');
        $pesan_orang_tua = $this->request->getPost('pesan_orang_tua');
        $ttd_orang_tua = $this->request->getPost('ttd_orang_tua');
        $date = $this->request->getPost('date');

        // Buat array data untuk dimasukkan ke dalam tabel buku_penghubung
        $data = [
            'nama_siswa' => $nama_siswa,
            'pesan_guru' => $pesan_guru,
            'ttd_guru' => $ttd_guru,
            'pesan_orang_tua' => $pesan_orang_tua,
            'ttd_orang_tua' => $ttd_orang_tua,
            'date' => $date
        ];

        // Load model yang sesuai, gantilah 'ModelName' dengan nama model yang sesuai
        $bukuPenghubungModel = new BukuPenghubung();

        // Simpan data ke dalam tabel buku_penghubung
        $bukuPenghubungModel->insert($data);

        // Kirim respons ke klien jika diperlukan
        // Misalnya, Anda bisa mengirim respons JSON untuk memberi tahu klien bahwa penyimpanan berhasil
        $response = [
            'status' => 'success',
            'message' => 'Data berhasil disimpan'
        ];

        return $this->response->setJSON($response);
    }


    
}
