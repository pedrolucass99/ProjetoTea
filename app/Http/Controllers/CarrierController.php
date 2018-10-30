<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarrierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carriers=\App\Carrier::all();
        return view('index_carrier',compact('carriers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create_carrier');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $carrier= new \App\Carrier;
        $carrier->name=$request->get('name');
        $carrier->cpf=$request->get('cpf');
        $carrier->password=$request->get('password');
        
        
        $date=date_create($request->get('date'));
        $format = date_format($date,"Y-m-d");
        $carrier->date = strtotime($format);

        $carrier->street=$request->get('street');
        $carrier->number=$request->get('number');
        
        $carrier->bairro=$request->get('bairro');
        $carrier->city=$request->get('city');
        
        $carrier->save();
        
        return redirect('carriers')->with('success', 'Information has been added');
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
        $carrier = \App\Carrier::find($id);
        return view('edit_carrier',compact('carrier','id'));
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
            $carrier= \App\Carrier::find($id);
            $carrier->name=$request->get('name');
            $carrier->cpf=$request->get('cpf');
            $carrier->password=$request->get('password');
            $carrier->date=$request->get('date');
            $carrier->street=$request->get('street');
            $carrier->number=$request->get('number');
            $carrier->bairro=$request->get('bairro');
            $carrier->city=$request->get('city');
            $carrier->save();
        return redirect('carriers');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $carrier = \App\Carrier::find($id);
        $carrier->delete();
        return redirect('carriers')->with('success','Information has been  deleted');
    }
}
