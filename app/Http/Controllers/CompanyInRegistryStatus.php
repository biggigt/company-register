<?php

namespace App\Http\Controllers;

use App\activity_type;
use App\HarmonizedSC;
use App\Registry;
use App\status;
use Illuminate\Http\Request;

class CompanyInRegistryStatus extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $registry_record_with_products = Registry::with(['company','registry','registry_hsc'])->get();
        $statuses = status::all();

        return view('registry.addstatus',['registry_record_with_products'=>$registry_record_with_products,'statuses'=>$statuses]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $companyInRegistryStatus = new \App\CompanyInRegistryStatus();
        $companyInRegistryStatus->registries_hsc_id = $request->input('reg_hsc_id');
        $companyInRegistryStatus->statuses_id = $request->input('status');
        $companyInRegistryStatus->countries_id = $request->input('country');
        $companyInRegistryStatus->act = $request->input('act');
        $companyInRegistryStatus->state = "active";
        $companyInRegistryStatus->c_date = $request->input('c_date');
        $companyInRegistryStatus->save();
        return redirect()->route('registry.addstatus')->with('info','Успешно добавлен статус для предприятия.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function addHscStatusCreate(){
        $registry_records = Registry::with(['company','registry'])->get();
        $harmonizedscs = HarmonizedSC::all();
        $activity_types = activity_type::all();
        $statuses = status::all();

        return view('registry.addhscstatus',['registry_records'=>$registry_records,'harmonizedscs'=>$harmonizedscs,'activity_types'=>$activity_types,'statuses'=>$statuses]);
    }
    public function addHscStatusStore(Request $request){
        $companyInRegistryHarmonizedCode = new \App\CompanyInRegistryHarmonizedCode();
        $companyInRegistryHarmonizedCode->registries_id = $request->input('registry_record');
        $companyInRegistryHarmonizedCode->harmonizedsc_id = $request->input('harmonizedsc');
        $activites = $request->input('activityTypes');
        $activites = implode(', ', $activites);
        $companyInRegistryHarmonizedCode->activity_types = $activites;
        $companyInRegistryHarmonizedCode->save();
        $companyInRegistryStatus = new \App\CompanyInRegistryStatus();
        $companyInRegistryStatus->registries_hsc_id = $companyInRegistryHarmonizedCode->id;
        $companyInRegistryStatus->statuses_id = $request->input('status');
        $companyInRegistryStatus->countries_id = $request->input('country');
        $companyInRegistryStatus->act = $request->input('act');
        $companyInRegistryStatus->state = "active";
        $companyInRegistryStatus->c_date = $request->input('c_date');
        $companyInRegistryStatus->save();
        return redirect()->route('registry.addhscstatus')->with('info','Успешно добавлена продукция и статус для предприятия.');
    }
}
