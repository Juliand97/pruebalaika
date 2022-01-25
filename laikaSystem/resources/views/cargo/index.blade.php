<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cargo</title>
</head>
<body>
@extends('layouts.app')
    @section('content')
<div class="container">
   <div class="card">
        <div class="row">
            <div class="col-md-10">
                <a href="{{url('/cargo/create')}}" class="btn btn-primary">Nuevo Cargo</a>
           </div>
           <div class="col-md-2 pull-right">
                <a href="{{url('/empleado/')}}" class="btn btn-primary">Ver empleados</a>
           </div>
       </div>
       <div class="row">
           <div class="col-md-12 table-responsive">
               <table class="table table-striped table-bordered table-responsive">
                   <thead>
                       <th class="text-center">#</th>
                       <th class="text-center">Descripcion</th>
                       <th class="text-center">Estado</th>
                       <th colspan="2" class="text-center">Acciones</th>
                   </thead>
                   <tbody>
                       @foreach($Cargos as  $cargo)
                       <tr>
                           <td class="text-center">{{$cargo->id}}</td>
                           <td class="text-center">{{$cargo->descripcion}}</td>
                           <td class="text-center">{{$cargo->estado}}</td>
                           <td class="text-center"> 
                               <a class="btn btn-warning"href="{{url('/cargo/'.$cargo->id.'/edit')}}">Editar</a>
                               
                           </td>
                           <td class="text-center">                          
                                <form action="{{url('/cargo/'.$cargo->id)}}" method="post">
                                    @csrf
                                    {{method_field('DELETE')}}
                                    <input type="submit" class="btn btn-danger" value="Borrar"onclick="return confirm('Deseas Borrar Este Registro?')">
                                </form>
                            </td>
                       </tr>
                       @endforeach
                   </tbody>
                   <tfoot>
                       <th class="text-center">#</th>
                       <th class="text-center"> Descripcion</th>
                       <th class="text-center">Estado</th>
                       <th class="text-center" colspan="2">Acciones</th>
                   </tfoot>

               </table>
           </div>
       </div>
   </div>
   </div>
   @endsection
</body>
</html>