<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTableSimulasiKredit extends Migration
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
            'jenis_kredit' => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
            ],
            'deskripsi'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
            ],
			'tenor'       => [
                'type'           => 'INT'
            ],
			'bunga_pinjaman'       => [
                'type'           => 'INT'
            ],
            'uang_muka'       => [
                'type'           => 'BIGINT',
            ],
            'polis_asuransi'       => [
                'type'           => 'BIGINT',
            ],
            'provisi'       => [
                'type'           => 'BIGINT',
            ],
            'asuransi'       => [
                'type'           => 'BIGINT',
            ],
            'administrasi'       => [
                'type'           => 'BIGINT',
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
        $this->forge->createTable('simulasi_kredit');
    }

    public function down()
    {
       
        $this->forge->dropTable('simulasi_kredit');
    }
}
