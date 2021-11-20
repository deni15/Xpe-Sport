<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelCustomer extends Model
{
    protected $table = "master_customer";
    protected $primaryKey = "id";
    protected $returnType = "object";
    protected $useTimestamps = true;
    protected $allowedFields = ['email_customer','skredit_id','customer_name','alamat'];

}
