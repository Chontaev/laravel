    <?php $__env->startSection('content'); ?>
    <?php if(session('status')): ?>
        <div class="alert alert-success" role="alert">
            <?php echo e(session('status')); ?>

        </div>
    <?php endif; ?>
    <?php if($errors->any()): ?>
        <div class="alert alert-danger">
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <ol><?php echo e($error); ?></ol>
                    
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>

    <?php if(session('success')): ?>
        <div class="container alert alert-success" role="alert">
            <?php echo e(session('success')); ?>

        </div>
    <?php endif; ?>
    <div  class="container d-flex justify-content-between">
        <div class=" sidebar col-3 mt-4  py-4" >
            <a class="btn btn-outline-dark btn-block" href="/admin">Таблица отклики</a>
            <a class="btn btn-outline-dark btn-block" href="/catalogs">Таблица секции</a>
            <a class="btn btn-outline-dark btn-block" href="/treners">Таблица тренеры</a>
            <a class="btn btn-outline-dark btn-block" href="/gallery-table">Таблица галереи</a>
        </div>
        <div class="context col-8 pt-3 d-flex">
            <?php echo $__env->yieldContent('context'); ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel\blog\resources\views/admin.blade.php ENDPATH**/ ?>