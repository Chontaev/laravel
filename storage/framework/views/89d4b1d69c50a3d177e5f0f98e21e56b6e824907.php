<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="/css/app.css">
   <?php $__env->startSection('title','Mega Sport'); ?>
   <link href="https://fonts.googleapis.com/css2?family=Yanone+Kaffeesatz:wght@300&display=swap" rel="stylesheet">
</head>
<div class="fon"></div>
<body>
   <div class="welcome">
      <div class="container">
         <div class="main">
            <div class="first" id="main">
                  <?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                  <?php $__env->startSection('navbar'); ?>
                  <div class="context">
                     <h1>Mega<span>Sport</span></h1>
                     <p>Создай совое идельное тело!</p>
                  </div>
            </div>
            <div class="second" id="about">
               <h1>О нас</h1>
               <div>
                  <div class="content">
                     <li>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis sint quaerat qui quibusdam dolore tempora earum suscipit, hic fugiat, voluptate quisquam laboriosam laudantium.
                     </li>
                     <li>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis sint quaerat qui quibusdam dolore tempora earum suscipit, hic fugiat, voluptate quisquam laboriosam laudantium.
                     </li>
                     <li>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis sint quaerat qui quibusdam dolore tempora earum suscipit, hic fugiat, voluptate quisquam laboriosam laudantium.
                     </li>
                     <li>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis sint quaerat qui quibusdam dolore tempora earum suscipit, hic fugiat, voluptate quisquam laboriosam laudantium.
                     </li>
                  </div>
                  <div class="image">
                     <img src="https://glavcom.ua/img/gallery/5364/94/467590_big.jpg" alt="">
                  </div>
               </div>
            </div>
            <div class="third">
               <h1>Категории</h1>
               <div>
                  <?php $__currentLoopData = $cat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $el): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <div>
                     <section></section>
                     <img class="cat_img" src="<?php echo e(asset($el->img)); ?>" alt="">
                     <h3><?php echo e($el->title); ?></h3>
                     <p><?php echo e($el->discript); ?></p>
                     <a href="<?php echo e(route('details1', $el->id)); ?>">Подробнее</a>
                  </div>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
               </div>
            </div>
            <div class="fourth" id="treners">
               <h1 class="h1">Тренера</h1>
               <div>
               <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $el): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <a href="<?php echo e(route('details', $el->id)); ?>" > 
                     <div>
                     <img class="trener_img" src="<?php echo e(asset($el->img)); ?>" alt="">
                        <p  style="color:#fff"><?php echo e($el->name); ?></p>
                        <p class="discription"><?php echo e($el->kindofsport); ?></p>
                     </div>
                  </a>
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
               </div>
            </div>
            <div class="fives">
               <h1>Мы на карте</h1>
               <div id="wrapper-9cd199b9cc5410cd3b1ad21cab2e54d3">
                  <div id="map-9cd199b9cc5410cd3b1ad21cab2e54d3"></div><script>(function () {
                  var setting = {"height":540,"width":1200,"zoom":15,"queryString":"Фитнесс Центр Мега Спорт, Бишкек, Киргизия","place_id":"ChIJdUd_Wlm2njgRNmCJfrhsg0o","satellite":false,"centerCoord":[42.85065976934729,74.64627496157036],"cid":"0x4a836cb87e896036","lang":"ru","cityUrl":"/kyrgyzstan/bishkek-10287","cityAnchorText":"Карта [CITY1], Киргизия","id":"map-9cd199b9cc5410cd3b1ad21cab2e54d3","embed_id":"355955"};
                  var d = document;
                  var s = d.createElement('script');
                  s.src = 'https://1map.com/js/script-for-user.js?embed_id=355955';
                  s.async = true;
                  s.onload = function (e) {
                     window.OneMap.initMap(setting)
                  };
                  var to = d.getElementsByTagName('script')[0];
                  to.parentNode.insertBefore(s, to);
                  })();</script><a href="https://1map.com/ru/map-embed"></a></div>
            </div>
            <div class="sixth">
               <h1>Хотите записаться?</h1>
               <form>
                  <div>
                     <input type="name" placeholder="Вашe имя">
                  </div>
                  <div>
                     <input type="phone" placeholder="Ваш телефон">
                  </div>
                  <div> <button>Отправить</button></div>
                  <div>
                     *Мы никому не передаем ваши данные. <br> И не сохраняем ваш номер в базу.
                  </div>
               </form>
            </div>
         </div>
      </div>
      <div class="footer" id="contacts">
         <div>
            <div class="first_section">
               <h1>
                  Mega<span>Sport</span>
               </h1>
               <p class="footer_p">Тренажерный зал</p>
            </div>
            <div class="second_section">
               <a>О зале</a>
               <a>Католог секций</a>
               <a>Тренера</a>
               <a>Галерея</p>
            </div>
            <div class="four_section">
               <a>Адрес: Фитнес Центр Мега Спорт, Бишкек, Киргизия</a>
               <a>Телефон: +(998) 23-45-67</a>
               <a>График работы: 10:00 - 20:00</a>
               <a>E-mail: megasport@sport.ru</a>
            </div>
         </div>
      </div>
   </div>
</body>
</html>
<?php /**PATH D:\laravel\blog\resources\views/main.blade.php ENDPATH**/ ?>