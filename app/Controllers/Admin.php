<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function __construct()
    {
        // Code Here
    }

    public function index()
    {
        echo view('admin/dashboard', ['title' => 'Dashboard Admin']);
    }

    public function akun()
    {
        echo view('admin/akun/index', ['title' => 'Tabel Akun']);
    }
}
