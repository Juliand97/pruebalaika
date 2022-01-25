
@extends('layouts.app')
@section('content')
<div class="container">   
    <div class="card">
        <div class="row">
            <div class="col-md-12">
                <form action="{{ url('/cargo') }}" method="post">
                    @csrf
                    @include("cargo.form")
                </form>
            </div>
        </div>
    </div>
</div>
@endsection