<?php

namespace App\Controllers;
use CodeIgniter\Controller;

class Deteksi extends BaseController
{
    public function index(): string
    {
        return view('pages/deteksi');
    }

    public function deteksi2(): string
    {
        return view('pages/deteksi2');
    }
}
