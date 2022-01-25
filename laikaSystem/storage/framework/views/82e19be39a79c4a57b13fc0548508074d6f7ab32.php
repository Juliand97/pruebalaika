

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="card">
        <div class="row">
            <div class="col-md-12"></div>
            <form action="<?php echo e(url('/empleado/'.$empleado->id)); ?>" method="post">
                <?php echo csrf_field(); ?>
                <?php echo e(method_field('PUT')); ?>

                <?php echo $__env->make('empleado.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            
            </form>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\proyectoLaravel\laikaSystem\resources\views/empleado/edit.blade.php ENDPATH**/ ?>