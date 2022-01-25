
<label for="name" class="control-label">Nombres </label>
<input type="text" required class="form-control"  pattern="[a-zA-Z ]{3,254}" name="name" id="name" value="{{isset($empleado->name)?$empleado->name:''}}">

<label for="lastname">Apellidos </label>
<input type="text" required class="form-control"  pattern="[a-zA-Z ]{3,254}" name="lastname" id="lastname"value="{{isset($empleado->lastname)?$empleado->lastname:''}}">

<label for="phone">Celular</label>
<input type="number" required class="form-control"  pattern="[a-zA-Z ]{7,10}" name="phone" id="phone"value="{{isset($empleado->phone)?$empleado->phone:''}}">

<label for="email">Correo</label>
<input type="email" required class="form-control"  pattern="[a-zA-Z ]{10,254}" name="email" id="email" value="{{isset($empleado->email)?$empleado->email:''}}">


<input type="submit" value="Enviar Informacion" class="btn btn-success">
<a class="btn btn-light"href="{{url('/empleado/')}}">Volver</a>
