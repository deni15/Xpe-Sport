<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateCreditDetailTransaksi extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_transaksi'          => [
                'type'           => 'INT',
                'constraint'     => 11,
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
            'cicilan'       => [
                'type'           => 'BIGINT',
                'null'           => true,
            ],
            'provisi'       => [
                'type'           => 'BIGINT',
                'null'           => true,
            ],
            'asuransi'       => [
                'type'           => 'BIGINT',
                'null'           => true,
            ],
            'asuransi_bunga'       => [
                'type'           => 'BIGINT',
                'null'           => true,
            ],
            'asuransi_pokok'       => [
                'type'           => 'BIGINT',
                'null'           => true,
            ],
            'total_pinjaman'       => [
                'type'           => 'BIGINT',
                'null'           => true,
            ],
            'pinjaman_polis'       => [
                'type'           => 'BIGINT',
                'null'           => true,
            ],
            'administrasi'       => [
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
        $this->forge->addPrimaryKey('id_transksi');
        $this->forge->createTable('credit');
    }

    public function down()
    {
        $this->forge->dropTable('credit');
    }
}
