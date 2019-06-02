<?php

namespace App\Model\admin;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function index()
    {
        return view('admin.category.add_category');
    }
}
