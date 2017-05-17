<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Categories;

class CategoriesController extends Controller
{
    public function create(){
    	return view('backend.categories.create');
    }

    public function store(Request $request){
    	$data=$request->all();
    	Categories::cerate($data);
    }
}
