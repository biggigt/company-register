<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\activity_type;

class ActivityController extends Controller
{
    public function index(){
    	$activities = activity_type::all();
    	return view('activity.index',['activities'=>$activities]);
    }

    public function create(){
    	return view('activity.create');
    }

    public function store(Request $request){
    	$activity = new activity_type();
    	$activity->code = $request->input('activity_code');
    	$activity->activity_type_name = $request->input('activity_type_name');
    	$activity->save();
    	return redirect()->route('activity.index')->with('info','Вид деятельности предприятий добавлен успешно.')->with('status','green')->with('header','Действие выполнено');
    }

    public function edit($id){
    	$activity = activity_type::find($id);
    	return view('activity.edit',['activity'=>$activity]);
    }

    public function update(Request $request){
    	$activity = activity_type::find($request->input('id'));
    	$activity->code = $request->input('activity_code');
    	$activity->activity_type_name = $request->input('activity_type_name');
    	$activity->save();
    	return redirect()->route('activity.index')->with('info','Вид деятельности предприятий обновлен успешно.')->with('status','green')->with('header','Действие выполнено');
    }

    public function destroy($id){
    	$activity = activity_type::find($id);
    	$activity->delete();
    	return redirect()->route('activity.index')->with('info','Вид деятельности предприятий удалено успешно.')->with('status','green')->with('header','Действие выполнено');
    }
}
