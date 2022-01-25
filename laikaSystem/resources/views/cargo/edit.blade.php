@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card">
        <div class="row">
            <div class="col-md-12">
                <form action="{{url('/cargo/'.$cargo->id)}}" method="post">
                    @csrf
                    {{method_field('PUT')}}
                    @include('cargo.form')
                </form>
            </div>
        </div>
    </div>
</div>
@endsection