<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelTransaksi extends Model
{
    protected $table = "transaksi";
    protected $primaryKey = "id";
    protected $returnType = "object";
    protected $useTimestamps = true;
    protected $allowedFields = ['id','invoice','metode_bayar','id_produk','id_sales',
                                'id_skredit','id_operator','id_pembeli','dpkredit',
                                'jumlah_beli','bayar_awal', 'totalbayar'];

    public function getDataTransaksiAll()
    {
        $query = $this->db->table('transaksi')
        // ->join('cash','cash.id_transaksi=transaksi.id')
        // ->join('credit', 'creadit.id_transaksi=transaksi.id')
        ->join('produk', 'produk.id=transaksi.id_produk')
        ->join('users', 'users.id=transaksi.id_sales')
        ->join('master_customer', 'master_customer.id=transaksi.id_pembeli')
        ->get()->getResult();  

        return $query;
    }                                    

}
