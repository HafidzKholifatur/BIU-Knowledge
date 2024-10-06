<?php

namespace App\Controllers;

use App\Models\KategoriModel;

class Berita extends BaseController
{
    protected $kategori;

    public function __construct()
    {
        $this->kategori  = new KategoriModel();
        helper('form');
    }

    public function index()
    {
        $data = [
            'title'    => 'Tambah Berita',
            'kategori' => $this->kategori->getKategori()
        ];

        echo view('berita/tambah', $data);
    }

    public function table()
    {
        echo view('berita/index', ['title' => 'Tabel Berita']);
    }


    public function edit()
    {
        echo view('berita/edit', ['title' => 'Edit Berita']);
    }

    public function disetujui()
    {
        echo view('berita/disetujui', ['title' => 'Tabel Berita Yang Disetuji']);
    }

    public function pending()
    {
        echo view('berita/pending', ['title' => 'Tabel Berita Yang Belum Disetuji']);
    }
}
