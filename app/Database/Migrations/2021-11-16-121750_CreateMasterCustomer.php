<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateMasterCustomer extends Migration
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
			'email_customer'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
            ],
			'skredit_id'       => [
                'type'           => 'BIGINT',
                'null'          => true,
            ],
            'customer_name'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
            ],
            'no_telp' => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
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
        $this->forge->createTable('master_customer');
    }
 
    //--------------------------------------------------------------------
 
    public function down()
    {
        $this->forge->dropTable('master_customer');
    }

}
