<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="/css/app.css">
   @section('title','Mega Sport')
   <link href="https://fonts.googleapis.com/css2?family=Yanone+Kaffeesatz:wght@300&display=swap" rel="stylesheet">
</head>
<div class="fon"></div>
<body>
   <div class="welcome">
      <div class="container">
         <div class="main">
            <div class="first" id="main">
                  @include('layouts.master')
                  @section('navbar')
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
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti dignissimos velit repellat voluptatem minus possimus? Id magnam iure, amet libero, impedit ipsam omnis voluptatem iusto dolore reiciendis molestias rerum? Ad.
                     </li>
                     <li>
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vero, facilis labore neque minima iure, voluptatibus modi expedita dicta ad praesentium voluptate atque. Porro error sapiente impedit quos?
                     </li>
                     <li>
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolores, in cumque aliquid magni officiis quidem eaque nihil quaerat earum nisi deleniti ratione vel eligendi vitae facere praesentium error recusandae a optio alias laboriosam. Voluptatem veritatis ipsum, laudantium non reprehenderit iure provident aperiam rem.
                     </li>
                     <li>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi, asperiores laboriosam officia, dolor consectetur, in ducimus dolore rem quos reiciendis corporis. Aliquam?
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
                  <div>
                     <img src="https://www.flaticon.com/svg/vstatic/svg/2119/2119034.svg?token=exp=1611002873~hmac=8bd7dbe65eb89d7ae634e0a499b2e422" alt="">
                     <h3>Restling</h3>
                     <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum iste beatae qui, iure possimus natus quidem molestias esse odio tempora!</p>
                     <button>Подробнее</button>
                  </div>
                  <div>
                     <img src="https://www.flaticon.com/svg/vstatic/svg/2119/2119060.svg?token=exp=1611003202~hmac=270e4072908119bb5fda9244858038ea" alt="">
                     <h3>Fitness</h3>
                     <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum iste beatae qui, iure possimus natus quidem molestias esse odio tempora!</p>
                     <button>Подробнее</button>
                  </div>
                  <div>
                     <img src="https://www.flaticon.com/svg/vstatic/svg/2119/2119053.svg?token=exp=1611003354~hmac=64162e572c23a6a9aa4c1f1367bd517f" alt="">
                     <h3>Crossfit</h3>
                     <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum iste beatae qui, iure possimus natus quidem molestias esse odio tempora!</p>
                     <button>Подробнее</button>
                  </div>
                  <div>
                     <img src="https://www.flaticon.com/svg/vstatic/svg/2119/2119051.svg?token=exp=1611002879~hmac=9242df375096180c379c30851074f759" alt="">
                     <h3>Powerlifting</h3>
                     <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum iste beatae qui, iure possimus natus quidem molestias esse odio tempora!</p>
                     <button>Подробнее</button>
                  </div>
                  <div>
                     <img src="https://www.flaticon.com/svg/vstatic/svg/2119/2119020.svg?token=exp=1611003118~hmac=f6b51f32b0918e48c947bdea53abe683" alt="">
                     <h3>Bodybuilding</h3>
                     <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum iste beatae qui, iure possimus natus quidem molestias esse odio tempora!</p>
                     <button>Подробнее</button>
                  </div>
                  <div>
                     <img src="https://www.flaticon.com/svg/vstatic/svg/2057/2057748.svg?token=exp=1611004118~hmac=6646d9786b6a1630cc32ac74b277d184" alt="">
                     <h3>Armrestling</h3>
                     <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum iste beatae qui, iure possimus natus quidem molestias esse odio tempora!</p>
                     <button>Подробнее</button>
                  </div>
               </div>
            </div>
            <div class="fourth" id="treners">
               <h1 class="h1">Тренера</h1>
               <div>
                  <a href="" class="t1">
                     <div>
                        <p>Анна Ахматова</p>
                        <p class="discription td1">Фитнес тренер для девушек</p>
                     </div>
                  </a>
                  <a href="" class="t2">
                     <div>
                        <p>Ким Юлия</p>
                        <p class="discription">Тренер по бодиблидингу</p>
                     </div>
                  </a>
                  <a href="" class="t3">
                  <div>
                        <p>Генадий Обломов</p>
                        <p class="discription">Тренер по Пауерлифтину</p>
                     </div>
                  </a>
                  <a href="" class="t4">
                     <div>
                        <p>Гарик Саркисян</p>
                        <p class="discription">Фитнес и рестлинг тренер</p>
                     </div>
                  </a>
                  <a href="" class="t5">
                     <div>
                        <p>Артур Досмухамедлв</p>
                        <p class="discription">Тренер по армрестлингу</p>
                     </div>
                  </a>
                  <a href="" class="t6">
                     <div>
                        <p>Маряна Кравец</p>
                        <p class="discription">Фитнес тренер</p>
                     </div>
                  </a>
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
               <div>
                  <div>
                     <p>
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Libero, fuga quisquam delectus in non ratione maxime recusandae consectetur voluptatum, minus modi saepe accusamus dolore aut dicta ab rerum, reprehenderit dolor!
                     </p>
                  </div>
                  <form>
                  <div class="do">
                        <input type="name" placeholder="Вашe имя">
                        <p>*Мы никому не передаем ваши данные. <br> И не сохраняем ваш номер в базу.
                        </p>
                     </div>
                     <div class="re">
                        <input type="phone" placeholder="Ваш телефон">
                        <button>Отправить</button>
                     </div>
                  </form>
               </div>
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
               <a>Район</a>
               <a>Католог секций</a>
               <a>Тренера</a>
            </div>
            <div class="third_section">
               <a>Галерея</p>
               <a>Перечнь услуг</p>
               <a>Контакты</a>
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
