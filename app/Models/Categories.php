<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    public function create(){
    	return view('backend.categories.create');
    }
}
