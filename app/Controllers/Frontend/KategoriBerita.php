<?php

namespace App\Controllers;

class KategoriBerita extends BaseController
{
    public function __construct()
    {
        // 
    }
    public function index()
    {
        $data = [
            'title'     => 'Kategori Berita'
        ];
        echo view('frontend/kategori/index', $data);
    }
}
