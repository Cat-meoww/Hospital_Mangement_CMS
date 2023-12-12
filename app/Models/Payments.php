<?php

namespace App\Models;

use CodeIgniter\Model;

class Payments extends Model
{
    protected $table      = 'payments';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'object';


    protected $allowedFields = ['booking_id', 'transaction_id', 'amount', 'status', 'order_id', 'payment_id', 'verify_signature','method','expired_on'];

    protected $useTimestamps = true;
    protected $createdField  = 'created_on';
    protected $updatedField  = 'updated_on';
    protected $dateFormat = 'datetime';
}
