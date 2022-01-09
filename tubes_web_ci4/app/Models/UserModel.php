<?php
namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model{
    protected $table='account';
    protected $dataTable=['id','nama_depan','nama_belakang','username','password','email','no_telepon'];
}