<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StatusController extends Controller
{
    public function index(){
    	$statuses = status::all();
    	return view('status.index',['statuses'=>$statuses]);
    }

    public function create(){
    	return view('status.create');
    }

    public function store(Request $request){
    	$registryType = new registryType();
    	$registryType->registryType = $request->input('registry_type_name');
    	$registryType->registryDescription = $request->input('registry_type_description');
    	$registryType->save();
    	return redirect()->route('registry.viewtypes')->with('info','Registry type added successfully');
    }

    public function edit($id){
    	$registryType = registryType::find($id);
    	return view('registry.edit',['registryType'=>$registryType]);
    }

    public function update(Request $request){
    	$registryType = registryType::find($request->input('id'));
    	$registryType->registryType = $request->input('registry_type_name');
    	$registryType->registryDescription = $request->input('registry_type_description');
    	$registryType->save();
    	return redirect()->route('registry.viewtypes')->with('info','Registry type updated successfully');
    }

    public function destroy($id){
    	$registryType = registryType::find($id);
    	$registryType->delete();
    	return redirect()->route('registry.viewtypes');
    }
}
