<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Subject;
use App\business_type;

class SubjectController extends Controller{
	public function index(){
		$subjects = Subject::all();
		return view('subject.index', ['subjects'=>$subjects]);
	}
	public function view($id){
        $subject = Subject::find($id);
        return view('subject.view',['subject'=> $subject]);
    }
	public function create(){
		$subject_types= business_type::all(['id','code','business_type_name']);
		return view('subject.create',['subject_types'=>$subject_types]);
	}
	public function store(Request $request){
		$subject = new subject();
		$subject->subject_type = $request->get('subject_type_dropdown');
        $subject->name = $request->input('name');
        $subject->address = $request->input('address');
        $subject->coate = $request->input('coate');
        $subject->inn = $request->input('inn');
        $subject->comment = $request->input('comment');
		$subject->save();
		return redirect()->route('subject.index')->with('info','Субъект добавлен успешно.')->with('status','green')->with('header','Действие выполнено');
	}
	public function edit($id){
		$subject = subject::find($id);
		return view('subject.edit',['subject'=>$subject]);
	}
	public function update(Request $request){
		$subject = subject::find($request->input('id'));
		$subject->subject_type = $request->input('subject_type');
        $subject->name = $request->input('name');
        $subject->address = $request->input('address');
        $subject->coate = $request->input('coate');
        $subject->inn = $request->input('inn');
        $subject->comment = $request->input('comment');
		$subject->save();
		return redirect()->route('subject.index')->with('info','Субъект обновлен успешно.')->with('status','green')->with('header','Действие выполнено');
	}
	public function destroy($id){
		$subject = subject::find($id);
		$subject->delete();
		return redirect()->route('subject.index')->with('info','Субъект удален успешно.')->with('status','green')->with('header','Действие выполнено');
	}
}
