<?php

namespace App\Controllers;

use App\Models\KategoriModel;

class Kontak extends BaseController
{

    protected $kategori;

    public function __construct()
    {
        $this->kategori  = new KategoriModel();
    }
    public function index()
    {
        $data = [
            'title'     => 'BeritaBIU',
            'kategori' => $this->kategori->getKategori()
        ];
        echo view('frontend/kontak/index', $data);
    }
}
