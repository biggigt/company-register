<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\RegistryType;
use App\Registry;

class RegistryController extends Controller
{
    public function index(){
    	$registryTypes = registryType::all();
    	return view('registry.viewtypes',['registryTypes'=>$registryTypes]);
    }

    public function create(){
    	return view('registry.create');
    }

    public function store(Request $request){
    	$registryType = new registryType();
    	$registryType->registryType = $request->input('');
    	$registryType->registryDescription = $request->input('');
    	$registryType->save();
    	return redirect()->route('registry.viewtypes')->with('info','Registry type added successfully');
    }

    public function edit($id){
    	$registryType = registryType::find($id);
    	return view('registry.edit',['registryType'=>$registryType]);
    }

    public function update(Request $request){
    	$registryType = registryType::find($request->input('id'));
    	$registryType->registryType = $request->input('');
    	$registryType->registryDescription = $request->input('');
    	$registryType->save();
    	return redirect()->route('registry.viewtypes')->with('info','Registry type updated successfully');
    }

    public function destroy($id){
    	$registryType = registryType::find($id);
    	$registryType->delete();
    	return redirect()->route('registry.viewtypes');
    }

   public function add_to_registry($id,$registryId){
   		$registry = new registry();
   		$registry->registryTypeId = $registryId;
   		$registry->companyId = $id;
   		$registry->save();
   		return redirect()->route('companies.view',['id'=>$id])->with('info','Company added to registry successfully');
   }
}
