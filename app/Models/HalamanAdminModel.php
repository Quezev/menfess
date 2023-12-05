<?php

namespace App\Models;

use CodeIgniter\Model;

class HalamanAdminModel extends Model
{
    protected $table = 'pengguna';
    protected $primaryKey = 'id_pengguna';
    protected $returnType = 'object';
    protected $allowedFields = ['username', 'password', 'role', 'status_pengguna'];
}