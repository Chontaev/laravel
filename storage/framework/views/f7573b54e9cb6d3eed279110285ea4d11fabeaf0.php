

    <?php $__env->startSection('context'); ?>
    <div class="content pt-3 col-12">
    <h2>Галлерея</h2>
    <div class="d-flex d-flex justify-content-between pt-4 pb-4 align-baseline">
        <a class="btn btn-dark btn-block btn-primary col-6" href="<?php echo e(route('createGallery')); ?>"><h6>Добавить картинку</h6></a>
      </div>
      <?php $__currentLoopData = $imgs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
           <table class="table">
           <tr>
           <td class="pt-4"><h3 class="pt-4"><?php echo e($item->id); ?></h3></td>
           <td><img style="height: 100px;" src="<?php echo e(asset($item->img)); ?>" alt=""></td>
           <td class="pt-4"><a class="btn btn-block btn-danger mt-4" href="<?php echo e(route('deleteGallery', $item->id)); ?>">Удалить</a></td>
           </tr>
           </table>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel\blog\resources\views/gallery/showAll.blade.php ENDPATH**/ ?>