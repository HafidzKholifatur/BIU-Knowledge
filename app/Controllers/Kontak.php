<?php

namespace App\Controllers;

use App\Models\Kategori_Model;

class Kontak extends BaseController
{

    protected $kategori;

    public function __construct()
    {
        $this->kategori  = new Kategori_Model();
    }
    public function index()
    {
        $keyword = '';

        $data = [
            'title'     => 'Kontak Kami',
            'kategori' => $this->kategori->listing(),
            'keyword' => $keyword
        ];
        echo view('frontend/kontak/index', $data);
    }
}
