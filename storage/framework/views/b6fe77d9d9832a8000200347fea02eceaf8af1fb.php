    <?php $__env->startSection('context'); ?>
    <form action="<?php echo e(route('updateTrenerSubmit', $data->id)); ?>" class="col-12" method="POST" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
          <h4 class="border-bottom border-gray pb-3 mb-4">Создать тренера</h4>
          <!-- ФИО -->
          <div class="form-group ">
            <label for="name">ФИО тренера</label>
            <input type="name" name="name" placeholder="Введите ФИО тренера" value="<?php echo e($data->name); ?>" id="name" class="form-control">
          </div>
          <!-- Картинка -->
          <div class="form-group ">
            <label>Картинка для карточки</label>
            <br>
            <input type="file" class="img" id="img" value="<?php echo e($data->img); ?>" name="img">
          </div>
          <!-- Тренер -->
          <div class="form-group ">
            <label for="kindofsport">Род деятельности</label>
            <input type="text" name="kindofsport" placeholder="Введите вид спорта" value="<?php echo e($data->kindofsport); ?>" id="kindofsport" class="form-control">
          </div>
          <!-- Стаж Ранг -->
          <div class="form-group ">
            <label for="rank">Ранг, титулы, разряд</label>
            <input type="text" name="rank" placeholder="Введите ранг, титулы, разряд" value="<?php echo e($data->rank); ?>" id="rank" class="form-control">
          </div>
          <!-- Контакты -->
          <div class="form-group ">
            <label for="contacts">Контакты тренера</label>
            <input type="text" name="contacts" placeholder="Введите контакты" value="<?php echo e($data->rank); ?>" id="contacts" class="form-control">
          </div>

          <button type="submit" class="btn btn-dark btn-lg btn-block">  Изменить</button>
        </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel\blog\resources\views/trener/updateTrener.blade.php ENDPATH**/ ?>