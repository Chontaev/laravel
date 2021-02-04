

    <?php $__env->startSection('context'); ?>
      <form action="<?php echo e(route('updateCatalogSubmit',$data->id)); ?>" method="POST"  enctype="multipart/form-data">
      <?php echo csrf_field(); ?>
      <h4 class="border-bottom border-gray pb-3 mb-4 ">Виды кружков</h4>
      <!-- Заголовок -->
      <div class="form-group ">
        <label for="title">Название секции</label>
        <input type="text" name="title" placeholder="Введите название" value="<?php echo e($data->title); ?>" id="title" class="form-control">
      </div>
      <!-- Картинка -->
      <div class="form-group ">
        <label>Картинка для карточки</label>
        <br>
          <input type="file" class="img" id="img" value="<?php echo e($data->img); ?>" name="img">
      </div>
      <!-- Цена -->
      <div class="form-group ">
        <label for="price">Цена за месяц</label>
        <input type="text" name="price" placeholder="Введите цену"  value="<?php echo e($data->price); ?>" id="price" class="form-control">
      </div>
      <!-- Время тренировок -->
      <div class="form-group ">
        <label for="time">Расписание тренировок</label>
        <input type="text" name="time" placeholder="Введите время" value="<?php echo e($data->time); ?>" id="time" class="form-control">
      </div>
      <!-- Описание -->
      <div class="form-group ">
        <label for="discription">Описание секции</label>
        <textarea type="text" name="discript" placeholder="Введите текст" id="discription" class="form-control"><?php echo e($data->discript); ?></textarea>
      </div>
      
      <button type="submit" class="btn btn-dark btn-lg btn-block">Сохранить</button>


    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel\blog\resources\views/catalogs/update.blade.php ENDPATH**/ ?>