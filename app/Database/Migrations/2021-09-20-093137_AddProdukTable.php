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
				'type_produk'      =>  'E-seris 34u',
                'harga'            =>  300000000,
                'stok'             =>  5,
                'warna'            =>  'Merah',
                'tahun_buat'       =>  '2007-04-15',
                'created_at'       => Time::now()
            ],
            [
                'nama_produk'      =>  'Mercedes',
				'type_produk'      =>  'S-serius 45r',
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
