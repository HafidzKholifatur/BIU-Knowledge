<?php

namespace App\Models;

use CodeIgniter\Model;

class PengaturanModel extends Model
{
    protected $table            = 'tb_pengaturan';
    protected $allowedFields    = ['nama_toko', 'no_telp', 'alamat', 'pengaturan', 'youtube'];

    // Listing
    public function link()
    {
        $builder = $this->db->table('tb_pengaturan');
        $builder->select('tb_pengaturan.*');
        $query = $builder->get();

        return $query->getResultArray();
    }
}
