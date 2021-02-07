

    <?php $__env->startSection('context'); ?>
    <div class="content pt-3 col-12">
      <h2>Список секций</h2>
      <a class="btn btn-dark btn-block btn-primary col-8 mt-4 mb-4 " href="<?php echo e(route('createCatalog')); ?>"><h6>Создать новую секцию</h6></a>
      <table class="table">
        <thead>
          <tr>
            <th scope="col">Заголовок</th>
            <th scope="col">Картинка</th>
            <th scope="col">Цена</th>
            <th scope="col">Перейти</th>
          </tr>
        </thead>
        <tbody>
          <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $el): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
              <td><?php echo e($el->title); ?></td>
              <td><img style="width: 50px;" src="<?php echo e($el->img); ?>" alt=""></td>
              <td><?php echo e($el->price); ?></td>
              <td><a href="<?php echo e(route('catalogShowOne', $el->id)); ?>">Перейти</a></td>
            </tr>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
      </table>

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel\blog\resources\views/catalogs/showAll.blade.php ENDPATH**/ ?>