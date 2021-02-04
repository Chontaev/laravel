

    <?php $__env->startSection('context'); ?>
    <div class="content pt-3 col-12">
      <h4>Категория секции</h4>
      <table class="table">
        <tr>
          <th scope="col">Заголовок</th>
          <td><?php echo e($data->title); ?></td>
        </tr>
        <tr>
          <th scope="col">Картинка</th>
          <td><img style="width: 240px;" src="<?php echo e(asset($data->img)); ?>"  alt=""></td>
        </tr>
        <tr>
          <th scope="col">Цена</th>
          <td><?php echo e($data->price); ?></td>
        </tr>
        <tr>
          <th scope="col">Время посешения</th>
          <td><?php echo e($data->time); ?></td>
        </tr>
        <tr>
          <th scope="col">Описание</th>
          <td><?php echo e($data->discript); ?></td>
        </tr>
        <tr>
          <th>Изменить</th>
          <td><a class="btn btn-primary" href="<?php echo e(route('updateCatalog', $data->id)); ?>">Изменить</a></td>
        </tr>
        <tr>
          <th>Удалить</th>
          <td><a class="btn btn-danger" href="<?php echo e(route('deleteCatalog', $data->id)); ?>">Удалить</a></td>
        </tr>
      </table>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel\blog\resources\views/catalogs/showOne.blade.php ENDPATH**/ ?>