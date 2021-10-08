<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;
use CodeIgniter\I18n\Time;

class AddUserTable extends Migration
{
	public function up()
	{
		$data = [
            [
                'username'      =>  'Admin',
				'fullname'      =>  'Muhamad Deni',
                'jenis_kelamin' =>  'Laki-laki',
                'no_telp'       =>  '089659941572',
                'tanggal_lahir' =>  '2001-04-15',
                'alamat'        =>  'Jl.Mawar No. 70 Wonoayu Sidoarjo',
				'password'		=>	'deni123',
                'email'         =>  'mihamaddeni@gmail.com',
				'id_groups'		=>	'Administrator',
                'created_at' => Time::now()
            ],
            [
                'username'      =>  'Novinda',
				'fullname'      =>  'Novinda Suci',
                'jenis_kelamin' =>  'Perumpuan',
                'no_telp'       =>  '08787654321',
                'tanggal_lahir' =>  '2001-11-25',
				'password'		=>	'novinda123',
                'alamat'        =>  'Jl.Melati No. 150 Buduran Sidoarjo',
                'email'         =>  'novindasuci@gmail.com',
				'id_groups'		=>	'Operator',
                'created_at' => Time::now()
            ]
        ];
        $this->db->table('users')->insertBatch($data);
	}

	public function down()
	{
		//
	}
}
