<?php

namespace App\Controllers;

use app\Config\Routes;
use Tests\Support\Models\BukuPenghubung;
use App\Controllers\BaseController;

class WaliController extends BaseController
{
    protected $bukuPenghubungModel;
    public function __construct()
    {
        $this->bukuPenghubungModel = new BukuPenghubung();
    }

    public function index(): string
    {
    
        $data = [
            'title' => 'Halaman Wali',
            'data' => $this->bukuPenghubungModel->findAll(),
        ];
        return view('table', $data);
    }

    public function addBukuHubung()
    {

        $bukuPenghubungModel = $this->bukuPenghubungModel;

        $rules = $this->validate([
            'nama_siswa' => [
                'rules' => 'required|min_length[3]',
                'errors' => [
                    'required' => '{field} Wajib di isi',
                    'min_length' => '{field} Minimal 3 karakter'
                ]
            ],
            'pesan_guru' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib di isi'
                ]
            ]
        ]);

        if (!$rules) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->to('http://localhost:8081/wali')->withInput();
        }

        $bukuPenghubungModel->save([
            'nama_siswa' => $this->request->getPost('nama_siswa'),
            'ttd_guru' => $this->request->getPost('ttd_guru'),
            'pesan_orang_tua' => $this->request->getPost('pesan_orang_tua'),
            'ttd_orang_tua' => $this->request->getPost('ttd_orang_tua'),
            'date' => $this->request->getPost('date'),
        ]);
        session()->setFlashdata('success','Berhasil menambahkan data');
        return redirect()->to('http://localhost:8081/wali');
    }
    
    public function deleteBukuHubung($id)
    {
        $bukuPenghubungModel = $this->bukuPenghubungModel;
        $data = $bukuPenghubungModel->find($id);
        $data = $bukuPenghubungModel->delete($data->id);
        
        session()->setFlashdata('success','Berhasil menghapus data');
        return redirect()->to('http://localhost:8081/wali');
    }
    
    public function editBukuHubung()
    {
        $id = $this->request->getPost('id');
        $bukuPenghubungModel = $this->bukuPenghubungModel;
        $data = [
            'nama_siswa' => $this->request->getPost('nama_siswa'),
            'ttd_guru' => $this->request->getPost('ttd_guru'),
            'pesan_orang_tua' => $this->request->getPost('pesan_orang_tua'),
            'ttd_orang_tua' => $this->request->getPost('ttd_orang_tua'),
            'date' => $this->request->getPost('date'),
        ];
        $update = $bukuPenghubungModel->find($id);
        $update = $bukuPenghubungModel->update($id, $data);
        
        session()->setFlashdata('success','Berhasil memperbarui data');
        return redirect()->to('http://localhost:8081/wali');
    }
}
