<?php
namespace App\Models;

use CodeIgniter\Model;

class karyawanModel extends Model{
    protected $table='karyawan';
    protected $useTimestamps=true;
    protected $allowedFields=['nama','email','alamat','jenis_kelamin','posisi','status'];
}
