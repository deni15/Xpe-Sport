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
                'gambar'        =>  'default-user.jpg',
				'fullname'      =>  'Muhamad Deni',
                'jenis_kelamin' =>  'Laki-laki',
                'no_telp'       =>  '089659941572',
                'tanggal_lahir' =>  '2001-04-15',
                'alamat'        =>  'Jl.Mawar No. 70 Wonoayu Sidoarjo',
				'password'		=>	'123123',
                'email'         =>  'mihamaddeni@gmail.com',
				'id_groups'		=>	'Administrator',
                'created_at' => Time::now()
            ],
            [
                'username'      =>  'operator',
                'gambar'        =>  'default-user.jpg',
				'fullname'      =>  'Novinda Suci',
                'jenis_kelamin' =>  'Perumpuan',
                'no_telp'       =>  '08787654321',
                'tanggal_lahir' =>  '2001-11-25',
				'password'		=>	'123123',
                'alamat'        =>  'Jl.Melati No. 150 Buduran Sidoarjo',
                'email'         =>  'novindasuci@gmail.com',
				'id_groups'		=>	'Operator',
                'created_at' => Time::now()
            ],
            [
                'username'      =>  'sales',
                'gambar'        =>  'default-user.jpg',
				'fullname'      =>  'srimulat',
                'jenis_kelamin' =>  'Perumpuan',
                'no_telp'       =>  '08787654321',
                'tanggal_lahir' =>  '2001-11-25',
				'password'		=>	'123123',
                'alamat'        =>  'Jl.Melati No. 150 Buduran Sidoarjo',
                'email'         =>  'nandi@gmail.com',
				'id_groups'		=>	'Salesman', //Branch Manager
                'created_at' => Time::now()
            ],
            [
                'username'      =>  'manager',
                'gambar'        =>  'default-user.jpg',
				'fullname'      =>  'tari',
                'jenis_kelamin' =>  'Perumpuan',
                'no_telp'       =>  '08787654321',
                'tanggal_lahir' =>  '2001-11-25',
				'password'		=>	'123123',
                'alamat'        =>  'Jl.Melati No. 150 Buduran Sidoarjo',
                'email'         =>  'rii123@gmail.com',
				'id_groups'		=>	'Branch Manager', //Branch Manager
                'created_at' => Time::now()
            ],
        ];
        $this->db->table('users')->insertBatch($data);
	}

	public function down()
	{
		//
	}
}
