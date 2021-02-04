    <?php $__env->startSection('context'); ?>
    <div class="content pt-3 col-12">
      <h4>Категория секции</h4>
      <table class="table">
        <tr>
          <th scope="col">Заголовок</th>
          <td><?php echo e($data->name); ?></td>
        </tr>
        <tr>
          <th scope="col">Картинка</th>
          <td><img style="height: 240px;" src="<?php echo e(asset($data->img)); ?>" alt=""></td>
        </tr>
        <tr>
          <th scope="col">Должность</th>
          <td><?php echo e($data->kindofsport); ?></td>
        </tr>
        <tr>
          <th scope="col">Ранг</th>
          <td><?php echo e($data->rank); ?></td>
        </tr>
        <tr>
          <th scope="col">Контакты</th>
          <td><?php echo e($data->contacts); ?></td>
        </tr>
        <tr>
          <th>Изменить</th>
          <td><a class="btn btn-primary" href="<?php echo e(route('updateTrener', $data->id)); ?>">Изменить</a></td>
        </tr>
        <tr>
          <th>Удалить</th>
          <td><a class="btn btn-danger" href="<?php echo e(route('deleteTrener', $data->id)); ?>">Удалить</a></td>
        </tr>
      </table>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel\blog\resources\views/trener/showOne.blade.php ENDPATH**/ ?>