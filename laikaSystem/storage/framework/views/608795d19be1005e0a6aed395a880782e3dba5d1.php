<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cargo</title>
</head>
<body>
    <?php echo $__env->make("cargo.form", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

   <div class="card">
       <div class="row">
           <div class="col-md-12">
               <table>
                   <thead>
                       <th>#</th>
                       <th>Descripcion</th>
                       <th>Estado</th>
                       <th>Acciones</th>
                   </thead>
                   <tbody>
                       <?php $__currentLoopData = $cargos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cago): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                       <tr>
                           <td><?php echo e($cargo->id); ?></td>
                           <td><?php echo e($cargo->descripcion); ?></td>
                           <td><?php echo e($cargp->estado); ?></td>
                           <td> 
                               <a href="<?php echo e(url('/empleado/'.$empleado->id.'/edit')); ?>">Edit_info</a>
                               
                           
                                | 
                               
                                <br>                           
                                <form action="<?php echo e(url('/empleado/'.$empleado->id)); ?>" method="post">
                                    <?php echo csrf_field(); ?>
                                    <?php echo e(method_field('DELETE')); ?>

                                    <input type="submit" value="borrar"onclick="return confirm('Deseas Borrar Este Registro')">
                                </form>
                            </td>
                       </tr>
                       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                   </tbody>
                   <tfoot>
                       <th>#</th>
                       <th>Descripcion</th>
                       <th>Estado</th>
                       <th>Acciones</th>
                   </tfoot>

               </table>
           </div>
       </div>
   </div>
</body>
</html><?php /**PATH C:\wamp64\www\proyectoLaravel\laikaSystem\resources\views/cargo/index.blade.php ENDPATH**/ ?>