<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Отель с ценами");
define('VUEJS_DEBUG', true);
\Bitrix\Main\UI\Extension::load("ui.vue");
\Bitrix\Main\UI\Extension::load("ui.vue.vuex");
?>

<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;600;700&display=swap" rel="stylesheet">

<style>
.b-ph-block {
  position: relative;
}
.b-ph {
  overflow: hidden;
}
.b-ph-content {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  transition: opacity 0.5s ease;
  -webkit-transition: opacity 0.5s ease;
  -moz-transition: opacity 0.5s ease;
  -ms-transition: opacity 0.5s ease;
  opacity: 0;
  -webkit-opacity: 0;
  -moz-opacity: 0;
  z-index: 0;
}
.b-ph-header-gallery {
  height: 600px;
  border-radius: 10px;
  background-color: #f2f2f2;
}
.b-ph-filter {
  background-color: #f2f2f2;
  border-radius: 10px;
  height: 120px;
  margin: -60px calc( (100% - 15px * 2) / 12 ) 45px;
  border: 1px solid #fff;
}
.b-ph-preview {
  margin: 0 calc( (100% - 15px * 2) / 12 );
  display: flex;
  justify-content: space-between;
}
.b-ph-preview div {
  padding-top: calc( (100% - 5 * 30px) / 6 * .56 );
  background-color: #f2f2f2;
  border-radius: 10px;
  width: calc( (100% - 5 * 30px) / 6 );
}
@media( max-width: 991px ) {
  .b-ph-preview div {
    padding-top: calc( (100% - 2 * 30px) / 3 * .56 );
    width: calc( (100% - 2 * 30px) / 3 );
  }
  .b-ph-preview div:nth-child(1),
  .b-ph-preview div:nth-child(2),
  .b-ph-preview div:nth-child(3) {
    display: none;
  }
}
@media( max-width: 767px ) {
  .b-ph {
    margin: 0 -23px;
  }
  .b-ph-header-gallery {
    border-radius: 0;
    margin: 0;
  }
  .b-ph-filter {
    margin: -60px 23px 45px;
  }
  .b-ph-preview {
    margin: 0 23px;
  }
  .b-ph-preview div {
    padding-top: calc( (100% - 30px) / 2 * .56 );
    width: calc( (100% - 30px) / 2 );
  }
  .b-ph-preview div:nth-child(1),
  .b-ph-preview div:nth-child(2),
  .b-ph-preview div:nth-child(3),
  .b-ph-preview div:nth-child(4) {
    display: none;
  }
}
</style>

<link href="style.css" rel="stylesheet">
<link href="swiper.min.css" rel="stylesheet">

<div class="b-breadcrumbs">
  <a href="">Главная</a> / <a href="">Страны</a> / <a href="">Мальдивы</a> / Four Seasons Resort Maldives at Landaa Giravaru 5*
</div>

<div class="b-hotel b-ph-block" itemscope itemtype="https://schema.org/Hotel">
  <div class="b-ph">
    <div class="b-ph-header-gallery"></div>
    <div class="b-ph-filter"></div>
    <div class="b-ph-preview">
      <div></div>
      <div></div>
      <div></div>
      <div></div>
      <div></div>
      <div></div>
    </div>
  </div>
  <div class="b-ph-content">

    <div class="b-header-gallery" style="background-image: url('images/1.jpg');">
      <div class="b-header-gallery__shadow"></div>
      <div class="b-header-gallery__icon" style="background-image: url('images/gallery-icon.svg');"></div>
      <div class="b-header-gallery__text">
        <h1><span itemprop="name">Four Seasons Resort Maldives at Landaa Giravaru</span> <span itemprop="starRating" itemscope itemtype="https://schema.org/Rating"><meta itemprop="ratingValue" content="5">5*</span></h1>
        <div class="b-header-gallery__stars stars-5" style="background-image: url('images/star.svg');"></div>
        <div class="b-header-gallery__label label-deluxe">Deluxe</div>
      </div>
    </div>

    <div class="b-modal b-gallery-modal">
      <div class="b-modal__content">
        <div class="b-modal__close"></div>
        <div class="swiper-container">
          <div class="swiper-wrapper">
            <div class="swiper-slide swiper-lazy" data-background="./images/1.jpg">
              <img data-src="./images/1.jpg" alt="" class="swiper-lazy">
              <div class="swiper-lazy-preloader"></div>
            </div>
            <div class="swiper-slide swiper-lazy" data-background="./images/2.jpg">
              <img data-src="./images/2.jpg" alt="" class="swiper-lazy">
              <div class="swiper-lazy-preloader"></div>
            </div>
            <div class="swiper-slide swiper-lazy" data-background="./images/3.jpg">
              <img data-src="./images/3.jpg" alt="" class="swiper-lazy">
              <div class="swiper-lazy-preloader"></div>
            </div>
            <div class="swiper-slide swiper-lazy" data-background="./images/4.jpg">
              <img data-src="./images/4.jpg" alt="" class="swiper-lazy">
              <div class="swiper-lazy-preloader"></div>
            </div>
            <div class="swiper-slide swiper-lazy" data-background="./images/1.jpg">
              <img data-src="./images/1.jpg" alt="" class="swiper-lazy">
              <div class="swiper-lazy-preloader"></div>
            </div>
            <div class="swiper-slide swiper-lazy" data-background="./images/2.jpg">
              <img data-src="./images/2.jpg" alt="" class="swiper-lazy">
              <div class="swiper-lazy-preloader"></div>
            </div>
            <div class="swiper-slide swiper-lazy" data-background="./images/3.jpg">
              <img data-src="./images/3.jpg" alt="" class="swiper-lazy">
              <div class="swiper-lazy-preloader"></div>
            </div>
            <div class="swiper-slide swiper-lazy" data-background="./images/4.jpg">
              <img data-src="./images/4.jpg" alt="" class="swiper-lazy">
              <div class="swiper-lazy-preloader"></div>
            </div>
          </div>
          <div class="swiper-button-next" style="background-image: url('images/arrow-white.svg');"></div>
          <div class="swiper-button-prev" style="background-image: url('images/arrow-white.svg');"></div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-sm-10 col-sm-offset-1">

        <div id="hotelFilter" class="b-hotel-filter">
          <span>Для отеля Four Seasons Resort Maldives at Landaa Giravaru 5* доступны пакетные цены</span>
          <div class="b-button">Посмотреть цены</div>
        </div>

        <div id="hotelRequest" class="b-hotel-filter">
          <span>Отель Four Seasons Resort Maldives at Landaa Giravaru 5* доступен под запрос.</span>
          <div class="b-button">Отправить запрос</div>
        </div>

        <div class="row b-hotel-preview" itemprop="photo">
          <div class="col-md-2 col-sm-4 col-xs-6">
            <div class="b-hotel-preview__item">
              <div class="b-hotel-preview__img" style="background-image: url('images/1.jpg');"></div>
              <div class="b-hotel-preview__icon" style="background-image: url('images/gallery-icon.svg');"></div>
            </div>
          </div>
          <div class="col-md-2 col-sm-4 col-xs-4 hidden-sm hidden-xs">
            <div class="b-hotel-preview__item">
              <div class="b-hotel-preview__img" style="background-image: url('images/2.jpg');"></div>
              <div class="b-hotel-preview__icon" style="background-image: url('images/gallery-icon.svg');"></div>
            </div>
          </div>
          <div class="col-md-2 col-sm-4 col-xs-4 hidden-xs">
            <div class="b-hotel-preview__item">
              <div class="b-hotel-preview__img" style="background-image: url('images/3.jpg');"></div>
              <div class="b-hotel-preview__icon" style="background-image: url('images/gallery-icon.svg');"></div>
            </div>
          </div>
          <div class="col-md-2 col-sm-4 col-xs-4 hidden-sm hidden-xs">
            <div class="b-hotel-preview__item">
              <div class="b-hotel-preview__img" style="background-image: url('images/4.jpg');"></div>
              <div class="b-hotel-preview__icon" style="background-image: url('images/gallery-icon.svg');"></div>
            </div>
          </div>
          <div class="col-md-2 col-sm-4 col-xs-4 hidden-sm hidden-xs">
            <div class="b-hotel-preview__item">
              <div class="b-hotel-preview__img" style="background-image: url('images/1.jpg');"></div>
              <div class="b-hotel-preview__icon" style="background-image: url('images/gallery-icon.svg');"></div>
            </div>
          </div>
          <div class="col-md-2 col-sm-4 col-xs-6">
            <div class="b-hotel-preview__item">
              <div class="b-hotel-preview__img" style="background-image: url('images/2.jpg');"></div>
              <div class="b-hotel-preview__num"><span>+50</span></div>
            </div>
          </div>
        </div>

        <div class="row b-hotel-description" itemprop="description">
          <div class="col-sm-6">
            <p>Богатый интерьер отеля напоминает джунгли. В отеле работает 4 ресторана. К услугам гостей наземные номера с собственным выходом на пляж, бассейном, душем на открытом воздухе и пышным собственным садом, а также виллы на воде с французскими окнами, откуда открывается панорамный вид на Индийский океан, просторной террасой для загара, душем под открытым небом и гамаками для отдыха над водой. В аюрведическом спа-центре Retreat, удостоенном множества наград, предлагаются занятия антигравитационной йогой, процедура панчакарма, вечерняя спа-процедура, а также здесь работает парикмахерский салон Rossano Ferretti. Во всех 4 ресторанах и барах подаются аюрведические блюда. Кроме того, гости смогут поплавать с мантами и китовыми акулами или поучаствовать в проектах по выращиванию коралловых рифов и реабилитации черепах в центре Marine Discovery. В отеле также организуются занятия кайтсерфингом, флайбордингом и парасейлингом.</p>
          </div>
          <div class="col-sm-6">
            <h3>В отеле</h3>
            <p>102 виллы, 4 ресторана, 3 бара, 2 открытых бассейн, спа-центр, салон красоты, 3 конференц-зала, WI-FI доступ в Интернет, детский клуб, услуги няни, услуги консьержа.</p>
            <h3>Расположение</h3>
            <p>Курортный отель Four Seasons Maldives с лагуной длиной 2 км расположен на атолле Баа, на территории мирового биосферного заповедника, который является объектом культурного наследия ЮНЕСКО.Для гостей предлагается трансфер от международного аэропорта Мале на гидросамолете продолжительностью 30 минут.</p>
          </div>
        </div>

        <div class="b-hotel-map">
            <div class="b-hotel-map__icon" style="background-image: url('./images/placemark.svg')"></div>
            <div class="b-hotel-map__content">Отель Four Seasons Resort Maldives at Landaa Giravaru 5* на карте</div>
        </div>

        <div class="b-modal b-map-modal">
          <div class="b-modal__content">
            <div class="b-modal__close"></div>
          </div>
        </div>
        
        <div id="hotelMap" class="yandex-map"></div>
        
      </div>
    </div>


    <div class="b-hotel-rooms">

      <div style="background-image: url( '/for-business/images/right-arrow.svg' );" id="roomsSwiperNext" tabindex="0" role="button" aria-label="Next slide" aria-disabled="true"></div>
      <div style="background-image: url( '/for-business/images/left-arrow.svg' );" id="roomsSwiperPrev" tabindex="0" role="button" aria-label="Previous slide" aria-disabled="false"></div>
      
      <div class="row">
        <div class="col-sm-10 col-sm-offset-1 b-hotel-rooms__heading">
          <h3 class="i-size-S">
            <span class="b-heading-content">Номера</span>
            <span href="#"class="b-heading-dropdown">
              <a href="">на
                <span class="b-heading-dropdown-title">1 ночь</span>
              </a>
              <span class="b-heading-dropdown-body">
                <a href="/markup/hotel-prices/rooms-data.json">1 ночь</a>
                <a href="/markup/hotel-prices/rooms-data.json">7 ночей</a>
                <a href="/markup/hotel-prices/rooms-data.json">10 ночей</a>
              </span>
            </span>
          </h3>
          
          <div class="b-hotel-currencies b-hotel-currencies--1">
            <div class="b-hotel-currencies__bg"></div>
            <div class="b-hotel-currencies__heading">Валюта</div>
            <div class="b-hotel-currencies__item1" data-code="dollar">$</div>
            <div class="b-hotel-currencies__item2" data-code="euro">&euro;</div>
            <div class="b-hotel-currencies__item3" data-code="ruble">&#8381;</div>
          </div>
        </div>
      </div>

      <div class="swiper-container">

        <div class="swiper-wrapper">
          <div class="swiper-slide">

            <div class="b-room-card" data-id="1" itemprop="containsPlace" itemscope itemtype="https://schema.org/HotelRoom">
              <div class="b-room-card__image" itemprop="image" style="background-image: url(images/1.jpg)"></div>
              <div class="b-room-card__body">
                <div class="b-room-card__collapsed">
                  <div class="b-room-card__header" itemprop="name">Oceanfront bungalow with pool (ex. Beach bungalow with pool) (75 кв. м)</div>
                  <div class="b-room-card__text" itemprop="description">
                    Питание: <b>Bb</b>
                    <br>
                    <br>
                    Состоит из двух павильонов, объединенных террасой (400 кв. м) со спуском в воду, открытым персональным бассейном (36 кв. м) и обеденным павильоном на открытом воздухе. Гостиная с обеденной зоной, мини-кухня, 3 спальни (одна – с кроватью king-size, две – с двумя отдельными кроватями), 3 гардеробные, 3 ванные комнаты (каждая – с ванной, душем и душем на открытом воздухе), гостевой туалет. Две спальни находятся на сваях над водой, одна – на берегу. Расположены на северо-восточном побережье острова. Панорамный вид на океан. Почему он используется? Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться. Lorem Ipsum используют потому, что тот обеспечивает более или менее стандартное заполнение шаблона, а также реальное распределение букв и пробелов в абзацах, которое не получается при простой дубликации "Здесь ваш текст.. Здесь ваш текст.. Здесь ваш текст.." Многие программы электронной вёрстки и редакторы HTML используют Lorem Ipsum в качестве текста по умолчанию, так что поиск по ключевым словам "lorem ipsum" сразу показывает, как много веб-страниц всё ещё дожидаются своего настоящего рождения. За прошедшие годы текст Lorem Ipsum получил много версий. Некоторые версии появились по ошибке, некоторые - намеренно (например, юмористические варианты).
                  </div>
                </div>
                <div class="b-room-card__collapsed-button"></div>
                <div class="b-room-card__price" itemprop="makesOffer" itemscope itemtype="https://schema.org/Offer">
                  <b itemprop="price">80 612.92 руб</b>
                  <span><span itemprop="unitCode" content="DAY" class="b-room-card__days">1 ночь</span> dbl</span>
                </div>
                <input type="hidden" name="price" value="80612.92">
                <input type="hidden" name="days" value="1">
                <div class="text-center">
                  <div class="b-button">Отправить заявку</div>
                </div>
              </div>
            </div>

          </div>
          <div class="swiper-slide">

            <div class="b-room-card" data-id="2" itemprop="containsPlace" itemscope itemtype="https://schema.org/HotelRoom">
              <div class="b-room-card__image" itemprop="image" style="background-image: url(images/2.jpg)"></div>
              <div class="b-room-card__body">
                <div class="b-room-card__collapsed">
                  <div class="b-room-card__header">Oceanfront bungalow with pool (ex. Beach bungalow with pool) (75 кв. м)</div>
                </div>
                <div class="b-room-card__collapsed-button--invisible"></div>
                <div class="b-room-card__price" itemprop="makesOffer" itemscope itemtype="https://schema.org/Offer">
                  <b itemprop="price">80 612.92 руб</b>
                  <span><span itemprop="unitCode" content="DAY" class="b-room-card__days">1 ночь</span> dbl</span>
                </div>
                <input type="hidden" name="price" value="80612.92">
                <input type="hidden" name="days" value="1">
                <div class="text-center">
                  <div class="b-button">Отправить заявку</div>
                </div>
              </div>
            </div>
            
          </div>
          <div class="swiper-slide">
          
            <div class="b-room-card" data-id="3" itemprop="containsPlace" itemscope itemtype="https://schema.org/HotelRoom">
              <div class="b-room-card__image" itemprop="image" style="background-image: url(images/3.jpg)"></div>
              <div class="b-room-card__body">
                <div class="b-room-card__collapsed">
                  <div class="b-room-card__header" itemprop="name">Oceanfront bungalow with pool (ex. Beach bungalow with pool) (75 кв. м)</div>
                  <div class="b-room-card__text" itemprop="description">
                    Питание: <b>Bb</b>
                    <br>
                    <br>
                    Частный сад (91 кв. м), терраса с открытым персональным бассейном и гостиным павильоном на открытом воздухе, спальня с кроватью king-size или двумя отдельными кроватями, ванная комната с ванной и душевой кабиной, душ на открытом воздухе. Расположены в северной части острова. Вид на сад и океан.
                  </div>
                </div>
                <div class="b-room-card__collapsed-button"></div>
                <div class="b-room-card__price" itemprop="makesOffer" itemscope itemtype="https://schema.org/Offer">
                  <b itemprop="price">180 612.92 руб</b>
                  <span><span itemprop="unitCode" content="DAY" class="b-room-card__days">1 ночь</span> dbl</span>
                </div>
                <input type="hidden" name="price" value="180612.92">
                <input type="hidden" name="days" value="1">
                <div class="text-center">
                  <div class="b-button">Отправить заявку</div>
                </div>
              </div>
            </div>

          </div>
          <div class="swiper-slide">
          
            <div class="b-room-card" data-id="4" itemprop="containsPlace" itemscope itemtype="https://schema.org/HotelRoom">
              <div class="b-room-card__image" itemprop="image" style="background-image: url(images/4.jpg)"></div>
              <div class="b-room-card__body">
                <div class="b-room-card__collapsed">
                  <div class="b-room-card__header" itemprop="name">Oceanfront bungalow with pool (ex. Beach bungalow with pool) (75 кв. м)</div>
                  <div class="b-room-card__text" itemprop="description">
                    Питание: <b>Bb</b>
                    <br>
                    <br>
                    Частный сад (91 кв. м), терраса с открытым персональным бассейном и гостиным павильоном на открытом воздухе, спальня с кроватью king-size или двумя отдельными кроватями, ванная комната с ванной и душевой кабиной, душ на открытом воздухе. Расположены в северной части острова. Вид на сад и океан.
                  </div>
                </div>
                <div class="b-room-card__collapsed-button"></div>
                <div class="b-room-card__price" itemprop="makesOffer" itemscope itemtype="https://schema.org/Offer">
                  <b itemprop="price">180 612.92 руб</b>
                  <span><span itemprop="unitCode" content="DAY" class="b-room-card__days">1 ночь</span> dbl</span>
                </div>
                <input type="hidden" name="price" value="180612.92">
                <input type="hidden" name="days" value="1">
                <div class="text-center">
                  <div class="b-button">Отправить заявку</div>
                </div>
              </div>
            </div>

          </div>
          <div class="swiper-slide">
          
            <div class="b-room-card" data-id="5" itemprop="containsPlace" itemscope itemtype="https://schema.org/HotelRoom">
              <div class="b-room-card__image" itemprop="image" style="background-image: url(images/5.jpg)"></div>
              <div class="b-room-card__body">
                <div class="b-room-card__collapsed">
                  <div class="b-room-card__header" itemprop="name">Oceanfront bungalow with pool (ex. Beach bungalow with pool) (75 кв. м)</div>
                  <div class="b-room-card__text" itemprop="description">
                    Питание: <b>Bb</b>
                    <br>
                    <br>
                    Частный сад (91 кв. м), терраса с открытым персональным бассейном и гостиным павильоном на открытом воздухе, спальня с кроватью king-size или двумя отдельными кроватями, ванная комната с ванной и душевой кабиной, душ на открытом воздухе. Расположены в северной части острова. Вид на сад и океан.
                  </div>
                </div>
                <div class="b-room-card__collapsed-button"></div>
                <div class="b-room-card__price" itemprop="makesOffer" itemscope itemtype="https://schema.org/Offer">
                  <b itemprop="price">180 612.92 руб</b>
                  <span><span itemprop="unitCode" content="DAY" class="b-room-card__days">1 ночь</span> dbl</span>
                </div>
                <input type="hidden" name="price" value="180612.92">
                <input type="hidden" name="days" value="1">
                <div class="text-center">
                  <div class="b-button">Отправить заявку</div>
                </div>
              </div>
            </div>

          </div>
          <div class="swiper-slide">
          
            <div class="b-room-card" data-id="7" itemprop="containsPlace" itemscope itemtype="https://schema.org/HotelRoom">
              <div class="b-room-card__image" itemprop="image" style="background-image: url(images/7.jpg)"></div>
              <div class="b-room-card__body">
                <div class="b-room-card__collapsed">
                  <div class="b-room-card__header" itemprop="name">Oceanfront bungalow with pool (ex. Beach bungalow with pool) (75 кв. м)</div>
                  <div class="b-room-card__text" itemprop="description">
                    Питание: <b>Bb</b>
                    <br>
                    <br>
                    Частный сад (91 кв. м), терраса с открытым персональным бассейном и гостиным павильоном на открытом воздухе, спальня с кроватью king-size или двумя отдельными кроватями, ванная комната с ванной и душевой кабиной, душ на открытом воздухе. Расположены в северной части острова. Вид на сад и океан.
                  </div>
                </div>
                <div class="b-room-card__collapsed-button"></div>
                <div class="b-room-card__price" itemprop="makesOffer" itemscope itemtype="https://schema.org/Offer">
                  <b itemprop="price">180 612.92 руб</b>
                  <span><span itemprop="unitCode" content="DAY" class="b-room-card__days">1 ночь</span> dbl</span>
                </div>
                <input type="hidden" name="price" value="180612.92">
                <input type="hidden" name="days" value="1">
                <div class="text-center">
                  <div class="b-button">Отправить заявку</div>
                </div>
              </div>
            </div>

          </div>
          <div class="swiper-slide">
          
            <div class="b-room-card" data-id="8" itemprop="containsPlace" itemscope itemtype="https://schema.org/HotelRoom">
              <div class="b-room-card__image" itemprop="image" style="background-image: url(images/8.jpg)"></div>
              <div class="b-room-card__body">
                <div class="b-room-card__collapsed">
                  <div class="b-room-card__header" itemprop="name">Oceanfront bungalow with pool (ex. Beach bungalow with pool) (75 кв. м)</div>
                  <div class="b-room-card__text" itemprop="description">
                    Питание: <b>Bb</b>
                    <br>
                    <br>
                    Частный сад (91 кв. м), терраса с открытым персональным бассейном и гостиным павильоном на открытом воздухе, спальня с кроватью king-size или двумя отдельными кроватями, ванная комната с ванной и душевой кабиной, душ на открытом воздухе. Расположены в северной части острова. Вид на сад и океан.
                  </div>
                </div>
                <div class="b-room-card__collapsed-button"></div>
                <div class="b-room-card__price" itemprop="makesOffer" itemscope itemtype="https://schema.org/Offer">
                  <b itemprop="price">180 612.92 руб</b>
                  <span><span itemprop="unitCode" content="DAY" class="b-room-card__days">1 ночь</span> dbl</span>
                </div>
                <input type="hidden" name="price" value="180612.92">
                <input type="hidden" name="days" value="1">
                <div class="text-center">
                  <div class="b-button">Отправить заявку</div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>

    </div>

    <div class="b-two-blocks">

      <div class="b-two-blocks__item b-hotel-included">
        <b>Включено</b>
        <ul>
          <li itemprop="amenityFeature" itemscope itemtype="https://schema.org/LocationFeatureSpecification"><span itemprop="name">Проживание выбранное количество ночей;<span><meta itemprop="value" content="True"></li>
          <li itemprop="amenityFeature" itemscope itemtype="https://schema.org/LocationFeatureSpecification"><span itemprop="name">Трехразовое питание.<span><meta itemprop="value" content="True"></li>
        </ul>
        <b>Дополнительно оплачивается</b>
        <ul>
          <li itemprop="amenityFeature" itemscope itemtype="https://schema.org/LocationFeatureSpecification"><span itemprop="name">Международный авиаперелет;<span><meta itemprop="value" content="True"></li>
          <li itemprop="amenityFeature" itemscope itemtype="https://schema.org/LocationFeatureSpecification"><span itemprop="name">Трансферы;<span><meta itemprop="value" content="True"></li>
          <li itemprop="amenityFeature" itemscope itemtype="https://schema.org/LocationFeatureSpecification"><span itemprop="name">Обязательные доплаты на Новогодние и праздничные ужины;<span><meta itemprop="value" content="True"></li>
          <li itemprop="amenityFeature" itemscope itemtype="https://schema.org/LocationFeatureSpecification"><span itemprop="name">Медицинская страховка;<span><meta itemprop="value" content="True"></li>
          <li itemprop="amenityFeature" itemscope itemtype="https://schema.org/LocationFeatureSpecification"><span itemprop="name">Страховка от невыезда.<span><meta itemprop="value" content="True"></li>
        </ul>
      </div>

      <div class="b-two-blocks__item b-hotel-special-offer">
        <h3>Спецпредложение</h3>
        <p>Забронируйте от 4 до 6 ночей и получите 10% скидку на стоимость проживания. Забронируйте от 7 ночей и более и получите 15% скидку на стоимость проживания (учтено в стоимости). ПЛЮС в подарок бесплатное повышение типа питания до полупансиона (завтрак и ужин).<br>&ellipsis;</p>
        <div class="b-button">Отправить заявку</div>
      </div>
    </div>
    
    <div class="b-hotel-table" id="hotelTable">
      <h3>Niyama Private Islands (BB, Beach Villa)</h3>
      <div class="table-responsive">
        <table class="table">
          <thead>
            <tr>
              <th>Категория номера</th>
              <th>Питание</th>
              <th>Ночей</th>
              <th>1/2 dbl</th>
              <th>SGL</th>
              <th>Доплата<br>за ребенка (2-11)</th>
              <th>Доплата<br>за ребенка (0-1)</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Oceanfront bungalow with pool</td>
              <td>Bb</td>
              <td>1</td>
              <td>134 572.30 руб.</td>
              <td>122 844.72 руб.</td>
              <td>268 643.13 руб</td>
              <td>268 643.13 руб</td>
            </tr>
            <tr>
              <td>Oceanfront bungalow with pool</td>
              <td>Bb</td>
              <td>1</td>
              <td>134 572.30 руб.</td>
              <td>122 844.72 руб.</td>
              <td>268 643.13 руб</td>
              <td>268 643.13 руб</td>
            </tr>
            <tr>
              <td>Oceanfront bungalow with pool</td>
              <td>Bb</td>
              <td>1</td>
              <td>134 572.30 руб.</td>
              <td>122 844.72 руб.</td>
              <td>268 643.13 руб</td>
              <td>268 643.13 руб</td>
            </tr>
          </tbody>
        </table>
      </div>
      
      <h3>Four Seasons Resort Maldives at Landaa Giravaru (BB, Sunrise Water Villa with Pool)</h3>
      <div class="table-responsive">
        <table class="table">
          <thead>
            <tr>
              <th>Категория номера</th>
              <th>Питание</th>
              <th>Ночей</th>
              <th>1/2 dbl</th>
              <th>SGL</th>
              <th>Доплата<br>за ребенка (2-11)</th>
              <th>Доплата<br>за ребенка (0-1)</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Oceanfront bungalow with pool</td>
              <td>Bb</td>
              <td>1</td>
              <td>134 572.30 руб.</td>
              <td>122 844.72 руб.</td>
              <td>268 643.13 руб</td>
              <td>268 643.13 руб</td>
            </tr>
            <tr>
              <td>Oceanfront bungalow with pool</td>
              <td>Bb</td>
              <td>1</td>
              <td>134 572.30 руб.</td>
              <td>122 844.72 руб.</td>
              <td>268 643.13 руб</td>
              <td>268 643.13 руб</td>
            </tr>
            <tr>
              <td>Oceanfront bungalow with pool</td>
              <td>Bb</td>
              <td>1</td>
              <td>134 572.30 руб.</td>
              <td>122 844.72 руб.</td>
              <td>268 643.13 руб</td>
              <td>268 643.13 руб</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    
    <div id="hotelForm">
      <h3>Выберите дату и тип отеля</h3>
    </div>

    <div class="b-hotel-similar">
      <h3 class="b-tags-block">
        <span>Похожие варианты</span>
        <a href="" class="b-tag">Лучшие отели Мальдив</a>
        <a href="" class="b-tag">Пятизвездочные отели на Мальдивах</a>
        <a href="" class="b-tag">Люкс курорты</a>
        <a href="" class="b-tag">Лучшие отели Мальдив</a>
        <a href="" class="b-tag">Пятизвездочные отели на Мальдивах</a>
        <a href="" class="b-tag">Лучшие отели Мальдив</a>
        <a href="" class="b-tag">Пятизвездочные отели на Мальдивах</a>
        <a href="" class="b-tag">Люкс курорты</a>
        <a href="" class="b-tag">Лучшие отели Мальдив</a>
        <a href="" class="b-tag">Пятизвездочные отели на Мальдивах</a>
        <a href="" class="b-tag">Лучшие отели Мальдив</a>
        <a href="" class="b-tag">Пятизвездочные отели на Мальдивах</a>
        <a href="" class="b-tag">Люкс курорты</a>
        <a href="" class="b-tag">Лучшие отели Мальдив</a>
        <a href="" class="b-tag">Пятизвездочные отели на Мальдивах</a>
      </h3>
        
      <div class="b-hotel-card-block">
        <div class="b-hotel-card">
          <a href="" class="b-hotel-card__img" style="background-image: url('./images/1.jpg');"></a>
          <a href="" class="b-hotel-card__title">Kudadoo Maldives Private Island 5*</a>
          <div class="b-hotel-card__price">115 796.74 руб.</div>
          <div class="b-hotel-card__days">1 ночь</div>
        </div>
        
        <div class="b-hotel-card">
          <a href="" class="b-hotel-card__img" style="background-image: url('./images/2.jpg');"></a>
          <a href="" class="b-hotel-card__title">Kudadoo Maldives Private Kudadoo Maldives Private Island 5*</a>
          <div class="b-hotel-card__price">115 796.74 руб.</div>
          <div class="b-hotel-card__days">1 ночь</div>
        </div>
        
        <div class="b-hotel-card">
          <a href="" class="b-hotel-card__img" style="background-image: url('./images/3.jpg');"></a>
          <a href="" class="b-hotel-card__title">Kudadoo Maldives Private Private Island 5*</a>
          <div class="b-hotel-card__price">115 796.74 руб.</div>
          <div class="b-hotel-card__days">1 ночь</div>
        </div>
        
        <div class="b-hotel-card">
          <a href="" class="b-hotel-card__img" style="background-image: url('./images/4.jpg');"></a>
          <a href="" class="b-hotel-card__title">Kudadoo Maldives Private Island 5*</a>
          <div class="b-hotel-card__price">115 796.74 руб.</div>
          <div class="b-hotel-card__days">1 ночь</div>
        </div>
        
        <div class="b-hotel-card">
          <a href="" class="b-hotel-card__img" style="background-image: url('./images/3.jpg');"></a>
          <a href="" class="b-hotel-card__title">Kudadoo Maldives Private Island 5*</a>
          <div class="b-hotel-card__price">115 796.74 руб.</div>
          <div class="b-hotel-card__days">1 ночь</div>
        </div>
        
        <div class="b-hotel-card">
          <a href="" class="b-hotel-card__img" style="background-image: url('./images/2.jpg');"></a>
          <a href="" class="b-hotel-card__title">Kudadoo Maldives Private Island 5*</a>
          <div class="b-hotel-card__price">115 796.74 руб.</div>
          <div class="b-hotel-card__days">1 ночь</div>
        </div>

      </div>
    </div>

    <div class="b-hotel-message">
      <div class="b-hotel-message__img" style="background-image: url('./images/1.jpg');"></div>
      <div class="b-hotel-message__form">
        <h3 class="text-center">Отправить заявку</h3>
        <script data-b24-form="inline/3/9y3ql4" data-skip-moving="true">
          (function(w,d,u){
            var s=d.createElement('script');s.async=true;s.src=u+'?'+(Date.now()/180000|0);
            var h=d.getElementsByTagName('script')[0];h.parentNode.insertBefore(s,h);
          })(window,document,'https://cdn-ru.bitrix24.ru/b16538936/crm/form/loader_3.js');
        </script>
      </div>
    </div>

    <div class="b-hotel-recommend" style="background-image: url('./images/2.jpg');">
      <div class="b-hotel-recommend__text">
        <h3>Рекомендуем лучшие тропические отели</h3>
        <p>Рекомендуем лучшие тропические отели во всех регионах мира. Пять, четыре звезды с премиальным обслуживанием.</p>
        <a href="" class="b-button">Подробнее</a>
      </div>
    </div>
  
  </div>
</div>

<script src="swiper.min.js"></script>
<script src="scrollTo.js"></script>
<script src="script.js"></script>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>