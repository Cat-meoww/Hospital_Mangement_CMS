<?php

namespace App\Models;

use CodeIgniter\Model;

class CmsPages extends Model
{
    protected $table      = 'cms_pages';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'object';


    protected $allowedFields = ['type', 'slug', 'heading', 'content', 'meta_title', 'meta_description'];

    protected $useTimestamps = true;
    protected $createdField  = 'created_on';
    protected $updatedField  = 'updated_on';
    protected $dateFormat = 'datetime';
}
