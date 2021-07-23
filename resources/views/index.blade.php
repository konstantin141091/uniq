<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.1.0/fullpage.min.css" integrity="sha512-RVmrWua3k1yTDEOg4Yzs2bK5+Thh7nM6jrhDq/6/5/Mwa0JbYe4pP4YMK5sqghKz01T3DgrwYc57Jaf1PSurCg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href=" https://unpkg.com/pageable@latest/dist/pageable.min.css ">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/reset.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/helpers.min.css') }}" rel="stylesheet">

    <title>Home</title>
</head>

<body>
{{--кнопка сохранить и токен для отравки--}}
@if(isset(Auth::user()->is_admin))
    <button class="admin-save" id="admin-save">save</button>
@endif
<form action="" id="admin-csrf">
    @csrf
</form>

<div @guest id="fullpage" @endguest>

    <header class="section section-bg-1">
        <div class="pagination">
            <div class="pagination__dot pagination__dot--active"></div>
            <div class="pagination__dot"></div>
            <div class="pagination__dot"></div>
            <div class="pagination__dot"></div>
            <div class="pagination__dot"></div>
            <div class="pagination__dot"></div>
            <div class="pagination__dot"></div>
            <div class="pagination__dot"></div>
            <div class="pagination__dot"></div>
        </div>
        @include('elements.index-header')
        @include('elements.index-popup')

        <div class="content-container">
            <div class="tagline">
                <h1 class="tagline__title title-one ckeditor" @if(isset(Auth::user()->is_admin)) id="index_editor1" data-dir="index" contenteditable="true" @endif>
                    @include('content.index.index_editor1')
                </h1>
                <button class="button"> <span class="button__text">Смотреть каталог</span> </button>
            </div>
        </div>
    </header>



    <div id="crane-switcher" class="section section-bg-2">
        <div class="pagination">
            <div class="pagination__dot pagination__dot--active"></div>
            <div class="pagination__dot"></div>
            <div class="pagination__dot"></div>
            <div class="pagination__dot"></div>
            <div class="pagination__dot"></div>
            <div class="pagination__dot"></div>
            <div class="pagination__dot"></div>
            <div class="pagination__dot"></div>
            <div class="pagination__dot"></div>

        </div>
        @include('elements.index-header')
        @include('elements.index-popup')

        <div class="switch-catalog">
            <div class="switch-catalog__list">
                <button class="list-item list-item--active">
                    <p class="list-item__text ckeditor" @if(isset(Auth::user()->is_admin)) id="index_editor2" data-dir="index" contenteditable="true" @endif>
                        @include('content.index.index_editor2')
                    </p>
                </button>
                <button class="list-item">
                    <p class="list-item__text ckeditor" @if(isset(Auth::user()->is_admin)) id="index_editor3" data-dir="index" contenteditable="true" @endif>
                        @include('content.index.index_editor3')
                    </p>
                </button>
                <button class="list-item">
                    <p class="list-item__text ckeditor" @if(isset(Auth::user()->is_admin)) id="index_editor4" data-dir="index" contenteditable="true" @endif>
                        @include('content.index.index_editor4')
                    </p>
                </button>
                <button class="list-item">
                    <p class="list-item__text ckeditor" @if(isset(Auth::user()->is_admin)) id="index_editor5" data-dir="index" contenteditable="true" @endif>
                        @include('content.index.index_editor5')
                    </p>
                </button>
                <button class="list-item">
                    <p class="list-item__text ckeditor" @if(isset(Auth::user()->is_admin)) id="index_editor6" data-dir="index" contenteditable="true" @endif>
                        @include('content.index.index_editor6')
                    </p>
                </button>
                <button class="list-item">
                    <p class="list-item__text ckeditor" @if(isset(Auth::user()->is_admin)) id="index_editor7" data-dir="index" contenteditable="true" @endif>
                        @include('content.index.index_editor7')
                    </p>
                </button>
            </div>
            <div class="switch-catalog__description">
                <div class="description-item dsp-f">
                    <img class="description-item__img" src="./storage/img/type-of-crane/1.svg" alt="img">
                    <p class="description-item__title ckeditor" @if(isset(Auth::user()->is_admin)) id="index_editor8" data-dir="index" contenteditable="true" @endif>
                        @include('content.index.index_editor8')
                    </p>
                    <p class="description-item__price ckeditor" @if(isset(Auth::user()->is_admin)) id="index_editor9" data-dir="index" contenteditable="true" @endif>
                        @include('content.index.index_editor9')
                    </p>
                    <button class="button"> <span class="button__text">УЗНАТЬ ПОДРОБНЕЕ</span> </button>
                </div>
                <div class="description-item">
                    <img class="description-item__img" src="./storage/img/type-of-crane/2.svg" alt="img">
                    <p class="description-item__title ckeditor" @if(isset(Auth::user()->is_admin)) id="index_editor10" data-dir="index" contenteditable="true" @endif>
                        @include('content.index.index_editor10')
                    </p>
                    <p class="description-item__price ckeditor" @if(isset(Auth::user()->is_admin)) id="index_editor11" data-dir="index" contenteditable="true" @endif>
                        @include('content.index.index_editor11')
                    </p>
                    <button class="button"> <span class="button__text">УЗНАТЬ ПОДРОБНЕЕ</span> </button>
                </div>

                <div class="description-item">
                    <img class="description-item__img" src="./storage/img/type-of-crane/3.svg" alt="img">
                    <p class="description-item__title ckeditor" @if(isset(Auth::user()->is_admin)) id="index_editor12" data-dir="index" contenteditable="true" @endif>
                        @include('content.index.index_editor12')
                    </p>
                    <p class="description-item__price ckeditor" @if(isset(Auth::user()->is_admin)) id="index_editor13" data-dir="index" contenteditable="true" @endif>
                        @include('content.index.index_editor13')
                    </p>
                    <button class="button"> <span class="button__text">УЗНАТЬ ПОДРОБНЕЕ</span> </button>
                </div>
                <div class="description-item">
                    <img class="description-item__img description-item__img--bottom" src="./storage/img/type-of-crane/4.svg" alt="img">
                    <p class="description-item__title ckeditor" @if(isset(Auth::user()->is_admin)) id="index_editor14" data-dir="index" contenteditable="true" @endif>
                        @include('content.index.index_editor14')
                    </p>
                    <p class="description-item__price ckeditor" @if(isset(Auth::user()->is_admin)) id="index_editor15" data-dir="index" contenteditable="true" @endif>
                        @include('content.index.index_editor15')
                    </p>
                    <button class="button"> <span class="button__text">УЗНАТЬ ПОДРОБНЕЕ</span> </button>
                </div>
                <div class="description-item">
                    <img class="description-item__img  description-item__img--bottom" src="./storage/img/type-of-crane/5.svg" alt="img">
                    <p class="description-item__title ckeditor" @if(isset(Auth::user()->is_admin)) id="index_editor16" data-dir="index" contenteditable="true" @endif>
                        @include('content.index.index_editor16')
                    </p>
                    <p class="description-item__price ckeditor" @if(isset(Auth::user()->is_admin)) id="index_editor17" data-dir="index" contenteditable="true" @endif>
                        @include('content.index.index_editor17')
                    </p>
                    <button class="button"> <span class="button__text">УЗНАТЬ ПОДРОБНЕЕ</span> </button>
                </div>
                <div class="description-item">
                    <img class="description-item__img" src="./storage/img/type-of-crane/6.svg" alt="img">
                    <p class="description-item__title ckeditor" @if(isset(Auth::user()->is_admin)) id="index_editor18" data-dir="index" contenteditable="true" @endif>
                        @include('content.index.index_editor18')
                    </p>
                    <p class="description-item__price ckeditor" @if(isset(Auth::user()->is_admin)) id="index_editor19" data-dir="index" contenteditable="true" @endif>
                        @include('content.index.index_editor19')
                    </p>
                    <button class="button"> <span class="button__text">УЗНАТЬ ПОДРОБНЕЕ</span> </button>
                </div>
            </div>
        </div>

        <div class="crane-mobile">
            <div class="crane-mobile__item">
                <img class="description-item__img" src="./storage/img/type-of-crane/1.svg" alt="img">
                <p class="description-item__title ckeditor" id="index_editor20" data-dir="index" contenteditable="true">
                    @include('content.index.index_editor20')
                </p></div>
            <div class="crane-mobile__item">        <img class="description-item__img" src="./storage/img/type-of-crane/2.svg" alt="img">
                <p class="description-item__title ckeditor" id="index_editor21" data-dir="index" contenteditable="true">
                    @include('content.index.index_editor21')
                </p></div>
            <div class="crane-mobile__item">        <img class="description-item__img" src="./storage/img/type-of-crane/3.svg" alt="img">
                <p class="description-item__title ckeditor" id="index_editor22" data-dir="index" contenteditable="true">
                    @include('content.index.index_editor22')
                </p></div>
            <div class="crane-mobile__item">        <img class="description-item__img description-item__img--bottom" src="./storage/img/type-of-crane/4.svg" alt="img">
                <p class="description-item__title ckeditor" id="index_editor23" data-dir="index" contenteditable="true">
                    @include('content.index.index_editor23')
                </p></div>
            <div class="crane-mobile__item">        <img class="description-item__img  description-item__img--bottom" src="./storage/img/type-of-crane/5.svg" alt="img">
                <p class="description-item__title ckeditor" id="index_editor24" data-dir="index" contenteditable="true">
                    @include('content.index.index_editor24')
                </p></div>
            <div class="crane-mobile__item">        <img class="description-item__img" src="./storage/img/type-of-crane/6.svg" alt="img">
                <p class="description-item__title ckeditor" id="index_editor25" data-dir="index" contenteditable="true">
                    @include('content.index.index_editor25')
                </p></div>
        </div>


    </div>



    <div class="section section-bg-3 test">
        <div class="pagination">
            <div class="pagination__dot pagination__dot--active"></div>
            <div class="pagination__dot"></div>
            <div class="pagination__dot"></div>
            <div class="pagination__dot"></div>
            <div class="pagination__dot"></div>
            <div class="pagination__dot"></div>
            <div class="pagination__dot"></div>
            <div class="pagination__dot"></div>
            <div class="pagination__dot"></div>

        </div>
        @include('elements.index-header')
        @include('elements.index-popup')

        <div class="advantages">
            <div class="content-container">
                <div class="mg-bt-35">
                    <h2 class="section__title ckeditor" id="index_editor26" data-dir="index" contenteditable="true">
                        @include('content.index.index_editor26')
                    </h2>
                </div>
                <div class="advantages-box">
                    <div class="dsp-fjc">
                        <div class="advantages-item">

                            <div class="advantages-item__logo"><img src="./storage/img/advantages/shield 1.svg" alt="img"></div>

                            <div class="advantages-box__wrap">
                                <h2 class="advantages-item__title ckeditor" id="index_editor27" data-dir="index" contenteditable="true">
                                    @include('content.index.index_editor27')
                                </h2>
                                <ul class="advantages-item__list">
                                    <li class="ckeditor" id="index_editor28" data-dir="index" contenteditable="true">
                                        @include('content.index.index_editor28')
                                    </li>
                                    <li class="ckeditor" id="index_editor29" data-dir="index" contenteditable="true">
                                        @include('content.index.index_editor29')
                                    </li>
                                    <li class="ckeditor" id="index_editor30" data-dir="index" contenteditable="true">
                                        @include('content.index.index_editor30')
                                    </li>
                                </ul>
                            </div>

                        </div>

                        <div class="advantages-item">
                            <div class="advantages-item__logo"><img src="./storage/img/advantages/shield 2.svg" alt="img"></div>

                            <div class="advantages-box__wrap">
                                <h2 class="advantages-item__title ckeditor" id="index_editor31" data-dir="index" contenteditable="true">
                                    @include('content.index.index_editor31')
                                </h2>
                                <ul class="advantages-item__list">
                                    <li class="ckeditor" id="index_editor32" data-dir="index" contenteditable="true">
                                        @include('content.index.index_editor32')
                                    </li>
                                    <li class="ckeditor" id="index_editor33" data-dir="index" contenteditable="true">
                                        @include('content.index.index_editor33')
                                    </li>
                                    <li class="ckeditor" id="index_editor34" data-dir="index" contenteditable="true">
                                        @include('content.index.index_editor34')
                                    </li>
                                </ul>
                            </div>

                        </div>

                        <div class="advantages-item">

                            <div class="advantages-item__logo"><img src="./storage/img/advantages/shield 3.svg" alt="img"></div>

                            <div class="advantages-box__wrap">
                                <h2 class="advantages-item__title ckeditor" id="index_editor35" data-dir="index" contenteditable="true">
                                    @include('content.index.index_editor35')
                                </h2>
                                <ul class="advantages-item__list">
                                    <li class="ckeditor" id="index_editor36" data-dir="index" contenteditable="true">
                                        @include('content.index.index_editor36')
                                    </li>
                                    <li class="ckeditor" id="index_editor37" data-dir="index" contenteditable="true">
                                        @include('content.index.index_editor37')
                                    </li>
                                    <li class="ckeditor" id="index_editor38" data-dir="index" contenteditable="true">
                                        @include('content.index.index_editor38')
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="advantages-item">

                            <div class="advantages-item__logo"><img src="./storage/img/advantages/shield 4.svg" alt="img"></div>

                            <div class="advantages-box__wrap">
                                <h2 class="advantages-item__title ckeditor" id="index_editor39" data-dir="index" contenteditable="true">
                                    @include('content.index.index_editor39')
                                </h2>
                                <ul class="advantages-item__list">
                                    <li class="ckeditor" id="index_editor40" data-dir="index" contenteditable="true">
                                        @include('content.index.index_editor40')
                                    </li>
                                    <li class="ckeditor" id="index_editor41" data-dir="index" contenteditable="true">
                                        @include('content.index.index_editor41')
                                    </li>
                                    <li class="ckeditor" id="index_editor42" data-dir="index" contenteditable="true">
                                        @include('content.index.index_editor42')
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="advantages-item">
                            <div class="advantages-item__logo"><img src="./storage/img/advantages/shield 5.svg" alt="img"></div>

                            <div class="advantages-box__wrap">
                                <h2 class="advantages-item__title ckeditor" id="index_editor43" data-dir="index" contenteditable="true">
                                    @include('content.index.index_editor43')
                                </h2>
                                <ul class="advantages-item__list">
                                    <li class="ckeditor" id="index_editor44" data-dir="index" contenteditable="true">
                                        @include('content.index.index_editor44')
                                    </li>
                                    <li class="ckeditor" id="index_editor45" data-dir="index" contenteditable="true">
                                        @include('content.index.index_editor45')
                                    </li>
                                    <li class="ckeditor" id="index_editor46" data-dir="index" contenteditable="true">
                                        @include('content.index.index_editor46')
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="advantages-item">
                            <div class="advantages-item__logo"><img src="./storage/img/advantages/shield 6.svg" alt="img"></div>

                            <div class="advantages-box__wrap">
                                <h2 class="advantages-item__title ckeditor" id="index_editor47" data-dir="index" contenteditable="true">
                                    @include('content.index.index_editor47')
                                </h2>
                                <ul class="advantages-item__list">
                                    <li class="ckeditor" id="index_editor48" data-dir="index" contenteditable="true">
                                        @include('content.index.index_editor48')
                                    </li>
                                    <li class="ckeditor" id="index_editor49" data-dir="index" contenteditable="true">
                                        @include('content.index.index_editor49')
                                    </li>
                                    <li class="ckeditor" id="index_editor50" data-dir="index" contenteditable="true">
                                        @include('content.index.index_editor50')
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="section section-bg-2">
        <div class="pagination">
            <div class="pagination__dot pagination__dot--active"></div>
            <div class="pagination__dot"></div>
            <div class="pagination__dot"></div>
            <div class="pagination__dot"></div>
            <div class="pagination__dot"></div>
            <div class="pagination__dot"></div>
            <div class="pagination__dot"></div>
            <div class="pagination__dot"></div>
            <div class="pagination__dot"></div>

        </div>
        @include('elements.index-header')
        @include('elements.index-popup')

        <div class="dual-background-desk">
            <img class="dual__background-right" src="./storage/img/backgrounds/3.png" alt="img">
        </div>
        <div class="dual">
            <div class="content-container">
                <div class="dual-box">
                    <div class="services-description">
                        <h2 class="section__title ckeditor" id="index_editor51" data-dir="index" contenteditable="true">
                            @include('content.index.index_editor51')
                        </h2>
                        <p class="services-description__text ckeditor" id="index_editor52" data-dir="index" contenteditable="true">
                            @include('content.index.index_editor52')
                        </p>
                        <button class="button"> <span class="button__text">СМОТРЕТЬ КАТАЛОГ</span> </button>
                    </div>

                    <div class="services-list">
                        <ul class="services-list-wrap">
                            <div class="dual-background-mobile">
                                <img class="dual__background-right" src="./storage/img/backgrounds/3.png" alt="img">
                            </div>
                            <li class="services-list-item"> <span class="services-list-item__number">01</span>
                                <p class="services-list-item__text ckeditor" id="index_editor53" data-dir="index" contenteditable="true">
                                    @include('content.index.index_editor53')
                                </p>
                            </li>
                            <li class="services-list-item"> <span class="services-list-item__number">02</span>
                                <p class="services-list-item__text ckeditor" id="index_editor54" data-dir="index" contenteditable="true">
                                    @include('content.index.index_editor54')
                                </p>
                            </li>
                            <li class="services-list-item"> <span class="services-list-item__number">03</span>
                                <p class="services-list-item__text ckeditor" id="index_editor55" data-dir="index" contenteditable="true">
                                    @include('content.index.index_editor55')
                                </p>
                            </li>
                            <li class="services-list-item"> <span class="services-list-item__number">04</span>
                                <p class="services-list-item__text ckeditor" id="index_editor56" data-dir="index" contenteditable="true">
                                    @include('content.index.index_editor56')
                                </p>
                            </li>
                            <li class="services-list-item"> <span class="services-list-item__number">05</span>
                                <p class="services-list-item__text ckeditor" id="index_editor57" data-dir="index" contenteditable="true">
                                    @include('content.index.index_editor57')
                                </p>
                            </li>
                            <li class="services-list-item"> <span class="services-list-item__number">06</span>
                                <p class="services-list-item__text ckeditor" id="index_editor58" data-dir="index" contenteditable="true">
                                    @include('content.index.index_editor58')
                                </p>
                            </li>
                            <li class="services-list-item"> <span class="services-list-item__number">07</span>
                                <p class="services-list-item__text ckeditor" id="index_editor59" data-dir="index" contenteditable="true">
                                    @include('content.index.index_editor59')
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="section section-bg-2">
        <div class="pagination">
            <div class="pagination__dot pagination__dot--active"></div>
            <div class="pagination__dot"></div>
            <div class="pagination__dot"></div>
            <div class="pagination__dot"></div>
            <div class="pagination__dot"></div>
            <div class="pagination__dot"></div>
            <div class="pagination__dot"></div>
            <div class="pagination__dot"></div>
            <div class="pagination__dot"></div>

        </div>
        @include('elements.index-header')
        @include('elements.index-popup')

        <div class="dual">
            <div class="content-container">
                <div class="dual-box dual-box--review">
                    <div class="dual-box__left">
                        <div>
                            <img class="dual__background-left" src="./storage/img/backgrounds/4.png" alt="img">
                        </div>
                        <header class="clients__header">
                            <h2 class="section__title ckeditor" id="index_editor60" data-dir="index" contenteditable="true">
                                @include('content.index.index_editor60')
                            </h2>
                            <a href="#" class="section__link">
                                Все клиенты
                            </a>
                        </header>

                        <div class="clients-box">
                            <div class="clients__item"><img src="./storage/img/clients/6.svg" alt="img"></div>
                            <div class="clients__item"><img src="./storage/img/clients/2.svg" alt="img"></div>
                            <div class="clients__item"><img src="./storage/img/clients/3.svg" alt="img"></div>
                            <div class="clients__item"><img src="./storage/img/clients/4.svg" alt="img"></div>
                            <div class="clients__item"><img src="./storage/img/clients/5.svg" alt="img"></div>
                            <div class="clients__item"><img src="./storage/img/clients/6.svg" alt="img"></div>
                            <div class="clients__item"><img src="./storage/img/clients/7.svg" alt="img"></div>
                            <div class="clients__item"><img src="./storage/img/clients/3.svg" alt="img"></div>
                        </div>
                    </div>

                    <div class="dual-box__right">
                        <header class="clients__header reviews__header">
                            <h2 class="section__title ckeditor" id="index_editor61" data-dir="index" contenteditable="true">
                                @include('content.index.index_editor61')
                            </h2>
                            <a href="#" class="section__link">Все отзывы</a>
                        </header>
                        <div class="review-box">
                            <div class="swiper-container mySwiper">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="review-wrap">
                                            <header class="review-header">
                                                <h3 class="review-header__title ckeditor" id="index_editor62" data-dir="index" contenteditable="true">
                                                    @include('content.index.index_editor62')
                                                </h3>
                                                <a href="#" class="review-header__scan-link">Смотреть скан отзыва</a>
                                            </header>
                                            <div class="review__text">
                                                <p class="ckeditor" id="index_editor63" data-dir="index" contenteditable="true">
                                                    @include('content.index.index_editor63')
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="review-wrap">
                                            <header class="review-header">
                                                <h3 class="review-header__title ckeditor" id="index_editor64" data-dir="index" contenteditable="true">
                                                    @include('content.index.index_editor64')
                                                </h3>
                                                <a href="#" class="review-header__scan-link">Смотреть скан отзыва</a>
                                            </header>
                                            <div class="review__text">
                                                <p class="ckeditor" id="index_editor65" data-dir="index" contenteditable="true">
                                                    @include('content.index.index_editor65')
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="review-wrap">
                                            <header class="review-header">
                                                <h3 class="review-header__title ckeditor" id="index_editor66" data-dir="index" contenteditable="true">
                                                    @include('content.index.index_editor66')
                                                </h3>
                                                <a href="#" class="review-header__scan-link">Смотреть скан отзыва</a>
                                            </header>
                                            <div class="review__text">
                                                <p class="ckeditor" id="index_editor67" data-dir="index" contenteditable="true">
                                                    @include('content.index.index_editor67')
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="review-wrap">
                                            <header class="review-header">
                                                <h3 class="review-header__title ckeditor" id="index_editor68" data-dir="index" contenteditable="true">
                                                    @include('content.index.index_editor68')
                                                </h3>
                                                <a href="#" class="review-header__scan-link">Смотреть скан отзыва</a>
                                            </header>
                                            <div class="review__text">
                                                <p class="ckeditor" id="index_editor69" data-dir="index" contenteditable="true">
                                                    @include('content.index.index_editor69')
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="review-wrap">
                                            <header class="review-header">
                                                <h3 class="review-header__title ckeditor" id="index_editor70" data-dir="index" contenteditable="true">
                                                    @include('content.index.index_editor70')
                                                </h3>
                                                <a href="#" class="review-header__scan-link">Смотреть скан отзыва</a>
                                            </header>
                                            <div class="review__text">
                                                <p class="ckeditor" id="index_editor71" data-dir="index" contenteditable="true">
                                                    @include('content.index.index_editor71')
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="review-wrap">
                                            <header class="review-header">
                                                <h3 class="review-header__title ckeditor" id="index_editor72" data-dir="index" contenteditable="true">
                                                    @include('content.index.index_editor72')
                                                </h3>
                                                <a href="#" class="review-header__scan-link">Смотреть скан отзыва</a>
                                            </header>
                                            <div class="review__text">
                                                <p class="ckeditor" id="index_editor73" data-dir="index" contenteditable="true">
                                                    @include('content.index.index_editor73')
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="review-wrap">
                                            <header class="review-header">
                                                <h3 class="review-header__title ckeditor" id="index_editor74" data-dir="index" contenteditable="true">
                                                    @include('content.index.index_editor74')
                                                </h3>
                                                <a href="#" class="review-header__scan-link">Смотреть скан отзыва</a>
                                            </header>
                                            <div class="review__text">
                                                <p class="ckeditor" id="index_editor75" data-dir="index" contenteditable="true">
                                                    @include('content.index.index_editor75')
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="review-wrap">
                                            <header class="review-header">
                                                <h3 class="review-header__title ckeditor" id="index_editor76" data-dir="index" contenteditable="true">
                                                    @include('content.index.index_editor76')
                                                </h3>
                                                <a href="#" class="review-header__scan-link">Смотреть скан отзыва</a>
                                            </header>
                                            <div class="review__text">
                                                <p class="ckeditor" id="index_editor77" data-dir="index" contenteditable="true">
                                                    @include('content.index.index_editor77')
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="review-wrap">
                                            <header class="review-header">
                                                <h3 class="review-header__title ckeditor" id="index_editor78" data-dir="index" contenteditable="true">
                                                    @include('content.index.index_editor78')
                                                </h3>
                                                <a href="#" class="review-header__scan-link">Смотреть скан отзыва</a>
                                            </header>
                                            <div class="review__text">
                                                <p class="ckeditor" id="index_editor79" data-dir="index" contenteditable="true">
                                                    @include('content.index.index_editor79')
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button class="review-next"></button>
                                <button class="review-prev"></button>
                                <div class="swiper-pagination"></div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="section section-bg-2">
        <div class="pagination">
            <div class="pagination__dot pagination__dot--active"></div>
            <div class="pagination__dot"></div>
            <div class="pagination__dot"></div>
            <div class="pagination__dot"></div>
            <div class="pagination__dot"></div>
            <div class="pagination__dot"></div>
            <div class="pagination__dot"></div>
            <div class="pagination__dot"></div>
            <div class="pagination__dot"></div>

        </div>
        @include('elements.index-header')
        @include('elements.index-popup')

        <div class="dual">
            <div class="content-container">
                <div class="dual-box">

                    <div class="dual-box__left">
                        <header class="clients__header mg-bt-25">
                            <h2 class="section__title ckeditor" id="index_editor80" data-dir="index" contenteditable="true">
                                @include('content.index.index_editor80')
                            </h2>
                            <a href="#" class="section__link">Подробнее</a>
                        </header>

                        <div class="about-company">

                            <p class="ckeditor" id="index_editor81" data-dir="index" contenteditable="true">
                                @include('content.index.index_editor81')
                            </p>

                            <p class="ckeditor" id="index_editor82" data-dir="index" contenteditable="true">
                                @include('content.index.index_editor82')
                            </p>

                        </div>

                        <div class="direction-company">
                            <p class="direction-company__title ckeditor" id="index_editor83" data-dir="index" contenteditable="true">
                                @include('content.index.index_editor83')
                            </p>
                            <ul>
                                <li class="direction-company__item ckeditor" id="index_editor84" data-dir="index" contenteditable="true">
                                    @include('content.index.index_editor84')
                                </li>
                                <li class="direction-company__item ckeditor" id="index_editor85" data-dir="index" contenteditable="true">
                                    @include('content.index.index_editor85')
                                </li>
                                <li class="direction-company__item ckeditor" id="index_editor86" data-dir="index" contenteditable="true">
                                    @include('content.index.index_editor86')
                                </li>
                                <li class="direction-company__item ckeditor" id="index_editor87" data-dir="index" contenteditable="true">
                                    @include('content.index.index_editor87')
                                </li>
                                <li class="direction-company__item ckeditor" id="index_editor88" data-dir="index" contenteditable="true">
                                    @include('content.index.index_editor88')
                                </li>
                                <li class="direction-company__item ckeditor" id="index_editor89" data-dir="index" contenteditable="true">
                                    @include('content.index.index_editor89')
                                </li>
                            </ul>
                        </div>

                    </div>

                    <div class="dual-box__right dual-box__right--news">

                        <div>
                            <img class="dual__background-right dual__background-right--news" src="./storage/img/backgrounds/5.png"
                                 alt="">
                        </div>

                        <header class="clients__header clients__header--news">
                            <h2 class="section__title ckeditor" id="index_editor90" data-dir="index" contenteditable="true">
                                @include('content.index.index_editor90')
                            </h2>
                            <a href="#" class="section__link">Все новости</a>
                        </header>

                        <div class="news">
                            <div class="news-item">
                                <p class="news-item__data ckeditor" id="index_editor91" data-dir="index" contenteditable="true">
                                    @include('content.index.index_editor91')
                                </p>
                                <a href="#" class="news-item__text ckeditor" id="index_editor92" data-dir="index" contenteditable="true">
                                    @include('content.index.index_editor92')
                                </a>
                            </div>
                            <div class="news-item">
                                <p class="news-item__data ckeditor" id="index_editor93" data-dir="index" contenteditable="true">
                                    @include('content.index.index_editor93')
                                </p>
                                <a href="#" class="news-item__text ckeditor" id="index_editor94" data-dir="index" contenteditable="true">
                                    @include('content.index.index_editor94')
                                </a>
                            </div>
                            <div class="news-item">
                                <p class="news-item__data ckeditor" id="index_editor95" data-dir="index" contenteditable="true">
                                    @include('content.index.index_editor95')
                                </p>
                                <a href="#" class="news-item__text ckeditor" id="index_editor96" data-dir="index" contenteditable="true">
                                    @include('content.index.index_editor96')
                                </a>
                            </div>
                            <div class="news-item">
                                <p class="news-item__data ckeditor" id="index_editor97" data-dir="index" contenteditable="true">
                                    @include('content.index.index_editor97')
                                </p>
                                <a href="#" class="news-item__text ckeditor" id="index_editor98" data-dir="index" contenteditable="true">
                                    @include('content.index.index_editor98')
                                </a>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>



    <div id="services" class="section section-bg-2">

        <div class="services-wrap">

            <header class="clients__header clients__header--news">
                <h2 class="section__title ckeditor" id="index_editor99" data-dir="index" contenteditable="true">
                    @include('content.index.index_editor99')
                </h2>
            </header>

            <div class="accordion" id="accordionExample">

                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                            <p class="ckeditor" id="index_editor233" data-dir="index" contenteditable="true">
                                @include('content.index.index_editor233')
                            </p>
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                         data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <div><img class="accordion-services-background" src="./storage/img/backgrounds/services/1.png" alt="img">
                            </div>
                            <div class="accordion-wrap">
                                <p class="accordion-services-text ckeditor" id="index_editor100" data-dir="index" contenteditable="true">
                                    @include('content.index.index_editor100')
                                </p>
                                <button class="button"> <span class="button__text">Смотреть каталог</span> </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="accordion-item accordion-item--1">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            <p class="ckeditor" id="index_editor101" data-dir="index" contenteditable="true">
                                @include('content.index.index_editor101')
                            </p>
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                         data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <div><img class="accordion-services-background" src="./storage/img/backgrounds/services/2.png" alt="img">
                            </div>
                            <div class="accordion-wrap">
                                <p class="accordion-services-text ckeditor" id="index_editor102" data-dir="index" contenteditable="true">
                                    @include('content.index.index_editor102')
                                </p>
                                <button class="button"> <span class="button__text">Смотреть каталог</span> </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            <p class="ckeditor" id="index_editor103" data-dir="index" contenteditable="true">
                                @include('content.index.index_editor103')
                            </p>
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                         data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <div><img class="accordion-services-background" src="./storage/img/backgrounds/services/3.png" alt="img">
                            </div>
                            <div class="accordion-wrap">
                                <p class="accordion-services-text ckeditor" id="index_editor104" data-dir="index" contenteditable="true">
                                    @include('content.index.index_editor104')
                                </p>
                                <button class="button"> <span class="button__text">Смотреть каталог</span> </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            <p class="ckeditor" id="index_editor105" data-dir="index" contenteditable="true">
                                @include('content.index.index_editor105')
                            </p>
                        </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                         data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <div><img class="accordion-services-background" src="./storage/img/backgrounds/services/4.png" alt="img">
                            </div>
                            <div class="accordion-wrap">
                                <p class="accordion-services-text ckeditor" id="index_editor106" data-dir="index" contenteditable="true">
                                    @include('content.index.index_editor106')
                                </p>
                                <button class="button"> <span class="button__text">Смотреть каталог</span> </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFive">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            <p class="ckeditor" id="index_editor107" data-dir="index" contenteditable="true">
                                @include('content.index.index_editor107')
                            </p>
                        </button>
                    </h2>
                    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                         data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <div><img class="accordion-services-background" src="./storage/img/backgrounds/services/5.png" alt="img">
                            </div>
                            <div class="accordion-wrap">
                                <p class="accordion-services-text ckeditor" id="index_editor108" data-dir="index" contenteditable="true">
                                    @include('content.index.index_editor108')
                                </p>
                                <button class="button"> <span class="button__text">Смотреть каталог</span> </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="pagination">
            <div class="pagination__dot pagination__dot--active"></div>
            <div class="pagination__dot"></div>
            <div class="pagination__dot"></div>
            <div class="pagination__dot"></div>
            <div class="pagination__dot"></div>
            <div class="pagination__dot"></div>
            <div class="pagination__dot"></div>
            <div class="pagination__dot"></div>
            <div class="pagination__dot"></div>

        </div>
        @include('elements.index-header')
        @include('elements.index-popup')

        <div class="switch-catalog">
            <div class="switch-catalog__list">
                <button class="list-item list-item--active list-item--5">
                    <p class="list-item__text ckeditor" id="index_editor109" data-dir="index" contenteditable="true">
                        @include('content.index.index_editor109')
                    </p>
                </button>
                <button class="list-item list-item--5">
                    <p class="list-item__text ckeditor" id="index_editor110" data-dir="index" contenteditable="true">
                        @include('content.index.index_editor110')
                    </p>
                </button>
                <button class="list-item list-item--5">
                    <p class="list-item__text ckeditor" id="index_editor111" data-dir="index" contenteditable="true">
                        @include('content.index.index_editor111')
                    </p>
                </button>
                <button class="list-item list-item--5">
                    <p class="list-item__text ckeditor" id="index_editor112" data-dir="index" contenteditable="true">
                        @include('content.index.index_editor112')
                    </p>
                </button>
                <button class="list-item list-item--5">
                    <p class="list-item__text ckeditor" id="index_editor113" data-dir="index" contenteditable="true">
                        @include('content.index.index_editor113')
                    </p>
                </button>
            </div>
            <div class="switch-catalog__description switch-catalog__description--features">
                <div class="description-item dsp-f">
                    <img class="description-item__img description-item__img--features"
                         src="./storage/img/backgrounds/services/1.png" alt="img">
                    <p class="description-item__text ckeditor" id="index_editor114" data-dir="index" contenteditable="true">
                        @include('content.index.index_editor114')
                    </p>
                    <button class="button"> <span class="button__text">Оставить заявку</span> </button>
                </div>
                <div class="description-item">
                    <img class="description-item__img description-item__img--features"
                         src="./storage/img/backgrounds/services/2.png" alt="img">
                    <p class="description-item__text ckeditor" id="index_editor115" data-dir="index" contenteditable="true">
                        @include('content.index.index_editor115')
                    </p>
                    <button class="button"> <span class="button__text">Оставить заявку</span> </button>
                </div>
                <div class="description-item">
                    <img class="description-item__img description-item__img--features"
                         src="./storage/img/backgrounds/services/3.png" alt="img">
                    <p class="description-item__text ckeditor" id="index_editor116" data-dir="index" contenteditable="true">
                        @include('content.index.index_editor116')
                    </p>
                    <button class="button"> <span class="button__text">Оставить заявку</span> </button>
                </div>
                <div class="description-item">
                    <img class="description-item__img description-item__img--features"
                         src="./storage/img/backgrounds/services/4.png" alt="img">
                    <p class="description-item__text ckeditor" id="index_editor117" data-dir="index" contenteditable="true">
                        @include('content.index.index_editor117')
                    </p>
                    <button class="button"> <span class="button__text">Оставить заявку</span> </button>
                </div>
                <div class="description-item">
                    <img class="description-item__img description-item__img--features"
                         src="./storage/img/backgrounds/services/5.png" alt="img">
                    <p class="description-item__text ckeditor" id="index_editor118" data-dir="index" contenteditable="true">
                        @include('content.index.index_editor118')
                    </p>
                    <button class="button"> <span class="button__text">Оставить заявку</span> </button>
                </div>
            </div>
        </div>
    </div>



    <div class="section section-bg-2 fp-auto-height-responsive">
        <div class="pagination">
            <div class="pagination__dot pagination__dot--active"></div>
            <div class="pagination__dot"></div>
            <div class="pagination__dot"></div>
            <div class="pagination__dot"></div>
            <div class="pagination__dot"></div>
            <div class="pagination__dot"></div>
            <div class="pagination__dot"></div>
            <div class="pagination__dot"></div>
            <div class="pagination__dot"></div>

        </div>
        @include('elements.index-header')
        @include('elements.index-popup')

        <div class="geography-mobile">
            <header class="clients__header clients__header--news">
                <h2 class="section__title ckeditor" id="index_editor119" data-dir="index" contenteditable="true">
                    @include('content.index.index_editor119')
                </h2>
            </header>
            <div class="accordion" id="accordionExample2">

                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingSix">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                            <h3 class="country__name ckeditor" id="index_editor120" data-dir="index" contenteditable="true">
                                @include('content.index.index_editor120')
                            </h3>
                        </button>
                    </h2>
                    <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                         data-bs-parent="#accordionExample2">
                        <div class="accordion-body">
                            <div class="accordion-wrap">
                                <div class="country-item">
                                    <div class="country__city ckeditor" id="index_editor121" data-dir="index" contenteditable="true">
                                        @include('content.index.index_editor121')
                                    </div>
                                    <div class="country__city ckeditor" id="index_editor122" data-dir="index" contenteditable="true">
                                        @include('content.index.index_editor122')
                                    </div>
                                    <div class="country__city ckeditor" id="index_editor123" data-dir="index" contenteditable="true">
                                        @include('content.index.index_editor123')
                                    </div>
                                    <div class="country__city ckeditor" id="index_editor124" data-dir="index" contenteditable="true">
                                        @include('content.index.index_editor124')
                                    </div>
                                    <div class="country__city ckeditor" id="index_editor125" data-dir="index" contenteditable="true">
                                        @include('content.index.index_editor125')
                                    </div>
                                    <div class="country__city ckeditor" id="index_editor126" data-dir="index" contenteditable="true">
                                        @include('content.index.index_editor126')
                                    </div>
                                    <div class="country__city ckeditor" id="index_editor127" data-dir="index" contenteditable="true">
                                        @include('content.index.index_editor127')
                                    </div>
                                    <div class="country__city ckeditor" id="index_editor128" data-dir="index" contenteditable="true">
                                        @include('content.index.index_editor128')
                                    </div>
                                    <div class="country__city ckeditor" id="index_editor129" data-dir="index" contenteditable="true">
                                        @include('content.index.index_editor129')
                                    </div>
                                    <div class="country__city ckeditor" id="index_editor130" data-dir="index" contenteditable="true">
                                        @include('content.index.index_editor130')
                                    </div>
                                    <div class="country__city ckeditor" id="index_editor131" data-dir="index" contenteditable="true">
                                        @include('content.index.index_editor131')
                                    </div>
                                    <div class="country__city ckeditor" id="index_editor132" data-dir="index" contenteditable="true">
                                        @include('content.index.index_editor132')
                                    </div>
                                    <div class="country__city ckeditor" id="index_editor133" data-dir="index" contenteditable="true">
                                        @include('content.index.index_editor133')
                                    </div>
                                    <div class="country__city ckeditor" id="index_editor134" data-dir="index" contenteditable="true">
                                        @include('content.index.index_editor134')
                                    </div>
                                    <div class="country__city ckeditor" id="index_editor135" data-dir="index" contenteditable="true">
                                        @include('content.index.index_editor135')
                                    </div>
                                    <div class="country__city ckeditor" id="index_editor136" data-dir="index" contenteditable="true">
                                        @include('content.index.index_editor136')
                                    </div>
                                    <div class="country__city ckeditor" id="index_editor137" data-dir="index" contenteditable="true">
                                        @include('content.index.index_editor137')
                                    </div>
                                    <div class="country__city ckeditor" id="index_editor138" data-dir="index" contenteditable="true">
                                        @include('content.index.index_editor138')
                                    </div>
                                    <div class="country__city ckeditor" id="index_editor139" data-dir="index" contenteditable="true">
                                        @include('content.index.index_editor139')
                                    </div>
                                    <div class="country__city ckeditor" id="index_editor140" data-dir="index" contenteditable="true">
                                        @include('content.index.index_editor140')
                                    </div>
                                    <div class="country__city ckeditor" id="index_editor141" data-dir="index" contenteditable="true">
                                        @include('content.index.index_editor141')
                                    </div>
                                    <div class="country__city ckeditor" id="index_editor142" data-dir="index" contenteditable="true">
                                        @include('content.index.index_editor142')
                                    </div>
                                    <div class="country__city ckeditor" id="index_editor143" data-dir="index" contenteditable="true">
                                        @include('content.index.index_editor143')
                                    </div>
                                    <div class="country__city ckeditor" id="index_editor144" data-dir="index" contenteditable="true">
                                        @include('content.index.index_editor144')
                                    </div>
                                    <div class="country__city ckeditor" id="index_editor145" data-dir="index" contenteditable="true">
                                        @include('content.index.index_editor145')
                                    </div>
                                    <div class="country__city ckeditor" id="index_editor146" data-dir="index" contenteditable="true">
                                        @include('content.index.index_editor146')
                                    </div>
                                    <div class="country__city ckeditor" id="index_editor147" data-dir="index" contenteditable="true">
                                        @include('content.index.index_editor147')
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingSeven">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                <h3 class="country__name ckeditor" id="index_editor148" data-dir="index" contenteditable="true">
                                    @include('content.index.index_editor148')
                                </h3>
                            </button>
                        </h2>
                        <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven"
                             data-bs-parent="#accordionExample2">
                            <div class="accordion-body">
                                <div class="accordion-wrap">
                                    <div class="country__city ckeditor" id="index_editor149" data-dir="index" contenteditable="true">
                                        @include('content.index.index_editor149')
                                    </div>
                                    <div class="country__city ckeditor" id="index_editor150" data-dir="index" contenteditable="true">
                                        @include('content.index.index_editor150')
                                    </div>
                                    <div class="country__city ckeditor" id="index_editor151" data-dir="index" contenteditable="true">
                                        @include('content.index.index_editor151')
                                    </div>
                                    <div class="country__city ckeditor" id="index_editor152" data-dir="index" contenteditable="true">
                                        @include('content.index.index_editor152')
                                    </div>
                                    <div class="country__city ckeditor" id="index_editor153" data-dir="index" contenteditable="true">
                                        @include('content.index.index_editor153')
                                    </div>
                                    <div class="country__city ckeditor" id="index_editor154" data-dir="index" contenteditable="true">
                                        @include('content.index.index_editor154')
                                    </div>
                                    <div class="country__city ckeditor" id="index_editor155" data-dir="index" contenteditable="true">
                                        @include('content.index.index_editor155')
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingEight">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                <h3 class="country__name ckeditor" id="index_editor156" data-dir="index" contenteditable="true">
                                    @include('content.index.index_editor156')
                                </h3>
                            </button>
                        </h2>
                        <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight"
                             data-bs-parent="#accordionExample2">
                            <div class="accordion-body">
                                <div class="accordion-wrap">

                                    <div class="country__city ckeditor" id="index_editor157" data-dir="index" contenteditable="true">
                                        @include('content.index.index_editor157')
                                    </div>
                                    <div class="country__city ckeditor" id="index_editor158" data-dir="index" contenteditable="true">
                                        @include('content.index.index_editor158')
                                    </div>
                                    <div class="country__city ckeditor" id="index_editor159" data-dir="index" contenteditable="true">
                                        @include('content.index.index_editor159')
                                    </div>
                                    <div class="country__city ckeditor" id="index_editor160" data-dir="index" contenteditable="true">
                                        @include('content.index.index_editor160')
                                    </div>
                                    <div class="country__city ckeditor" id="index_editor161" data-dir="index" contenteditable="true">
                                        @include('content.index.index_editor161')
                                    </div>
                                    <div class="country__city ckeditor" id="index_editor162" data-dir="index" contenteditable="true">
                                        @include('content.index.index_editor162')
                                    </div>
                                    <div class="country__city ckeditor" id="index_editor163" data-dir="index" contenteditable="true">
                                        @include('content.index.index_editor163')
                                    </div>
                                    <div class="country__city ckeditor" id="index_editor164" data-dir="index" contenteditable="true">
                                        @include('content.index.index_editor164')
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="accordion-item accordion-item--1">
                    <h2 class="accordion-header" id="headingNine">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                            <h3 class="country__name ckeditor" id="index_editor165" data-dir="index" contenteditable="true">
                                @include('content.index.index_editor165')
                            </h3>
                        </button>
                    </h2>
                    <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine"
                         data-bs-parent="#accordionExample2">
                        <div class="accordion-body">
                            <div class="accordion-wrap">
                                <div class="country__city ckeditor" id="index_editor166" data-dir="index" contenteditable="true">
                                    @include('content.index.index_editor166')
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <img class="geography-map" src="./storage/img/backgrounds/6.png" alt="img">
            </div>
        </div>
        <div class="geography">

            <div>
                <img class="geography-map" src="./storage/img/backgrounds/6.png" alt="img">
            </div>

            <div class="content-container">

                <header class="geography__header">
                    <h2 class="section__title ckeditor" id="index_editor167" data-dir="index" contenteditable="true">
                        @include('content.index.index_editor167')
                    </h2>
                </header>

                <div class="geography-box">

                    <div class="country">
                        <div class="country-item">
                            <h3 class="country__name ckeditor" id="index_editor168" data-dir="index" contenteditable="true">
                                @include('content.index.index_editor168')
                            </h3>

                            <div class="country__city ckeditor" id="index_editor169" data-dir="index" contenteditable="true">
                                @include('content.index.index_editor169')
                            </div>
                            <div class="country__city ckeditor" id="index_editor170" data-dir="index" contenteditable="true">
                                @include('content.index.index_editor170')
                            </div>
                            <div class="country__city ckeditor" id="index_editor171" data-dir="index" contenteditable="true">
                                @include('content.index.index_editor171')
                            </div>
                            <div class="country__city ckeditor" id="index_editor172" data-dir="index" contenteditable="true">
                                @include('content.index.index_editor172')
                            </div>
                            <div class="country__city ckeditor" id="index_editor173" data-dir="index" contenteditable="true">
                                @include('content.index.index_editor173')
                            </div>
                            <div class="country__city ckeditor" id="index_editor174" data-dir="index" contenteditable="true">
                                @include('content.index.index_editor174')
                            </div>
                            <div class="country__city ckeditor" id="index_editor175" data-dir="index" contenteditable="true">
                                @include('content.index.index_editor175')
                            </div>
                            <div class="country__city ckeditor" id="index_editor176" data-dir="index" contenteditable="true">
                                @include('content.index.index_editor176')
                            </div>
                            <div class="country__city ckeditor" id="index_editor177" data-dir="index" contenteditable="true">
                                @include('content.index.index_editor177')
                            </div>
                            <div class="country__city ckeditor" id="index_editor178" data-dir="index" contenteditable="true">
                                @include('content.index.index_editor178')
                            </div>
                            <div class="country__city ckeditor" id="index_editor179" data-dir="index" contenteditable="true">
                                @include('content.index.index_editor179')
                            </div>
                            <div class="country__city ckeditor" id="index_editor180" data-dir="index" contenteditable="true">
                                @include('content.index.index_editor180')
                            </div>
                            <div class="country__city ckeditor" id="index_editor181" data-dir="index" contenteditable="true">
                                @include('content.index.index_editor181')
                            </div>
                            <div class="country__city ckeditor" id="index_editor182" data-dir="index" contenteditable="true">
                                @include('content.index.index_editor182')
                            </div>
                            <div class="country__city ckeditor" id="index_editor183" data-dir="index" contenteditable="true">
                                @include('content.index.index_editor183')
                            </div>
                            <div class="country__city ckeditor" id="index_editor184" data-dir="index" contenteditable="true">
                                @include('content.index.index_editor184')
                            </div>
                            <div class="country__city ckeditor" id="index_editor185" data-dir="index" contenteditable="true">
                                @include('content.index.index_editor185')
                            </div>
                        </div>
                    </div>

                    <div class="country">
                        <div class="country-item">
                            <h3 class="country__name ckeditor" id="index_editor186" data-dir="index" contenteditable="true">
                                @include('content.index.index_editor186')
                            </h3>

                            <div class="country__city ckeditor" id="index_editor187" data-dir="index" contenteditable="true">
                                @include('content.index.index_editor187')
                            </div>
                            <div class="country__city ckeditor" id="index_editor188" data-dir="index" contenteditable="true">
                                @include('content.index.index_editor188')
                            </div>
                            <div class="country__city ckeditor" id="index_editor189" data-dir="index" contenteditable="true">
                                @include('content.index.index_editor189')
                            </div>
                            <div class="country__city ckeditor" id="index_editor190" data-dir="index" contenteditable="true">
                                @include('content.index.index_editor190')
                            </div>
                            <div class="country__city ckeditor" id="index_editor191" data-dir="index" contenteditable="true">
                                @include('content.index.index_editor191')
                            </div>
                            <div class="country__city ckeditor" id="index_editor192" data-dir="index" contenteditable="true">
                                @include('content.index.index_editor192')
                            </div>
                            <div class="country__city ckeditor" id="index_editor193" data-dir="index" contenteditable="true">
                                @include('content.index.index_editor193')
                            </div>
                            <div class="country__city ckeditor" id="index_editor194" data-dir="index" contenteditable="true">
                                @include('content.index.index_editor194')
                            </div>
                            <div class="country__city ckeditor" id="index_editor195" data-dir="index" contenteditable="true">
                                @include('content.index.index_editor195')
                            </div>
                            <div class="country__city ckeditor" id="index_editor196" data-dir="index" contenteditable="true">
                                @include('content.index.index_editor196')
                            </div>
                        </div>
                        <div class="country-item">
                            <h3 class="country__name ckeditor" id="index_editor197" data-dir="index" contenteditable="true">
                                @include('content.index.index_editor197')
                            </h3>

                            <div class="country__city ckeditor" id="index_editor198" data-dir="index" contenteditable="true">
                                @include('content.index.index_editor198')
                            </div>
                        </div>
                    </div>

                    <div class="country">
                        <div class="country-item">
                            <h3 class="country__name ckeditor" id="index_editor199" data-dir="index" contenteditable="true">
                                @include('content.index.index_editor199')
                            </h3>

                            <div class="country__city ckeditor" id="index_editor200" data-dir="index" contenteditable="true">
                                @include('content.index.index_editor200')
                            </div>
                            <div class="country__city ckeditor" id="index_editor201" data-dir="index" contenteditable="true">
                                @include('content.index.index_editor201')
                            </div>
                            <div class="country__city ckeditor" id="index_editor202" data-dir="index" contenteditable="true">
                                @include('content.index.index_editor202')
                            </div>
                            <div class="country__city ckeditor" id="index_editor203" data-dir="index" contenteditable="true">
                                @include('content.index.index_editor203')
                            </div>
                            <div class="country__city ckeditor" id="index_editor204" data-dir="index" contenteditable="true">
                                @include('content.index.index_editor204')
                            </div>
                            <div class="country__city ckeditor" id="index_editor205" data-dir="index" contenteditable="true">
                                @include('content.index.index_editor205')
                            </div>
                            <div class="country__city ckeditor" id="index_editor206" data-dir="index" contenteditable="true">
                                @include('content.index.index_editor206')
                            </div>
                        </div>
                        <div class="country-item">
                            <h3 class="country__name ckeditor" id="index_editor207" data-dir="index" contenteditable="true">
                                @include('content.index.index_editor207')
                            </h3>

                            <div class="country__city ckeditor" id="index_editor208" data-dir="index" contenteditable="true">
                                @include('content.index.index_editor208')
                            </div>
                            <div class="country__city ckeditor" id="index_editor209" data-dir="index" contenteditable="true">
                                @include('content.index.index_editor209')
                            </div>
                            <div class="country__city ckeditor" id="index_editor210" data-dir="index" contenteditable="true">
                                @include('content.index.index_editor210')
                            </div>
                            <div class="country__city ckeditor" id="index_editor211" data-dir="index" contenteditable="true">
                                @include('content.index.index_editor211')
                            </div>
                            <div class="country__city ckeditor" id="index_editor212" data-dir="index" contenteditable="true">
                                @include('content.index.index_editor212')
                            </div>
                            <div class="country__city ckeditor" id="index_editor213" data-dir="index" contenteditable="true">
                                @include('content.index.index_editor213')
                            </div>
                            <div class="country__city ckeditor" id="index_editor214" data-dir="index" contenteditable="true">
                                @include('content.index.index_editor214')
                            </div>
                            <div class="country__city ckeditor" id="index_editor215" data-dir="index" contenteditable="true">
                                @include('content.index.index_editor215')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="footer section section-bg-2 fp-auto-height-responsive">
        <div class="pagination">
            <div class="pagination__dot pagination__dot--active"></div>
            <div class="pagination__dot"></div>
            <div class="pagination__dot"></div>
            <div class="pagination__dot"></div>
            <div class="pagination__dot"></div>
            <div class="pagination__dot"></div>
            <div class="pagination__dot"></div>
            <div class="pagination__dot"></div>
            <div class="pagination__dot"></div>

        </div>
        @include('elements.index-header')
        @include('elements.index-popup')

        <div class="dual">
            <img class="men" src="./storage/img/backgrounds/men.png" alt="img">
            <div class="content-container content-container--footer">
                <div class="dual-box">

                    <div class="dual-box__left">
                        <header class="clients__header mg-bt-25">
                            <h2 class="section__title">
                                <span class="no-mobile ckeditor" id="index_editor216" data-dir="index" contenteditable="true">
                                    @include('content.index.index_editor216')
                                </span>
                                <span class="ckeditor" id="index_editor217" data-dir="index" contenteditable="true">
                                    @include('content.index.index_editor217')
                                </span>
                            </h2>
                        </header>

                        <div class="about-company">

                            <p class="ckeditor" id="index_editor218" data-dir="index" contenteditable="true">
                                @include('content.index.index_editor218')
                            </p>
                        </div>

                        <div class="achievements">

                            <div class="achievements-wrap">
                                <div class="achievements-items">
                                    <p class="achievements-items__numbers ckeditor" id="index_editor219" data-dir="index" contenteditable="true">
                                        @include('content.index.index_editor219')
                                    </p>
                                </div>
                                <p class="achievements-items__text ckeditor" id="index_editor220" data-dir="index" contenteditable="true">
                                    @include('content.index.index_editor220')
                                </p>
                            </div>

                            <div class="achievements-wrap">
                                <div class="achievements-items">
                                    <p class="achievements-items__numbers ckeditor" id="index_editor221" data-dir="index" contenteditable="true">
                                        @include('content.index.index_editor221')
                                    </p>
                                </div>
                                <p class="achievements-items__text ckeditor" id="index_editor222" data-dir="index" contenteditable="true">
                                    @include('content.index.index_editor222')
                                </p>
                            </div>

                            <div class="achievements-wrap">
                                <div class="achievements-items">
                                    <p class="achievements-items__numbers ckeditor" id="index_editor223" data-dir="index" contenteditable="true">
                                        @include('content.index.index_editor223')
                                    </p>
                                </div>
                                <p class="achievements-items__text ckeditor" id="index_editor224" data-dir="index" contenteditable="true">
                                    @include('content.index.index_editor224')
                                </p>
                            </div>
                        </div>

                        <a href="{{ route('about') }}" class="section__link ckeditor" id="index_editor225" data-dir="index" contenteditable="true">
                            @include('content.index.index_editor225')
                        </a>
                    </div>

                    <div class="dual-box__right dual-box__right--footer">

                        <div >
                            <img class="dual__background-right dual__background-right--footer" src="./storage/img/backgrounds/7.png" alt="img">
                        </div>

                        <div class="recall-wrap">
                            <div class="recall-wrap-2">
                                <header class="clients__header">
                                    <h2 class="recall__title ckeditor" id="index_editor226" data-dir="index" contenteditable="true">
                                        @include('content.index.index_editor226')
                                    </h2>
                                </header>

                                <div class="recall">
                                    <p class="recall__tex ckeditort" id="index_editor227" data-dir="index" contenteditable="true">
                                        @include('content.index.index_editor227')
                                    </p>
                                </div>

                                <div class="input-fields-footer">

                                    <div class="input-group">
                                        <input type="text" required>
                                        <label class="ckeditor" id="index_editor228" data-dir="index" contenteditable="true">
                                            @include('content.index.index_editor228')
                                        </label>
                                    </div>

                                    <div class="input-group">
                                        <input type="number" required>
                                        <label class="ckeditor" id="index_editor229" data-dir="index" contenteditable="true">
                                            @include('content.index.index_editor229')
                                        </label>
                                    </div>
                                </div>

                                <button class="button mg-bt-40"> <span class="button__text">отправить запрос</span> </button>
                                <div class="privacy-footer">
                                    <input type="checkbox" class="check__element" id="privacy-policy-footer" name="privacy-policy" value="yes">
                                    <label for="privacy-policy">
                                        <a href="#"><span class="ckeditor" id="index_editor230" data-dir="index" contenteditable="true">
                                                @include('content.index.index_editor230')
                                            </span></a>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="footer__bottom--mobile">
                            <div class="copyright">
                                <p class="ckeditor" id="index_editor231" data-dir="index" contenteditable="true">
                                    @include('content.index.index_editor231')
                                </p>
                            </div>
                            <div class="studio">
                                <a href="https://forest-web.ru/" class="dsp-f" target="_blank"><p>Разработка сайта —</p>
                                    <div class="studio__logo"> <img src="./storage/img/Forestweb-tree.svg" alt="img"><img src="./storage/img/Forestweb.svg" alt="img"></div> </a>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="footer__bottom">
                    <div class="copyright">
                        <p class="ckeditor" id="index_editor232" data-dir="index" contenteditable="true">
                            @include('content.index.index_editor232')
                        </p>
                    </div>
                    <div class="studio">
                        <a href="https://forest-web.ru/" class="dsp-f" target="_blank"><p>Разработка сайта —</p>
                            <div class="studio__logo"> <img src="./storage/img/Forestweb-tree.svg" alt="img"><img src="./storage/img/Forestweb.svg" alt="img"></div> </a>
                    </div>
                </div>
            </div>

        </div>

    </div>

    <script type="text/javascript" src="{{ asset('js/scrolloverflow.min.js') }}"></script>
    <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.1.0/fullpage.min.js" integrity="sha512-HqbDsHIJoZ36Csd7NMupWFxC7e7aX2qm213sX+hirN+yEx/eUNlZrTWPs1dUQDEW4fMVkerv1PfMohR1WdFFJQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="{{ asset('js/script.js') }}"></script>
</div>

@if(isset(Auth::user()->is_admin))
    <script src="{{ asset('/js/ckeditor/ckeditor.js') }}" type="text/javascript" charset="utf-8"></script>
    <script src="{{ asset('js/ckeditor_scripts/init.js') }}"></script>
    <script src="{{ asset('js/ckeditor_scripts/save_content.js') }}"></script>
@endif
    </body>

</html>


