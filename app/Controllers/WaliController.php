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

    
}
