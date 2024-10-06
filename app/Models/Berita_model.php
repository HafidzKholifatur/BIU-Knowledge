<?php

namespace App\Models;

use CodeIgniter\Model;

class Berita_model extends Model
{
    protected $table         = 'berita';
    protected $primaryKey    = 'id_berita';
    protected $allowedFields = [];

    // Listing
    public function listing()
    {
        $builder = $this->db->table('berita');
        $builder->select('berita.*, kategori.nama_kategori, kategori.slug_kategori, tb_users.nama');
        $builder->join('kategori', 'kategori.id = berita.id_kategori', 'LEFT');
        $builder->join('tb_users', 'tb_users.id = berita.id_user', 'LEFT');
        // $builder->where([
        //     'tb_users.id' => $id_user
        // ]);
        $builder->orderBy('berita.id_berita', 'DESC');
        $query = $builder->get();

        return $query->getResultArray();
    }


    public function listing2($id_user)
    {
        $builder = $this->db->table('berita');
        $builder->select('berita.*, kategori.nama_kategori, kategori.slug_kategori, tb_users.nama');
        $builder->join('kategori', 'kategori.id = berita.id_kategori', 'LEFT');
        $builder->join('tb_users', 'tb_users.id = berita.id_user', 'LEFT');
        $builder->where([
            'tb_users.id' => $id_user
        ]);
        $builder->orderBy('berita.id_berita', 'DESC');
        $query = $builder->get();

        return $query->getResultArray();
    }


    // home
    public function beranda()
    {
        $builder = $this->db->table('berita');
        $builder->select('berita.*, kategori.nama_kategori, kategori.slug_kategori, tb_users.nama');
        $builder->join('kategori', 'kategori.id = berita.id_kategori', 'LEFT');
        $builder->join('tb_users', 'tb_users.id = berita.id_user', 'LEFT');
        $builder->where([
            'status_berita' => 'Draft',
            // 'jenis_berita'               => 'Berita',
        ]);
        $builder->orderBy('berita.tanggal_publish', 'DESC');
        $builder->limit(4);
        $query = $builder->get();

        return $query->getResultArray();
    }

    // utama
    public function utama()
    {
        $builder = $this->db->table('berita');
        $builder->select('berita.*, kategori.nama_kategori, kategori.slug_kategori, tb_users.nama');
        $builder->join('kategori', 'kategori.id = berita.id_kategori', 'LEFT');
        $builder->join('tb_users', 'tb_users.id = berita.id_user', 'LEFT');
        $builder->where([
            'status_berita' => 'Utama'
            // 'jenis_berita'               => 'Berita',
        ]);
        $builder->orderBy('berita.tanggal_publish', 'DESC');
        $builder->limit(4);
        $query = $builder->get();

        return $query->getResultArray();
    }

    // home
    public function sidebar()
    {
        $builder = $this->db->table('berita');
        $builder->select('berita.*, kategori.nama_kategori, kategori.slug_kategori, tb_users.nama');
        $builder->join('kategori', 'kategori.id = berita.id_kategori', 'LEFT');
        $builder->join('tb_users', 'tb_users.id = berita.id_user', 'LEFT');
        $builder->where([
            'status_berita' => 'Publish',
            'jenis_berita'               => 'Berita',
        ]);
        $builder->orderBy('berita.tanggal_publish', 'DESC');
        $builder->limit(10);
        $query = $builder->get();

        return $query->getResultArray();
    }

    // home
    public function home()
    {
        $builder = $this->db->table('berita');
        $builder->select('berita.*, kategori.nama_kategori, kategori.slug_kategori, tb_users.nama');
        $builder->join('kategori', 'kategori.id = berita.id_kategori', 'LEFT');
        $builder->join('tb_users', 'tb_users.id = berita.id_user', 'LEFT');
        $builder->where([
            'status_berita' => 'Publish',
            // 'jenis_berita'               => 'Berita',
        ]);
        $builder->orderBy('berita.tanggal_publish', 'DESC');
        $builder->limit(4);
        $query = $builder->get();

        return $query->getResultArray();
    }

    // kategori
    public function kategori($id_kategori)
    {
        $builder = $this->db->table('berita');
        $builder->select('berita.*, kategori.nama_kategori, kategori.slug_kategori, tb_users.nama');
        $builder->join('kategori', 'kategori.id = berita.id_kategori', 'LEFT');
        $builder->join('tb_users', 'tb_users.id = berita.id_user', 'LEFT');
        $builder->where([
            'status_berita' => 'Publish',
            'jenis_berita'               => 'Berita',
            'berita.id_kategori'         => $id_kategori,
        ]);
        $builder->orderBy('berita.tanggal_publish', 'DESC');
        $query = $builder->get();

        return $query->getResultArray();
    }

    // kategori
    public function kategori_all($id_kategori)
    {
        $builder = $this->db->table('berita');
        $builder->select('berita.*, kategori.nama_kategori, kategori.slug_kategori, tb_users.nama');
        $builder->join('kategori', 'kategori.id = berita.id_kategori', 'LEFT');
        $builder->join('tb_users', 'tb_users.id = berita.id_user', 'LEFT');
        $builder->where(['berita.id_kategori' => $id_kategori]);
        $builder->orderBy('berita.tanggal_publish', 'DESC');
        $query = $builder->get();

        return $query->getResultArray();
    }

    // total
    public function total_kategori($id_kategori)
    {
        $builder = $this->db->table('berita')->where('id_kategori', $id_kategori);
        $query   = $builder->get();

        return $query->getNumRows();
    }

    // author
    public function author_all($id_user)
    {
        $builder = $this->db->table('berita');
        $builder->select('berita.*, kategori.nama_kategori, kategori.slug_kategori, tb_users.nama');
        $builder->join('kategori', 'kategori.id = berita.id_kategori', 'LEFT');
        $builder->join('tb_users', 'tb_users.id = berita.id_user', 'LEFT');
        $builder->where(['berita.id' => $id_user]);
        $builder->orderBy('berita.id', 'DESC');
        $query = $builder->get();

        return $query->getResultArray();
    }

    // total
    public function total_author($id_user)
    {
        $builder = $this->db->table('berita')->where('id_users', $id_user);
        $query   = $builder->get();

        return $query->getNumRows();
    }

    // kategori
    public function jenis_berita_all($jenis_berita)
    {
        $builder = $this->db->table('berita');
        $builder->select('berita.*, kategori.nama_kategori, kategori.slug_kategori, tb_users.nama');
        $builder->join('kategori', 'kategori.id = berita.id_kategori', 'LEFT');
        $builder->join('tb_users', 'tb_users.id = berita.id_user', 'LEFT');
        $builder->where(['berita.jenis_berita' => $jenis_berita]);
        $builder->orderBy('berita.id_berita', 'DESC');
        $query = $builder->get();

        return $query->getResultArray();
    }

    // total
    public function total_jenis_berita($jenis_berita)
    {
        $builder = $this->db->table('berita')->where('jenis_berita', $jenis_berita);
        $query   = $builder->get();

        return $query->getNumRows();
    }

    // status_berita
    public function status_berita_all($status_berita)
    {
        $builder = $this->db->table('berita');
        $builder->select('berita.*, kategori.nama_kategori, kategori.slug_kategori, tb_users.nama');
        $builder->join('kategori', 'kategori.id = berita.id_kategori', 'LEFT');
        $builder->join('tb_users', 'tb_users.id = berita.id_user', 'LEFT');
        $builder->where(['berita.status_berita' => $status_berita]);
        $builder->orderBy('berita.id_berita', 'DESC');
        $query = $builder->get();

        return $query->getResultArray();
    }

    // status_berita
    public function total_status_berita($status_berita)
    {
        $builder = $this->db->table('berita')->where('status_berita', $status_berita);
        $query   = $builder->get();

        return $query->getNumRows();
    }

    // total
    public function total()
    {
        $builder = $this->db->table('berita');
        $query   = $builder->get();

        return $query->getNumRows();
    }

    // detail
    public function detail($id_berita)
    {
        $builder = $this->db->table('berita');
        $builder->select('berita.*, kategori.nama_kategori, kategori.slug_kategori, tb_users.nama, tb_users.avatar');
        $builder->join('kategori', 'kategori.id = berita.id_kategori', 'LEFT');
        $builder->join('tb_users', 'tb_users.id = berita.id_user', 'LEFT');
        $builder->where('berita.id_berita', $id_berita);
        $builder->orderBy('berita.id_berita', 'DESC');
        $query = $builder->get();

        return $query->getRowArray();
    }

    // read
    public function read($slug_berita)
    {
        $builder = $this->db->table('berita');
        $builder->select('berita.*, kategori.nama_kategori, kategori.slug_kategori, tb_users.nama');
        $builder->join('kategori', 'kategori.id = berita.id_kategori', 'LEFT');
        $builder->join('tb_users', 'tb_users.id = berita.id_user', 'LEFT');
        $builder->where('berita.slug_berita', $slug_berita);
        $builder->where('berita.status_berita', 'Publish');
        $builder->orderBy('berita.id_berita', 'DESC');
        $query = $builder->get();

        return $query->getRowArray();
    }

    // tambah
    public function tambah($data)
    {
        $builder = $this->db->table('berita');
        $builder->insert($data);
    }

    // tambah
    public function edit($data)
    {
        $builder = $this->db->table('berita');
        $builder->where('id_berita', $data['id_berita']);
        $builder->update($data);
    }

    // public function getStatus()
    // {
    //     return $this->builder('berita')->select('id_berita, status_berita')->orderBy('id_berita', 'DESC')->get()->getResult();
    // }

    public function getStatus($kolom = null)
    {
        if (empty($kolom)) {
            return $this->findAll();
        }
        return $this->builder($this->table)->where('id_berita', $kolom)->orWhere('status_berita', $kolom)->get(1)->getRow();
    }

    public function laporanBerita($tahun)
    {
        return $this->builder('tb_bulan_tahun')->select('bulan')->selectCount('id_berita', 'total')->join('berita', 'date_format(tanggal_publish, "%m-%Y") = bln_thn', 'left')->where('tahun', $tahun)->groupBy('bln_thn')->get()->getResult();
    }


    // Pencarian Berita Homepage
    public function hasilcari($keyword)
    {
        $builder = $this->db->table('berita');
        $builder->select('berita.*, kategori.nama_kategori, kategori.slug_kategori, tb_users.nama');
        $builder->join('kategori', 'kategori.id = berita.id_kategori', 'LEFT');
        $builder->join('tb_users', 'tb_users.id = berita.id_user', 'LEFT');
        $builder->where([
            'status_berita' => 'Publish',
            'status_berita' => 'Utama',
        ]);
        $builder->like('berita.judul_berita', $keyword);
        $builder->orlike('berita.ringkasan', $keyword);
        $builder->notlike('berita.status_berita', 'Draft');
        // $builder->orlike('berita.isi', $keyword);
        $builder->orderBy('berita.tanggal_publish', 'DESC');
        $builder->limit(10);
        $query = $builder->get();

        return $query->getResultArray();
    }

    // List Berita Homepage (Semua Berita)
    public function listberita()
    {
        $builder = $this->db->table('berita');
        $builder->select('berita.*, kategori.nama_kategori, kategori.slug_kategori, tb_users.nama');
        $builder->join('kategori', 'kategori.id = berita.id_kategori', 'LEFT');
        $builder->join('tb_users', 'tb_users.id = berita.id_user', 'LEFT');
        $builder->where([
            'status_berita' => 'Publish',
            'status_berita' => 'Utama',
        ]);
        // $builder->notlike('berita.status_berita', 'Draft');
        // $builder->orlike('berita.isi', $keyword);
        $builder->orderBy('berita.tanggal_publish', 'DESC');
        // $builder->limit(10);
        $query = $builder->get();

        return $query->getResultArray();
    }

    // Berita Sudah Disetujui
    public function disetujui()
    {
        $builder = $this->db->table('berita');
        $builder->select('berita.*, kategori.nama_kategori, kategori.slug_kategori, tb_users.nama');
        $builder->join('kategori', 'kategori.id = berita.id_kategori', 'LEFT');
        $builder->join('tb_users', 'tb_users.id = berita.id_user', 'LEFT');
        // $builder->where([
        //     'status_berita' => 'Publish',
        //     'status_berita' => 'Utama',
        // ]);
        $builder->like('status_berita', 'Publish');
        $builder->orlike('status_berita', 'Utama');
        $builder->orderBy('berita.id_berita', 'DESC');
        $query = $builder->get();

        return $query->getResultArray();
    }

    // Berita Belum Disetujui
    public function pending()
    {
        $builder = $this->db->table('berita');
        $builder->select('berita.*, kategori.nama_kategori, kategori.slug_kategori, tb_users.nama');
        $builder->join('kategori', 'kategori.id = berita.id_kategori', 'LEFT');
        $builder->join('tb_users', 'tb_users.id = berita.id_user', 'LEFT');
        // $builder->where([
        //     'status_berita' => 'Publish',
        //     'status_berita' => 'Utama',
        // ]);
        $builder->like('status_berita', 'Draft');
        // $builder->orlike('status_berita', 'Utama'); 
        $builder->orderBy('berita.id_berita', 'DESC');
        $query = $builder->get();

        return $query->getResultArray();
    }

    // List Berita
    public function per_kategori($id_kategori)
    {
        $builder = $this->db->table('berita');
        $builder->select('berita.*, kategori.nama_kategori, kategori.slug_kategori, tb_users.nama');
        $builder->join('kategori', 'kategori.id = berita.id_kategori', 'LEFT');
        $builder->join('tb_users', 'tb_users.id = berita.id_user', 'LEFT');
        $builder->where([
            'berita.id_kategori' => $id_kategori,
            // 'status_berita', 'Publish',
            // 'status_berita', 'Utama',
        ]);
        $builder->notLike('status_berita', 'Draft');
        // $builder->like('status_berita', 'Publish');
        // $builder->orlike('status_berita', 'Utama');
        $builder->orderBy('berita.tanggal_publish', 'DESC');
        $query = $builder->get();

        return $query->getResultArray();
    }
}
