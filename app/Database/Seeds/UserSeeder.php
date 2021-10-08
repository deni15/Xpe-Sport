<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class UserSeeder extends Seeder
{
	public function run()
	{
		$data = [
            [
                'username'      =>  'Admin',
				'fullname'      =>  'Muhamad Deni',
                'jenis_kelamin' =>  'pria',
                'no_telp'       =>  '089659941572',
                'tanggal_lahir' =>  '2001-04-15',
                'alamat'        =>  'Jl.Mawar No. 70 Wonoayu Sidoarjo',
				'password'		=>	'deni123',
                'email'         =>  'mihamaddeni@gmail.com',
				'id_groups'		=>	1,
                'created_at' => Time::now()
            ],
            [
                'username'      =>  'Novinda',
				'fullname'      =>  'Novinda Suci Gymnastiara',
                'jenis_kelamin' =>  'wanita',
                'no_telp'       =>  '08787654321',
                'tanggal_lahir' =>  '2001-11-25',
				'password'		=>	'novinda123',
                'alamat'        =>  'Jl.Melati No. 150 Buduran Sidoarjo',
                'email'         =>  'novindasuci@gmail.com',
				'id_groups'		=>	2,
                'created_at' => Time::now()
            ]
        ];
        $this->db->table('users')->insertBatch($data);
	}
}
