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
    	$this->validate($request,[
    		'name'=>'required'
    	]);

    	$data=$request->all();
    	Categories::create($data);

    	if($data){
    		return response()->json(['succcess'=>'true','message'=>'Data Berhasil di simpan']);
    	}

    }
}
