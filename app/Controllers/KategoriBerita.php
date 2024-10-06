<?php

namespace App\Controllers;

use App\Models\Kategori_Model;
use App\Models\Berita_model;

class KategoriBerita extends BaseController
{

    // protected $kategori;
    protected $berita;

    public function __construct()
    {
        $this->kategori  = new Kategori_Model();
        $this->berita  = new Berita_model();
    }

    public function index($id)
    {
        $keyword = '';

        $m_kategori = new Kategori_model();
        $kategori   = $m_kategori->listing();
        // $kate       = $m_kategori->getKategori();
        // $data = [
        //     'title'     => 'Kategori Berita',
        //     'kategori' => $this->kategori->getKategori()
        // ];
        // echo view('frontend/kategori/index', $data);

        $data = [
            'title'     => 'Kategori Berita',
            // 'title'     => $this->berita->$nama_berita,
            'kategori'  => $kategori,
            // 'kate'      => $kate,
            // 'kate' => $this->berita->getKategori(),
            'berita' => $this->berita->per_kategori($id),
            'keyword' => $keyword
        ];
        echo view('frontend/kategori/index', $data);
    }
}
