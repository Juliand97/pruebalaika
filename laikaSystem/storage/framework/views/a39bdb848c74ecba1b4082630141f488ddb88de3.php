<label for="" required>Descripcion</label>
<input type="text" name="descripcion"  pattern="[a-zA-Z ]{4,254}" class="form-control"id="descripcion" value="<?php echo e(isset($cargo->descripcion)?$cargo->descripcion:''); ?>">

<label for="estado" class="form-label" required>Estado </label>
<select name="estado" id="estado" class="form-select" >
    <option value="activo" selected>Activo</option>
    <option value="inactivo">Inactivo</option>
</select>
<input type="submit" value="Enviar Informacion" class="btn btn-success">
<a class="btn btn-light"href="<?php echo e(url('/cargo/')); ?>">Volver</a>


<?php /**PATH C:\wamp64\www\proyectoLaravel\laikaSystem\resources\views/cargo/form.blade.php ENDPATH**/ ?>