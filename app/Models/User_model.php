<?php

namespace App\Models;

use CodeIgniter\Model;

class User_model extends Model
{
    protected $table                = 'tb_users';
    protected $primaryKey          = 'id';
    protected $returnType         = 'array';
    protected $useSoftDeletes     = false;
    protected $allowedFields = ['username', 'email', 'password', 'nama', 'alamat', 'id_role', 'avatar', 'status', 'token', 'ip_address'];
    protected $useTimestamps      = false;
    protected $createdField       = 'created_at';
    protected $updatedField       = 'updated_at';
    protected $deletedField       = 'deleted_at';
    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;

    // login
    public function login($username, $password)
    {
        return $this->asArray()
            ->where(['username' => $username,
                'password'      => sha1($password), ])
            ->first();
    }

        public function getUser($kolom = null)
    {
        if (empty($kolom)) {
            return $this->findAll();
        }
        return $this->builder($this->table)->where('id', $kolom)->orWhere('username', $kolom)->orWhere('email', $kolom)->get(1)->getRow();
    }

    public function getToken(string $token)
    {
        return $this->builder($this->table)->select('id, email, token')->where('token', $token)->get(1)->getRow();
    }

    public function getRole()
    {
        return $this->builder('tb_roles')->select('id, keterangan')->orderBy('id', 'DESC')->get()->getResult();
    }

    // listing
    // public function listing()
    // {
    //     $builder = $this->db->table('users');
    //     $builder->orderBy('users.id_user', 'DESC');
    //     $query = $builder->get();

    //     return $query->getResultArray();
    // }

    // total
    // public function total()
    // {
    //     $builder = $this->db->table('users');
    //     $builder->select('COUNT(*) AS total');
    //     $builder->orderBy('tb_users.id_user', 'DESC');
    //     $query = $builder->get();

    //     return $query->getRowArray();
    // }

    // detail
    // public function detail($id_user)
    // {
    //     $builder = $this->db->table('users');
    //     $builder->where('id_user', $id_user);
    //     $builder->orderBy('users.id_user', 'DESC');
    //     $query = $builder->get();

    //     return $query->getRowArray();
    // }

    // tambah  log
    // public function user_log($data)
    // {
    //     $builder = $this->db->table('user_logs');
    //     $builder->insert($data);
    // }
}
