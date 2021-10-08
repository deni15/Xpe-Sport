<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateMasterProduk extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'          => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
			'gambar'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
                'null'           => true,
            ],
			'nama_produk'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
            ],
			'type_produk'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
            ],
			'harga'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
            ],
            'stok'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
            ],
			'warna'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
            ],
            'tahun_buat' => [
                'type'           => 'DATE',
                'null'           => true,
            ],
            'created_at' => [
                'type'           => 'DATETIME',
                'null'           => true,
            ],
            'updated_at' => [
                'type'           => 'DATETIME',
                'null'           => true,
            ]
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('produk');
    }

    public function down()
    {
       
        $this->forge->dropTable('produk');
    }
}
