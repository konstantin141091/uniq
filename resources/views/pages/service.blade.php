@extends('layouts.app')
@section('footer')
    @parent
@endsection

@section('content')
    <div id="regular-page" class="content-container content-container--regular ">

        <nav class="site-navigation">
            <nav class="mg-bt-35">
                <a class="nav-pages" href="{{ route('index') }}">Главная</a>
                <span class="nav-pages__slash">/</span>
                <a class="nav-pages" href="{{ route('service') }}">Крановый сервис</a>
            </nav>
        </nav>

        <section class="mg-bt-50">
            <h1 class="section__title mg-bt-35">Крановый сервис</h1>

            <div class="page-description">
                <div class="page-description__text">
                    <p>Кроме производства грузоподъёмного оборудования наш завод осуществляет все возможные сервисные работы, от проектирования до обслуживания кранов.</p>    </div>
        </section>

        <section class="mg-bt-150">
            <div class="cards">

                <div class="cards-item cards-item--service">
                    <img class="cards__image" src="./assets/img/cards-item/service/1.png" alt="">

                    <img class="arrow" src="./assets/img/icons/arrow.svg" alt="">

                    <div class="cards-mask">

                        <p class="cards-mask__title">Индивидуальная
                            покраска крана</p>
                        <p class="cards-mask__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        <a  class="cards-mask__more"href="">Читать подробнее</a>
                    </div>
                </div>

                <div class="cards-item cards-item--service">
                    <img class="cards__image" src="./assets/img/cards-item/service/2.png" alt="">

                    <img class="arrow" src="./assets/img/icons/arrow.svg" alt="">

                    <div class="cards-mask">

                        <p class="cards-mask__title">Монтаж кранов</p>
                        <p class="cards-mask__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        <a  class="cards-mask__more"href="">Читать подробнее</a>
                    </div>
                </div>

                <div class="cards-item cards-item--service">
                    <img class="cards__image" src="./assets/img/cards-item/service/3.png" alt="">

                    <img class="arrow" src="./assets/img/icons/arrow.svg" alt="">

                    <div class="cards-mask">

                        <p class="cards-mask__title">Монтаж крановых
                            конструкций</p>
                        <p class="cards-mask__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        <a  class="cards-mask__more"href="">Читать подробнее</a>
                    </div>
                </div>

                <div class="cards-item cards-item--service">
                    <img class="cards__image" src="./assets/img/cards-item/service/4.png" alt="">

                    <img class="arrow" src="./assets/img/icons/arrow.svg" alt="">

                    <div class="cards-mask">

                        <p class="cards-mask__title">Модернизация</p>
                        <p class="cards-mask__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        <a  class="cards-mask__more"href="">Читать подробнее</a>
                    </div>
                </div>

                <div class="cards-item cards-item--service">
                    <img class="cards__image" src="./assets/img/cards-item/service/5.png" alt="">

                    <img class="arrow" src="./assets/img/icons/arrow.svg" alt="">

                    <div class="cards-mask">

                        <p class="cards-mask__title">Ремонт</p>
                        <p class="cards-mask__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        <a  class="cards-mask__more"href="">Читать подробнее</a>
                    </div>
                </div>

                <div class="cards-item cards-item--service">
                    <img class="cards__image" src="./assets/img/cards-item/service/6.png" alt="">

                    <img class="arrow" src="./assets/img/icons/arrow.svg" alt="">

                    <div class="cards-mask">

                        <p class="cards-mask__title">Техническое
                            обслуживание</p>
                        <p class="cards-mask__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        <a  class="cards-mask__more"href="">Читать подробнее</a>
                    </div>
                </div>

                <div class="cards-item cards-item--service">
                    <img class="cards__image" src="./assets/img/cards-item/service/7.png" alt="">

                    <img class="arrow" src="./assets/img/icons/arrow.svg" alt="">

                    <div class="cards-mask">

                        <p class="cards-mask__title">Проектирование</p>
                        <p class="cards-mask__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        <a  class="cards-mask__more"href="">Читать подробнее</a>
                    </div>
                </div>

                <div class="cards-item cards-item--service">
                    <img class="cards__image" src="./assets/img/cards-item/service/8.png" alt="">

                    <img class="arrow" src="./assets/img/icons/arrow.svg" alt="">

                    <div class="cards-mask">

                        <p class="cards-mask__title">Доставка</p>
                        <p class="cards-mask__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        <a  class="cards-mask__more"href="">Читать подробнее</a>
                    </div>
                </div>

                <div class="cards-item cards-item--service">
                    <img class="cards__image" src="./assets/img/cards-item/service/9.png" alt="">

                    <img class="arrow" src="./assets/img/icons/arrow.svg" alt="">

                    <div class="cards-mask">

                        <p class="cards-mask__title">Демонтаж кранов</p>
                        <p class="cards-mask__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        <a  class="cards-mask__more"href="">Читать подробнее</a>
                    </div>
                </div>
            </div>
        </section>

    </div>
@endsection
