<?php

namespace App\Controllers;

class WaliController extends BaseController
{
    public function index(): string
    {
        return view('table');
    }
}
