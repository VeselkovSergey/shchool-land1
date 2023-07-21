<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{env("APP_NAME")}}</title>

    <style>
        @font-face {
            font-family: "ProximaNovaBold";
            src: url("{{asset('assets/fonts/ProximaNovaBold.eot')}}");
        url("{{asset('assets/fonts/ProximaNovaBold.woff')}}") format("woff"),
        url("{{asset('assets/fonts/ProximaNovaBold.truetype')}}") format("truetype"), font-style: normal;
            font-weight: 400;
        }
    </style>

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
        .p-{{$i}} {
            padding: {{$i}}px;
        }

        .px-{{$i}} {
            padding-left: {{$i}}px;
            padding-right: {{$i}}px;
        }

        .py-{{$i}} {
            padding-top: {{$i}}px;
            padding-bottom: {{$i}}px;
        }

        .pl-{{$i}} {
            padding-left: {{$i}}px;
        }

        .pr-{{$i}} {
            padding-right: {{$i}}px;
        }

        .pt-{{$i}} {
            padding-top: {{$i}}px;
        }

        .pb-{{$i}} {
            padding-bottom: {{$i}}px;
        }

        .m-{{$i}} {
            margin: {{$i}}px;
        }

        .mx-{{$i}} {
            margin-left: {{$i}}px;
            margin-right: {{$i}}px;
        }

        .my-{{$i}} {
            margin-top: {{$i}}px;
            margin-bottom: {{$i}}px;
        }

        .ml-{{$i}} {
            margin-left: {{$i}}px;
        }

        .mr-{{$i}} {
            margin-right: {{$i}}px;
        }

        .mt-{{$i}} {
            margin-top: {{$i}}px;
        }

        .mb-{{$i}} {
            margin-bottom: {{$i}}px;
        }

        .w-{{$i}} {
            width: {{$i}}%;
        }

        .w-px-{{$i}}               {
            width: {{$i}}px;
        }

        .h-{{$i}} {
            height: {{$i}}%;
        }

        .h-px-{{$i}}               {
            height: {{$i}}px;
        }

        .top-{{$i}}               {
            top: {{$i}}px;
        }

        .top--{{$i}}               {
            top: -{{$i}}px;
        }

        .left-{{$i}}               {
            left: {{$i}}px;
        }

        .right-{{$i}}               {
            right: {{$i}}px;
        }

        .bottom-{{$i}}               {
            bottom: {{$i}}px;
        }

        .opacity-{{$i}}               {
            opacity: {{$i}}%;
        }

        .z-{{$i}}               {
            z-index: {{$i}};
        }

        .z-{{$i}}               {
            z-index: {{$i}};
        }

        .z--{{$i}}               {
            z-index: -{{$i}};
        }

        .font-size-{{$i}}              {
            font-size: {{$i}}px;
        }

        .border-radius-{{$i}}           {
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

        .p-0-{{$i}} {
            padding: 0;
        }

        .px-0-{{$i}} {
            padding-left: 0;
            padding-right: 0;
        }

        .py-0-{{$i}} {
            padding-top: 0;
            padding-bottom: 0;
        }

        .pl-0-{{$i}} {
            padding-left: 0;
        }

        .pr-0-{{$i}} {
            padding-right: 0;
        }

        .pt-0-{{$i}} {
            padding-top: 0;
        }

        .pb-0-{{$i}} {
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

            .p-0-{{$i}} {
                padding: {{$i}}px;
            }

            .px-0-{{$i}} {
                padding-left: {{$i}}px;
                padding-right: {{$i}}px;
            }

            .py-0-{{$i}} {
                padding-top: {{$i}}px;
                padding-bottom: {{$i}}px;
            }

            .pl-0-{{$i}} {
                padding-left: {{$i}}px;
            }

            .pr-0-{{$i}} {
                padding-right: {{$i}}px;
            }

            .pt-0-{{$i}} {
                padding-top: {{$i}}px;
            }

            .pb-0-{{$i}} {
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
    <div class="ml-a p-10" id="containerAuth"></div>
</div>
<main class="" style="max-width: 1440px; margin: auto;">
    <section class="mb-100 pos-relative w-100 flex-column-center-y" style="color: white;">
        <div class="pl-50-0 pt-50-0 flex-wrap"
             style="max-width: 1240px; background-color: rgba(69, 65, 60, 1); border-radius: 0 0 50px 50px;">
            <div class="w-50-100 mr-a">
                <div class="mb-60 font-size-24">
                    <div>Школа</div>
                    <div><b>Главбуха госучреждения</b></div>
                </div>
                <h1 class="mb-35 font-size-20">Новые программы для учеников Школы Главбуха госучреждения</h1>
                <h2 class="mb-90 font-size-42">Новинка осени — программа «Главный бухгалтер госсектора (код В) —
                    2024»</h2>
                <p class="font-size-20">Финансисты госсектора должны соответствовать профстандарту «Бухгалтер». А
                    профстандарт требует, чтобы
                    главбухи ежегодно повышали квалификацию. Докажите, что выполняете это требование. Пройдите обучение,
                    получите официальное удостоверение и подтвердите свои знания. Получите цифровой паспорт
                    профессиональных навыков, одобренный органами власти, специалистами Минфина и Федерального
                    казначейства. </p>

            </div>
            <div class="w-40-100 mt-130">
                <img src="{{asset('assets/imgs/main-block.svg')}}" alt="">
            </div>
        </div>
        <div class="pos-abs top-0 w-100 h-80 z--1" style="background-color: rgba(56, 52, 48, 1)">-</div>
    </section>
    <section class="mb-80 pos-relative">
        <h3 class="font-size-36 mb-100 ml-150">Какие навыки получите</h3>
        <div class="flex-wrap px-150-0" style="justify-content: space-between;">
            <article class="w-33-100 flex-column">
                <div class="h-px-175 mb-30">
                    <img src="{{asset('assets/imgs/icon1.svg')}}" alt="">
                </div>
                <h4 class="text-center mb-30 font-size-18">
                    Применение правил новых
                    <br>федеральных стандартов
                    <br>в госсекторе
                </h4>
                <p class="text-center font-size-15 px-20">Изучите новые стандарты учета и отчетности. Сможете
                    сопоставить стандарты с инструкциями,
                    скорректировать проводки и снизить риск искажения учета</p>
            </article>
            <article class="w-33-100 flex-column">
                <div class="h-px-175 mb-30">
                    <img src="{{asset('assets/imgs/icon2.svg')}}" alt="">
                </div>
                <h4 class="text-center mb-30 font-size-18">
                    Оформление и сверка
                    <br>первичных документов
                    <br>в госучреждении
                </h4>
                <p class="text-center font-size-15 px-20">Составите первичные учетные документы без ошибок. Проведете
                    внутриформенную проверку, чтобы исключить
                    ошибки</p>
            </article>
            <article class="w-33-100 flex-column">
                <div class="h-px-175 mb-30">
                    <img src="{{asset('assets/imgs/icon3.svg')}}" alt="">
                </div>
                <h4 class="text-center mb-30 font-size-18">Составите первичные учетные документы без ошибок. Проведете
                    внутриформенную проверку, чтобы
                    исключить ошибки</h4>
                <p class="text-center font-size-15 px-20">Попрактикуетесь классифицировать имущество учреждения по видам
                    и критериям актива. Сможете правильно
                    оценивать, принимать к учету, обесценивать и списывать объекты</p>
            </article>
            <article class="w-100 flex-column-center">
                <div class="w-33">
                    <div class="h-px-175 mb-30">
                        <img src="{{asset('assets/imgs/icon4.svg')}}" alt="">
                    </div>
                    <h4 class="text-center mb-30 font-size-18">Переход на смарт-контроль</h4>
                    <p class="text-center font-size-15 px-20">Отработаете правила СМАРТ-контроля и сможете подготовить
                        бухгалтерию к этому новому
                        бизнес-процессу</p>
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
                    Я — Марина Уткина, руководитель Школы Главбуха госучреждения приглашаю вас на новый урок
                    <br>
                    <b>«Как составить идеальную учетную политику»</b>
                </div>
                <div class="w-25-100 pos-relative h-px-260">
                    <div class="h-px-300 pos-abs top--40">
                        <img src="{{asset('assets/imgs/people1.svg')}}" alt="">
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
            Что нового в Школе Главбуха госучреждения
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
                <br>професси&shy;онального сообщества
                <br>бухгалтеров бюджетной сферы
            </h3>
            <p class="font-size-24 text-center mb-40">
                Специалисты Минфина, Казначейства и других ведомств
                <br>контролируют, чтобы паспорта учитывали требования
                <br>законодательства и профессиональных стандартов
            </p>
            <div class="flex-wrap mx-150-0 mb-150" style="justify-content: space-around;">
                <article class="w-px-300 border-radius-10 flex-column"
                         style="background-color: rgba(249, 248, 244, 1);">
                    <div class="flex-center p-10">
                        <div class="w-px-280">
                            <img src="{{asset('assets/imgs/exp_1.svg')}}" alt="">
                        </div>
                    </div>
                    <div class="p-10 flex-column h-100">
                        <h4 class="font-size-24">Павел Зайцев</h4>
                        <p class="font-size-18 mb-10">
                            начальник отдела отчетности об исполнении бюджетов
                            <br>Управления бюджетного учета и
                            <br>отчетности Федерального казначейства
                        </p>
                        <div class="font-size-14 mb-10 mt-a" style="color: rgba(166, 162, 153, 1);">Бухгалтерия</div>
                    </div>
                </article>
                <article class="w-px-300 border-radius-10 flex-column"
                         style="background-color: rgba(249, 248, 244, 1);">
                    <div class="w-px-280 p-10">
                        <img src="{{asset('assets/imgs/exp_2.svg')}}" alt="">
                    </div>
                    <div class="p-10 flex-column h-100">
                        <h4 class="font-size-24">Алексей Сосновский</h4>
                        <p class="font-size-18 mb-10">начальник отдела бухгалтерского учета и отчетности Министерства
                            финансов Архангельской области</p>
                        <div class="font-size-14 mb-10 mt-a" style="color: rgba(166, 162, 153, 1);">Бухгалтерия</div>
                    </div>
                </article>
                <article class="w-px-300 border-radius-10 flex-column"
                         style="background-color: rgba(249, 248, 244, 1);">
                    <div class="w-px-280 p-10">
                        <img src="{{asset('assets/imgs/exp_3.svg')}}" alt="">
                    </div>
                    <div class="p-10 flex-column h-100">
                        <h4 class="font-size-24">Юлия Казанцева</h4>
                        <p class="font-size-18 mb-10">начальник финансово-экономического отдела ФКУ ЦНТЛ ФСИН России</p>
                        <div class="font-size-14 mb-10 mt-a" style="color: rgba(166, 162, 153, 1);">Бухгалтерия</div>
                    </div>
                </article>
            </div>

            <div class="flex-wrap px-50-0 pb-100">
                <div class="w-50-100">
                    <div class="pr-150-0">
                        <h3 class="font-size-54 mb-15">Цифровой паспорт ключевых навыков</h3>
                        <div class="p-15 mb-5 border-radius-10 button-slider-1 --active cp" data-img="1"
                             data-img-src="{{asset('assets/imgs/passport1.gif')}}">
                            <p class="font-size-18">
                                Для каждого специалиста разрабатываем паспорт навыков и вектор карьерного роста
                            </p>
                        </div>
                        <div class="p-15 mb-5 border-radius-10 button-slider-1 cp" data-img="2"
                             data-img-src="{{asset('assets/imgs/passport2.gif')}}">
                            <p class="font-size-18">
                                Учитываем должность, специфику работы, размер и тип учреждения
                            </p>
                        </div>
                        <div class="p-15 mb-5 border-radius-10 button-slider-1 cp" data-img="3"
                             data-img-src="{{asset('assets/imgs/passport3.gif')}}">
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
                            <img src="{{asset('assets/imgs/passport1.gif')}}" alt="">
                        </div>
                    </div>
                    <div class="slider-1" data-img="2">
                        <div class="border-radius-20"
                             style="border: 1px solid rgba(217, 217, 217, 1); overflow: hidden;">
                            <img src="{{asset('assets/imgs/passport2.gif')}}" alt="">
                        </div>
                    </div>
                    <div class="slider-1" data-img="3">
                        <div class="border-radius-20"
                             style="border: 1px solid rgba(217, 217, 217, 1); overflow: hidden;">
                            <img src="{{asset('assets/imgs/passport3.gif')}}" alt="">
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
            <h3 class="font-size-36 mb-40">НОВЫЕ ПРОГРАММЫ<br>в Школе Главбуха госучреждения в 2024</h3>
            <article class="mb-15 p-40 border-radius-15" style="background-color: rgba(133, 204, 255, 1);">
                <div class="mb-10 font-size-20">Продвинутый •</div>
                <h4 class="font-size-26 w-90">Основные средства и материальные запасы: кейсы по приему имущества к
                    бухучету</h4>
            </article>
            <article class="mb-15 p-40 border-radius-15" style="background-color: rgba(133, 204, 255, 1);">
                <div class="mb-10 font-size-20">Продвинутый •</div>
                <h4 class="font-size-26 w-90">Специалист по внутреннему контролю в учреждении</h4>
            </article>
            <article class="mb-15 p-40 border-radius-15" style="background-color: rgba(133, 204, 255, 1);">
                <div class="mb-10 font-size-20">Продвинутый •</div>
                <h4 class="font-size-26 w-90">Новая цифровая бухгалтерия в бюджетной сфере: планирование, отчетность,
                    контроль</h4>
            </article>
            <article class="mb-15 p-40 border-radius-15" style="background-color: rgba(133, 204, 255, 1);">
                <div class="mb-10 font-size-20">Базовый •</div>
                <h4 class="font-size-26 w-90">Безвозмездная передача имущества: учет у передающей и принимающей стороны
                    в программе 1С</h4>
            </article>
            <article class="mb-15 p-40 border-radius-15" style="background-color: rgba(133, 204, 255, 1);">
                <div class="mb-10 font-size-20">Продвинутый •</div>
                <h4 class="font-size-26 w-90">Главный бухгалтер госсектора (код В) - 2024</h4>
            </article>
            <article class="mb-15 p-40 border-radius-15" style="background-color: rgba(133, 204, 255, 1);">
                <div class="mb-10 font-size-20">Продвинутый •</div>
                <h4 class="font-size-26 w-90">Бухгалтер госсектора (код А) - 2024</h4>
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
                    <h3 class="font-size-36 p-50 open-list" data-open-list="3">Пройдите тест и мы сформируем индивидуальный план обучения</h3>
                    <div class="hide p-50 pt-35 font-size-20 open-list-data flex-center" style="background-color: white;" data-open-list="3">
                        <iframe src="https://academia.school.budgetnik.ru/" frameborder="0" class="w-100" style="height: 1000px" ></iframe>
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
                <div><a target="_blank" href="https://id2.action-media.ru/l/politika_pd?id=2">Политика обработки персональных данных</a></div>
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
    </style>
    <div class="lesson1">
        <h2>Как предостеречь себя от ошибок по инвентаризации</h2>
        <p>
            В этом уроке попрактикуетесь формировать порядок инвентаризации с привязкой к своему учреждению. Узнаете,
            какие опасности кроются в некорректных формулировках по срокам проверок и документальному оформлению
            операций, как не мучиться с обесценением активов, но выполнить нормы стандарта. Смотрите видеолекцию
            Александра Опальского и дополнительные вопросы главбуха в телемосте с экспертом.
        </p>
        <h3>Теория. Когда и как можно обхитрить контролеров</h3>
        <p>
            В первом видео узнаете, что указать в правилах обязательной и дополнительной инвентаризации. А также — как
            обезопасить себя от претензий контролеров, если в учреждении нечего обесценивать.
        </p>
        <h4>Видеолекция Александра Опальского</h4>
        <div class="flex-center">
            <iframe id="YT_1688907286156" frameborder="0" allowfullscreen="1"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    title="Как предостеречь себя от ошибок по инвентаризации" width="688" height="385"
                    src="https://www.youtube.com/embed/1FKMQmFa78k?wmode=opaque&amp;enablejsapi=1&amp;origin=https%3A%2F%2Ffinacademy.budgetnik.ru&amp;widgetid=1"
                    data-gtm-yt-inspected-13="true" scrolling="no" style="overflow: auto;"></iframe>
        </div>
        <p>
            <b>Тренировка: заполните правила обесценения активов.</b> Вспомните, что вам рассказал преподаватель, и
            попробуйте сами сформировать отрывок из правил инвентаризации.
        </p>
        <div class="flex-center">
            <iframe allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen="" frameborder="0" height="680" scrolling="no"
                    src="https://e.profkiosk.ru/media/d0334c27-4fb6-4cb1-8b33-7a0d92bf5cbc/"
                    title="video-a8806404-90f8-428b-8a99-977da5b9d873" width="670" data-gtm-yt-inspected-13="true"
                    id="iFrameResizer0" style="overflow: auto; height: 867px;"> 
            </iframe>
        </div>
        <p>
            <b>Повторим главное по теме.</b> Не пишите в учетной политике обязательные случаи инвентаризации. Ведь они
            уже утверждены в СГС «Концептуальные основы бухучета и отчетности» (утв. <a target="_blank"
                                                                                        href="https://finacademy.budgetnik.ru/programs/208177/f5ec472f-d3d6-4285-a1e9-f7aa330eee78/15a2bbae-5eba-4fb0-860c-10a93d3b930b">приказом
                Минфина от 31.12.2016 №
                256н</a>). В учетке укажите, как будете действовать в своем учреждении.
            Если описали определенную процедуру, связанную с инвентаризацией, подтверждайте ее первичными учетными
            документами.Если будут расхождения между порядком инвентаризации и документальным оформлением операций,
            контролеры могут указать на нарушения учетки.
        </p>
        <div class="flex">
            <div class="m-a w-75 p-50 pos-relative" style="border: solid 2px #474d5e;">
                <span class="apple"></span>
                <h3>Пример, как подтвердить порядок инвентаризации документами</h3>
                <p>
                    Бухгалтерия прописала в учетной политике, что каждый месяц проводит инвентаризацию кассы. В этом
                    случае необходимо ежемесячно оформлять
                    <a target="_blank"
                       href="https://finacademy.budgetnik.ru/storage/text/3f3e660d-6205-473f-8ebf-2a25ea13ee88.xlsx">инвентаризационную
                        опись бланков строгой отчетности и денежных документов (ф. 0504086)</a>. Описи могут затребовать
                    ревизоры во время проверки.
                </p>
            </div>
        </div>
        <p>
            Во время годовой инвентаризации применяйте стандарт «Обесценение активов» (утв. <a target="_blank"
                                                                                               href="https://finacademy.budgetnik.ru/programs/208177/f5ec472f-d3d6-4285-a1e9-f7aa330eee78/15a2bbae-5eba-4fb0-860c-10a93d3b930b">приказом
                Минфина от 31.12.2016 № 259н</a>). Если нет объектов, которые нужно обесценивать, пропишите в
            инвентаризационной описи, что признаков обесценения не обнаружено.
        </p>
        <h3>Практика. Телемост эксперта и главбуха</h3>
        <p>Смотрите, какие вопросы по инвентаризации волнуют практиков в телемосте между автором курса Александром
            Опальским (Москва) и главбухом Юлией Казанцевой (Челябинск). В конце урока пишите в комментариях, какие еще
            вопросы остались у вас к эксперту. Разберем их на школьном онлайн-уроке.</p>
        <h4>Видео. Вопросы главбуха по теме урока</h4>
        <div class="flex-center">
            <iframe id="YT_1688907286160" frameborder="0" allowfullscreen="1"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    title="Как прописать правила о событиях после отчетной даты, чтобы избежать противоречий"
                    width="688"
                    height="315"
                    src="https://www.youtube.com/embed/tMgdEhlS3fM?wmode=opaque&amp;enablejsapi=1&amp;origin=https%3A%2F%2Ffinacademy.budgetnik.ru&amp;widgetid=2"
                    data-gtm-yt-inspected-13="true" scrolling="no" style="overflow: auto;"></iframe>
        </div>
        <p>
            <b>Тренировка: сформируйте свой пакет документов.</b> Во втором тренажере попытайтесь самостоятельно
            составить полный порядок инвентаризации.
        </p>
        <p>
            <i>Вы можете сразу сохранить документ на своем компьютере. Для этого есть кнопка «Загрузить». Или на время
                свернуть его в уроке и заполнить позже. Тогда нажмите на кнопку «Закрыть».</i>
        </p>
        <style>
            .container {
                position: relative;
                width: 100%;
                height: 0;
                padding-bottom: 55%;
            }

            .video {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
            }
        </style>
        <div class="flex-center container">
            <iframe class="video"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen="" frameborder="0" scrolling="yes"
                    src="//e.profkiosk.ru/media/456f6fec-da33-4d05-b523-ed0879132e5f/"
                    title="video-2f17bff0-d7e7-4add-b31f-6410212b1ffb" width="670" id="iFrameResizer1"
                    style="overflow: auto; min-height: 233px;">
            </iframe>
        </div>
        <p>
            Подкрепите скорректированные правила инвентаризации к документам, которые сделали на предыдущих уроках.
        </p>
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

<script type="text/javascript">
    var APP_ID = 174
    var EMV_ID = 1005
    window.ID2_SITE_USER_ID = 0
    var BLOCK_LOGIN = false
    var senddata_login = false
    var senddata_logout = false

    //-------
    var iduser = null
    var id2user = {}

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
            user: iduser,
            loginblock: "containerAuth",
            theme: "ss",
            supportlink: "https://id2.action-media.ru/Feedback",
            {{--reglink: '<?php echo $reglink;?>',--}}
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
        console.log("onUserChange", a)
        // console.log("aaaaa: ", a)
        // id2user = window.ActionAuthButtonExternal.getUser()
        // console.log("id2user: ", id2user)
        // console.log(a["id"])

        window.ID2_SITE_USER_ID = a["id"]
        // $.session.set("user_id", ID2_SITE_USER_ID)
        // console.log(window.ID2_SITE_USER_ID)


        // document.getElementById("name").value = a["firstName"]
        // document.getElementById("email").value = a["email"]

        // событие посещения страницы
        window.ActionEvents.saveaction([window.ID2_SITE_USER_ID, "visit", document.location.href, "", "15", 15])

        if (window.ID2_SITE_USER_ID) {
            document.body.querySelector('a.passport-link').href = "https://profpasport.ru/specialist/" + window.ID2_SITE_USER_ID
        }
    }

    function onTokenChange(a) {
        console.log("onTokenChange", a)

        window.userIdToken = window.ActionAuthButtonExternal.getTokenValue()
        // window.ActionEvents.saveaction([window.ID2_SITE_USER_ID, "visit", document.location.href, "", "15", 15])

        if (window.userIdToken) {
            // console.info("111!!!" + window.userIdToken)

            return

            // $.ajax({
            //     url: "../new-id2/getUserAccess.php",
            //     headers: {
            //         "authorization": window.userIdToken,
            //     },
            //     data: "rand=" + window.userIdToken,
            //     dataType: "",
            //     beforeSend: function (R) {
            //     },
            //     success: function (data) {
            //         var ID2userAccess = jQuery.parseJSON(data)
            //         console.info(ID2userAccess)
            //     },
            //     error: function (R) {
            //         console.info("SERVER ANSVER ??: ", R)
            //     },
            // })

            // $.ajax({
            //     url: "../new-id2/getUserInfo.php",
            //     headers: {
            //         "authorization": window.userIdToken,
            //     },
            //     data: "rand=" + window.userIdToken,
            //     dataType: "",
            //     beforeSend: function (R) {
            //     },
            //     success: function (data) {
            //         var ID2userIndo = jQuery.parseJSON(data)
            //         var autosend = 0
            //         console.info(ID2userIndo)
            //         sessionStorage.user = ID2userIndo
            //         $(".userId").val(window.ID2_SITE_USER_ID)
            //         $("#bitrixid").val(window.ID2_SITE_USER_ID)
            //
            //         $("#name").val(ID2userIndo["firstName"] + " " + ID2userIndo["lastName"])
            //         $(".name_o").text(ID2userIndo["firstName"])
            //         $("#email").val(ID2userIndo["email"])
            //         $("#phone").val(ID2userIndo["phone"])
            //
            //         $("#bitrixid2").val(window.ID2_SITE_USER_ID)
            //         $("#name2").val(ID2userIndo["firstName"] + " " + ID2userIndo["lastName"])
            //         $("#email2").val(ID2userIndo["email"])
            //         $("#phone2").val(ID2userIndo["phone"])
            //
            //         if (autosend & ($(".name").val() != "") & ($(".email").val() != "") & ($(".phone").val() != "")) sendCRM()
            //
            //         document.getElementById("name").value = ID2userIndo["firstName"] + " " + ID2userIndo["lastName"]
            //         document.getElementById("email").value = ID2userIndo["email"]
            //     },
            //     error: function (R) {
            //         console.info("USER INFO ??: ", R)
            //     },
            // })
        }

    }

    connectLoader()

</script>
</body>
</html>
