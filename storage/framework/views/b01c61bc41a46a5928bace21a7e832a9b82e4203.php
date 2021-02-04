

    <?php $__env->startSection('context'); ?>
  <form action="<?php echo e(route('createTrenerSubmit')); ?>" class="content col-12" method="POST" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
          <h4 class="border-bottom border-gray pt-4 pb-4">Создать тренера</h4>
          <!-- ФИО -->
          <div class="form-group">
            <label for="name">ФИО тренер </label>
            <input type="name" name="name" placeholder="Введите ФИО тренера" id="name" class="form-control">
          </div>
          <!-- Картинка -->
          <div class="form-group ">
            <label>Картинка для карточки</label>
            <br>
            <input type="file" class="img" id="img" name="img">
          </div>
          <!-- Тренер -->
          <div class="form-group ">
            <label for="kindofsport">Род деятельности</label>
            <input type="text" name="kindofsport" placeholder="Введите вид спорта" id="kindofsport" class="form-control">
          </div>
          <!-- Стаж Ранг -->
          <div class="form-group ">
            <label for="rank">Ранг, титулы, разряд</label>
            <input type="text" name="rank" placeholder="Введите ранг, титулы, разряд" id="rank" class="form-control">
          </div>
          <!-- Контакты -->
          <div class="form-group ">
            <label for="contacts">Контакты тренера</label>
            <input type="text" name="contacts" placeholder="Введите контакты" id="contacts" class="form-control">
          </div>

          <button type="submit" class="btn btn-dark btn-lg btn-block">Сохранить</button>
        </form>
        <?php $__env->stopSection(); ?>
<?php echo $__env->make('admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel\blog\resources\views/trener/createTrener.blade.php ENDPATH**/ ?>