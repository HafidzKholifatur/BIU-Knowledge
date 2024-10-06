<?php

namespace App\Controllers;

use App\Models\Kategori_Model;
use App\Models\Berita_model;

class Search extends BaseController
{

    protected $kategori;
    protected $berita;

    public function __construct()
    {
        $this->kategori  = new Kategori_Model();
        $this->berita  = new Berita_model();
    }

    // public function index()
    // {
    //     $data = [
    //         'title'     => 'BeritaBIU',
    //         'kategori' => $this->kategori->listing(),
    //         // 'berita' => $this->berita->getBerita()
    //         // 'berita' => $this->berita->paginate(1, 'berita'),
    //         'utama' => $this->berita->utama(),
    //         'publish' => $this->berita->home(),
    //         'pager' => $this->berita->pager
    //     ];

    //     echo view('frontend/index', $data);
    // }

    public function index()
    {
        // $key = $this->input->get('key');

        $keyword = '';

        if ($this->request->getPost()) {
            $keyword = $this->request->getPost('keyword');
        }

        // $berita = new Berita_Model();
        // $cari = $this->request->getGet('cari');
        // $da = $berita->where('judul_berita', $cari)->findAll();
        // $cari =  $this->request->getVar('cari');
        // dd($cari);

        // $hasil = $berita->select('berita.*, kategori.nama_kategori, kategori.slug_kategori, tb_users.nama')
        //     ->join('kategori', 'kategori.id = berita.id_kategori', 'LEFT')
        //     ->join('tb_users', 'tb_users.id = berita.id_user', 'LEFT')
        //     ->where('status_berita', 'Publish')
        //     ->like('berita.judul_berita', $keyword)
        //     ->orlike('berita.isi', $keyword)
        //     ->getResultArray();

        $data = [
            'title' => 'Pencarian',
            'kategori' => $this->kategori->listing(),
            'keyword' => $keyword,
            'hasil' => $this->berita->hasilcari($keyword)
            // 'cari' => $hasil
        ];
        return view('frontend/cari', $data);
    }
}
