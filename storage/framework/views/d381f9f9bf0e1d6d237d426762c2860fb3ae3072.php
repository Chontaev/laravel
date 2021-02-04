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
          <a href="" class="card"></a>
          <a href="" class="card"></a>
          <a href="" class="card"></a>
          <a href="" class="card"></a>
          <a href="" class="card"></a>
          <a href="" class="card"></a>
          <a href="" class="card"></a>
          <a href="" class="card"></a>
          <a href="" class="card"></a>
          <a href="" class="card"></a>
          <a href="" class="card"></a>
          <a href="" class="card"></a>
        </div>
      </div>
    </div>
 </div>
</body>
</html><?php /**PATH D:\laravel\blog\resources\views/gallery.blade.php ENDPATH**/ ?>