<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateMasterTransaksi extends Migration
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
			'id_produk'       => [
                'type'           => 'INT',
                'constraint'     => 11,
                'null'           => true,
            ],
			'id_sales'       => [
                'type'           => 'INT',
                'constraint'     => 11,
                'null'           => true,
            ],
			'total_harga'       => [
                'type'           => 'BIGINT',
            ],
            'jumlah_beli'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
            ],
			'diskon'       => [
                'type'           => 'BIGINT',
            ],
            'carabayar' => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
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
        $this->forge->createTable('transaksi');
    }

    public function down()
    {
        $this->forge->dropTable('transaksi');
    }
}
