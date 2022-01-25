
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empleado</title>
</head>
<body>

    <?php $__env->startSection('content'); ?>
    

<div class="container">
   <div class="card">
       <div class="row">
            <div class="col-md-10">
                <a href="<?php echo e(url('/empleado/create')); ?>" class="btn btn-primary">Nuevo Empleado</a>
           </div>
           <div class="col-md-2 pull-right" >
                <a href="<?php echo e(url('/cargo/')); ?>" class="btn btn-primary">Ver Cargos</a>
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
                       <?php $__currentLoopData = $empleados; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $empleado): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                       <tr>
                           <td><?php echo e($empleado->id); ?></td>
                           <td><?php echo e($empleado->name); ?></td>
                           <td><?php echo e($empleado->lastname); ?></td>
                           <td><?php echo e($empleado->email); ?></td>
                           <td><?php echo e($empleado->phone); ?></td>
                           <td><?php echo e($empleado->cargo); ?></td>
                           <td class="text-center"> 
                               <a href="<?php echo e(url('/empleado/'.$empleado->id.'/edit')); ?>" class="btn btn-warning">Editar</a>
                               
                            </td>
                            <td class="text-center">
                           
                                 <form action="<?php echo e(url('/empleado/'.$empleado->id)); ?>" method="post">
                                    <?php echo csrf_field(); ?>
                                    <?php echo e(method_field('DELETE')); ?>

                                    <!-- <i class="material-icons">save</i>   -->
                                    <input class="btn btn-danger" type="submit" value="Borrar"onclick="return confirm('Deseas Borrar Este Registro')">
                                </form>
                            </td>
                       </tr>
                       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
   <?php $__env->stopSection(); ?>
</body>
</html>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\proyectoLaravel\laikaSystem\resources\views/empleado/index.blade.php ENDPATH**/ ?>