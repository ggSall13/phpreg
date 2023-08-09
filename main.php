<?php 
session_start();
if (empty($_SESSION['login'])) {
   header ('Location: index.php');
   die();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Кинофокс</title>
   <link rel="stylesheet" href="css.css">
   <link rel="icon" href="img/fox 1.jpg">
</head>
<body>
   <!-- header -->
   <div class="wrapper">
      <header class="header">
         <div class="header__container">
            <div class="header__row">
            <div class="header__logo"><a href="#"><img src="img/fox 1.jpg" alt="logo"></a></div>
            <div class="header__list"><a href="premieres.html">Премьеры</a></div>
            <div class="header__list"><a href="profile.php">Профиль</a></div>
         </div>
         </div>
      </header>
      <!-- header -->

      <!-- о нас -->
  
      <section class="we">
         <div class="container">
            <div class="we__body">
            <div class="we__title"><h1>Кинофокс</h1></div>
            <div class="we__text"><p>Кинофокс - Сеть кинотеатров была образована в 2010 году командой высокопрофессиональных специалистов.</p><p> Полагаясь на опыт и уровень, предлагаемый своему зрителю лучшими кинотеатрами мира, было принято решение создать идеальные условия и для казахстанских зрителей, при которых каждый кинотеатр становится образцом качества в сфере досуга и развлечений.
               </p></div>
            <div class="we__btn"><a href="https://yandex.kz/maps/org/207206982687/?from=tabbar&ll=51.147427%2C43.649966&mode=search&sll=51.147427%2C43.649963&source=serp_navig&text=тц%20астана%20актау&z=14" target="_blank">Мы на карте</a></div>
         </div>
         </div>
      </section>
      <!-- о нас -->
      <!-- У нас -->
      <div class="bgimage">
      <section class="about">
         <div class="container">
            <div class="about__title"><h2>У нас</h2></div>
            <div class="about__row">
               <div class="about__thursday">
                  <div class="thursday__title"><h2>СуперВторник</h2></div>
                  <div class="thursday__text"><p>Каждый вторник покупайте билеты в кино по выгодным ценам:</p>
                     <ul>
                        <li>700 - детский</li>
                        <li>1100 - студенческий</li>
                        <li>1500 - взрослый</li>
                     </ul>
                  </div>
               </div>
               <div class="about__wednesday">
                  <div class="wednesday__title"><h2>По средам</h2></div>
                  <div class="wednesday__text"><p>По средам, при предъявлении студенческого билета, скидка 50% для студентов.</p></div>
               </div>
               <div class="about__birthday">
                  <div class="birthday__title"><h2>Именинникам</h2></div>
                  <div class="birthday__text"><p>Именинникам вход бесплатный при предъявлении удостоверения личности</p></div>
               </div>
            </div>
         </div>
      </section>
      <!--  у нас  -->

      <div class="third">
         <div class="container">
            <div class="third__row">
               <div class="third__image"><img src="img/image 8.png" alt="cinema"></div>
               <div class="third__body">
                  <div class="third__text"><p>2 современных зала, общее количество посадочных мест - 225:</p>
                     <ul>
                        <li>Зал №1 — 125</li>
                        <li>Зал №2 — 105</li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="thirdtwo">
         <div class="container">
            <div class="third__row">
               <div class="thirdtwo__body">
                  <p>Ежедневные показы фильмов, на IMAX - мониторе</p>
                  <!-- modal -->
                  <button id="modalButton">Смотреть премьеры</button>
                  <div class="modalWindow" id="modal">
                     <div class="modal__content">
                        <p>Модальное окно</p>
                        <button class="closeBtn" id="closeButton">&times;</button>
                     </div>
                  </div>
                  <!-- modal -->
               </div>
               <div class="third__image"><img src="img/image 9.png" alt="cinema"></div>
            </div>
         </div>
      </div>
      <footer class="footer">
         <div class="container">
            <div class="footer__row">
               <div class="footer__contacts">
                  <h2>Контакты</h2>
                  <div class="footer__text">
                     <p>+77754252337</p>
                     <p>kinofox14@gmail.com</p>
                     <p>г. Актау, 14-й микрорайон, ТРЦ «Астана», 3-й этаж</p>
                     <p>Ежедневно 10:00 - 00:00</p>
                     <p>© 2023 Все права защишены</p>
                  </div>
               </div>
               <div class="footer__sub">
                  <h2>Подписаться на рассылку</h2>
                  <form action="#" >
                     <input type="email" name="userMail" placeholder="Email">
                     <button type="reset">Подписаться</button>
                  </form>
                  <div class="social__icons">
                     <a href="https://www.instagram.com/" target="_blank"><img src="img/instagram.svg" class="instagram__img social__img" alt="instagram"></a>
                     <a href="https://www.facebook.com/" target="_blank"><img src="img/facebook.svg" class="facebook__img social__img" alt="facebook"></a>
                     <a href="https://vk.com/" target="_blank"><img src="img/vk.svg" class="vk__img social__img" alt="vk"></a>
                  </div>
               </div>
            </div>
         </div>
      </footer>
   </div><!-- bgimage-->
   </div>  <!-- wrapper-->
   <script src="js/script.js">
      
   </script>
</body>
</html>