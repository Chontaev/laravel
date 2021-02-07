<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="/css/app.css">
  <?php $__env->startSection('title',$data->name); ?>
</head>
<body style=" width:90%; margin:auto; color:#000">
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <?php $__env->startSection('navbar'); ?>
  <div class="details" style="margin-top:4rem; display:flex;justify-content:space-around;">
    <div class="info" style="margin-top:2rem; max-width:50%">
      <h1><?php echo e($data->name); ?></h1>
      <p style="margin-top:2rem; font-size:130%"><?php echo e($data->kindofsport); ?></p>
      <p style="margin-top:2rem; font-size:130%"><?php echo e($data->rank); ?></p>
      <p style="margin-top:2rem; font-size:130%"><?php echo e($data->contacts); ?></p>
    </div>
    <div class="img">
      <img src="<?php echo e(asset($data->img)); ?>" alt="">
    </div>
  </div>
</body>
</html><?php /**PATH D:\laravel\blog\resources\views/details.blade.php ENDPATH**/ ?>