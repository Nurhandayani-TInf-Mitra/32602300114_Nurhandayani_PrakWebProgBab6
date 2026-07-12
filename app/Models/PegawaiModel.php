<?php

namespace App\Models;

use CodeIgniter\Model;

class PegawaiModel extends Model
{
    protected $table = 'pegawai';

    protected $primaryKey = 'id_pegawai';

    protected $allowedFields = [
        'nama',
        'nik',
        'jabatan',
        'alamat',
        'nomor_handphone',
        'email'
    ];
}