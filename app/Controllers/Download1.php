<?php

namespace App\Controllers;

use App\Models\Kategori_Model;

class Download extends BaseController
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
            'title'     => 'Download',
            'kategori' => $this->kategori->listing(),
            'keyword' => $keyword
        ];
        echo view('frontend/download/index', $data);
    }
}
