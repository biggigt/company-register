<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\business_type;

class BusinesstypeController extends Controller
{
    public function index(){
    	$business_types = business_type::all();
    	return view('businesstype.index',['business_types'=>$business_types]);
    }

    public function create(){
    	return view('businesstype.create');
    }

    public function store(Request $request){
    	$business_type = new business_type();

    	$business_type->code = $request->input('business_type_code');
    	$business_type->business_type_name = $request->input('business_type_name');
    	$business_type->save();
    	return redirect()->route('businesstype.index')->with('info','Вид ОПФ добавлен успешно.')->with('status','green')->with('header','ДОБАВЛЕНИЕ');
    }

    public function edit($id){
    	$business_type = business_type::find($id);
    	return view('businesstype.edit',['business_type'=>$business_type]);
    }

    public function update(Request $request){
    	$business_type = business_type::find($request->input('id'));
    	$business_type->code = $request->input('business_type_code');
    	$business_type->business_type_name = $request->input('business_type_name');
    	$business_type->save();
    	return redirect()->route('businesstype.index')->with('info','Business type updated successfully');
    }

    public function destroy($id){
    	$business_type = business_type::find($id);
    	$business_type->delete();
    	return redirect()->route('businesstype.index');
    }
}
