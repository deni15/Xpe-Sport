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
			'invoice'       => [
                'type'           => 'VARCHAR',
                'constraint'     => 50,
                'null'           => true,
            ],
			'metode_bayar'       => [
                'type'           => 'VARCHAR',
                'constraint'     => 50,
                'null'           => true,
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
			'id_skredit'       => [
                'type'           => 'INT',
                'constraint'     => 11,
                'null'           => true,
            ],
			'id_operator'       => [
                'type'           => 'INT',
                'constraint'     => 11,
                'null'           => true,
            ],
			'id_pembeli'       => [
                'type'           => 'INT',
                'constraint'     => 11,
                'null'           => true,
            ],
			'dpkredit'       => [
                'type'           => 'BIGINT',
                'null'           => true,
            ],
            'jumlah_beli'       => [
                'type'           => 'BIGINT',
                'null'           => true,
            ],
			'bayar_awal'       => [
                'type'           => 'BIGINT',
                'null'           => true,
            ],
            'totalbayar' => [
                'type'           => 'BIGINT',
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
