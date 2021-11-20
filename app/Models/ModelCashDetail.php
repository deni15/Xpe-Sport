<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelCashDetail extends Model
{
    protected $table = "cash";
    protected $primaryKey = "id_transaksi";
    protected $returnType = "object";
    protected $useTimestamps = true;
    protected $allowedFields = ['id_transaksi','id_produk','id_sales',
                                'id_operator','id_pembeli','jumlah_beli',
                                'bayar_awal', 'totalbayar',
                                'asuransi',
                                'pinjaman_polis','administrasi'];

                       
}
