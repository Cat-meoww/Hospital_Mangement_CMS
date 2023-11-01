<?php

namespace App\Controllers\admin;

use App\Controllers\General;



class master extends General
{

    public function __construct()
    {
        parent::__construct();
    }

    public function amenities()
    {
        $this->data['title'] = "Amenities";
        $amenities_model = new \App\Models\Amenities();
        $this->data['amenities'] = $amenities_model->get()->getResult();
        //print_r($this->data['amenities']);
        return view('admin/all-master/amenities', $this->data);
    }
    
    public function property_types()
    {
        $this->data['title'] = "Property types";
        $properties_types = new \App\Models\PropertyType();
        $this->data['properties'] = $properties_types->get()->getResult();
        
        return view('admin/all-master/property_types', $this->data);
    }
}
