<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\facility_type;

class FacilityController extends Controller
{
    public function index(){
    	$facility_types = facility_type::all();
    	return view('facility.index',['facility_types'=>$facility_types]);
    }

    public function create(){
    	return view('facility.create');
    }

    public function store(Request $request){
    	$facility_type = new facility_type();

    	$facility_type->code = $request->input('facility_type_code');
    	$facility_type->facility_type_name = $request->input('facility_type_name');
    	$facility_type->save();
    	return redirect()->route('facility.index')->with('info','Тип предприятия добавлен успешно.')->with('status','green')->with('header','Действие выполнено');
    }

    public function edit($id){
    	$facility_type = facility_type::find($id);
    	return view('facility.edit',['facility_type'=>$facility_type]);
    }

    public function update(Request $request){
    	$facility_type = facility_type::find($request->input('id'));
    	$facility_type->code = $request->input('facility_type_code');
    	$facility_type->facility_type_name = $request->input('facility_type_name');
    	$facility_type->save();
    	return redirect()->route('facility.index')->with('info','Тип предприятия обновлен успешно.')->with('status','green')->with('header','Действие выполнено');
    }

    public function destroy($id){
    	$facility_type = facility_type::find($id);
    	$facility_type->delete();
    	return redirect()->route('facility.index')->with('info','Тип предприятия удален успешно.')->with('status','green')->with('header','Действие выполнено');
    }
}
