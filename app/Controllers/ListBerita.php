<?php

namespace App\Controllers;

use App\Models\Kategori_Model;
use App\Models\Berita_model;

class ListBerita extends BaseController
{

    protected $kategori;
    protected $berita;

    public function __construct()
    {
        $this->kategori  = new Kategori_Model();
        $this->berita  = new Berita_model();
    }

    public function index()
    {
        $keyword = '';

        $m_kategori = new Kategori_model();
        // $br         = new Berita_model();
        $kategori   = $m_kategori->listing();
        // $list       = $br->listberita();

        $data = [
            'title'     => 'List Berita',
            'kategori' => $kategori,
            // 'berita' => $this->berita->getBerita()
            'berita' => $this->berita->like('status_berita', 'Publish')->orlike('status_berita', 'Utama')->orderBy('berita.tanggal_publish', 'DESC')->paginate(8, 'berita'),
            // 'utama' => $this->berita->utama(),
            // 'publish' => $this->berita->home(),
            'pager' => $this->berita->pager,
            'keyword' => $keyword
        ];

        echo view('frontend/list', $data);
    }
}
