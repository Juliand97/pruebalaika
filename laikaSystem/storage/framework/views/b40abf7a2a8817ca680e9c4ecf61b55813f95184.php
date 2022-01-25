<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cargo</title>
</head>
<body>

    <?php $__env->startSection('content'); ?>
<div class="container">
   <div class="card">
        <div class="row">
            <div class="col-md-10">
                <a href="<?php echo e(url('/cargo/create')); ?>" class="btn btn-primary">Nuevo Cargo</a>
           </div>
           <div class="col-md-2 pull-right">
                <a href="<?php echo e(url('/empleado/')); ?>" class="btn btn-primary">Ver empleados</a>
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
                       <?php $__currentLoopData = $Cargos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cargo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                       <tr>
                           <td class="text-center"><?php echo e($cargo->id); ?></td>
                           <td class="text-center"><?php echo e($cargo->descripcion); ?></td>
                           <td class="text-center"><?php echo e($cargo->estado); ?></td>
                           <td class="text-center"> 
                               <a class="btn btn-warning"href="<?php echo e(url('/cargo/'.$cargo->id.'/edit')); ?>">Editar</a>
                               
                           </td>
                           <td class="text-center">                          
                                <form action="<?php echo e(url('/cargo/'.$cargo->id)); ?>" method="post">
                                    <?php echo csrf_field(); ?>
                                    <?php echo e(method_field('DELETE')); ?>

                                    <input type="submit" class="btn btn-danger" value="Borrar"onclick="return confirm('Deseas Borrar Este Registro?')">
                                </form>
                            </td>
                       </tr>
                       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
   <?php $__env->stopSection(); ?>
</body>
</html>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\proyectoLaravel\laikaSystem\resources\views/Cargo/index.blade.php ENDPATH**/ ?>