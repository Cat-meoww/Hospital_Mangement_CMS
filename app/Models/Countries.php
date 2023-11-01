<?php

namespace App\Models;

use CodeIgniter\Model;

class Countries extends Model
{
    protected $table      = 'countries';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';


    protected $allowedFields = ['name', 'iso2', 'iso3', 'phonecode', 'currency', 'currency_symbol', 'capital', 'latitude', 'longitude', 'emoji'];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $dateFormat = 'datetime';
}
