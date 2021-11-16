<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelSimulasiKredit extends Model
{
    protected $table = "simulasi_kredit";
    protected $primaryKey = "id";
    protected $returnType = "object";
    protected $useTimestamps = true;
    protected $allowedFields = ['jenis_kredit','deskripsi','tenor','bunga_pinjaman',
     'uang_muka','polis_asuransi','asuransi','administrasi','provisi'];

}
