@extends('layouts.app')
@section('footer')
    @parent
@endsection

@section('content')
    <div class="content-container content-container--regular">

        <nav class="site-navigation">
            <nav class="mg-bt-35">
                <a class="nav-pages" href="{{ route('index') }}">Главная</a>
                <span class="nav-pages__slash">/</span>
                <a class="nav-pages" href="{{ route('equipment') }}">Оборудование</a>
            </nav>
        </nav>

        <section class="mg-bt-95">
            <h1 class="section__title mg-bt-35 ckeditor" id="equipment_editor1" data-dir="equipment" @if(isset(Auth::user()->is_admin)) contenteditable="true" @endif>
                @include('content.equipment.equipment_editor1')
            </h1>

            <div class="page-description">
                <div class="page-description__text">
                    <p>Кроме изготовления грузоподъёмных кранов, компания UNIQ CRANE также выступает поставщиком различного сопутствующего оборудования.</p>
                    <p>Мы сотрудничаем с различными производителями крановых комплектующих как в России, так и в соседних дружественных государствах.
                    </p></div>
                <div class="page-description__text">
                    <p>Хорошие дилерские условия позволяют нам реализовывать продукцию по ценам производителя. На сегодняшний день компания UNIQ CRANE осуществляет поставку следующих типов продукции, которые можно определить в две группы: крановые комплектующие и сопутствующее оборудование</p>
                </div>
            </div>
        </section>

        <section class="mg-bt-185">
            <h2 class="section__title section__title--1 mg-bt-35">Крановые комплектующие</h2>

            <div class="cards">

                <div class="cards-item">

                    <div class="cards-title">
                        <p>Крановые
                            металлоконструкции</p>
                    </div>

                    <div class="cards-item__circle">
                        <img class="cards__image cards__image--in-circle" src="./assets/img/cards-item/1.svg" alt="">
                    </div>
                    <a href="#" class="cards-item__link-button"></a>
                </div>

                <div class="cards-item">

                    <div class="cards-title">
                        <p>Крановые
                            этакады
                        </p>
                    </div>

                    <div class="cards-item__circle">
                        <img class="cards__image cards__image--in-circle" src="./assets/img/cards-item/2.svg" alt="">
                    </div>
                    <a href="#" class="cards-item__link-button"></a>
                </div>

                <div class="cards-item">

                    <div class="cards-title">
                        <p>Пульты
                            управления
                        </p>
                    </div>

                    <div class="cards-item__circle">
                        <img class="cards__image cards__image--in-circle" src="./assets/img/cards-item/3.svg" alt="">
                    </div>
                    <a href="#" class="cards-item__link-button"></a>
                </div>

                <div class="cards-item">

                    <div class="cards-title">
                        <p>Грузовые
                            тележки
                        </p>
                    </div>

                    <div class="cards-item__circle">
                        <img class="cards__image cards__image--in-circle" src="./assets/img/cards-item/4.svg" alt="">
                    </div>
                    <a href="#" class="cards-item__link-button"></a>
                </div>

                <div class="cards-item">

                    <div class="cards-title">
                        <p>Крановая кабина
                            (опционально)
                        </p>
                    </div>

                    <div class="cards-item__circle">
                        <img class="cards__image cards__image--in-circle" src="./assets/img/cards-item/5.svg" alt="">
                    </div>
                    <a href="#" class="cards-item__link-button"></a>
                </div>

                <div class="cards-item">

                    <div class="cards-title">
                        <p>Концевые
                            балки
                        </p>
                    </div>

                    <div class="cards-item__circle">
                        <img class="cards__image cards__image--in-circle" src="./assets/img/cards-item/6.svg" alt="">
                    </div>
                    <a href="#" class="cards-item__link-button"></a>
                </div>


                <div class="cards-item">

                    <div class="cards-title">
                        <p>Мотор-
                            редукторы
                        </p>
                    </div>

                    <div class="cards-item__circle">
                        <img class="cards__image cards__image--in-circle" src="./assets/img/cards-item/7.svg" alt="">
                    </div>
                    <a href="#" class="cards-item__link-button"></a>
                </div>

                <div class="cards-item">

                    <div class="cards-title">
                        <p>Системы
                            токопровода
                        </p>
                    </div>

                    <div class="cards-item__circle">
                        <img class="cards__image cards__image--in-circle" src="./assets/img/cards-item/8.svg" alt="">
                    </div>
                    <a href="#" class="cards-item__link-button"></a>
                </div>



            </div>
        </section>


        <section class="mg-bt-150">
            <h2 class="section__title section__title--1 mg-bt-35">Сопутствующее оборудование</h2>

            <div class="cards">

                <div class="cards-item">

                    <div class="cards-title">
                        <p>Тали</p>
                    </div>

                    <div class="cards-item__circle">
                        <img class="cards__image cards__image--in-circle" src="./assets/img/cards-item/add/1.svg" alt="">
                    </div>
                    <a href="#" class="cards-item__link-button"></a>
                </div>

                <div class="cards-item">

                    <div class="cards-title">
                        <p>Электрические
                            канатные тали
                        </p>
                    </div>

                    <div class="cards-item__circle">
                        <img class="cards__image cards__image--in-circle" src="./assets/img/cards-item/add/2.svg" alt="">
                    </div>
                    <a href="#" class="cards-item__link-button"></a>
                </div>

                <div class="cards-item">

                    <div class="cards-title">
                        <p>Крановые
                            весы
                        </p>
                    </div>

                    <div class="cards-item__circle">
                        <img class="cards__image cards__image--in-circle" src="./assets/img/cards-item/add/3.svg" alt="">
                    </div>
                    <a href="#" class="cards-item__link-button"></a>
                </div>

                <div class="cards-item">

                    <div class="cards-title">
                        <p>Ограничители
                            грузоподъемности
                        </p>
                    </div>

                    <div class="cards-item__circle">
                        <img class="cards__image cards__image--in-circle" src="./assets/img/cards-item/add/4.svg" alt="">
                    </div>
                    <a href="#" class="cards-item__link-button"></a>
                </div>

                <div class="cards-item">

                    <div class="cards-title">
                        <p>Частотные
                            преобразователи
                        </p>
                    </div>

                    <div class="cards-item__circle">
                        <img class="cards__image cards__image--in-circle" src="./assets/img/cards-item/add/5.svg" alt="">
                    </div>
                    <a href="#" class="cards-item__link-button"></a>
                </div>

                <div class="cards-item">

                    <div class="cards-title">
                        <p>Радиоуправление

                        </p>
                    </div>

                    <div class="cards-item__circle">
                        <img class="cards__image cards__image--in-circle" src="./assets/img/cards-item/add/6.svg" alt="">
                    </div>
                    <a href="#" class="cards-item__link-button"></a>
                </div>

            </div>
        </section>

    </div>
@endsection
