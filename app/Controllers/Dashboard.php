<?php

namespace App\Controllers;

// use App\Models\ItemModel;
// use App\Models\PelangganModel;
// use App\Models\PemasokModel;
// use App\Models\PenjualanModel;
use App\Models\UserModel;
use App\Models\Dasbor_model;
use App\Models\Berita_model;

class Dashboard extends BaseController
{
    // protected $produk;
    // protected $pemasok;
    // protected $pelanggan;
    protected $pengguna;
    // protected $penjualan;
    protected $laporan;

    public function __construct()
    {
        // $this->produk = new ItemModel();
        // $this->pemasok = new PemasokModel();
        // $this->pelanggan = new PelangganModel();
        $this->pengguna = new UserModel();
        $this->laporan = new Berita_Model();
        // $this->penjualan = new PenjualanModel();
    }
    public function index()
    {
        $m_dasbor = new Dasbor_model();
        if (is_login()) {
            $id_user = $this->session->get('id');
        } else {
            return redirect()->to('auth');
        }

        $beritadraft = $m_dasbor->beritadraft2($id_user);
        $beritapublish = $m_dasbor->beritapublish2($id_user);

        $data = [
            'title'     => 'Dashboard',
            // 'produk'    => $this->produk->countAllResults(),
            // 'pemasok'  => $this->pemasok->countAllResults(),
            // 'pelanggan' => $this->pelanggan->countAllResults(),
            'beritadraft' => $beritadraft,
            'beritapublish' => $beritapublish,
            'pengguna'  => $this->pengguna->countAllResults()
        ];
        echo view('dashboard', $data);
    }

    public function laporan()
    {
        $data = $this->laporan->laporanBerita(date('Y'));
        return $this->response->setJSON($data);
    }
}
