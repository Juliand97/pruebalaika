
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empleado</title>
</head>
<body>
@extends('layouts.app')
    @section('content')
    

<div class="container">
   <div class="card">
       <div class="row">
            <div class="col-md-10">
                <a href="{{url('/empleado/create')}}" class="btn btn-primary">Nuevo Empleado</a>
           </div>
           <div class="col-md-2 pull-right" >
                <a href="{{url('/cargo/')}}" class="btn btn-primary">Ver Cargos</a>
           </div>
       </div>
       <div class="row">
           <div class="col-md-12 table-responsive">
               <table class="table table-striped table-bordered table-responsive">
                   <thead>
                       <th>#</th>
                       <th>Nombre</th>
                       <th>Apellido</th>
                       <th>Correo</th>
                       <th>Celular</th>
                       <th>Cargo</th>
                       <th colspan="2" class="text-center">Acciones</th>
                   </thead>
                   <tbody>
                       @foreach($empleados as  $empleado)
                       <tr>
                           <td>{{$empleado->id}}</td>
                           <td>{{$empleado->name}}</td>
                           <td>{{$empleado->lastname}}</td>
                           <td>{{$empleado->email}}</td>
                           <td>{{$empleado->phone}}</td>
                           <td>{{$empleado->cargo}}</td>
                           <td class="text-center"> 
                               <a href="{{url('/empleado/'.$empleado->id.'/edit')}}" class="btn btn-warning">Editar</a>
                               
                            </td>
                            <td class="text-center">
                           
                                 <form action="{{url('/empleado/'.$empleado->id)}}" method="post">
                                    @csrf
                                    {{method_field('DELETE')}}
                                    <!-- <i class="material-icons">save</i>   -->
                                    <input class="btn btn-danger" type="submit" value="Borrar"onclick="return confirm('Deseas Borrar Este Registro')">
                                </form>
                            </td>
                       </tr>
                       @endforeach
                   </tbody>
                   <tfoot>
                       <th>#</th>
                       <th>Nombre</th>
                       <th>Apellido</th>
                       <th>Correo</th>
                       <th>Celular</th>
                       <th>Cargo</th>
                       <th colspan="2" class="text-center">Acciones</th>
                   </tfoot>

               </table>
           </div>
       </div>
   </div>
   </div>
   @endsection
</body>
</html>