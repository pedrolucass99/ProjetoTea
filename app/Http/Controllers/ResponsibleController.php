<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResponsibleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $responsibles=\App\Responsible::all();
        return view('index_responsible',compact('responsibles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create_responsible');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $responsible= new \App\Responsible;
        $responsible->name=$request->get('name');
        $responsible->cpf=$request->get('cpf');
        $responsible->email=$request->get('email');
        $responsible->password=$request->get('password');
        $responsible->street=$request->get('street');
        $responsible->number=$request->get('number');
        $responsible->bairro=$request->get('bairro');
        $responsible->city=$request->get('city');
        $responsible->save();
        
        return redirect('responsibles')->with('success', 'Information has been added');
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
        $responsible = \App\Responsible::find($id);
        return view('edit_responsible',compact('responsible','id'));
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
       $responsible= \App\Responsible::find($id);
        $responsible->name=$request->get('name');
        $responsible->cpf=$request->get('cpf');
        $responsible->email=$request->get('email');
        $responsible->password=$request->get('password');
        $responsible->street=$request->get('street');
        $responsible->number=$request->get('number');
        $responsible->bairro=$request->get('bairro');
        $responsible->city=$request->get('city');
        $responsible->save();
        return redirect('responsibles');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $responsible = \App\Responsible::find($id);
        $responsible->delete();
        return redirect('responsibles')->with('success','Information has been  deleted');
    }    
}
