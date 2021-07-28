@extends('layouts.app')
@section('footer', false)

@section('content')
    <div id="regular-page" class="content-container content-container--regular ">

        <nav class="site-navigation">
            <nav class="mg-bt-35">
                <a class="nav-pages" href="{{ route('index') }}">Главная</a>
                <span class="nav-pages__slash">/</span>
                <a class="nav-pages" href="{{ route('contacts') }}">Контакты</a>
            </nav>
        </nav>

        <section class="mg-bt-50">
            <h1 class="section__title mg-bt-35">
                @include('content.contacts.contacts_editor1')
                Контакты
            </h1>
        </section>


    </div>
    <div id="map" style="width: 100%; height: 800px">

        <div id="regular-page" class="content-container content-container--regular ">
            <div class="page-navigation__wrap page-navigation__wrap--map">

                <div class="page-navigation page-navigation--map">

                    <button class="page-navigation__button page-navigation__button--active">
                        <span>
                            г. Москва г. Московский ул. Хабарова д. 2
                        </span>
                    </button>
                    <button class="page-navigation__button">
                        <span>
                            д. Машково, Новомарусинский проезд, д. 10
                        </span>
                    </button>
                    <button class="page-navigation__button">
                        <span>
                            Район, п. Шолоховский, ул. Социалистическая д.7
                        </span>
                    </button>

                </div>
            </div>
        </div>
    </div>
    <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
    <script type="text/javascript">
      ymaps.ready(init);

      function init () {
        var myMap = new ymaps.Map("map", {
          center:[55.593873, 37.351905],
          zoom: 12,
          controls: ['smallMapDefaultSet']
        });

        var myGeoObjects = [];

        // Метка 1
        myGeoObjects[0] = new ymaps.Placemark([55.593873, 37.351905],{
          balloonContentBody: 'Текст в балуне',
        },{
          iconLayout: 'default#image',
          iconImageHref: './assets/img/icons/map.svg',
          iconImageSize: [70, 70],
          iconImageOffset: [-35, -35]
        });

        // Метка 2
        myGeoObjects[1] = new ymaps.Placemark([56.800151390638646,38.61400201562497],{
          balloonContentBody: 'Текст в балуне',
        },{
          iconLayout: 'default#image',
          iconImageHref: './assets/img/address.png',
          iconImageSize: [70, 70],
          iconImageOffset: [-35, -35]
        });

        var clusterer = new ymaps.Clusterer({
          clusterDisableClickZoom: false,
          clusterOpenBalloonOnClick: false,
        });

        clusterer.add(myGeoObjects);
        myMap.geoObjects.add(clusterer);
        // myMap.behaviors.disable('scrollZoom');

      }
    </script>
@endsection
