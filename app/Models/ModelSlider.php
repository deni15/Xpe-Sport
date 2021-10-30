<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelSlider extends Model
{
    protected $table = "slider";
    protected $primaryKey = "id";
    protected $returnType = "object";
    protected $useTimestamps = false;
    protected $allowedFields = ['id','slider1','slider2','slider3','card1','card2','card3'];

}
