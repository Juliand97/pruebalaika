
 @extends('layouts.app')
@section('content')
<div class="container">
    <div class="card">
       <div class="row">
           <div class="col-md-12">
               <form action="{{ url('/empleado') }}" method="post">
                @csrf
                @include("empleado.form")
               </form>
           </div>
       </div>
   </div>
</div>
@endsection