<?php

namespace App\Model\admin;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function categories()
    {
    	return $this->belongsTo('App\Model\admin\Category');
    }
}
