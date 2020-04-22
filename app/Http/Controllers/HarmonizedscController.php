<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\HarmonizedSC;

class HarmonizedscController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $harmonizedscs = HarmonizedSC::all();
        return view('harmonizedsc.index',['harmonizedscs'=>$harmonizedscs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('harmonizedsc.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $harmonizedsc = new HarmonizedSC();
        $harmonizedsc->code = $request->input('hsc_code');
        $harmonizedsc->parent_code = $request->input('parent_code');
        $harmonizedsc->hsc_name = $request->input('hsc_name');
        $harmonizedsc->description = $request->input('hsc_description');
        $harmonizedsc->save();
        return redirect()->route('harmonizedsc.index')->with('info','Код ТН ВЭД добавлен успешно.')->with('status','green')->with('header','Действие успешно');
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
        $harmonizedsc = HarmonizedSC::find($id);
        return view('harmonizedsc.edit',['harmonizedsc'=>$harmonizedsc]);
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
        $harmonizedsc = HarmonizedSC::find($request->input('id'));
        $harmonizedsc->code = $request->input('hsc_code');
        $harmonizedsc->parent_code = $request->input('parent_code');
        $harmonizedsc->hsc_name = $request->input('hsc_name');
        $harmonizedsc->description = $request->input('hsc_description');
        $harmonizedsc->save();
        return redirect()->route('harmonizedsc.index')->with('info','Код ТН ВЭД обновлен успешно.')->with('status','green')->with('header','Действие выполнено');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $harmonizedsc = HarmonizedSC::find($id);
        $harmonizedsc->delete();
        return redirect()->route('harmonizedsc.index')->with('info','Код ТН ВЭД удален успешно.')->with('status','green')->with('header','Действие выполнено');
    }
}
