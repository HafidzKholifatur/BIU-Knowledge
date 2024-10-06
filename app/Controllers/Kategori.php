<?php

namespace App\Controllers;

use App\Models\Kategori_Model;
use Irsyadulibad\DataTables\DataTables;

class Kategori extends BaseController
{
    protected $kategoriModel;
    private $rules = [
        'kategori' => [
            'rules' => 'required|alpha_numeric_punct|is_unique[kategori.nama_kategori,id,{id}]',
        ],
    ];

    public function __construct()
    {
        $this->kategoriModel = new Kategori_Model();
        helper('form');
    }

    public function index()
    {
        if (is_login()) {
            $id_user = $this->session->get('id');
        } else {
            return redirect()->to('auth');
        }

        $data = [
            'title'     => 'Daftar Kategori',
        ];

        echo view('kategori/index', $data);
    }

    public function ajax()
    {
        if ($this->request->isAJAX()) {
            return DataTables::use('kategori')
                ->select('id, nama_kategori AS kategori')
                ->make();
        }
    }

    public function tambah()
    {
        if ($this->request->isAJAX()) {
            if (!$this->validate($this->rules)) {
                $respon = [
                    'validasi' => false,
                    'error'    => $this->validator->getErrors(),
                ];
            } else {
                $data = [
                    'nama_kategori' => ucwords($this->request->getPost('kategori', FILTER_SANITIZE_STRING)),
                ];
                $this->kategoriModel->save($data); // simpan data
                $respon = [
                    'validasi' => true,
                    'sukses'   => true,
                    'pesan'    => 'Data berhasil ditambahkan :)',
                ];
            }

            return $this->response->setJSON($respon);
        }
    }
    public function ubah()
    {
        if ($this->request->isAJAX()) {
            if (!$this->validate($this->rules)) {
                $respon = [
                    'validasi' => false,
                    'error'    => $this->validator->getErrors(),
                ];
            } else {
                $data = [
                    'id'   => $this->request->getPost('id', FILTER_SANITIZE_NUMBER_INT),
                    'nama_kategori' => ucwords($this->request->getPost('kategori', FILTER_SANITIZE_STRING)),
                ];
                $this->kategoriModel->save($data); // simpan data
                $respon = [
                    'validasi' => true,
                    'sukses'   => true,
                    'pesan'    => 'Data berhasil diubah :)',
                ];
            }

            return $this->response->setJSON($respon);
        }
    }

    public function hapus()
    {
        if ($this->request->isAJAX()) {
            $id = $this->request->getGet('id', FILTER_SANITIZE_NUMBER_INT);
            if ($this->kategoriModel->find($id)) {
                $this->kategoriModel->delete($id); // hapus data
                $respon = [
                    'status' => true,
                    'pesan'  => 'Data berhasil dihapus :)',
                ];
            } else {
                $respon = [
                    'status' => false,
                    'pesan'  => 'Gagal menghapus data :(',
                ];
            }

            return $this->response->setJSON($respon);
        }
    }
}
