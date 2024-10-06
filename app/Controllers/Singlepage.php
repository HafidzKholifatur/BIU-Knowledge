<?php

namespace App\Controllers;

use App\Models\KategoriModel;

class Singlepage extends BaseController
{

    protected $kategori;

    public function __construct()
    {
        $this->kategori  = new KategoriModel();
    }
    public function index()
    {
        $data = [
            'title'     => 'Kategori Berita',
            'kategori' => $this->kategori->getKategori()
        ];
        echo view('frontend/singlepage/index', $data);
    }
}
