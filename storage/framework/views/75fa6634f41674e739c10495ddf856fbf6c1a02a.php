<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="/css/app.css">
  <?php $__env->startSection('title',$data->title); ?>
</head>
<body style=" width:90%; margin:auto; color:#000">
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <?php $__env->startSection('navbar'); ?>
  <div class="details" style="margin-top:4rem; display:flex;justify-content:space-around;">
    <div class="info" style="margin-top:2rem; max-width:50%">
      <h1><?php echo e($data->title); ?></h1>
      <p style="margin-top:2rem; font-size:130%">Время тренировок: <?php echo e($data->time); ?></p>
      <p style="margin-top:2rem; font-size:130%">Стоимость за месяц: <?php echo e($data->price); ?> сомов</p>
      <p style="margin-top:2rem; font-size:130%">Описание: <?php echo e($data->discript); ?></p>
      <form action="">
        <div style="margin-top:2rem;">
          <input type="text" style="
            background:#cfc; width: 200px; height:40px; text-align:center;border:none; outline:none; border-radius:4px;" 
            placeholder="Ваше Имя"
          >
          <input type="text" style="
            background:#cfc;width: 200px; height:40px; text-align:center;border:none; outline:none; border-radius:4px;"
            placeholder="Ваше Номер">

        </div>
      <button style="
        width: 200px; height:40px; font-size:20px; margin-top:2rem; background:#202020; color:#fff; border:none; outline:none; border-radius:4px;
      ">Записаться</button> 
      </form>    
</div>
    <div class="img">
      <img src="<?php echo e(asset($data->img)); ?>" alt="">
    </div>
  </div>
</body>
</html><?php /**PATH D:\laravel\blog\resources\views/details1.blade.php ENDPATH**/ ?>