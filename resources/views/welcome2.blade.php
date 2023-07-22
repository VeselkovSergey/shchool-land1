<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Новые программы для учеников Высшей школы Госзакупок</title>

    <style>
        body, h1, h2, h3, h4, h5, p {
            padding: 0;
            margin: 0;
        }

        button {
            background: none;
            color: inherit;
            border: none;
            padding: 0;
            font: inherit;
            cursor: pointer;
            outline: inherit;
        }

        body {
            font-family: "ProximaNovaBold", sans-serif;
            color: rgba(69, 65, 60, 1);
        }

        img {
            width: 100%;
            height: 100%;
        }

        a {
            color: #2386ff;
            transition: color 0.3s ease;
            text-decoration: none;
        }

        a:not(.button-2):hover {
            color: #f79a15;
        }

        .hide {
            display: none;
        }

        .cp {
            cursor: pointer;
        }

        .text-center {
            text-align: center;
        }

        .flex {
            display: flex;
        }

        .flex-wrap {
            display: flex;
            flex-wrap: wrap;
        }

        .flex-column {
            display: flex;
            flex-direction: column;
        }

        .flex-center:not(.hide) {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
        }

        .flex-column-center {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .flex-center-x {
            display: flex;
            justify-content: center;
        }

        .flex-center-y {
            display: flex;
            align-items: center;
        }

        .flex-column-center-y {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .flex-column-center-x {
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .pos-abs {
            position: absolute;
        }

        .pos-fix {
            position: fixed;
        }

        .pos-relative {
            position: relative;
        }

        .bg-black {
            background-color: black;
        }

        @for($i = 0; $i <= 500; $i++)
        .p-{{$i}}                          {
            padding: {{$i}}px;
        }

        .px-{{$i}}                          {
            padding-left: {{$i}}px;
            padding-right: {{$i}}px;
        }

        .py-{{$i}}                          {
            padding-top: {{$i}}px;
            padding-bottom: {{$i}}px;
        }

        .pl-{{$i}}                          {
            padding-left: {{$i}}px;
        }

        .pr-{{$i}}                          {
            padding-right: {{$i}}px;
        }

        .pt-{{$i}}                          {
            padding-top: {{$i}}px;
        }

        .pb-{{$i}}                          {
            padding-bottom: {{$i}}px;
        }

        .m-{{$i}}                          {
            margin: {{$i}}px;
        }

        .mx-{{$i}}                          {
            margin-left: {{$i}}px;
            margin-right: {{$i}}px;
        }

        .my-{{$i}}                          {
            margin-top: {{$i}}px;
            margin-bottom: {{$i}}px;
        }

        .ml-{{$i}}                          {
            margin-left: {{$i}}px;
        }

        .mr-{{$i}}                          {
            margin-right: {{$i}}px;
        }

        .mt-{{$i}}                          {
            margin-top: {{$i}}px;
        }

        .mb-{{$i}}                          {
            margin-bottom: {{$i}}px;
        }

        .w-{{$i}}                          {
            width: {{$i}}%;
        }

        .w-px-{{$i}}                                        {
            width: {{$i}}px;
        }

        .h-{{$i}}                          {
            height: {{$i}}%;
        }

        .h-px-{{$i}}                                        {
            height: {{$i}}px;
        }

        .top-{{$i}}                                        {
            top: {{$i}}px;
        }

        .top--{{$i}}                                        {
            top: -{{$i}}px;
        }

        .left-{{$i}}                                        {
            left: {{$i}}px;
        }

        .right-{{$i}}                                        {
            right: {{$i}}px;
        }

        .bottom-{{$i}}                                        {
            bottom: {{$i}}px;
        }

        .opacity-{{$i}}                                        {
            opacity: {{$i}}%;
        }

        .z-{{$i}}                                        {
            z-index: {{$i}};
        }

        .z-{{$i}}                                        {
            z-index: {{$i}};
        }

        .z--{{$i}}                                        {
            z-index: -{{$i}};
        }

        .font-size-{{$i}}                                       {
            font-size: {{$i}}px;
        }

        .border-radius-{{$i}}                                    {
            border-radius: {{$i}}px;
        }


        /* adaptive */

        .w-{{$i}}-100 {
            width: {{$i}}%;
        }

        .p-{{$i}}-0 {
            padding: {{$i}}px;
        }

        .px-{{$i}}-0 {
            padding-left: {{$i}}px;
            padding-right: {{$i}}px;
        }

        .py-{{$i}}-0 {
            padding-top: {{$i}}px;
            padding-bottom: {{$i}}px;
        }

        .pl-{{$i}}-0 {
            padding-left: {{$i}}px;
        }

        .pr-{{$i}}-0 {
            padding-right: {{$i}}px;
        }

        .pt-{{$i}}-0 {
            padding-top: {{$i}}px;
        }

        .pb-{{$i}}-0 {
            padding-bottom: {{$i}}px;
        }

        .p-0-{{$i}}                          {
            padding: 0;
        }

        .px-0-{{$i}}                          {
            padding-left: 0;
            padding-right: 0;
        }

        .py-0-{{$i}}                          {
            padding-top: 0;
            padding-bottom: 0;
        }

        .pl-0-{{$i}}                          {
            padding-left: 0;
        }

        .pr-0-{{$i}}                          {
            padding-right: 0;
        }

        .pt-0-{{$i}}                          {
            padding-top: 0;
        }

        .pb-0-{{$i}}                          {
            padding-bottom: 0;
        }

        .m-{{$i}}-0 {
            margin: {{$i}}px;
        }

        .mx-{{$i}}-0 {
            margin-left: {{$i}}px;
            margin-right: {{$i}}px;
        }

        .my-{{$i}}-0 {
            margin-top: {{$i}}px;
            margin-bottom: {{$i}}px;
        }

        .ml-{{$i}}-0 {
            margin-left: {{$i}}px;
        }

        .mr-{{$i}}-0 {
            margin-right: {{$i}}px;
        }

        .mt-{{$i}}-0 {
            margin-top: {{$i}}px;
        }

        .mb-{{$i}}-0 {
            margin-bottom: {{$i}}px;
        }

        @media screen and (max-width: 768px) {
            .w-{{$i}}-100 {
                width: 100%;
            }

            .p-{{$i}}-0 {
                padding: 0;
            }

            .px-{{$i}}-0 {
                padding-left: 0;
                padding-right: 0;
            }

            .py-{{$i}}-0 {
                padding-top: 0;
                padding-bottom: 0;
            }

            .pl-{{$i}}-0 {
                padding-left: 0;
            }

            .pr-{{$i}}-0 {
                padding-right: 0;
            }

            .pt-{{$i}}-0 {
                padding-top: 0;
            }

            .pb-{{$i}}-0 {
                padding-bottom: 0;
            }

            .p-0-{{$i}}                          {
                padding: {{$i}}px;
            }

            .px-0-{{$i}}                          {
                padding-left: {{$i}}px;
                padding-right: {{$i}}px;
            }

            .py-0-{{$i}}                          {
                padding-top: {{$i}}px;
                padding-bottom: {{$i}}px;
            }

            .pl-0-{{$i}}                          {
                padding-left: {{$i}}px;
            }

            .pr-0-{{$i}}                          {
                padding-right: {{$i}}px;
            }

            .pt-0-{{$i}}                          {
                padding-top: {{$i}}px;
            }

            .pb-0-{{$i}}                          {
                padding-bottom: {{$i}}px;
            }

            .m-{{$i}}-0 {
                margin: 0;
            }

            .mx-{{$i}}-0 {
                margin-left: 0;
                margin-right: 0;
            }

            .my-{{$i}}-0 {
                margin-top: 0;
                margin-bottom: 0;
            }

            .ml-{{$i}}-0 {
                margin-left: 0;
            }

            .mr-{{$i}}-0 {
                margin-right: 0;
            }

            .mt-{{$i}}-0 {
                margin-top: 0;
            }

            .mb-{{$i}}-0 {
                margin-bottom: 0;
            }
        }

        @endfor

        .m-a {
            margin: auto;
        }

        .mr-a {
            margin-right: auto;
        }

        .mt-a {
            margin-top: auto;
        }

        .mb-a {
            margin-bottom: auto;
        }

        .ml-a {
            margin-left: auto;
        }
    </style>

    <style>
        .form_radio {
            margin-bottom: 10px;
        }

        .form_radio input[type=radio] {
            display: none;
        }

        .form_radio label {
            display: inline-block;
            cursor: pointer;
            position: relative;
            padding-left: 30px;
            margin-right: 0;
            line-height: 18px;
            user-select: none;
        }

        .form_radio label:before {
            content: "";
            display: inline-block;
            width: 18px;
            height: 18px;
            position: absolute;
            left: 0;
            border-radius: 50px;
            border: 1px solid rgba(196, 200, 212, 1);
        }

        /* Checked */
        .form_radio input[type=radio]:checked + label:after {
            content: "";
            display: inline-block;
            width: 12px;
            height: 12px;
            position: absolute;
            left: 4px;
            bottom: 2px;
            background-color: rgba(69, 65, 60, 1);
            border-radius: 50px;
        }

        /* Hover */
        .form_radio label:hover:before {
            filter: brightness(80%);
        }

        /* Disabled */
        .form_radio input[type=radio]:disabled + label:before {
            filter: grayscale(100%);
        }

        button {
            border-radius: 10px;
            padding: 10px 40px;
        }

        .button-1 {
            border-radius: 10px;
            padding: 10px 40px;
            border: 1px solid rgba(196, 200, 212, 1);
            background-color: rgba(249, 249, 249, 1);
        }

        .button-1:hover {
            background-color: rgba(196, 200, 212, 1);
            color: black;
        }

        .button-2 {
            border-radius: 10px;
            padding: 10px 40px;
            background-color: rgba(255, 159, 54, 1);
            color: white;
        }

        .button-2:hover {
            background-color: rgb(189, 111, 27);
        }

        .button-slider-1.--active {
            background-color: rgba(239, 238, 234, 1);
        }

        .button-slider-1:hover {
            background-color: rgba(250, 248, 245, 1);
        }

        .slider-1 {
            transition: transform 300ms;
            transform: translateY(100%);
        }

        .slider-1.--current {
            transform: translateY(0);
        }

        .slider-1:not(.--active) {
            display: none;
        }

        .open-list {
            transition: transform 200ms;
        }

        .open-list:hover {
            transform: scale(1.02);
        }
    </style>

</head>
<body class="p-0-10" style="background-color: rgba(69, 65, 60, 0.03);">
<div class="flex pos-abs" style="right: 10px; left: 10px; z-index: 1;">
    <div class="ml-a p-10" id="panelcontainer"></div>
</div>
<main class="" style="max-width: 1440px; margin: auto;">
    <section class="mb-100 pos-relative w-100 flex-column-center-y" style="color: white;">
        <div class="pl-50-0 pt-50-0 flex-wrap"
             style="max-width: 1240px; background-color: rgba(69, 65, 60, 1); border-radius: 0 0 50px 50px;">
            <div class="w-50-100 mr-a">
                <div class="mb-60 font-size-24">
                    <div>Высшая школа</div>
                    <div><b>Госзакупок</b></div>
                </div>
                <h1 class="mb-35 font-size-20">Новые программы для учеников Высшей школы Госзакупок</h1>
                <h2 class="mb-90 font-size-42">Новинка августа —
                    программа Специалист в сфере закупок — 2023</h2>
                <p class="font-size-20">Пройдите обучение по программе «Специалист по закупкам —2024» и освоите все
                    новые правила работы в контрактной системе с учетом мораторных поправок в закон. Получите
                    официальное удостоверение, необходимые навыки в работе.</p>

            </div>
            <div class="w-40-100 mt-130">
                <img src="./img/main-block.svg" alt="">
            </div>
        </div>
        <div class="pos-abs top-0 w-100 h-80 z--1" style="background-color: rgba(56, 52, 48, 1)">-</div>
    </section>
    <section class="mb-80 pos-relative">
        <h3 class="font-size-36 mb-100 ml-150">Какие навыки получите</h3>
        <div class="flex-wrap px-150-0" style="justify-content: space-between;">
            <article class="w-33-100 flex-column">
                <div class="h-px-175 mb-30">
                    <img src="./img/icon1.svg" alt="">
                </div>
                <h4 class="text-center mb-30 font-size-18">
                    Цифровые навыки в госзакупках
                </h4>
                <p class="text-center font-size-15 px-20">Вы научитесь работать в электронном магазине, освоите
                    функционал ЕИС: план-график, расторжение контрактов, претензионная работа</p>
            </article>
            <article class="w-33-100 flex-column">
                <div class="h-px-175 mb-30">
                    <img src="./img/icon2.svg" alt="">
                </div>
                <h4 class="text-center mb-30 font-size-18">
                    Работа с контрактами по 44-ФЗ
                </h4>
            </article>
            <article class="w-33-100 flex-column">
                <div class="h-px-175 mb-30">
                    <img src="./img/icon3.svg" alt="">
                </div>
                <h4 class="text-center mb-30 font-size-18">Корпоративные закупки для заказчиков по 223-ФЗ</h4>
            </article>
            <article class="w-100 flex-column-center">
                <div class="w-33">
                    <div class="h-px-175 mb-30">
                        <img src="./img/icon4.svg" alt="">
                    </div>
                    <h4 class="text-center mb-30 font-size-18">Организация закупок малого объема у единственного
                        поставщика</h4>
            </article>
            <article class="w-100 flex-column-center">
                <div class="w-33">
                    <div class="h-px-175 mb-30">
                        <img src="./img/icon5.svg" alt="">
                    </div>
                    <h4 class="text-center mb-30 font-size-18">Противодействие коррупции в бюджетных учреждениях</h4>
                </div>
            </article>
        </div>
        <span
            style="display: inline-block; width: 30px; height: 30px; position: absolute; background-color: rgba(7, 108, 123, 1); border-radius: 50px; top: -20px;left: 50px;"></span>
        <span
            style="display: inline-block; width: 20px; height: 20px; position: absolute; background-color: rgba(236, 139, 0, 1); border-radius: 50px; top: 220px;left: -10px;"></span>
    </section>
    <section class="mb-80 px-150-0 py-100 pos-relative" style="background-color: rgba(74, 144, 226, 1); color: white;">
        <h3 class="font-size-36 text-center mb-90" style="text-transform: uppercase;">
            Урок из новой программы,
            <br>который вам стоит пройти уже сейчас!
        </h3>
        <div>
            <div class="border-radius-30 px-100 flex-center"
                 style="background-color: white; color: rgba(69, 65, 60, 1);">
                <div class="w-65-100 mr-a font-size-24">
                    Я — Мария Федюкович, руководитель Высшей школы Госзакупок приглашаю вас на новый урок
                    <br>
                    <b>Я — Мария Федюкович, руководитель Высшей школы Госзакупок приглашаю вас на новый урок</b>
                </div>
                <div class="w-25-100 pos-relative h-px-260">
                    <div class="h-px-300 pos-abs top--40">
                        <img src="./img/people1.svg" alt="">
                    </div>
                </div>
            </div>
        </div>
        <span
            style="display: inline-block; width: 80px; height: 40px; position: absolute; background-color: rgba(243, 228, 181, 1); border-radius: 0 0 50px 50px; top: 0;right: 10px; rotate: -40deg;"></span>
        <span
            style="display: inline-block; width: 15px; height: 15px; position: absolute; background-color: rgba(249, 249, 249, 1); border-radius: 50px; top: 220px;left: 50px;"></span>
        <span
            style="display: inline-block; width: 30px; height: 30px; position: absolute; background-color: rgba(7, 108, 123, 1); border-radius: 50px; bottom: -15px;left: 200px;"></span>
    </section>
    <section class="mb-80">
        <h3 class="font-size-42 text-center mb-50">Как предостеречь себя от ошибок по инвентаризации</h3>
        <div class="flex-center">
            <button class="button-2" onclick="ModalWindow(document.getElementById('lesson1').innerHTML)">Пройти урок
            </button>
        </div>
    </section>
    <section class="w-100 mb-100">
        <h3 class="mb-80 font-size-42 text-center">
            Что нового в Высшей школе Госзакупок
            <br>в 2024 году?
        </h3>
        <article class="w-100 mb-40 open-list-wrapper cp">
            <div class="mx-100-0 border-radius-15" style="background-color: rgba(69, 65, 60, 1); color: white;">
                <h4 class="font-size-36 p-50 open-list" data-open-list="1">Новые форматы интерактивных заданий •</h4>
                <div class="hide p-50 pt-35 font-size-20 open-list-data flex-center" data-open-list="1">
                    <p class="mb-35">
                        <b>Тренировка.</b> Заполните матрицу централизации
                        Мы составили матрицу централизации для лайтового перехода. Собрали в ней все дела, которые
                        помогут учреждению сохранить работу бухгалтерам. Попытайтесь заполнить матрицу. Разнесите
                        действия по степени важности: красный блок — сделать обязательно, желтый — необходимо для
                        реализации первого блока. Зеленый — действия необязательные, но они помогут легче пережить
                        перемены.
                        Удачной тренировки!
                    </p>
                    <iframe
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen="" frameborder="0" height="650" scrolling="no"
                        src="//e.profkiosk.ru/media/36a6392b-0726-4826-a27f-8d39689c3c31/"
                        title="video-1d62b6d1-835c-4eeb-95e4-83c8ed260153" width="670" data-gtm-yt-inspected-13="true"
                        id="iFrameResizer0" style="overflow: auto; height: 705px;"> 
                    </iframe>
                </div>
            </div>
        </article>
        <article class="w-100 open-list-wrapper cp">
            <div class="mx-100-0 border-radius-15" style="background-color: rgba(69, 65, 60, 1); color: white;">
                <h4 class="font-size-36 p-50 open-list" data-open-list="2">Паспорт навыков •</h4>
                <div class="hide p-50 pt-35 w-75 font-size-20 open-list-data" data-open-list="2">
                    <p class="mb-35">Сформируйте ваш паспорт навыков профессионального бухгалтера госсектора</p>
                    <p>Подтвердите свои знания и получите цифровой паспорт профессиональных навыков, одобренный органами
                        власти,
                        специалистами Минфина и Федерального казначейства. Управляйте своим профессиональным
                        присутствием в
                        интернете, получайте новые навыки и возможности для карьерного роста.</p>
                </div>
            </div>
        </article>

        <div class="mx-100-0 pt-100" style="background-color: white; border-radius: 0 0 15px 15px;">
            <h3 class="font-size-54 text-center mb-20">
                Паспорта одобрены экспертами
                <br>профильных ведомств
            </h3>
            <p class="font-size-24 text-center mb-40">
                Эксперты Минпромторга, ФАС и Казначейства контролируют,
                <br>чтобы паспорта учитывали требования законодательства и
                <br>профессиональных стандартов
            </p>
            <div class="flex-wrap mx-150-0 mb-150" style="justify-content: space-around;">
                <article class="w-px-300 border-radius-10 flex-column"
                         style="background-color: rgba(249, 248, 244, 1);">
                    <div class="flex-center p-10">
                        <div class="w-px-280">
                            <img src="./img/exp_1.svg" alt="">
                        </div>
                    </div>
                    <div class="p-10 flex-column h-100">
                        <h4 class="font-size-24">Ольга Горбачева</h4>
                        <p class="font-size-18 mb-10">
                            начальник управления контроля размещения государственного заказа, ФАС России
                        </p>
                        <div class="font-size-14 mb-10 mt-a" style="color: rgba(166, 162, 153, 1);">Государственные
                            закупки
                        </div>
                    </div>
                </article>
                <article class="w-px-300 border-radius-10 flex-column"
                         style="background-color: rgba(249, 248, 244, 1);">
                    <div class="w-px-280 p-10">
                        <img src="./img/exp_2.svg" alt="">
                    </div>
                    <div class="p-10 flex-column h-100">
                        <h4 class="font-size-24">Дмитрий Бомбырь</h4>
                        <p class="font-size-18 mb-10">начальник отдела рассмотрения жалоб Управления контроля размещения
                            государственного оборонного заказа ФАС России</p>
                        <div class="font-size-14 mb-10 mt-a" style="color: rgba(166, 162, 153, 1);">Государственные
                            закупки
                        </div>
                    </div>
                </article>
                <article class="w-px-300 border-radius-10 flex-column"
                         style="background-color: rgba(249, 248, 244, 1);">
                    <div class="w-px-280 p-10">
                        <img src="./img/exp_3.svg" alt="">
                    </div>
                    <div class="p-10 flex-column h-100">
                        <h4 class="font-size-24">Надежда Лещенко</h4>
                        <p class="font-size-18 mb-10">заместитель директора Департамента стратегического развития и
                            корпоративной политики Минпромторга России</p>
                        <div class="font-size-14 mb-10 mt-a" style="color: rgba(166, 162, 153, 1);">Государственные
                            закупки
                        </div>
                    </div>
                </article>
            </div>

            <div class="flex-wrap px-50-0 pb-100">
                <div class="w-50-100">
                    <div class="pr-150-0">
                        <h3 class="font-size-54 mb-15">Цифровой паспорт ключевых навыков</h3>
                        <div class="p-15 mb-5 border-radius-10 button-slider-1 --active cp" data-img="1"
                             data-img-src="./img/passport1.gif">
                            <p class="font-size-18">
                                Для каждого специалиста разрабатываем паспорт навыков и вектор карьерного роста
                            </p>
                        </div>
                        <div class="p-15 mb-5 border-radius-10 button-slider-1 cp" data-img="2"
                             data-img-src="./img/passport2.gif">
                            <p class="font-size-18">
                                Учитываем должность, специфику работы, размер и тип учреждения
                            </p>
                        </div>
                        <div class="p-15 mb-5 border-radius-10 button-slider-1 cp" data-img="3"
                             data-img-src="./img/passport3.gif">
                            <p class="font-size-18">
                                Паспорт ежемесячно показывает, какие компетенции начинают устаревать из-за прошедших
                                изменений
                            </p>
                        </div>
                    </div>
                </div>
                <div class="w-50-100" style="overflow: hidden;">
                    <div class="slider-1 --active --current" data-img="1">
                        <div class="border-radius-20"
                             style="border: 1px solid rgba(217, 217, 217, 1); overflow: hidden;">
                            <img src="./img/passport1.gif" alt="">
                        </div>
                    </div>
                    <div class="slider-1" data-img="2">
                        <div class="border-radius-20"
                             style="border: 1px solid rgba(217, 217, 217, 1); overflow: hidden;">
                            <img src="./img/passport2.gif" alt="">
                        </div>
                    </div>
                    <div class="slider-1" data-img="3">
                        <div class="border-radius-20"
                             style="border: 1px solid rgba(217, 217, 217, 1); overflow: hidden;">
                            <img src="./img/passport3.gif" alt="">
                        </div>
                    </div>
                </div>
                <div class="w-100 flex-center mt-100">
                    <a class="passport-link button-2" href="#" target="_blank">Перейти в паспорт навыков</a>
                </div>
            </div>

        </div>
    </section>
    <section class="w-100 pos-relative" style="background-color: rgba(56, 52, 48, 1); color: white;">
        <div class="px-150-0 py-100">
            <h3 class="font-size-36 mb-40">НОВЫЕ ПРОГРАММЫ<br>в Высшей школе Госзакупок в 2024 году</h3>
            <article class="mb-15 p-40 border-radius-15" style="background-color: rgba(133, 204, 255, 1);">
                <div class="mb-10 font-size-20">Продвинутый •</div>
                <h4 class="font-size-26 w-90">Организация закупок малого объема у единственного поставщика</h4>
            </article>
            <article class="mb-15 p-40 border-radius-15" style="background-color: rgba(133, 204, 255, 1);">
                <div class="mb-10 font-size-20">Продвинутый •</div>
                <h4 class="font-size-26 w-90">Закупки первой необходимости - как обеспечить потребности учреждения 
                </h4>
            </article>
            <article class="mb-15 p-40 border-radius-15" style="background-color: rgba(133, 204, 255, 1);">
                <div class="mb-10 font-size-20">Продвинутый •</div>
                <h4 class="font-size-26 w-90">Как работать с контрактами по 44-ФЗ</h4>
            </article>
            <article class="mb-15 p-40 border-radius-15" style="background-color: rgba(133, 204, 255, 1);">
                <div class="mb-10 font-size-20">Продвинутый •</div>
                <h4 class="font-size-26 w-90">Главный бухгалтер госсектора (код В) - 2024</h4>
            </article>
            <article class="mb-15 p-40 border-radius-15" style="background-color: rgba(133, 204, 255, 1);">
                <div class="mb-10 font-size-20">Продвинутый •</div>
                <h4 class="font-size-26 w-90">Как работать в электронном магазине</h4>
            </article>
            <article class="mb-15 p-40 border-radius-15" style="background-color: rgba(133, 204, 255, 1);">
                <div class="mb-10 font-size-20">Продвинутый •</div>
                <h4 class="font-size-26 w-90">Специалист в сфере закупок — 2024</h4>
            </article>
        </div>
        <span
            style="display: inline-block; width: 80px; height: 40px; position: absolute; background-color: rgba(236, 139, 0, 1); border-radius: 0 0 50px 50px; top: -15px;left: 10px; rotate: 130deg;"></span>
        <span
            style="display: inline-block; width: 30px; height: 30px; position: absolute; background-color: rgba(240, 237, 203, 1); border-radius: 50px; top: 1020px;right: 50px;"></span>
        <span
            style="display: inline-block; width: 15px; height: 15px; position: absolute; background-color: rgba(224, 25, 24, 1); border-radius: 50px; bottom: -8px;right: 350px; z-index: 1;"></span>
    </section>
    <section class="w-100 py-100 pos-relative" style="background-color: white;">
        <div class="px-35-0">
            <article class="w-100 mb-40 open-list-wrapper cp">
                <div class="mx-100-0 border-radius-15" style="background-color: rgba(69, 65, 60, 1); color: white;">
                    <h3 class="font-size-36 p-50 open-list" data-open-list="3">Пройдите промежуточный тест из аттестации
                        главбухов</h3>
                    <div class="hide p-50 pt-35 font-size-20 open-list-data flex-center"
                         style="background-color: white;" data-open-list="3">
                        <iframe src="https://academia.school.budgetnik.ru/" frameborder="0" class="w-100"
                                style="height: 1000px"></iframe>
                    </div>
                </div>
            </article>
        </div>
        <span
            style="display: inline-block; width: 80px; height: 40px; position: absolute; background-color: rgba(219, 25, 13, 1); border-radius: 0 0 50px 50px; top: 70px;left: 80px; rotate: 130deg;"></span>
        <span
            style="display: inline-block; width: 30px; height: 30px; position: absolute; background-color: rgba(236, 139, 0, 1); border-radius: 50px; top: 520px;right: 100px;"></span>
        <span
            style="display: inline-block;width: 15px;height: 15px;position: absolute;background-color: rgba(11, 7, 8, 1);border-radius: 50px;bottom: 50px;left: 300px;"></span>
    </section>
    <footer class="h-px-300 w-100 flex-center p-0-20" style="background-color: rgba(56, 52, 48, 1); color: white;">
        <div class="w-50-100">
            <div class="pl-100-0">
                <div class="mb-20">
                    Нажимая на кнопку, вы даете свое согласие на обработку персональных данных
                    © НОЧУ ОДПО Актион, медиагруппа Актион-МЦФЭР, 2021
                </div>
                <div><a target="_blank" href="https://id2.action-media.ru/l/politika_pd?id=2">Политика обработки
                        персональных данных</a></div>
            </div>
        </div>
        <div class="w-50-100">
            <p class="pl-100-0">
                По всем вопросам звонок бесплатный<br>
                <b>8 (800) 511-76-94</b>
            </p>
        </div>
    </footer>
</main>

<template id="lesson1">
    <style>
        .lesson1 {
            line-height: 28px;
            font-size: 18px;
        }

        .lesson1 h2 {
            font-size: 24px;
        }

        .lesson1 h3 {
            font-size: 22px;
        }

        .lesson1 h3 {
            font-size: 20px;
        }

        .lesson1 > * {
            margin-bottom: 20px;
        }

        .apple {
            content: '';
            position: absolute;
            background-image: url('https://cdn.action-mcfr.ru/editor/schools/ic-apple.svg');
            width: 85px;
            height: 106px;
            left: -42px;
            bottom: calc(100% - 57px);
            top: 50%;
            margin-top: -53px;
            background-size: contain;
        }

        .sovet {
            content: '';
            position: absolute;
            background-image: url(https://cdn.action-mcfr.ru/editor/schools/ic-tips.svg);
            width: 110px;
            height: 110px;
            right: -42px;
            top: -50px;
            background-size: contain;
        }
    </style>
    <div class="lesson1">
        <h2>Что поменялось в закупках в 2023 году и к чему готовиться</h2>
        <p>
            На этом уроке разберетесь, что поменялось в закупках в 2023 году, а что только планирует поменяться. После
            каждого изменения узнаете, как к нему подготовиться.
        </p>
        <h3>Как работать с реестром контрактов по новым правилам с 1 июля 2023 года</h3>
        <p>
            С 1 июля расширили перечень сведений для реестра контрактов. Допустите ошибку – сведения не пройдут
            контроль, в итоге дойдет до штрафа. В этой части урока вы научитесь вносить сведения в реестр контрактов по
            новым правилам так, чтобы они проходили контроль с первого раза. А еще узнаете, что нового проверит
            контролер в ваших сведениях.
        </p>
        <p>
            Для начала посмотрите видео с экспертом Федерального Казначейства Ольгой Кудако. В видео узнаете, какие
            новые сведения необходимо вносить в реестр контрактов с 1 июля, и в какие сроки.
        </p>
        <div class="flex-center">
            <iframe id="YT_1690039716371" frameborder="0" allowfullscreen="1"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    title="Изменения в работе с реестром контрактов с 1 июля 2023 года" width="688" height="400"
                    src="https://www.youtube.com/embed/lJsMdtvt7Kk?wmode=opaque&amp;enablejsapi=1&amp;origin=https%3A%2F%2Fschool.gzakypki.ru&amp;widgetid=1"
                    data-gtm-yt-inspected-11="true" scrolling="no" style="overflow: auto;"></iframe>
        </div>
        <p>
            А теперь попробуйте самостоятельно определить крайний и оптимальный сроки для внесения сведения в реестр
            контрактов по новым правилам.
        </p>
        <div class="flex-center" style="height: 400px">
            <iframe id="frame" class="frame" allow="autoplay; fullscreen" style="border:0px;width:100%;height:100%"
                    allowfullscreen="" webkitallowfullscreen="" mozallowfullscreen=""
                    src="https://learningapps.org/show.php?id=pa6v789wk23" frameborder="0" width="100%"
                    height="100%"></iframe>
        </div>
        <p>
            Со сроками разобрались. А теперь в интерактивном тренажере выберите сведения, которые внесете в реестр
            контрактов с 1 июля 2023 года.
        </p>
        <div class="flex-center" style="height: 400px">
            <iframe id="frame" class="frame" allow="autoplay; fullscreen" style="border:0px;width:100%;height:100%"
                    allowfullscreen="" webkitallowfullscreen="" mozallowfullscreen=""
                    src="https://learningapps.org/show.php?id=p5a6pfemk23" frameborder="0" width="100%"
                    height="100%"></iframe>
        </div>
        <h3>Другие изменения в Законе 44-ФЗ</h3>
        <p>
            В мае для заказчиков заработали 11 новых правил по закону об упрощении закупок. Основное изменение –
            законодатели увеличили лимиты для котировки и электронных закупок у едпоставщика. Это произошло из-за <a
                href="http://www.1gzakaz.ru/#/document/99/1301437595//" target="_blank">Закона № 154-ФЗ от
                28.04.2023</a>, изменения работают с 8 мая. В презентации ниже смотрите, что изменилось в правилах
            закупок из-за нового закона.
        </p>
        <div class="flex-center">
            <iframe allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen="" frameborder="0" height="315" scrolling="no"
                    src="https://school.gzakypki.ru/interactive/doc/4c7fd931-b067-4bc2-8338-1b157fc6cc84/index.html"
                    title="video-7e4d0800-df86-44cb-9667-a2f94d4c5250" width="560" data-gtm-yt-inspected-11="true"
                    id="iFrameResizer2" style="overflow: auto; height: 502px;"> 
            </iframe>
        </div>
        <p>
            Теперь смотрите ниже, что еще поменялось в закупках в 2023 году и советы, как применять новые правила. На
            данный момент, таких изменений — 17, но список новинок постоянно обновляется.
        </p>
        <p>
            <b>Изменение 1. Обязали заказчиков закупать минимальную долю российских товаров в повышенном размере.</b>
            Для некоторых товаров с минимальной долей предусмотрели повышенный процент. Например, для устройств хранения
            данных по ОКПД2 26.20.2 размер минимальной доли российских товаров с 1 января 2023 года — 50 процентов.
        </p>
        <div class="flex">
            <div class="m-a w-75 p-50 pos-relative" style="  border-top: 1px solid #549ffa; border-bottom: 1px solid #549ffa;">
                <h3>Проверьте закупки в плане-графике, при необходимости пересчитайте минимальную долю.</h3>
                <span class="sovet"></span>
            </div>
        </div>
        <p>
            <b>Изменение 2. Продлили на 2023 год правила для безлимитного запроса котировок.</b> Минобрнауки,
            государственные вузы и научные организации могут закупать ряд товаров, работ и услуг через электронный
            запрос котировок, независимо от НМЦК и годового объема закупок (<a
                href="https://vip.1gzakaz.ru/#/document/99/350462747/">распоряжение Правительства от 26.05.2022 №
                1316-р</a>). Полный перечень вы можете скачать в допматериалах к уроку.
        </p>
        <div class="flex">
            <div class="m-a w-75 p-50 pos-relative" style="  border-top: 1px solid #549ffa; border-bottom: 1px solid #549ffa;">
                <h3>Если подпадаете под перечисленных выше заказчиков, то вы можете проводить закупки в сокращенные сроки.
                    Напомним, что извещение об электронном запросе котировок нужно разместить <b>за четыре рабочих дня</b>
                    до даты истечения срока подачи заявок.</h3>
                <span class="sovet"></span>
            </div>
        </div>
        <p>
            <b>Изменение 3. Утвердили перечень промтоваров, при закупке которых нужно установить аванс 80 процентов.</b>
            С 4 января 2023 года <a
                href="https://school.gzakypki.ru/programs/208252/150e96bc-0b0e-4fc0-84da-04a603559117/cda09fcf-75a3-4ecf-b23d-3adc6c838ec3">федеральные
                заказчики обязаны</a> устанавливать аванс 80 при закупки промтоваров из
            перечня, если был установлен запрет на допуск (<a href="https://vip.1gzakaz.ru/#/document/99/1300421088/">постановление
                Правительства от 24.12.2022 № 2411</a>). Правило действует для контрактов, которые заключены в 2023–2024
            годах. Перечень вы можете скачать в допматериалах к уроку.
        </p>
        <div class="flex">
            <div class="m-a w-75 p-50 pos-relative" style="  border-top: 1px solid #549ffa; border-bottom: 1px solid #549ffa;">
                <h3>Проверьте тексты контрактов и извещений. Если есть что-то, что вы закупаете из года в год, надо будет
                    обновить тексты документов, которые размещаете в составе извещений.</h3>
                <span class="sovet"></span>
            </div>
        </div>
        <p>
            <b>Изменение 4. Дополнили информацию, которую нужно включать в отчет о закупках у СМП и СОНО.</b> Объем
            финобеспечения на лекарства для медицинского применения и медизделия нужно указывать в отчете о закупках у
            СМП и СОНО. Информацию о сумме таких закупок включите во вторую позицию раздела II и третью позицию раздела
            III формы отчета.
        </p>
        <div class="flex">
            <div class="m-a w-75 p-50 pos-relative" style="  border-top: 1px solid #549ffa; border-bottom: 1px solid #549ffa;">
                <h3>Проконсультируйте специалиста, который готовит отчет о закупках у СМП и СОНО.</h3>
                <span class="sovet"></span>
            </div>
        </div>
        <p>
            <b>Изменение 5. Дополнили основания для закупок у едпоставщика по пункту 8.</b> С 1 января 2023 года
            заказчики вправе заключить контракт с едпоставщиком на услуги по обращению с <b>отходами I и II классов
                опасности</b> (<a
                href="https://vip.1gzakaz.ru/#/document/99/352187400/">подп. «в» п. 2 ст. 1 Закона от 04.11.2022 №
                420-ФЗ</a>).
        </p>
        <div class="flex">
            <div class="m-a w-75 p-50 pos-relative" style="  border-top: 1px solid #549ffa; border-bottom: 1px solid #549ffa;">
                <h3>Доведите информацию до сотрудников отдела закупок и контрактной службы.</h3>
                <span class="sovet"></span>
            </div>
        </div>
        <p>
            <b>Изменение 6. Продлили право менять существенные условия строительных контрактов.</b> Заказчики вправе
            менять
            существенные условия контрактов, предмет которых – выполнение работ по строительству, реконструкции,
            капитальному ремонту, сносу объекта капитального строительства, проведению работ по сохранению объектов
            культурного наследия, если выполнены условия:
        <ul>
            <li>контракт заключен на срок менее одного года;</li>
            <li>изменения не приводят к увеличению срока исполнения контракта или цены контракта более чем на 30
                процентов;
            </li>
            <li>при исполнении контракта возникли не зависящие от сторон обстоятельства, которые повлекли невозможность
                исполнить сделку;
            </li>
            <li>подготовлено письменное обоснование изменения на основании решения Правительства, органа власти субъекта
                РФ, местной администрации.
            </li>
        </ul>
        </p>
        <div class="flex">
            <div class="m-a w-75 p-50 pos-relative" style="  border-top: 1px solid #549ffa; border-bottom: 1px solid #549ffa;">
                <h3>Доведите информацию до сотрудников отдела закупок и контрактной службы.</h3>
                <span class="sovet"></span>
            </div>
        </div>
        <p>
            <b>Изменение 7. Участникам конкурса дали возможность подать предложение ниже нуля и предложить цену за право
                заключения контракта.</b> У участников конкурса появилась возможность спуститься ниже нуля и предложить
            цену за
            право заключения контракта (<a href="https://vip.1gzakaz.ru/#/document/99/350237367/ZAP2KE63KS/">подп. «а»
                п. 14 ст. 2 Закона от 16.04.2022 № 104-ФЗ</a>).
        </p>
        <div class="flex">
            <div class="m-a w-75 p-50 pos-relative" style="  border-top: 1px solid #549ffa; border-bottom: 1px solid #549ffa;">
                <h3>Проверьте тексты контрактов и извещений. Если есть что-то, что вы закупаете из года в год, надо будет
                    обновить тексты документов, которые размещаете в составе извещений.</h3>
                <span class="sovet"></span>
            </div>
        </div>
        <p>
            <b>Изменение 8. Разрешили заключать контракт с едпоставщиком по части 12 статьи 93, даже если была подана
                всего
                одна заявка.</b> Оператор электронной площадки будет направлять заказчику даже единственное товарное
            предложение
            участника, если оно соответствует требованиям извещения заказчика, и заказчик сможет заключить контракт с
            таким единственным участником (<a href="https://vip.1gzakaz.ru/#/document/99/350921911/XA00M762MV/">подп.
                «б» п. 7 ст. 2 Закона от 28.06.2022 № 231-ФЗ</a>).
        </p>
        <div class="flex">
            <div class="m-a w-75 p-50 pos-relative" style="  border-top: 1px solid #549ffa; border-bottom: 1px solid #549ffa;">
                <h3>Если создали комиссию, то обяжите членов комиссии включить в протокол подведения итогов единственного
                    участника. Напомним, что заказчик вправе не утверждать комиссию при закупке у едпоставщика (<a
                        href="https://vip.1gzakaz.ru/#/document/99/499011838/XA00M2O2M2/">ч. 1</a> ст. 39
                    Закона № 44-ФЗ, <a href="https://vip.1gzakaz.ru/#/document/99/573661129/">письмо Минфина от 12.02.2021 №
                        24-06-08/9591</a>). Если комиссию не утвердили,
                    проконсультируйте специалиста, который готовит протокол подведения итогов.</h3>
                <span class="sovet"></span>
            </div>
        </div>
        <p>
            <b>Изменение 9. Дополнили сведения об исполнении контракта в части требований об уплате неустойки.</b> В
            сведениях
            об исполнении контракта необходимо указывать сумму требований об уплате неустоек (<a
                href="https://vip.1gzakaz.ru/#/document/99/352243686/XA00M9O2NH/">пп. «з»</a> п. 20 изменений из
            постановления № 1946).
        </p>
        <div class="flex">
            <div class="m-a w-75 p-50 pos-relative" style="  border-top: 1px solid #549ffa; border-bottom: 1px solid #549ffa;">
                <h3>Скорректируйте обязанности специалиста, который вносит информацию об исполнении контракта. Добавьте
                    обязанность размещать информацию о неустойках в ЕИС.</h3>
                <span class="sovet"></span>
            </div>
        </div>
        <p>
            <b>Изменение 10. Утвердили перечень товаров, при закупке которых в описании объекта нужно указывать
                экологические требования.</b> При описании объекта закупки из специального перечня заказчики по 44-ФЗ
            должны
            предъявлять экологические требования и указывать долю вторичного сырья, которое использовали при
            производстве товара. В перечень вошли пять групп товаров, в том числе покрытия из резиновой крошки,
            тротуарная плитка, контейнеры, урны для мусора, удобрения и грунт, а также бумажные полотенца и салфетки
            (<a href="http://www.1gzakaz.ru/#/document/99/351176886//">постановление Правительства от 08.07.2022 №
                1224</a>).
        </p>
        <div class="flex">
            <div class="m-a w-75 p-50 pos-relative" style="  border-top: 1px solid #549ffa; border-bottom: 1px solid #549ffa;">
                <h3>Обяжите специалиста, который описывает объект закупки, указывать экологические требования.</h3>
                <span class="sovet"></span>
            </div>
        </div>
        <p>
            <b>Изменение 11.</b> Исключили требование формировать протокол об отказе заключать контракт с участником,
            который
            не подтвердил добросовестность при демпинге (<a
                href="https://vip.1gzakaz.ru/#/document/99/350237367/ZAP1RDU3EJ/">п. 9 ст. 2 Закона от 16.04.2022 №
                104-ФЗ</a>). Участника признает
            уклонистом не комиссия по закупкам, а руководитель организации. Протокол в данной ситуации не формируйте.
        </p>
        <div class="flex">
            <div class="m-a w-75 p-50 pos-relative" style="  border-top: 1px solid #549ffa; border-bottom: 1px solid #549ffa;">
                <h3>Скорректируйте тексты должностных инструкций сотрудников и положения о комиссиях, если они предусмотрены
                    в вашем учреждении. Исключите требование формировать протокол об отказе заключать контракт с участником,
                    который не подтвердил добросовестность при демпинге.</h3>
                <span class="sovet"></span>
            </div>
        </div>
        <p>
            <b>Изменение 12. Убрали верхний порог цены в закупке на повышение.</b> Отменили верхний потолок цены на
            право
            заключить контракт. Когда участники аукциона снижают цену контракта до нуля, уже не заказчик платит
            поставщику за исполнение, а поставщик платит заказчику за право заключить контракт. Верхний порог цены
            такого контракта составляет 100 млн руб. А с 1 января 2023 года верхнего порога не будет, то есть цена может
            быть любой
            (<a href="http://www.1gzakaz.ru/#/document/99/350237367/ZAP28HS3ER/">п. 15, ст. 2 Федерального закона от
                16.04.2022 № 104-ФЗ</a>).
        </p>
        <div class="flex">
            <div class="m-a w-75 p-50 pos-relative" style="  border-top: 1px solid #549ffa; border-bottom: 1px solid #549ffa;">
                <h3>Проверьте тексты контрактов и извещений, особенно
                    по систематическим электронным аукционам. Если есть что-то, что вы закупаете из года в год, надо будет
                    обновить тексты документов, которые размещаете в составе извещений.</h3>
                <span class="sovet"></span>
            </div>
        </div>
        <p>
            <b>Изменение 13. Уточнили, что считается конфликтом интересов.</b> Это когда должностное лицо заказчика или
            его
            близкий родственник сам участвует в закупке как физлицо или как исполнительный орган участника закупки.
            Владение более чем 10 процентами акций участника закупки тоже будет считаться конфликтом интересов (<a
                href="https://vip.1gzakaz.ru/#/document/99/350686456/XA00M2U2M0/">п. 2 ст.
                2 Федерального закона от 11.06.2022 № 160-ФЗ</a>).
        </p>
        <div class="flex">
            <div class="m-a w-75 p-50 pos-relative" style="  border-top: 1px solid #549ffa; border-bottom: 1px solid #549ffa;">
                <h3>Скорректируйте тексты должностных инструкций сотрудников и положения о комиссиях, если они предусмотрены
                    в вашем учреждении. Пропишите, какие ситуации будете считать конфликтом интересов.</h3>
                <span class="sovet"></span>
            </div>
        </div>
        <p>
            <b>Изменение 14. Обязали принимать меры по предупреждению конфликта интересов.</b> Это касается руководителя
            заказчика, членов комиссии по осуществлению закупок, руководителя и работника контрактной службы, а также
            контрактного управляющего (<a href="https://vip.1gzakaz.ru/#/document/99/350686456/XA00M802MO/">подп. «а»,
                п. 3 ст. 2 Закона от 11.06.2022 № 160-ФЗ</a>).
        </p>
        <div class="flex">
            <div class="m-a w-75 p-50 pos-relative" style="  border-top: 1px solid #549ffa; border-bottom: 1px solid #549ffa;">
                <h3>Обяжите членов комиссии по закупкам незамедлительно сообщать заказчику, принявшему решение о создании
                соответствующей комиссии, о возникновении у него конфликта интересов. А заказчик, в свою очередь, обязан
                будет отстранить такое лицо от участия в рассмотрении материалов закупки.</h3>
                <span class="sovet"></span>
            </div>
        </div>
        <p>
            <b>Изменение 15. Назвали тех, кто не может входить в комиссию по закупкам.</b> В законе появился перечень
            лиц,
            которые не могут входить в состав комиссии по осуществлению закупок. Опять же из-за конфликта интересов в
            состав комиссии не могут входит физлица, которых привлекали к закупке в качестве экспертов, физлица, имеющие
            личную заинтересованность в определении поставщика, акционеров — участников закупки и должностных лиц
            органов контроля (<a href="https://vip.1gzakaz.ru/#/document/99/350686456/XA00M6C2MG/">п. 4 ст. 2 Закона от
                11.06.2022 № 160-ФЗ</a>).
        </p>
        <div class="flex">
            <div class="m-a w-75 p-50 pos-relative" style="  border-top: 1px solid #549ffa; border-bottom: 1px solid #549ffa;">
                <h3>Просмотрите регламенты работы контрактной службы, комиссий и антикоррупционное положение учреждения.
                    Подробно детализируйте, кого запрещаете включать в состав комиссии.</h3>
                <span class="sovet"></span>
            </div>
        </div>
        <p>
            <b>Изменения 16. Ввели новый случай закупки у едпоставщика.</b> Вводится новый случай закупки у едпоставщика
            —
            заключение контракта на оказание услуг по подготовке космонавтов, по организации и обеспечению запусков
            космических аппаратов и управлению ими в полете, по созданию (разработке, изготовлению и испытанию)
            космической техники (<a href="https://vip.1gzakaz.ru/#/document/99/350237367/XA00MAK2NA/">п. 18 ст. 2 Закона
                от 16.04.2022 № 104-ФЗ</a>).
        </p>
        <p>Проверьте по чек-листу, какие локальные акты и документы необходимо скорректировать в связи с
            изменениями.</p>
        <div class="flex-center">
            <iframe allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen="" frameborder="0" height="315" scrolling="no"
                    src="https://school.gzakypki.ru/interactive/doc/ccc1cd7a-4f24-42e0-b426-229c337e5d5f/index.html"
                    title="video-a95c9a27-7103-452f-9c7b-416f80aad6c1" width="560" data-gtm-yt-inspected-11="true"
                    id="iFrameResizer3" style="overflow: auto; height: 1055px;"> 
            </iframe>
        </div>
        <p>
            <b>Изменения 17.</b>С 5 декабря 2022 года к участникам закупки предъявляют новое требование об отсутствии
            статуса
            иностранного агента. Заявки от иноагентов заказчики отклоняют за несоответствие единым требованиям по пункту
            <a href="http://www.1gzakaz.ru/#/document/99/499011838/ZAP1SBI3EH/">10.1</a> части 1 статьи 31 Закона №
            44-ФЗ (федеральные законы
            <a href="https://vip.1gzakaz.ru/#/document/99/351175770/">от 14.07.2022 № 255-ФЗ</a>, <a
                href="https://vip.1gzakaz.ru/#/document/99/1300131646/">от 05.12.2022 №
                498-ФЗ</a>).
        </p>
        <div class="flex">
            <div class="m-a w-75 p-50 pos-relative" style="  border-top: 1px solid #549ffa; border-bottom: 1px solid #549ffa;">
                <h3>Доведите информацию до сотрудников отдела закупок и закупочной комиссии.</h3>
                <span class="sovet"></span>
            </div>
        </div>


        <h3>Дополнительные материалы</h3>
        <div><a target="_blank" href="https://school.gzakypki.ru/webcontent/courses/150e96bc0b0e4fc084da04a603559117/Kratkaya%20instrukcia%20polsovatelya_20221111T103721.pdf">Инструкция по перерегистрации в ЕИС</a></div>
        <div><a target="_blank" href="https://school.gzakypki.ru/webcontent/courses/150e96bc0b0e4fc084da04a603559117/Prikaz%20o%20predostavlenii%20EP_20220523T115711_20221111T111054.docx">Приказ о предоставлении полномочий по использовани электронной подписи</a></div>
        <div><a target="_blank" href="https://school.gzakypki.ru/webcontent/courses/150e96bc0b0e4fc084da04a603559117/Perechni%20tovarov_%20rabot%20i%20uslug%20kotorie%20mogut%20zakupat%20cherez%20elektronnii%20zapros%20kotirovok_20230315T121108.docx">Перечни товаров, работ и услуг которые могут закупать через электронный запрос катировок.</a></div>
        <div><a target="_blank" href="https://school.gzakypki.ru/webcontent/courses/150e96bc0b0e4fc084da04a603559117/Perechen%20promtovarov%20pri%20zakupke%20kotorih%20federalnie%20zakazchiki%20obyazani%20ustanovit%20avans_20230315T121108.docx">Перечень промтоваров при закупке которых федеральные заказчики обязаны установить аванс 80</a></div>
        <div><a target="_blank" href="https://school.gzakypki.ru/storage/text/2059c1e7-ebdd-4262-920c-414146937051.docx">Изменения в реестре контрактов с 1 июля 2023 года</a></div>

    </div>
</template>

<style>
    /* модальное окно */
    .modal-window-component-container {
        position: fixed;
        top: 0;
        left: 0;
        z-index: 10;
    }

    .modal-window-component-container .modal-window-component {
        width: 100vw;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .modal-window-component-container .modal-window-component .modal-window-shadow {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgb(0 0 0 / 70%);
        backdrop-filter: blur(12px);
    }

    .modal-window-component-container .modal-window-component .modal-window-content-container {
        z-index: 1;
        position: relative;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.4);
        transition: transform 500ms;
        background-color: #FFFFFF;
        max-width: 900px;
    }

    @media only screen and (max-width: 540px) {
        .modal-window-component-container .modal-window-component .modal-window-content-container {
            width: 100%;
            height: 100%;
            border: unset;
            border-radius: unset;
        }
    }

    .modal-window-component-container .modal-window-component .modal-window-content-container .modal-window-close-button {
        position: absolute;
        top: 0;
        right: 0;
        cursor: pointer;
        display: flex;
        padding: 8px;
    }

    @media only screen and (max-width: 540px) {
        .modal-window-component-container .modal-window-component .modal-window-content-container .modal-window-close-button {
            padding-left: 10px;
            padding-bottom: 10px;
        }
    }

    .modal-window-component-container .modal-window-component .modal-window-content-container .modal-window-close-button path {
        /*fill: black;*/
    }

    .modal-window-component-container .modal-window-component .modal-window-content-container .modal-window-content {
        overflow-y: auto;
        overflow-x: hidden;
        /*max-height: 80vh;*/
        max-height: calc(100vh - 25px - 125px);
        margin: 25px 25px 25px 25px;
        min-width: 150px;
        max-width: 80vw;
        padding-top: 20px;
        padding-bottom: 50px;
    }

    @media only screen and (max-width: 540px) {
        .modal-window-component-container .modal-window-component .modal-window-content-container .modal-window-content {
            height: 100%;
            padding-bottom: 75px;
            max-width: unset;
        }
    }
</style>

<script>
    /* JS add helpers */
    function ModalWindow(content, closingCallback, flash) {
        let documentBody = document.body
        !flash ? documentBody.classList.add("scroll-off") : ""
        let closeButtonSVG = "<svg width=\"46\" height=\"46\" viewBox=\"0 0 46 46\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">" +
            "<circle cx=\"22.9995\" cy=\"23\" r=\"16\" transform=\"rotate(-45 22.9995 23)\" fill=\"black\"/>" +
            "<path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M16.8283 16.8288C16.2603 17.3969 16.2603 18.3178 16.8283 18.8859L20.9425 23L16.8284 27.114C16.2604 27.6821 16.2604 28.603 16.8284 29.1711C17.3965 29.7391 18.3174 29.7391 18.8855 29.1711L22.9995 25.0571L27.1135 29.171C27.6815 29.7391 28.6025 29.7391 29.1705 29.171C29.7386 28.603 29.7386 27.682 29.1705 27.114L25.0565 23L29.1707 18.8859C29.7387 18.3179 29.7387 17.3969 29.1707 16.8289C28.6026 16.2608 27.6817 16.2608 27.1136 16.8289L22.9995 20.943L18.8853 16.8288C18.3173 16.2608 17.3963 16.2608 16.8283 16.8288Z\" fill=\"white\"/>" +
            "</svg>"

        let modalWindowComponentContainer = CreateElement("div", {
            attr: {
                class: "modal-window-component-container",
            },
        })

        let modalWindowComponent = CreateElement("div", {attr: {class: "modal-window-component"}}, modalWindowComponentContainer)

        CreateElement("div", {
            attr: {class: "modal-window-shadow"}, events: {
                click: () => {
                    closingCallback ? closingCallback() : ""
                    modalWindowComponentContainer.remove()
                    ScrollOff(flash)
                },
            },
        }, modalWindowComponent)

        let modalWindowContainer = CreateElement("div", {
            attr: {
                class: "modal-window-content-container",
            },
        }, modalWindowComponent)

        CreateElement("div", {
            attr: {
                class: "modal-window-close-button",
            },
            content: closeButtonSVG,
            events: {
                click: () => {
                    closingCallback ? closingCallback() : ""
                    modalWindowComponentContainer.remove()
                    ScrollOff(flash)
                },
            },
        }, modalWindowContainer)

        let modalWindowContent = CreateElement("div", {
            attr: {
                class: "modal-window-content",
            },
        }, modalWindowContainer)

        if (typeof content === "string") {
            content = CreateElement("div", {
                content: content,
            })
        }

        modalWindowContent.append(content)

        document.body.append(modalWindowComponentContainer)

        CloseByScroll(modalWindowComponentContainer, modalWindowContainer, modalWindowContent, () => {
            closingCallback ? closingCallback() : ""
            modalWindowComponentContainer.remove()
            ScrollOff(flash)
        })

        return modalWindowComponentContainer

        function ScrollOff(flash) {
            if (document.querySelectorAll(".modal-window-component-container").length === 1) {
                setTimeout(() => {
                    !flash ? documentBody.classList.remove("scroll-off") : ""
                }, 200)
            }
        }
    }

    function CloseModal(modal) {
        modal.remove()
        if (document.querySelectorAll(".modal-window-component-container").length === 0) {
            document.body.classList.remove("scroll-off")
        }
    }

    function CloseByScroll(modalWindowComponentContainer, container, content, closingCallback) {
        let widthClientScreen = document.documentElement.clientWidth
        if (widthClientScreen < 768) {

            let containerModalWindow = container

            let startTouchY = 0
            // let startTouchX = 0;
            let correctionCoefficientY = 0
            // let correctionCoefficientX = 0;
            containerModalWindow.addEventListener("touchstart", (event) => {
                containerModalWindow.style.transition = "transform 0ms ease-out"
                if (content.getBoundingClientRect().top >= 0) {
                    startTouchY = event.changedTouches[0].clientY
                    correctionCoefficientY = content.getBoundingClientRect().top
                }
                // if (content.getBoundingClientRect().right >= 0) {
                //     startTouchX = event.changedTouches[0].clientX;
                //     correctionCoefficientX = content.getBoundingClientRect().right;
                // }
            })

            let lengthSwipeY = 0
            // let lengthSwipeX = 0;
            containerModalWindow.addEventListener("touchmove", (event) => {
                if (content.getBoundingClientRect().top <= content.firstChild.getBoundingClientRect().top && content.getBoundingClientRect().top >= (-1 + correctionCoefficientY)) {
                    lengthSwipeY = event.changedTouches[0].clientY - startTouchY
                    if (lengthSwipeY > 0) {
                        containerModalWindow.style.transform = "translateY(" + lengthSwipeY + "px)"
                    }
                } else {
                    startTouchY = event.changedTouches[0].clientY
                }

                // if (content.getBoundingClientRect().right === content.firstChild.getBoundingClientRect().right && content.getBoundingClientRect().right >= (-1 + correctionCoefficientX)) {
                //     lengthSwipeX = event.changedTouches[0].clientX - startTouchX;
                //     if (lengthSwipeX < 0) {
                //         containerModalWindow.style.transform = 'translateX(' + lengthSwipeX + 'px)';
                //     }
                // } else {
                //     startTouchX = event.changedTouches[0].clientX;
                // }
            })

            let heightClientScreen = document.documentElement.clientHeight
            // let widthClientScreen = document.documentElement.clientWidth;

            containerModalWindow.addEventListener("touchend", () => {
                containerModalWindow.style.transition = ""
                if (lengthSwipeY < (heightClientScreen / 3)) {
                    containerModalWindow.style.transform = "translateY(0px)"
                } else {
                    containerModalWindow.style.transform = "translateY(" + heightClientScreen + "px)"
                    closingCallback ? closingCallback() : ""
                }

                // if ((lengthSwipeX * -1) > (widthClientScreen / 2)) {
                //     containerModalWindow.style.transform = 'translateX(-' + widthClientScreen + 'px)';
                //     closingCallback ? closingCallback() : '';
                // } else {
                //     containerModalWindow.style.transform = 'translateX(0px)';
                // }
            })
        }
    }

    function CreateElement(tag, params, parent) {
        const element = document.createElement(tag)
        if (params.attr) {
            Object.keys(params.attr).forEach((a) => {
                element.setAttribute(a, params.attr[a])
            })
        }
        if (params.class) {
            element.className = params.class
        }
        if (params.events) {
            Object.keys(params.events).forEach((e) => {
                element.addEventListener(e, params.events[e])
            })
        }
        if (params.content) {
            element.innerHTML = params.content
        }
        if (parent) {
            parent.appendChild(element)
        }
        if (params.childs) {
            params.childs.forEach((child) => {
                element.appendChild(child)
            })
        }
        return element
    }
</script>

<script>
    document.body.querySelectorAll(".button-slider-1").forEach((buttonSlider1) => {
        buttonSlider1.addEventListener("click", () => {
            document.body.querySelectorAll(".button-slider-1").forEach((buttonSlider1Inside) => {
                buttonSlider1Inside.classList.remove("--active")
            })
            document.body.querySelectorAll(".slider-1").forEach((slider1Inside) => {
                slider1Inside.classList.remove("--active")
                slider1Inside.classList.remove("--current")
            })
            buttonSlider1.classList.add("--active")
            document.body.querySelector(`.slider-1[data-img="${buttonSlider1.dataset.img}"]`).classList.add("--active")
            document.body.querySelector(`.slider-1[data-img="${buttonSlider1.dataset.img}"] img`).setAttribute("src", buttonSlider1.dataset.imgSrc + "?" + Date.now())
            setTimeout(() => {
                document.body.querySelector(`.slider-1[data-img="${buttonSlider1.dataset.img}"]`).classList.add("--current")
            }, 10)
        })
    })
</script>

<script>
    document.body.querySelectorAll(".open-list").forEach((openList) => {
        openList.addEventListener("click", () => {
            document.body.querySelector(`.open-list-data[data-open-list="${openList.dataset.openList}"]`).classList.toggle("hide")
        })
    })
</script>

<!-- ID2 -->
<script type="text/javascript">
    var APP_ID = 174
    var EMV_ID = 1005
    window.ID2_SITE_USER_ID = 0

    //Подключаем loader
    function connectLoader() {
        var script = document.createElement("script")

        script.async = true
        script.src = "https://cdn.action-mcfr.ru/widgets/loader.js"
        script.onload = onLoadLoaderScript

        document.getElementsByTagName("head")[0].appendChild(script)
    }

    //Загружаем виджет
    function onLoadLoaderScript() {
        window.WidgetLoader.load({name: "authButtonExternal"}, onAuthButtonLoad) // кнопка
        window.WidgetLoader.load({name: "marketingLib"}, onActionEventsLoad) // отправка событий
    }

    //Инициализируем виджет - на момент инициализации html элемент с id передаваемым в loginblock, должен быть доступен
    function onAuthButtonLoad() {
        window.ActionAuthButtonExternal.init({
            appid: APP_ID,
            emid: EMV_ID,
            user: null,
            loginblock: "panelcontainer",
            theme: "ss",
            supportlink: "https://id2.action-media.ru/Feedback",
            mode: "prod",
            onUserChange: onUserChange,
            onTokenChange: onTokenChange,
        })
    }

    //отправка событий
    function onActionEventsLoad() {
        window.ActionEvents.init({
            publicationCode: EMV_ID,
        })
    }

    function onUserChange(a) {
        // console.log("onUserChange", a)

        window.ID2_SITE_USER_ID = a["id"]

        if (window.ID2_SITE_USER_ID) {

            // событие посещения страницы
            window.ActionEvents.saveaction([window.ID2_SITE_USER_ID, "visit", document.location.href, "", "15", 15])

            document.body.querySelector("a.passport-link").href = "https://profpasport.ru/specialist/" + window.ID2_SITE_USER_ID
        }
    }

    function onTokenChange(a) {
        // console.log("onTokenChange", a)

        window.userIdToken = window.ActionAuthButtonExternal.getTokenValue()
    }

    connectLoader()

</script>
<!-- ID2 -->

</body>
</html>
