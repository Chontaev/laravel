<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/css/app.css">
  <?php $__env->startSection('title','gallery'); ?>
</head>
<body>
 <div class="welcome">
  <div class="container">
      <?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <div class="gallery">
        <h1>Галлерея</h1>
        <div class="cards">
          <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $el): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <a href="" class="card">
            <img src="<?php echo e(asset($el->img)); ?>" alt="">
          </a>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
      </div>
    </div>
 </div>
</body>
</html><?php /**PATH D:\laravel\blog\resources\views/gallery.blade.php ENDPATH**/ ?>