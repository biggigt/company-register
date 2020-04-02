<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;
use App\business_type;
use App\facility_type;
use App\Subject;
use App\activity_type;
use App\status;
use App\RegistryType;
use App\HarmonizedSC;
use App\Http\Controllers\RegistryController;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Show all companies from the database and return to view
        $companies = Company::all();
        return view('company.index',['companies'=>$companies]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Return view to create company
        $business_types= business_type::all(['id','code','business_type_name']);
        $facility_types = facility_type::all(['id','code','facility_type_name']);
        $subjects = Subject::all(['id','subject_type','name']);
        return view('company.create',['business_types'=>$business_types,'facility_types'=>$facility_types,'subjects'=>$subjects]);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Persist the company in the database
        //form data is available in the request object
        $company = new Company();
        //input method is used to get the value of input with its
        //name specified
        $company->business_type = $request->get('business_type_dropdown');
        $company->name = $request->input('name');
        $company->regnumber = $request->input('regnumber');
        $company->address = $request->input('address');
        $company->facility_type = $request->get('facility_type_dropdown');
        $company->subject_acting = $request->get('subject_acting_dropdown');
        $company->subject_owner = $request->get('subject_owner_dropdown');
        $company->save(); //persist the data
        return redirect()->route('companies.index')->with('info','Company Added Successfully');
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //Find the company
        $company = Company::find($id);
        return view('company.edit',['company'=> $company]);
    }
    public function view($id){
        $company = Company::find($id);
        return view('company.view',['company'=> $company]);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //Retrieve the company and update
        $company = Company::find($request->input('id'));
        $company->business_type = $request->input('business_type');
        $company->name = $request->input('name');
        $company->regnumber = $request->input('regnumber');
        $company->address = $request->input('address');
        $company->facility_type = $request->input('facility_type');
        $company->subject_acting = $request->input('subject_acting');
        $company->subject_owner = $request->input('subject_owner');
        $company->save(); //persist the data
        $registry = '';
        if( $request->input('add_to_registry') ) {
            // there is something for 'test'
            app(RegistryController::class)->add_to_registry($request->input('id'),2);
            $registry = 'Company added to registry';
        }
        return redirect()->route('companies.index')->with('info','Company Updated Successfully'.$registry);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Retrieve the company
        $company = Company::find($id);
        //delete
        $company->delete();
        return redirect()->route('companies.indexnew registry();');
    }
    public function add_to_registry(){

    }
    public function add_harmonized_code_and_activity(){

    }
    public function add_status_to_registry_record(){

    }
    public function store_company_to_registry(Request $request){
        
        $registry = new registry();
        $registry->registryTypeId = $registryId;
        $registry->companyId = $id;
        $registry->save();
        $companyInRegistryHarmonizedCode = new CompanyInRegistryHarmonizedCode();
        $companyInRegistryHarmonizedCode->registries_id = $registry->id;
        $companyInRegistryHarmonizedCode->harmonizedsc_id = "";
        $companyInRegistryHarmonizedCode->activity_types = "";
        $companyInRegistryHarmonizedCode->save();
        $companyInRegistryStatus = new CompanyInRegistryStatus();
        $companyInRegistryStatus->registries_id = $registry->id;
        $companyInRegistryStatus->statuses_id = "";
        $companyInRegistryStatus->countries_id = "";
        $companyInRegistryStatus->act = "";
        $companyInRegistryStatus->state = "";
        $companyInRegistryStatus->c_date = "";
        $companyInRegistryStatus->save();

    }
    public function include_company_to_registry(){
        $registry_types = RegistryType::all();
        $companies = Company::all(['business_type','name']);
        $harmonizedscs = HarmonizedSC::all();
        $activity_types = activity_type::all();
        $statuses = status::all();

        return view('registry.include',['registry_types'=>$registry_types,'companies'=>$companies,'harmonizedscs'=>$harmonizedscs,'activity_types'=>$activity_types,'statuses'=>$statuses]);
    }
}
