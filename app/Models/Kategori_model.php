<?php

namespace App\Models;

use CodeIgniter\Model;

class Kategori_model extends Model
{
    protected $table              = 'kategori';
    protected $primaryKey         = 'id';
    // protected $returnType         = 'array';
    // protected $useSoftDeletes     = false;
    protected $allowedFields      = ['id', 'id_user', 'nama_kategori', 'slug_kategori', 'urutan', 'hits'];
    protected $useTimestamps      = false;
    // protected $createdField       = 'created_at';
    // protected $updatedField       = 'updated_at';
    // protected $deletedField       = 'deleted_at';
    // protected $validationRules    = [];
    protected $validationMessages = [];
    // protected $skipValidation     = false;

    // get kategori
    public function getKategori($id = null)
    {
        if (!(empty($id))) {
            return $this->builder($this->table)
                ->select('id, nama_kategori AS kategori')
                ->where('id', $id)->get(1)->getRow();
        }
        return $this->builder($this->table)
            ->select('id, nama_kategori')
            ->get()->getResult();
    }

    // listing
    public function listing()
    {
        $builder = $this->db->table('kategori');
        $builder->orderBy('kategori.id', 'DESC');
        $query = $builder->get();

        return $query->getResultArray();
    }


    // kategori
    public function kategori($id)
    {
        $builder = $this->db->table('kategori');
        $builder->select('id, nama_kategori');
        $builder->where('id', $id);
        $query = $builder->get();

        return $query->getResult();
    }


    // total
    public function total()
    {
        $builder = $this->db->table('kategori');
        $builder->select('COUNT(*) AS total');
        $builder->orderBy('kategori.id', 'DESC');
        $query = $builder->get();

        return $query->getRowArray();
    }

    // detail
    public function detail($id)
    {
        $builder = $this->db->table('kategori');
        $builder->where('id', $id);
        $builder->orderBy('kategori.id', 'DESC');
        $query = $builder->get();

        return $query->getRowArray();
    }

    // read
    public function read($slug_kategori)
    {
        $builder = $this->db->table('kategori');
        $builder->where('slug_kategori', $slug_kategori);
        $builder->orderBy('kategori.id', 'DESC');
        $query = $builder->get();

        return $query->getRowArray();
    }

    // edit
    public function edit($data)
    {
        $builder = $this->db->table('kategori');
        $builder->where('id', $data['id']);
        $builder->update($data);
    }
}
