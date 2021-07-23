@extends('layouts.app')
@section('footer')
    @parent
@endsection

@section('content')
    <div style="position:relative">

        <div class="page-navigation__wrap">

            <div class="page-navigation">

                <button class="page-navigation__button page-navigation__button--active"> <span>История</span> </button>
                <button class="page-navigation__button"> <span>Производство</span> </button>
                <button class="page-navigation__button"> <span>Сертификаты</span> </button>
                <button class="page-navigation__button"> <span>Преимущества</span> </button>
                <button class="page-navigation__button"> <span>Наши клиенты</span> </button>
                <button class="page-navigation__button"> <span>Отзывы</span> </button>
            </div></div>
        <div style="position:relative">
            <img class="page-description__background" src="./assets/img/backgrounds/about-factory.png" alt="">
            <div id="regular-page" class="content-container content-container--regular ">

                <nav class="site-navigation">
                    <nav class="mg-bt-35">
                        <a class="nav-pages" href="{{ route('index') }}">Главная</a>
                        <span class="nav-pages__slash">/</span>
                        <a class="nav-pages" href="{{ route('about') }}">О заводе</a>
                    </nav>
                </nav>

                <section class="mg-bt-50">
                    <h1 class="section__title mg-bt-60">О заводе</h1>

                    <div class="page-description__text page-description__text--24">
                        <p>Наша компания работает на рынке грузоподъёмного оборудования с 2011 года. За столь непродолжительный срок
                            существования, менеджмент компании добился не только колоссальных успехов в реализации продукции, но также
                            смог собрать и объединить высококвалифицированные кадры, работающие в области производства и обслуживания
                            ГПО c 2001 года.</p>
                    </div>
                </section>

            </div>

        </div>
        <div class="regular-page">

            <div id="fullpage-no-scroll">

                <section class="section section--regular fp-auto-height">

                    <div id="regular-page" class="content-container content-container--regular">

                        <div class="content-wrap">
                            <p class="page-description__title-1 mg-bt-60 mg-t-70">Все это позволяет компании UNIQ Crane сохранять
                                стабильную динамику
                                развития и открывать для себя все новые высоты в области краностроения!</p>

                            <div class="time-line">
                                <!-- Left vertical line -->
                                <div class="time-line__line"></div>

                                <!-- The timeline items time-line -->
                                <ul class="time-line__items">
                                    <!-- Each timeline item -->
                                    <li class="time-line__item">
                                        <!-- The circle and title -->
                                        <div class="time-line__top">
                                            <!-- The circle -->
                                            <div class="time-line__circle">
                                                <div class="time-line__circle-mini"></div>
                                            </div>

                                            <!-- The title -->
                                            <div class="time-line__title">
                                                2011
                                            </div>
                                        </div>

                                        <!-- The description -->
                                        <div class="time-line__desc">
                                            <p>Компания начинает деятельность по обслуживанию, монтажу и модернизации грузоподъёмного
                                                оборудования, осуществляя параллельно поставку запчастей и комплектующих для кранов</p>

                                        </div>
                                    </li>

                                    <li class="time-line__item">
                                        <!-- The circle and title -->
                                        <div class="time-line__top">
                                            <!-- The circle -->
                                            <div class="time-line__circle">
                                                <div class="time-line__circle-mini"></div>
                                            </div>

                                            <!-- The title -->
                                            <div class="time-line__title">
                                                2013
                                            </div>
                                        </div>

                                        <!-- The description -->
                                        <div class="time-line__desc">
                                            <p>Компания образовывает собственное производство кранов мостовых, консольных, лёгких козловых
                                                кранов и несущих металлоконструкций (эстакад, крановых путей)</p>
                                        </div>
                                    </li>

                                    <li class="time-line__item">
                                        <!-- The circle and title -->
                                        <div class="time-line__top">
                                            <!-- The circle -->
                                            <div class="time-line__circle">
                                                <div class="time-line__circle-mini"></div>
                                            </div>

                                            <!-- The title -->
                                            <div class="time-line__title">
                                                2014
                                            </div>
                                        </div>

                                        <!-- The description -->
                                        <div class="time-line__desc">
                                            <p class="mg-bt-30">Компания расширяет объёмы производства и диверсифицирует свою продукцию. Освоено
                                                производство кранов мостовых взрыво и пожароопасного исполнения (до 32 тн), а также выпущен первый
                                                козловой электрический кран г/п 32 т. Происходит ребрендинг и появляется новое торговое название
                                                UNIQ CRANE.</p>
                                            <div class="achievements">

                                                <div class="achievements-wrap">
                                                    <div>
                                                        <div class="achievements-items achievements-items--white">
                                                            <p class="achievements-items__numbers">362</p>
                                                        </div>
                                                    </div>
                                                    <p class="achievements-items__text achievements-items__text--regular">Поставленных
                                                        кранов</p>
                                                </div>

                                                <div class="achievements-wrap">
                                                    <div>
                                                        <div class="achievements-items achievements-items--white">
                                                            <p class="achievements-items__numbers">84</p>
                                                        </div>
                                                    </div>
                                                    <p class="achievements-items__text achievements-items__text--regular">установлинных эстакад
                                                        и крановых путей</p>
                                                </div>

                                                <div class="achievements-wrap">
                                                    <div>
                                                        <div class="achievements-items achievements-items--white">
                                                            <p class="achievements-items__numbers">512</p>
                                                        </div>
                                                    </div>
                                                    <p class="achievements-items__text achievements-items__text--regular">Смонтированных подъемных
                                                        механизмов</p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="time-line__item">
                                        <!-- The circle and title -->
                                        <div class="time-line__top">
                                            <!-- The circle -->
                                            <div class="time-line__circle">
                                                <div class="time-line__circle-mini"></div>
                                            </div>

                                            <!-- The title -->
                                            <div class="time-line__title">
                                                Миссия компании

                                            </div>
                                        </div>
                                    </li>

                                </ul>
                            </div>

                            <div class="mg-l-70">
                                <p class="section__text mg-bt-50">Поставка оборудования, которое отвечает всем потребностям клиента
                                    и обеспечивает максимально безопасную, и в тоже время эффективную эксплуатацию</p>
                                <p class="section__text section__text-1">Поставка оборудования в оговорённые сроки, является для нас очень
                                    важным качеством надёжного поставщика. Мы постоянно работаем и совершенствуемся над сроками производства
                                    кранового оборудования. При всем этом мы понимаем, что качество нашей продукции не должно из-за этого
                                    страдать. Поэтому мы делаем все планомерно и выверено.</p>
                                <p class="section__text section__text-1">Мы предлагаем клиентам различные виды условий в поставке
                                    ГПО и пытаемся во всем совершенствоваться, идя в ногу со всеми тенденциями на рынке!</p>
                                <p class="section__text section__text-1">Но просим также наших клиентов помнить! Быстро, дёшево
                                    и качественно — вместе, это взаимоисключающие факторы. Все это было выдумано недобросовестными
                                    поставщиками, которые ставят целью лишь привлечение клиентов, а не удовлетворение их потребностей.</p>
                                <p class="section__text section__text-1">Дорогие клиенты, используйте свой разум и опыт, а не желание
                                    обмануть логику и здравый смысл.</p>
                            </div>
                        </div>

                    </div>
                </section>



                <section class="section section--regular fp-auto-height">

                    <div id="regular-page" class="content-container content-container--regular">

                        <div class="content-wrap">
                            <p class="section__title section__title--1">Производство</p>

                            <p class="section__text mg-bt-50">В настоящее время производственные мощности кранового завода UNIQ CRANE
                                занимают 1350 квадратных метров и базируются на двух площадках:</p>

                            <ul class="platform-list">
                                <li class="platform-list__item">
                                    <p><b>г. Железнодорожный </b> (Московская область, г. Железнодорожный, ул. Промышленная д.37)</p>
                                </li>
                                <li class="platform-list__item">
                                    <p> <b>п. Шолоховский </b> (Ростовская область, Белокалитвинский район, п. Шолоховский, ул.
                                        Социалистический д.7).</p>
                                </li>
                            </ul>

                            <p class="section__text section__text-1">В Железнодорожном происходит изготовление небольших изделий, таких
                                как профильные пролетные балки, концевые балки, крановые тележки и токарные изделия. Крупные изделия,
                                такие как, например, мостовые балки крана производятся в Ростовской области. Само помещение, включая
                                земельный фонд в Ростовской области, находится в собственности завода.</p>
                            <p class="section__text section__text-1"> Мы предлагаем Вам посетить и увидеть наши производственные
                                возможности на любой из площадок. Посещения согласовываются по предварительной договоренности за 1 рабочий
                                день.</p>


                            <div class="cards">

                                <div class="cards-item cards-item--gallery">

                                    <div class="cards-mask cards-mask--gallery">
                                        <img src="./assets/img/icons/zoom.svg" alt="">
                                    </div>
                                </div>


                                <div class="cards-item cards-item--gallery">

                                    <div class="cards-mask cards-mask--gallery">
                                        <img src="./assets/img/icons/zoom.svg" alt="">
                                    </div>
                                </div>


                                <div class="cards-item cards-item--gallery">

                                    <div class="cards-mask cards-mask--gallery">
                                        <img src="./assets/img/icons/zoom.svg" alt="">
                                    </div>
                                </div>


                                <div class="cards-item cards-item--gallery">

                                    <div class="cards-mask cards-mask--gallery">
                                        <img src="./assets/img/icons/zoom.svg" alt="">
                                    </div>
                                </div>


                                <div class="cards-item cards-item--gallery">

                                    <div class="cards-mask cards-mask--gallery">
                                        <img src="./assets/img/icons/zoom.svg" alt="">
                                    </div>
                                </div>


                                <div class="cards-item cards-item--gallery">

                                    <div class="cards-mask cards-mask--gallery">
                                        <img src="./assets/img/icons/zoom.svg" alt="">
                                    </div>
                                </div>

                                <div class="cards-item cards-item--gallery">

                                    <div class="cards-mask cards-mask--gallery">
                                        <img src="./assets/img/icons/zoom.svg" alt="">
                                    </div>
                                </div>

                                <div class="cards-item cards-item--gallery">

                                    <div class="cards-mask cards-mask--gallery">
                                        <img src="./assets/img/icons/zoom.svg" alt="">
                                    </div>
                                </div>

                                <div class="cards-item cards-item--gallery">

                                    <div class="cards-mask cards-mask--gallery">
                                        <img src="./assets/img/icons/zoom.svg" alt="">
                                    </div>
                                </div>

                            </div>

                        </div>
                </section>

                <section class="section section--regular fp-auto-height">

                    <div id="regular-page" class="content-container content-container--regular">

                        <div class="content-wrap">
                            <p class="section__title section__title--1">Сертификаты</p>

                            <div class="cards">

                                <div class="cards-item cards-item--certificats">

                                    <div class="certificats-frame">
                                        <div class="certificats-frame__image"> <img src="./assets/img/icons/certificats-item.svg" alt="">
                                        </div>
                                        <div class="cards-mask cards-mask--certificats">
                                            <img src="./assets/img/icons/zoom.svg" alt="">
                                        </div>
                                    </div>

                                    <div class="cards-mask cards-mask--gallery">

                                        <img src="./assets/img/icons/zoom.svg" alt="">
                                    </div>
                                </div>

                                <div class="cards-item cards-item--certificats">

                                    <div class="certificats-frame">
                                        <div class="certificats-frame__image"> <img src="./assets/img/icons/certificats-item.svg" alt="">
                                        </div>
                                        <div class="cards-mask cards-mask--certificats">
                                            <img src="./assets/img/icons/zoom.svg" alt="">
                                        </div>
                                    </div>

                                    <div class="cards-mask cards-mask--gallery">

                                        <img src="./assets/img/icons/zoom.svg" alt="">
                                    </div>
                                </div>

                                <div class="cards-item cards-item--certificats">

                                    <div class="certificats-frame">
                                        <div class="certificats-frame__image"> <img src="./assets/img/icons/certificats-item.svg" alt="">
                                        </div>
                                        <div class="cards-mask cards-mask--certificats">
                                            <img src="./assets/img/icons/zoom.svg" alt="">
                                        </div>
                                    </div>

                                    <div class="cards-mask cards-mask--gallery">

                                        <img src="./assets/img/icons/zoom.svg" alt="">
                                    </div>
                                </div>

                                <div class="cards-item cards-item--certificats">

                                    <div class="certificats-frame">
                                        <div class="certificats-frame__image"> <img src="./assets/img/icons/certificats-item.svg" alt="">
                                        </div>
                                        <div class="cards-mask cards-mask--certificats">
                                            <img src="./assets/img/icons/zoom.svg" alt="">
                                        </div>
                                    </div>

                                    <div class="cards-mask cards-mask--gallery">

                                        <img src="./assets/img/icons/zoom.svg" alt="">
                                    </div>
                                </div>

                                <div class="cards-item cards-item--certificats">

                                    <div class="certificats-frame">
                                        <div class="certificats-frame__image"> <img src="./assets/img/icons/certificats-item.svg" alt="">
                                        </div>
                                        <div class="cards-mask cards-mask--certificats">
                                            <img src="./assets/img/icons/zoom.svg" alt="">
                                        </div>
                                    </div>

                                    <div class="cards-mask cards-mask--gallery">

                                        <img src="./assets/img/icons/zoom.svg" alt="">
                                    </div>
                                </div>

                                <div class="cards-item cards-item--certificats">

                                    <div class="certificats-frame">
                                        <div class="certificats-frame__image"> <img src="./assets/img/icons/certificats-item.svg" alt="">
                                        </div>
                                        <div class="cards-mask cards-mask--certificats">
                                            <img src="./assets/img/icons/zoom.svg" alt="">
                                        </div>
                                    </div>

                                    <div class="cards-mask cards-mask--gallery">

                                        <img src="./assets/img/icons/zoom.svg" alt="">
                                    </div>
                                </div>




                            </div>

                        </div>
                </section>


                <section class="section section--regular fp-auto-height">

                    <div id="regular-page" class="content-container content-container--regular">

                        <div class="content-wrap">
                            <p class="section__title section__title--1">Наши приемущества</p>


                            <div class="advantages">

                                <div class="advantages-box advantages-box--regular">

                                    <div class="advantages-item advantages-item--regular">

                                        <div class="advantages-item__logo"><img src="./assets/img/advantages/shield 1b.svg" alt=""></div>

                                        <div class="advantages-box__wrap">
                                            <h2 class="advantages-item__title">НАДЁЖНЫЙ КРАНОВЫЙ
                                                ЗАВОД</h2>
                                            <ul class="advantages-item__list">
                                                <li>Более 7 лет активной работы на рынке России и СНГ</li>
                                                <li> Доверительный уровень компании по всем базам.</li>
                                                <li> Отсутствие судебной истории.</li>
                                            </ul>
                                        </div>

                                    </div>

                                    <div class="advantages-item advantages-item--regular">

                                        <div class="advantages-item__logo"><img src="./assets/img/advantages/shield 2b.svg" alt=""></div>

                                        <div class="advantages-box__wrap">
                                            <h2 class="advantages-item__title">ВЫСОКОЕ КАЧЕСТВО
                                                ОБОРУДОВАНИЯ</h2>
                                            <ul class="advantages-item__list">
                                                <li>Собственный отдел технического контроля
                                                </li>
                                                <li> Полуавтоматическая сварка металлоконструкций и кранов
                                                </li>
                                                <li> Болтовое соединение всех электрических кранов</li>
                                            </ul>
                                        </div>

                                    </div>

                                    <div class="advantages-item advantages-item--regular">

                                        <div class="advantages-item__logo"><img src="./assets/img/advantages/shield 3b.svg" alt=""></div>

                                        <div class="advantages-box__wrap">
                                            <h2 class="advantages-item__title">РАБОТА В СЖАТЫЕ СРОКИ
                                            </h2>
                                            <ul class="advantages-item__list">
                                                <li>Изготовление кранов от 15 рабочих дней
                                                </li>
                                                <li>Поставка строго в обозначенные Договором сроки
                                                </li>
                                                <li> Возможность выезда на монтаж в день поставки оборудования</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="advantages-item advantages-item--regular">

                                        <div class="advantages-item__logo"><img src="./assets/img/advantages/shield 4b.svg" alt=""></div>

                                        <div class="advantages-box__wrap">
                                            <h2 class="advantages-item__title">ВЫГОДНЫЕ ЦЕНЫ
                                                НА ОБОРУДОВАНИЕ
                                            </h2>
                                            <ul class="advantages-item__list">
                                                <li>Постоянные скидки, сезонные и от объёма
                                                </li>
                                                <li> Дополнительное оборудование по ценам производителей
                                                </li>
                                                <li> Минимальная доплата за дополнительные опции</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="advantages-item advantages-item--regular">
                                        <div class="advantages-item__logo"><img src="./assets/img/advantages/shield 5b.svg" alt=""></div>

                                        <div class="advantages-box__wrap">
                                            <h2 class="advantages-item__title">СЕРВИС
                                                ВЫСОКОГО УРОВНЯ</h2>
                                            <ul class="advantages-item__list">
                                                <li>Возможность срочного монтажа и ремонта в день обращения

                                                </li>
                                                <li> Возможность срочного монтажа и ремонта в день обращения
                                                </li>
                                                <li> Возможность проведения работ в выходные дни</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="advantages-item advantages-item--regular">
                                        <div class="advantages-item__logo"><img src="./assets/img/advantages/shield 6b.svg" alt=""></div>

                                        <div class="advantages-box__wrap">
                                            <h2 class="advantages-item__title">ВЫГОДНЫЕ УСЛОВИЯ
                                                СОТРУДНИЧЕСТВА</h2>
                                            <ul class="advantages-item__list">
                                                <li>Выгодная доставка по всей России и СНГ
                                                </li>
                                                <li> Возможна оплата по факту выполнения работ
                                                </li>
                                                <li> Возможна работа по на ваших условиях</li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                            </div>


                        </div>

                    </div>
                </section>




                <section class="section section--regular fp-auto-height">

                    <div id="regular-page" class="content-container content-container--regular">

                        <div class="content-wrap">
                            <p class="section__title section__title--1">Наши клиенты</p>


                            <div class="clients-box clients-box--regular">
                                <div class="clients__item clients__item--regular"><img src="./assets/img/clients/regular/1.png" alt="">
                                </div>
                                <div class="clients__item clients__item--regular"><img src="./assets/img/clients/regular/2.png" alt="">
                                </div>
                                <div class="clients__item clients__item--regular"><img src="./assets/img/clients/regular/3.png" alt="">
                                </div>
                                <div class="clients__item clients__item--regular"><img src="./assets/img/clients/regular/4.png" alt="">
                                </div>
                                <div class="clients__item clients__item--regular"><img src="./assets/img/clients/regular/5.png" alt="">
                                </div>
                                <div class="clients__item clients__item--regular"><img src="./assets/img/clients/regular/6.png" alt="">
                                </div>
                                <div class="clients__item clients__item--regular"><img src="./assets/img/clients/regular/7.png" alt="">
                                </div>
                                <div class="clients__item clients__item--regular"><img src="./assets/img/clients/regular/8.png" alt="">
                                </div>
                                <div class="clients__item clients__item--regular"><img src="./assets/img/clients/regular/1.png" alt="">
                                </div>
                                <div class="clients__item clients__item--regular"><img src="./assets/img/clients/regular/2.png" alt="">
                                </div>
                                <div class="clients__item clients__item--regular"><img src="./assets/img/clients/regular/3.png" alt="">
                                </div>
                                <div class="clients__item clients__item--regular"><img src="./assets/img/clients/regular/4.png" alt="">
                                </div>
                                <div class="clients__item clients__item--regular"><img src="./assets/img/clients/regular/5.png" alt="">
                                </div>
                                <div class="clients__item clients__item--regular"><img src="./assets/img/clients/regular/6.png" alt="">
                                </div>
                                <div class="clients__item clients__item--regular"><img src="./assets/img/clients/regular/7.png" alt="">
                                </div>
                                <div class="clients__item clients__item--regular"><img src="./assets/img/clients/regular/8.png" alt="">
                                </div>
                                <div class="clients__item clients__item--regular"><img src="./assets/img/clients/regular/1.png" alt="">
                                </div>
                                <div class="clients__item clients__item--regular"><img src="./assets/img/clients/regular/2.png" alt="">
                                </div>
                                <div class="clients__item clients__item--regular"><img src="./assets/img/clients/regular/3.png" alt="">
                                </div>
                                <div class="clients__item clients__item--regular"><img src="./assets/img/clients/regular/4.png" alt="">
                                </div>
                                <div class="clients__item clients__item--regular"><img src="./assets/img/clients/regular/5.png" alt="">
                                </div>
                                <div class="clients__item clients__item--regular"><img src="./assets/img/clients/regular/6.png" alt="">
                                </div>
                                <div class="clients__item clients__item--regular"><img src="./assets/img/clients/regular/7.png" alt="">
                                </div>
                                <div class="clients__item clients__item--regular"><img src="./assets/img/clients/regular/8.png" alt="">
                                </div>
                                <div class="clients__item clients__item--regular"><img src="./assets/img/clients/regular/1.png" alt="">
                                </div>
                                <div class="clients__item clients__item--regular"><img src="./assets/img/clients/regular/2.png" alt="">
                                </div>
                                <div class="clients__item clients__item--regular"><img src="./assets/img/clients/regular/3.png" alt="">
                                </div>
                                <div class="clients__item clients__item--regular"><img src="./assets/img/clients/regular/4.png" alt="">
                                </div>
                                <div class="clients__item clients__item--regular"><img src="./assets/img/clients/regular/5.png" alt="">
                                </div>
                                <div class="clients__item clients__item--regular"><img src="./assets/img/clients/regular/6.png" alt="">
                                </div>
                                <div class="clients__item clients__item--regular"><img src="./assets/img/clients/regular/7.png" alt="">
                                </div>
                                <div class="clients__item clients__item--regular"><img src="./assets/img/clients/regular/8.png" alt="">
                                </div>
                            </div>


                        </div>

                    </div>
                </section>


                <section class="section section--regular fp-auto-height">

                    <div id="regular-page" class="content-container content-container--regular">

                        <div class="content-wrap">
                            <p class="section__title section__title--1">Отзывы</p>


                            <div class="review-box">
                                <div class="swiper-container mySwiper-Regular">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">

                                            <div class="review-wrap">
                                                <header class="review-header review-header--regular">
                                                    <h3 class="review-header__title">ЗАО «ЭРПАК»</h3>
                                                    <a href="#" class="review-header__scan-link">Смотреть скан отзыва</a>
                                                </header>
                                                <div class="review__text">
                                                    <p>Выражаю компании ЮНИК КРАН свою благодарность за поставку мостового однобалочного крана с
                                                        талью
                                                        в
                                                        оговоренный Договором срок (13 рабочих дней). Всё оборудование было поставлено высокого
                                                        качества
                                                        и
                                                        в полном комплекте. Таким образом компания ЮНИК КРАН зарекомендовала себя как надежный и
                                                        грамотный
                                                        поставщик грузоподъемного оборудования, полностью выполняющий взятые на себя обстоятельства
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">

                                            <div class="review-wrap">
                                                <header class="review-header review-header--regular">
                                                    <h3 class="review-header__title">ЗАО «ЭРПАК»</h3>
                                                    <a href="#" class="review-header__scan-link">Смотреть скан отзыва</a>
                                                </header>
                                                <div class="review__text">
                                                    <p>Выражаю компании ЮНИК КРАН свою благодарность за поставку мостового однобалочного крана с
                                                        талью
                                                        в
                                                        оговоренный Договором срок (13 рабочих дней). Всё оборудование было поставлено высокого
                                                        качества
                                                        и
                                                        в полном комплекте. Таким образом компания ЮНИК КРАН зарекомендовала себя как надежный и
                                                        грамотный
                                                        поставщик грузоподъемного оборудования, полностью выполняющий взятые на себя обстоятельства
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">

                                            <div class="review-wrap">
                                                <header class="review-header review-header--regular">
                                                    <h3 class="review-header__title">ЗАО «ЭРПАК»</h3>
                                                    <a href="#" class="review-header__scan-link">Смотреть скан отзыва</a>
                                                </header>
                                                <div class="review__text">
                                                    <p>Выражаю компании ЮНИК КРАН свою благодарность за поставку мостового однобалочного крана с
                                                        талью
                                                        в
                                                        оговоренный Договором срок (13 рабочих дней). Всё оборудование было поставлено высокого
                                                        качества
                                                        и
                                                        в полном комплекте. Таким образом компания ЮНИК КРАН зарекомендовала себя как надежный и
                                                        грамотный
                                                        поставщик грузоподъемного оборудования, полностью выполняющий взятые на себя обстоятельства
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">

                                            <div class="review-wrap">
                                                <header class="review-header review-header--regular">
                                                    <h3 class="review-header__title">ЗАО «ЭРПАК»</h3>
                                                    <a href="#" class="review-header__scan-link">Смотреть скан отзыва</a>
                                                </header>
                                                <div class="review__text">
                                                    <p>Выражаю компании ЮНИК КРАН свою благодарность за поставку мостового однобалочного крана с
                                                        талью
                                                        в
                                                        оговоренный Договором срок (13 рабочих дней). Всё оборудование было поставлено высокого
                                                        качества
                                                        и
                                                        в полном комплекте. Таким образом компания ЮНИК КРАН зарекомендовала себя как надежный и
                                                        грамотный
                                                        поставщик грузоподъемного оборудования, полностью выполняющий взятые на себя обстоятельства
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">

                                            <div class="review-wrap">
                                                <header class="review-header review-header--regular">
                                                    <h3 class="review-header__title">ЗАО «ЭРПАК»</h3>
                                                    <a href="#" class="review-header__scan-link">Смотреть скан отзыва</a>
                                                </header>
                                                <div class="review__text">
                                                    <p>Выражаю компании ЮНИК КРАН свою благодарность за поставку мостового однобалочного крана с
                                                        талью
                                                        в
                                                        оговоренный Договором срок (13 рабочих дней). Всё оборудование было поставлено высокого
                                                        качества
                                                        и
                                                        в полном комплекте. Таким образом компания ЮНИК КРАН зарекомендовала себя как надежный и
                                                        грамотный
                                                        поставщик грузоподъемного оборудования, полностью выполняющий взятые на себя обстоятельства
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">

                                            <div class="review-wrap">
                                                <header class="review-header review-header--regular">
                                                    <h3 class="review-header__title">ЗАО «ЭРПАК»</h3>
                                                    <a href="#" class="review-header__scan-link">Смотреть скан отзыва</a>
                                                </header>
                                                <div class="review__text">
                                                    <p>Выражаю компании ЮНИК КРАН свою благодарность за поставку мостового однобалочного крана с
                                                        талью
                                                        в
                                                        оговоренный Договором срок (13 рабочих дней). Всё оборудование было поставлено высокого
                                                        качества
                                                        и
                                                        в полном комплекте. Таким образом компания ЮНИК КРАН зарекомендовала себя как надежный и
                                                        грамотный
                                                        поставщик грузоподъемного оборудования, полностью выполняющий взятые на себя обстоятельства
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">

                                            <div class="review-wrap">
                                                <header class="review-header review-header--regular">
                                                    <h3 class="review-header__title">ЗАО «ЭРПАК»</h3>
                                                    <a href="#" class="review-header__scan-link">Смотреть скан отзыва</a>
                                                </header>
                                                <div class="review__text">
                                                    <p>Выражаю компании ЮНИК КРАН свою благодарность за поставку мостового однобалочного крана с
                                                        талью
                                                        в
                                                        оговоренный Договором срок (13 рабочих дней). Всё оборудование было поставлено высокого
                                                        качества
                                                        и
                                                        в полном комплекте. Таким образом компания ЮНИК КРАН зарекомендовала себя как надежный и
                                                        грамотный
                                                        поставщик грузоподъемного оборудования, полностью выполняющий взятые на себя обстоятельства
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">

                                            <div class="review-wrap">
                                                <header class="review-header review-header--regular">
                                                    <h3 class="review-header__title">ЗАО «ЭРПАК»</h3>
                                                    <a href="#" class="review-header__scan-link">Смотреть скан отзыва</a>
                                                </header>
                                                <div class="review__text">
                                                    <p>Выражаю компании ЮНИК КРАН свою благодарность за поставку мостового однобалочного крана с
                                                        талью
                                                        в
                                                        оговоренный Договором срок (13 рабочих дней). Всё оборудование было поставлено высокого
                                                        качества
                                                        и
                                                        в полном комплекте. Таким образом компания ЮНИК КРАН зарекомендовала себя как надежный и
                                                        грамотный
                                                        поставщик грузоподъемного оборудования, полностью выполняющий взятые на себя обстоятельства
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">

                                            <div class="review-wrap ">
                                                <header class="review-header review-header--regular">
                                                    <h3 class="review-header__title">ЗАО «ЭРПАК»</h3>
                                                    <a href="#" class="review-header__scan-link">Смотреть скан отзыва</a>
                                                </header>
                                                <div class="review__text">
                                                    <p>Выражаю компании ЮНИК КРАН свою благодарность за поставку мостового однобалочного крана с
                                                        талью
                                                        в
                                                        оговоренный Договором срок (13 рабочих дней). Всё оборудование было поставлено высокого
                                                        качества
                                                        и
                                                        в полном комплекте. Таким образом компания ЮНИК КРАН зарекомендовала себя как надежный и
                                                        грамотный
                                                        поставщик грузоподъемного оборудования, полностью выполняющий взятые на себя обстоятельства
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="review-next review-next--regular"></button>
                                    <button class="review-prev review-prev--regular"></button>
                                    <div class="swiper-pagination--regular"></div>
                                </div>

                            </div>

                        </div>

                    </div>
                </section>

            </div>
        </div>

    </div>
@endsection
