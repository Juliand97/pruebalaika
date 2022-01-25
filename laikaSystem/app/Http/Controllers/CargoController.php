<?php

namespace App\Http\Controllers;

use App\Models\Cargo;
use Illuminate\Http\Request;

class CargoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
         $data['Cargos']=Cargo::paginate(5);
         return view('Cargo.index',$data);
    }
    public function showOcupations(){
        $data['Cargos']=Cargo::paginate(5);
        return view('Cargo.cargoslist',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        return view('cargo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        $data=$request->except('_token');
        $result=Cargo::insert($data);
        return redirect('cargo')->with("Empleado Creado Exitosamente");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cargo  $cargo
     * @return \Illuminate\Http\Response
     */
    public function show(Cargo $cargo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cargo  $cargo
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
        $cargo=cargo::findOrFail($id);
        return view('cargo.edit',compact('cargo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cargo  $cargo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id){
        $data=$request->except('_token','_method');
        $result=Cargo::where('id','=',$id)->update($data);
        $cargo=Cargo::findOrFail($id);
        return redirect('cargo');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cargo  $cargo
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        $result=Cargo::destroy($id);
        return redirect('cargo');
    }
}
