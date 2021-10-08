<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateMasterUsersTable extends Migration
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
			'username'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '50',
            ],
			'email'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
            ],
			'password'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
            ],
            'fullname'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
            ],
            'jenis_kelamin'       => [
                'type'              => 'VARCHAR',
                'constraint'        => "255",
            ],
            'no_telp' => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
            ],
			'id_groups'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
            ],
            'tanggal_lahir' => [
                'type'           => 'DATE',
                'null'           => true,
            ],
            'alamat' => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
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
        $this->forge->createTable('users');
    }
 
    //--------------------------------------------------------------------
 
    public function down()
    {
        $this->forge->dropTable('users');
    }

}