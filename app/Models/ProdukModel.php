<?php

namespace App\Models;

use CodeIgniter\Model;

class ProdukModel extends Model
{
    protected $table = "produk";
    protected $primaryKey = "id";
    protected $returnType = "object";
    protected $useTimestamps = true;
    protected $allowedFields = ['gambar','nama_produk', 'type_produk', 'harga', 'stok', 'tahun_buat', 'warna'];

}
