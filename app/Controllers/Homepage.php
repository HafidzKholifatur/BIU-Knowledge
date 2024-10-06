<?php

namespace App\Controllers;

use App\Models\Kategori_Model;
use App\Models\Berita_model;
use App\Models\PengaturanModel;

class Homepage extends BaseController
{

    protected $kategori;
    protected $berita;

    public function __construct()
    {
        $this->kategori  = new Kategori_Model();
        $this->berita  = new Berita_model();
        $this->pengaturan = new PengaturanModel();
    }

    public function index()
    {
        $keyword = '';

        $data = [
            'title'     => 'BeritaBIU',
            'kategori' => $this->kategori->listing(),
            'pengaturan' => $this->pengaturan->link(),
            // 'berita' => $this->berita->getBerita()
            // 'berita' => $this->berita->paginate(1, 'berita'),
            'utama' => $this->berita->utama(),
            'publish' => $this->berita->home(),
            'pager' => $this->berita->pager,
            'keyword' => $keyword
        ];

        echo view('frontend/index', $data);
    }

    public function detail($id)
    {
        $keyword = '';

        $data = [
            'title'     => 'Detail Berita',
            // 'title'     => $this->berita->$nama_berita,
            'kategori' => $this->kategori->listing(),
            'berita' => $this->berita->detail($id),
            'keyword' => $keyword
        ];
        echo view('frontend/singlepage', $data);
    }

    public function kategori($id_kategori)
    {
        $keyword = '';

        $data = [
            'title'     => 'Kategori Berita',
            // 'title'     => $this->berita->$nama_berita,
            'kategori' => $this->kategori->getKategori(),
            'berita' => $this->berita->kategori($id_kategori),
            'keyword' => $keyword
        ];
        echo view('frontend/kategori/', $data);
    }

    public function cari()
    {
        $cari = $this->request->getVar('cari');
        dd($cari);

        $data = [
            'title'     => 'Pencarian'
        ];
        return view('frontend/cari', $data);
    }
}
