<?php

namespace App\Models;

use CodeIgniter\Model;

class Blogs extends Model
{
    protected $table      = 'blogs';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'object';


    protected $allowedFields = ['slug', 'heading', 'content', 'meta_title', 'meta_description', 'hero_image'];

    protected $useTimestamps = true;
    protected $createdField  = 'created_on';
    protected $updatedField  = 'updated_on';
    protected $dateFormat = 'datetime';
}
