    <?php $__env->startSection('context'); ?>
    <div class="content pt-3 col-12">
      <h2>Список тренеров</h2>
      <div class="d-flex d-flex justify-content-between pt-4 pb-4 align-baseline">
        <a class="btn btn-dark btn-block btn-primary col-6" href="<?php echo e(route('createTrener')); ?>"><h6>Создать нового тренера</h6></a>
      </div>
      <table class="table">
        <thead>
          <tr>
            <th scope="col">Имя</th>
            <th scope="col">Картинка</th>
            <th scope="col">Должность</th>
            <th scope="col">Ранг</th>
            <th scope="col">Контакты</th>
            <th>кнопка</th>
          </tr>
        </thead>
        <tbody>
          <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $el): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
              <td><?php echo e($el->name); ?></td>
              <td><img style="height: 50px;" src="<?php echo e(asset($el->img)); ?>" alt="break"></td>
              <td><?php echo e($el->kindofsport); ?></td>
              <td><?php echo e($el->rank); ?></td>
              <td><?php echo e($el->contacts); ?></td>
              <td><a href="<?php echo e(route('trenersShowOne', $el->id)); ?>">перейти</a></td>
            </tr>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
      </table>

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel\blog\resources\views/trener/showAll.blade.php ENDPATH**/ ?>