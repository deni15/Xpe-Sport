<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;
use CodeIgniter\I18n\Time;

class AddProdukTable extends Migration
{
    public function up()
    {
        $data = [
            [
                'nama_produk'      =>  'Toyota',
                'gambar'           =>  'default-product.jpg',
				'type_produk'      =>  'E-seris 34u',
                'harga_modal'      =>  270000000,
                'harga'            =>  300000000,
                'stok'             =>  5,
                'warna'            =>  'Merah',
                'tahun_buat'       =>  '2007-04-15',
                'created_at'       => Time::now()
            ],
            [
                'nama_produk'      =>  'Mercedes',
                'gambar'           =>  'default-product.jpg',
				'type_produk'      =>  'S-serius 45r',
                'harga_modal'      =>  200000000,
                'harga'            =>  250000000,
                'stok'             =>  5,
                'warna'            =>  'Hitam',
                'tahun_buat'       =>  '2008-04-15',
                'created_at'       => Time::now()
            ]
        ];
        $this->db->table('produk')->insertBatch($data);
	}
    

    public function down()
    {
        //
    }
}
