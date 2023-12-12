<?php

namespace App\Models;

use CodeIgniter\Model;

class VideoBookings extends Model
{
    protected $table      = 'video_bookings';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'object';

    protected $allowedFields = ['firstname', 'lastname', 'phone', 'email', 'service', 'doctor', 'booking_date', 'slot_id', 'start_time', 'transaction_id' ,'end_time', 'message'];

    protected $useTimestamps = true;
    protected $createdField  = 'created_on';
    protected $updatedField  = 'updated_on';
    protected $dateFormat = 'datetime';
}
