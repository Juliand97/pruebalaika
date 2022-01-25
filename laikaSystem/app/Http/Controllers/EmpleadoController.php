<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use Illuminate\Http\Request;
use DB;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $data['empleados']=DB::select('CALL showEmployee("");');
        return view('empleado.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        return view('empleado.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        $name=isset($request['name']) ? $request['name']:null;
        $lastname=isset($request['lastname']) ? $request['lastname']:null;
        $phone=isset($request['phone']) ? $request['phone']:null;
        $email=isset($request['email']) ? $request['email']:null;
        $result=DB::select("CALL insertEmployee('".$name."','".$lastname."','".$phone."','".$email."');");;
        return redirect('empleado');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function show(Empleado $empleado)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
        $empleado=Empleado::findOrFail($id);
        return view('empleado.edit',compact('empleado'));
    }

   

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id){
        $name=isset($request['name']) ? $request['name']:null;
        $lastname=isset($request['lastname']) ? $request['lastname']:0;
        $phone=isset($request['phone']) ? $request['phone']:0;
        $email=isset($request['email']) ? $request['email']:0;
        $result=DB::select("CALL modifyEmployee(".$id.",'".$name."','".$lastname."','".$phone."','".$email."',true);");;
        return redirect('empleado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        $result=DB::select('CALL modifyEmployee('.$id.',null,null,null,null,false);');;
        return redirect('empleado');
    }
}
