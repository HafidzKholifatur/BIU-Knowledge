<?php

namespace App\Controllers;

use App\Models\Download_model;
use App\Models\Kategori_download_model;
use App\Models\Kategori_Model;

class Download extends BaseController
{
    // // coba lihat file for Front End
    // public function view($id_download)
    // {
    //     $this->kategori  = new Kategori_Model();
    //     $m_download      = new Download_model();
    //     $download        = $m_download->detail($id_download);
    //     // $download        = $m_download->listing();
    //     // $this->response->setHeader('Content-Type', 'application/pdf');
    //     $keyword = '';

    //     // $data = [
    //     //     'title'     => 'Download Detail',
    //     //     'kategori' => $this->kategori->listing(),
    //     //     // 'isi'  => 'frontend/download/viewpdf',
    //     //     'download' => $download,
    //     //     'keyword' => $keyword
    //     // ];

    //     $data = [
    //         'title'     => 'Download',
    //         'kategori' => $this->kategori->listing(),
    //         // 'file'  => $download,
    //         'file' => $download,
    //         'keyword' => $keyword
    //     ];

    //     echo view('frontend/download/viewpdf', $data);
    // }

    public function view($gambar = NULL)
    {

        // Cek jika nama file tidak ditemukan
        if ($gambar === NULL) {
            die('Tidak ada file yang dipilih.');
        }

        // Berkas PDF akan ditempatkan di direktori "public/pdf"
        $file = '../assets/upload/file/' . $gambar;

        // Cek jika berkas tidak ditemukan
        if (file_exists($file)) {
            header('X-Download-Options: noopen'); // for disable save as - Not Working asu
            header('Content-Description: File Transfer');
            header('Content-Type: application/pdf');
            header('Content-Disposition: inline; filename="' . $gambar . '"');
            header('Expires: 0');
            header('Cache-Control: private, max-age=0, must-revalidate');
            header('Pragma: public');
            header('Content-Length: ' . filesize($file));

            // header('Content-Length: ' . strlen($file));
            header('Content-Transfer-Encoding: binary');
            header('Accept-Ranges: bytes');

            readfile($file);
            // echo $file;
            exit;
        } else {
            die('Berkas tidak ditemukan.');
        }
    }


    // table
    public function table()
    {
        // checklogin();
        if (is_login()) {
            $id_user = $this->session->get('id');
            $m_download          = new Download_model();
            $m_kategori_download = new Kategori_download_model();
            $download            = $m_download->listing();
            $total               = $m_download->total();

            $data = [
                'title' => 'Data File Download (' . $total . ')',
                'download'   => $download,
                'content'    => 'download/index',
            ];
            echo view('download/index', $data);
        }
    }

    // Tambah
    public function tambah()
    {
        // checklogin();
        $m_download          = new Download_model();
        $m_kategori_download = new Kategori_download_model();
        $kategori_download   = $m_kategori_download->listing();

        // Start validasi
        if ($this->request->getMethod() === 'post' && $this->validate(
            [
                'judul_download' => 'required',
                'gambar' => [
                    'uploaded[gambar]',
                    'mime_in[gambar,image/jpg,image/jpeg,image/gif,image/png,application/pdf,application/doc,application/msword,application/xls,application/xlsx,application/ppt,application/pptx]',
                    'max_size[gambar,4096]',
                ],
            ]
        )) {
            if (!empty($_FILES['gambar']['name'])) {
                // Image upload
                $avatar   = $this->request->getFile('gambar');
                $namabaru = str_replace(' ', '-', $avatar->getName());
                $avatar->move(WRITEPATH . '../assets/upload/file/', $namabaru);
                // masuk database
                $data = [
                    'id_user'              => $this->session->get('id'),
                    'id_kategori_download' => $this->request->getVar('id_kategori_download'),
                    'judul_download'       => $this->request->getVar('judul_download'),
                    'jenis_download'       => $this->request->getVar('jenis_download'),
                    'isi'                  => $this->request->getVar('isi'),
                    'gambar'               => $namabaru,
                    'website'              => $this->request->getVar('website'),
                    'tanggal_post'         => date('Y-m-d H:i:s'),
                ];
                $m_download->tambah($data);

                return redirect()->to(base_url('download/table'))->with('sukses', 'Data Berhasil di Simpan');
            }
            $data = [
                'id_user'              => $this->session->get('id'),
                'id_kategori_download' => $this->request->getVar('id_kategori_download'),
                'judul_download'       => $this->request->getVar('judul_download'),
                'jenis_download'       => $this->request->getVar('jenis_download'),
                'isi'                  => $this->request->getVar('isi'),
                'website'              => $this->request->getVar('website'),
                'tanggal_post'         => date('Y-m-d H:i:s'),
            ];
            $m_download->tambah($data);

            return redirect()->to(base_url('download/table'))->with('sukses', 'Data Berhasil di Simpan');
        }

        $data = [
            'title'        => 'Tambah Download',
            'kategori_download' => $kategori_download,
            'content'           => 'download/tambah',
        ];
        echo view('download/tambah', $data);
    }

    // edit
    public function edit($id_download)
    {
        // checklogin();
        $m_kategori_download = new Kategori_download_model();
        $m_download          = new Download_model();
        $kategori_download   = $m_kategori_download->listing();
        $download            = $m_download->detail($id_download);
        // Start validasi
        if ($this->request->getMethod() === 'post' && $this->validate(
            [
                'judul_download' => 'required',
                'gambar' => [
                    // 'uploaded[gambar]',
                    'mime_in[gambar,image/jpg,image/jpeg,image/gif,image/png,application/pdf,document/doc,application/msword,application/xls,application/xlsx,application/ppt,application/pptx]',
                    'max_size[gambar,4096]',
                ],
            ]
        )) {
            if (!empty($_FILES['gambar']['name'])) {
                // Image upload
                $avatar   = $this->request->getFile('gambar');
                $namabaru = str_replace(' ', '-', $avatar->getName());
                $avatar->move(WRITEPATH . '../assets/upload/file/', $namabaru);
                // masuk database
                $data = [
                    'id_download'          => $id_download,
                    'id_user'              => $this->session->get('id'),
                    'id_kategori_download' => $this->request->getVar('id_kategori_download'),
                    'judul_download'       => $this->request->getVar('judul_download'),
                    'jenis_download'       => $this->request->getVar('jenis_download'),
                    'isi'                  => $this->request->getVar('isi'),
                    'gambar'               => $namabaru,
                    'website'              => $this->request->getVar('website'),
                ];
                $m_download->edit($data);

                return redirect()->to(base_url('download/table'))->with('sukses', 'Data Berhasil di Simpan');
            }
            $data = [
                'id_download'          => $id_download,
                'id_user'              => $this->session->get('id'),
                'id_kategori_download' => $this->request->getVar('id_kategori_download'),
                'judul_download'       => $this->request->getVar('judul_download'),
                'jenis_download'       => $this->request->getVar('jenis_download'),
                'isi'                  => $this->request->getVar('isi'),
                'website'              => $this->request->getVar('website'),
            ];
            $m_download->edit($data);

            return redirect()->to(base_url('download/table'))->with('sukses', 'Data Berhasil di Simpan');
        }

        $data = [
            'title'        => 'Edit Download: ' . $download['judul_download'],
            'kategori_download' => $kategori_download,
            'download'          => $download,
            'content'           => 'download/edit',
        ];
        echo view('download/edit', $data);
    }

    // unduh
    public function unduh($id_download)
    {
        // checklogin();
        $m_kategori_download = new Kategori_download_model();
        $m_download          = new Download_model();
        $kategori_download   = $m_kategori_download->listing();
        $download            = $m_download->detail($id_download);

        return $this->response->download('../assets/upload/file/' . $download['gambar'], null);
    }

    // Delete
    public function delete($id_download)
    {
        // checklogin();
        $m_download = new Download_model();
        $data       = ['id_download' => $id_download];
        $m_download->delete($data);
        // masuk database
        $this->session->setFlashdata('sukses', 'Data telah dihapus');

        return redirect()->to(base_url('download/table'));
    }

    // FrontEnd
    public function index()
    {
        $this->kategori  = new Kategori_Model();
        $m_download      = new Download_model();
        $download        = $m_download->listing();
        $keyword = '';

        $data = [
            'title'     => 'Download',
            'kategori' => $this->kategori->listing(),
            'file'  => $download,
            'keyword' => $keyword
        ];
        echo view('frontend/download/index', $data);
    }
}
