<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('beranda');
    }
    public function home($id){
        return view('home', ['id' => $id]);
    }
}
