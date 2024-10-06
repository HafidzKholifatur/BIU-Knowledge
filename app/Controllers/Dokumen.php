<?php

namespace App\Controllers;

class Dokumen extends BaseController
{

    public function __construct()
    {
        // 
    }

    public function index()
    {

        $data = [
            'title'     => 'Dokumen'
        ];
        echo view('dokumen/index', $data);
    }

    public function tambah()
    {

        $data = [
            'title'     => 'Tambah Dokumen'
        ];
        echo view('dokumen/tambah', $data);
    }
}
