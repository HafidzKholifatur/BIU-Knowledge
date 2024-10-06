<?php

namespace App\Controllers;

use App\Models\Berita_model;
use App\Models\Kategori_model;
use App\Models\Usermodel;

class Berita extends BaseController
{
    // index
    public function index()
    {
        $id_user = $this->session->get('id');
        // checklogin();
        $m_berita   = new Berita_model();
        $m_kategori = new Kategori_model();

        $total      = $m_berita->total();
        if (esc(get_user('id_role') == 1) || get_user('id_role') == 2) {
            $berita     = $m_berita->listing();
        } else {
            $berita     = $m_berita->listing2($id_user);
        }

        $data = [
            'title'     => 'Knowledge, Profil dan Layanan (' . $total . ')',
            'berita'    => $berita,
            'content'   => 'berita/index',
            'judul'     => 'Tabel Knowledge',
            'subjudul'  => 'List Tabel dari semua knowledge yang telah dibagikan.',
            'subjudul2' => 'Menampilkan Data Knowledge Yang Telah Dibagikan.',
        ];
        echo view('berita/index', $data);
    }

    // kategori
    public function kategori($id_kategori)
    {
        // checklogin();
        $m_berita   = new Berita_model();
        $m_kategori = new Kategori_model();
        $kategori   = $m_kategori->detail($id_kategori);
        $berita     = $m_berita->kategori_all($id_kategori);
        $total      = $m_berita->total_kategori($id_kategori);

        $data = [
            'title' => $kategori['nama_kategori'] . ' (' . $total . ')',
            'berita'     => $berita,
            'content'    => 'berita/index',
        ];
        echo view('dashboard', $data);
    }

    // jenis_berita
    public function jenis_berita($jenis_berita)
    {
        // checklogin();
        $m_berita   = new Berita_model();
        $m_kategori = new Kategori_model();
        $berita     = $m_berita->jenis_berita_all($jenis_berita);
        $total      = $m_berita->total_jenis_berita($jenis_berita);

        $data = [
            'title' => $jenis_berita . ' (' . $total . ')',
            'berita'     => $berita,
            'content'    => 'berita/index',
        ];
        echo view('dashboard', $data);
    }

    // status_berita
    public function status_berita($status_berita)
    {
        // checklogin();
        $m_berita   = new Berita_model();
        $m_kategori = new Kategori_model();
        $kategori   = $m_kategori->detail($id_kategori);
        $berita     = $m_berita->status_berita_all($status_berita);
        $total      = $m_berita->total_status_berita($status_berita);

        $data = [
            'title' => $status_berita . ' (' . $total . ')',
            'berita'     => $berita,
            'content'    => 'berita/index',
        ];
        echo view('dashboard', $data);
    }

    // author
    public function author($id_user)
    {
        // checklogin();
        $m_berita   = new Berita_model();
        $m_kategori = new Kategori_model();
        $m_user     = new Usermodel();
        $user       = $m_user->detail($id_user);
        $berita     = $m_berita->author_all($id_user);
        $total      = $m_berita->total_author($id_user);

        $data = [
            'title' => $user['nama'] . ' (' . $total . ')',
            'berita'     => $berita,
            'content'    => 'berita/index',
        ];
        echo view('dashboard', $data);
    }

    // Tambah
    public function tambah()
    {
        // checklogin();
        $m_kategori = new Kategori_model();
        $m_berita   = new Berita_model();
        $kategori   = $m_kategori->listing();

        // Start validasi
        if ($this->request->getMethod() === 'post' && $this->validate(
            [
                'judul_berita' => 'required',
                'gambar' => [
                    'mime_in[gambar,image/jpg,image/jpeg,image/gif,image/png]',
                    'max_size[gambar,4096]',
                ],
            ]
        )) {
            if (!empty($_FILES['gambar']['name'])) {
                // Image upload
                $avatar   = $this->request->getFile('gambar');
                $namabaru = time() . str_replace(' ', '-', $avatar->getName());
                $avatar->move(WRITEPATH . '../public/assets/upload/image/', $namabaru);
                // Create thumb
                $image = \Config\Services::image()
                    ->withFile(WRITEPATH . '../public/assets/upload/image/' . $namabaru)
                    ->fit(100, 100, 'center')
                    ->save(WRITEPATH . '../public/assets/upload/image/thumbs/' . $namabaru);
                // masuk database
                $data = [
                    'id_user'         => $this->session->get('id'),
                    'id_kategori'     => $this->request->getVar('id_kategori'),
                    'slug_berita'     => strtolower(url_title($this->request->getVar('judul_berita'))),
                    'judul_berita'    => $this->request->getVar('judul_berita'),
                    'ringkasan'       => $this->request->getVar('ringkasan'),
                    'isi'             => $this->request->getVar('isi'),
                    'status_berita'   => $this->request->getVar('status_berita'),
                    // 'jenis_berita'    => $this->request->getVar('jenis_berita'),
                    'keywords'        => $this->request->getVar('keywords'),
                    'icon'            => $this->request->getVar('icon'),
                    'gambar'          => $namabaru,
                    'tanggal_post'    => date('Y-m-d H:i:s'),
                    'tanggal_publish' => date('Y-m-d', strtotime($this->request->getVar('tanggal_publish'))) . ' ' . date('H:i', strtotime($this->request->getVar('jam'))),
                ];
                $m_berita->tambah($data);

                // return redirect()->to(base_url('berita/jenis_berita/' . $this->request->getVar('jenis_berita')))->with('sukses', 'Data Berhasil di Simpan');
                return redirect()->to(base_url('berita'))->with('sukses', 'Data Berhasil di Simpan');
            }
            $data = [
                'id_user'         => $this->session->get('id'),
                'id_kategori'     => $this->request->getVar('id_kategori'),
                'slug_berita'     => strtolower(url_title($this->request->getVar('judul_berita'))),
                'judul_berita'    => $this->request->getVar('judul_berita'),
                'ringkasan'       => $this->request->getVar('ringkasan'),
                'isi'             => $this->request->getVar('isi'),
                'status_berita'   => $this->request->getVar('status_berita'),
                // 'jenis_berita'    => $this->request->getVar('jenis_berita'),
                'keywords'        => $this->request->getVar('keywords'),
                'icon'            => $this->request->getVar('icon'),
                'tanggal_post'    => date('Y-m-d H:i:s'),
                'tanggal_publish' => date('Y-m-d', strtotime($this->request->getVar('tanggal_publish'))) . ' ' . date('H:i', strtotime($this->request->getVar('jam'))),
            ];
            $m_berita->tambah($data);

            return redirect()->to(base_url('berita'))->with('sukses', 'Data Berhasil di Simpan');
        }

        $data = [
            'title' => 'Tambah Berita',
            'kategori'   => $kategori,
            'content'    => 'berita/tambah',
        ];
        echo view('berita/tambah', $data);
    }

    // edit
    public function edit($id_berita)
    {
        // checklogin();
        $m_kategori = new Kategori_model();
        $m_berita   = new Berita_model();
        $kategori   = $m_kategori->listing();
        $berita     = $m_berita->detail($id_berita);
        // Start validasi
        if ($this->request->getMethod() === 'post' && $this->validate(
            [
                'judul_berita' => 'required',
                'gambar' => [
                    'mime_in[gambar,image/jpg,image/jpeg,image/gif,image/png]',
                    'max_size[gambar,4096]',
                ],
            ]
        )) {
            if (!empty($_FILES['gambar']['name'])) {

                $m_berita = new Berita_model();
                $data = $m_berita->find($id_berita);
                $imagefile = $data['gambar'];
                if (file_exists("assets/upload/image/thumbs/" . $imagefile)) {
                    unlink("assets/upload/image/thumbs/" . $imagefile);
                    unlink("assets/upload/image/" . $imagefile);
                }
                // Image upload
                $avatar   = $this->request->getFile('gambar');
                $namabaru = time() . str_replace(' ', '-', $avatar->getName());
                $avatar->move(WRITEPATH . '../public/assets/upload/image/', $namabaru);
                // Create thumb
                $image = \Config\Services::image()
                    ->withFile(WRITEPATH . '../public/assets/upload/image/' . $namabaru)
                    ->fit(100, 100, 'center')
                    ->save(WRITEPATH . '../public/assets/upload/image/thumbs/' . $namabaru);
                // masuk database
                $data = [
                    'id_berita'       => $id_berita,
                    // 'id_user'         => $this->session->get('id'),
                    'id_kategori'     => $this->request->getVar('id_kategori'),
                    'slug_berita'     => strtolower(url_title($this->request->getVar('judul_berita'))),
                    'judul_berita'    => $this->request->getVar('judul_berita'),
                    'ringkasan'       => $this->request->getVar('ringkasan'),
                    'isi'             => $this->request->getVar('isi'),
                    'status_berita'   => $this->request->getVar('status_berita'),
                    // 'jenis_berita'    => $this->request->getVar('jenis_berita'),
                    'keywords'        => $this->request->getVar('keywords'),
                    'icon'            => $this->request->getVar('icon'),
                    'gambar'          => $namabaru,
                    'tanggal_publish' => date('Y-m-d', strtotime($this->request->getVar('tanggal_publish'))) . ' ' . date('H:i', strtotime($this->request->getVar('jam'))),
                ];
                $m_berita->edit($data);

                return redirect()->to(base_url('dashboard'))->with('sukses', 'Data Berhasil di Simpan');
            }
            $data = [
                'id_berita'       => $id_berita,
                // 'id_user'         => $this->session->get('id'),
                'id_kategori'     => $this->request->getVar('id_kategori'),
                'slug_berita'     => strtolower(url_title($this->request->getVar('judul_berita'))),
                'judul_berita'    => $this->request->getVar('judul_berita'),
                'ringkasan'       => $this->request->getVar('ringkasan'),
                'isi'             => $this->request->getVar('isi'),
                'status_berita'   => $this->request->getVar('status_berita'),
                // 'jenis_berita'    => $this->request->getVar('jenis_berita'),
                'keywords'        => $this->request->getVar('keywords'),
                'icon'            => $this->request->getVar('icon'),
                'tanggal_publish' => date('Y-m-d', strtotime($this->request->getVar('tanggal_publish'))) . ' ' . date('H:i', strtotime($this->request->getVar('jam'))),
            ];
            $m_berita->edit($data);

            return redirect()->to(base_url('berita'))->with('sukses', 'Data Berhasil di Simpan');
        }

        $data = [
            'title' => 'Edit Berita: ' . $berita['judul_berita'],
            'kategori'   => $kategori,
            'berita'     => $berita,
            'content'    => 'berita/edit',
        ];
        echo view('berita/edit', $data);
    }

    // Delete
    public function delete($id_berita)
    {
        // checklogin();

        $m_berita = new Berita_model();
        $data = $m_berita->find($id_berita);
        $imagefile = $data['gambar'];
        if (file_exists("assets/upload/image/thumbs/" . $imagefile)) {
            unlink("assets/upload/image/thumbs/" . $imagefile);
            unlink("assets/upload/image/" . $imagefile);
        }
        $m_berita->delete($id_berita);
        // $hapus    = ['id_berita' => $id_berita];
        // $m_berita->delete($hapus);
        // masuk database
        $this->session->setFlashdata('sukses', 'Data telah dihapus');

        return redirect()->to(base_url('berita'));
    }

    // Delete By Admin
    public function hapus($id_berita)
    {
        // checklogin();

        $m_berita = new Berita_model();
        $data = $m_berita->find($id_berita);
        $imagefile = $data['gambar'];
        if (file_exists("assets/upload/image/thumbs/" . $imagefile)) {
            unlink("assets/upload/image/thumbs/" . $imagefile);
            unlink("assets/upload/image/" . $imagefile);
        }
        $m_berita->delete($id_berita);
        // $hapus    = ['id_berita' => $id_berita];
        // $m_berita->delete($hapus);
        // masuk database
        $this->session->setFlashdata('sukses', 'Data telah dihapus');

        return redirect()->to(base_url('berita/disetujui'));
    }

    // Disetujui
    public function disetujui()
    {
        $id_user = $this->session->get('id');
        // checklogin();
        $m_berita   = new Berita_model();
        $m_kategori = new Kategori_model();

        $total      = $m_berita->total();
        // if (esc(get_user('id_role') == 1) || get_user('id_role') == 2) {
        //     $berita     = $m_berita->listing();
        // } else {
        //     $berita     = $m_berita->listing2($id_user);
        // }

        $berita     = $m_berita->disetujui();

        $data = [
            'title'     => 'Knowledge, Profil dan Layanan (' . $total . ')',
            'berita'    => $berita,
            'content'   => 'berita/index',
            'judul'     => 'Tabel Knowledge Disetujui',
            'subjudul'  => 'List Tabel dari Knowledge yang telah disetujui.',
            'subjudul2' => 'Menampilkan Data Knowledge Yang Telah Disetujui.',
        ];
        echo view('berita/index', $data);
    }

    // Belum Disetujui (Pending)
    public function pending()
    {
        $id_user = $this->session->get('id');
        // checklogin();
        $m_berita   = new Berita_model();
        $m_kategori = new Kategori_model();

        $total      = $m_berita->total();
        // if (esc(get_user('id_role') == 1) || get_user('id_role') == 2) {
        //     $berita     = $m_berita->listing();
        // } else {
        //     $berita     = $m_berita->listing2($id_user);
        // }

        $berita     = $m_berita->pending();


        $data = [
            'title'     => 'Knowledge, Profil dan Layanan (' . $total . ')',
            'berita'    => $berita,
            'content'   => 'berita/index',
            'judul'     => 'Tabel Knowledge Belum Disetujui',
            'subjudul'  => 'List Tabel dari Knowledge yang belum disetujui.',
            'subjudul2' => 'Menampilkan Data Knowledge Yang Belum Disetujui.',
        ];
        echo view('berita/index', $data);
    }

    public function uploadGambar()
    {
        if ($this->request->getFile('file')) {
            $dataFile = $this->request->getFile('file');
            $fileName = $dataFile->getRandomName();

            $dataFile->move("assets/uploads/berkas/", $fileName);
            echo base_url("assets/uploads/berkas/$fileName");
        }
    }

    public function deleteGambar()
    {
        $src = $this->request->getVar('src');
        //--> uploads/berkas/1630368882_e4a62568c1b50887a8a5.png

        //https://localhost/ci4summernote/public
        if ($src) {
            $file_name = str_replace(base_url() . "/", "", $src);
            if (file_exists("assets/uploads/berkas/" . $file_name)) {
                unlink("assets/uploads/berkas/" . $file_name);
                unlink("assets/uploads/berkas/" . $file_name);
            }
            if (unlink($file_name)) {

                echo "Delete file berhasil";
            }
        }
    }
    public function listGambar()
    {
        $files = array_filter(glob('"assets/uploads/berkas/*'), 'is_file');
        $response = [];
        foreach ($files as $file) {
            if (strpos($file, "index.html")) {
                continue;
            }
            $response[] = basename($file);
        }
        header("Content-Type:application/json");
        echo json_encode($response);
        die();
    }
}
