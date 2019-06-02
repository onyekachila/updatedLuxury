<?php

namespace App\Model\admin;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    protected $table = 'categories';

    public function products()
    {
    	return $this->hasMany('App\Model\admin\Product');
    }
}
