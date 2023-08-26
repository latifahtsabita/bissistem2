<?php

namespace App\Models;

use CodeIgniter\Model;

class Data_pd_Model extends Model
{
    protected $table = 'data_pd';
    // protected $useTimestamps = true;
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $allowedFields = ['nis', 'nama', 'tempat_lahir', 'tgl_lahir', 'j_k', 'agama', 'status_dlm_kel', 'anak_ke', 'no_telp', 'file_foto'];
}
