
<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="card">
        <div class="row">
            <div class="col-md-12">
                <form action="<?php echo e(url('/cargo/'.$cargo->id)); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <?php echo e(method_field('PUT')); ?>

                    <?php echo $__env->make('cargo.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </form>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\proyectoLaravel\laikaSystem\resources\views/cargo/edit.blade.php ENDPATH**/ ?>