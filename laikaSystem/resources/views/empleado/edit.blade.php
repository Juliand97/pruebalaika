
@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card">
        <div class="row">
            <div class="col-md-12"></div>
            <form action="{{url('/empleado/'.$empleado->id)}}" method="post">
                @csrf
                {{method_field('PUT')}}
                @include('empleado.form')
            
            </form>
        </div>
    </div>
</div>
@endsection