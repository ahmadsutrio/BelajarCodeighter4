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
            'title'=>'Halaman Wali',
            'data'=> $this->bukuPenghubungModel->findAll()
        ];
        return view('table', ['data'=>$data]);
    }

    public function addBukuHubung()
    {
        
        $bukuPenghubungModel = $this->bukuPenghubungModel;

        $bukuPenghubungModel->save([
            'nama_siswa' => $this->request->getPost('nama_siswa'),
            'ttd_guru' => $this->request->getPost('ttd_guru'),
            'pesan_orang_tua' => $this->request->getPost('pesan_orang_tua'),
            'ttd_orang_tua' => $this->request->getPost('ttd_orang_tua'),
            'date' => $this->request->getPost('date'),
        ]);
             return redirect()->to('http://localhost:8081/wali');
        
    }


    
}
