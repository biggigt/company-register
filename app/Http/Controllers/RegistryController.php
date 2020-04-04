<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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

    public function add_to_registry($id,$registryId){
   		$registry = new registry();
   		$registry->registryTypeId = $registryId;
   		$registry->companyId = $id;
   		$registry->save();
   		return redirect()->route('companies.view',['id'=>$id])->with('info','Company added to registry successfully');
    }

    public function find_registry($id){
//        $companies = DB::table('companies')
//                        ->join('registries','companies.id', '=','registries.companyId')
//                        ->select('companies.*','registries.registryTypeId')
//                        ->where('registries.registryTypeId','=',$id)
//                        ->get();
        $companies = DB::table('registries')
            ->join('companies as c','c.id', '=','registries.companyId')
            ->join('business_types as bt','c.business_type','=','bt.id')
            ->join('facility_types as ft' ,'c.facility_type', '=','ft.id')
            ->join('registry_types as rt','rt.id', '=','registries.registryTypeId')
            ->join('subjects as s1' ,'c.subject_acting', '=','s1.id')
            ->join('subjects as s2' ,'c.subject_owner', '=','s2.id')
            ->join('company_in_registry_harmonized_codes as rhc','rhc.registries_id', '=','registries.id')
            ->join('harmonized_s_c_s as hsc','hsc.id','=','rhc.harmonizedsc_id')
            ->join('company_in_registry_statuses as rs','rs.registries_id', '=','registries.id')
            ->join('statuses','rs.statuses_id', '=','statuses.id')
            ->select('c.id','bt.code as business_code','c.name','c.regnumber','c.okpo','c.address','ft.facility_type_name','rt.registryType','s1.name as sa_name','s1.address as sa_address','s2.name as so_name','s2.address as so_address','hsc.code as hsc_code','hsc.hsc_name','rhc.activity_types','statuses.code as status_color','statuses.status','rs.countries_id','rs.act','rs.c_date')
            ->where('registries.registryTypeId','=',$id)
            ->where('rs.state','=','active')
            ->get();
        return view('registry.index', ['companies' => $companies]);
    }
}
