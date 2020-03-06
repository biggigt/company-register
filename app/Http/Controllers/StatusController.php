<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\status;

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
    	$status = new status();
    	$status->code = $request->input('status_code');
    	$status->status = $request->input('status_name');
    	$status->save();
    	return redirect()->route('status.index')->with('info','Статус предприятий добавлен успешно.');
    }

    public function edit($id){
    	$status = status::find($id);
    	return view('status.edit',['status'=>$status]);
    }

    public function update(Request $request){
    	$status = status::find($request->input('id'));
    	$status->code = $request->input('status_code');
    	$status->status = $request->input('status_name');
    	$status->save();
    	return redirect()->route('status.index')->with('info','Статус предприятий обновлен успешно.');
    }

    public function destroy($id){
    	$status = status::find($id);
    	$status->delete();
    	return redirect()->route('status.index');
    }
}
