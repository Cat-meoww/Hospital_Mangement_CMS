<?php

namespace App\Models\cms;

use CodeIgniter\Model;

class Ads extends Model
{
    protected $table      = 'cms_ads';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'object';


    protected $allowedFields = ['page_name', 'component', 'title', 'image', 'visibility', 'created_by'];

    protected $useTimestamps = true;
    protected $createdField  = 'created_on';
    protected $updatedField  = 'updated_on';
    protected $dateFormat = 'datetime';

    public function getPublic()
    {
        $this->builder()->where('visibility', 'Public');

        return $this;
    }
}
