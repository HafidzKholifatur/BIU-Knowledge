<?php

namespace App\Controllers;

class Homepage extends BaseController
{
    public function __construct()
    {
        // 
    }
    public function index()
    {
        $data = [
            'title'     => 'BeritaBIU'
        ];
        echo view('frontend/index', $data);
    }

    public function coba()
    {
        $data = [
            'title'     => 'Kategori Berita'
        ];
        echo view('frontend/kategori/index', $data);
    }

    public function Kategori()
    {
        $data = [
            'title'     => 'Kategori Berita'
        ];
        echo view('frontend/kategori/index', $data);
    }
}
