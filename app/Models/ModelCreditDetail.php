<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelCreditDetail extends Model
{
    protected $table = "credit";
    protected $primaryKey = "id_transaksi";
    protected $returnType = "object";
    protected $useTimestamps = true;
    protected $allowedFields = ['id_transaksi','id_produk','id_sales','id_skredit',
                                'id_operator','id_pembeli','dpkredit','jumlah_beli',
                                'bayar_awal', 'totalbayar', 'cicilan','provisi',
                                'asuransi','asuransi_bunga','asuransi_pokok','total_pinjaman',
                                'pinjaman_polis','administrasi'];

                                

}
