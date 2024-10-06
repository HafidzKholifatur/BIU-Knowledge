<?php

namespace App\Models;

use CodeIgniter\Model;

class BeritaModel extends Model
{
    // protected $table      = 'tb_kategori';
    // protected $primaryKey = 'id';
    // protected $useSoftDeletes = true;
    // protected $allowedFields = ['nama_kategori'];
    protected $table = 'tb_berita';
    // protected $useTimestamps = true;

    public function getBerita($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();
    }
}
