

    <?php $__env->startSection('context'); ?>
    <!-- Картинка -->
    <form action="<?php echo e(route('updateGallerySubmit', $item->id)); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <h4 class="border-bottom border-gray pb-3 mb-2 ">Галерея</h4>
      <div class="form-group">
        <label>Изменить картинку</label><br>
        <input type="file" class="img" value="$item-img" id="img" name="img">
      </div>
      <button type="submit" class="btn btn-dark btn-lg btn-block">Изменить</button>
  </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel\blog\resources\views/gallery/update.blade.php ENDPATH**/ ?>