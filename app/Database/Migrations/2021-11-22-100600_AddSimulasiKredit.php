<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;
use CodeIgniter\I18n\Time;

class AddSimulasiKredit extends Migration
{
    public function up()
    {
        $data = [
            [
                'jenis_kredit'       =>  'Tenor 5 tahun',
                'deskripsi'          =>  'pemayaran cicilan perbulan provisi dengan Bank BCA',
				'tenor'              =>  60,
                'bunga_pinjaman'     =>  5,
                'uang_muka'          =>  30,
                'polis_asuransi'     =>  40000,
                'provisi'            =>  1,
                'asuransi'           =>  5,
                'administrasi'       =>  700000,
                'created_at'         => Time::now()
            ],
            [
                'jenis_kredit'       =>  'Tenor 6 tahun',
                'deskripsi'          =>  'pemayaran cicilan perbulan provisi dengan Bank BCA',
				'tenor'              =>  72,
                'bunga_pinjaman'     =>  4,
                'uang_muka'          =>  25,
                'polis_asuransi'     =>  40000,
                'provisi'            =>  1,
                'asuransi'           =>  5,
                'administrasi'       =>  700000,
                'created_at'         => Time::now()
            ]
        ];
        $this->db->table('simulasi_kredit')->insertBatch($data);
	}

    public function down()
    {
        //
    }
}
