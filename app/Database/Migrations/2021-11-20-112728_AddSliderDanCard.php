<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;


class AddSliderDanCard extends Migration
{
    public function up()
    {
        $data = [
            [
                'slider1'      =>  'slider1.jpg',
                'slider2'      =>  'slider2.jpg',
                'slider3'      =>  'slider3.jpg',
                'card1'        =>  'galeri1.jpg',
                'card2'        =>  'galeri2.jpg',
                'card3'        =>  'galeri3.jpg',
            ]
        ];
        $this->db->table('slider')->insertBatch($data);
    }

    public function down()
    {
        //
    }
}
