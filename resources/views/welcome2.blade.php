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

        .color-white {
            color: white;
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

        .mx-a {
            margin-left: auto;
            margin-right: auto;
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
                <h2 class="mb-90 font-size-42">Обновленная программа Специалист в сфере закупок — 2024</h2>
                <p class="font-size-20 pb-20">Начните обучение в Высшей школе Госзакупок по обновленной программе “Специалист
                    в сфере закупок - 2024” и еще 10 дополнительным программам по 44-ФЗ и 223-ФЗ. Освойте цифровые
                    навыки в работе с ЕИС, структурированным контрактом, реестрами и цифровым рублем. Развивайтесь и
                    будьте востребованным в профессии.</p>

            </div>
            <div class="w-40-100 mt-130">
                <img src="./img.second_lend/main-block.svg" alt="">
            </div>
        </div>
        <div class="pos-abs top-0 w-100 h-80 z--1" style="background-color: rgba(56, 52, 48, 1)">-</div>
    </section>
    <section class="mb-80 pos-relative">
        <h3 class="font-size-36 mb-100 ml-150">Формируйте план обучения и получайте новые навыки в работе</h3>
        <div class="flex-wrap px-150-0" style="justify-content: space-evenly;">
            <article class="w-33-100 flex-column mb-20">
                <div class="h-px-175 mb-30">
                    <img src="./img.second_lend/icon1.svg" alt="">
                </div>
                <h4 class="text-center mb-30 font-size-18">
                    Цифровые навыки в госзакупках
                </h4>
                <p class="text-center font-size-15 px-20">Вы научитесь работать в электронном магазине, освоите
                    функционал ЕИС: план-график, расторжение контрактов, претензионная работа</p>
            </article>
            <article class="w-33-100 flex-column mb-20">
                <div class="h-px-175 mb-30">
                    <img src="./img.second_lend/icon2.svg" alt="">
                </div>
                <h4 class="text-center mb-30 font-size-18">
                    Работа с контрактами по 44-ФЗ
                </h4>
                <p class="text-center font-size-15 px-20">Научитесь готовить и вносить сведения в реестр по разным
                    основаниям. Разберетесь, как правильно рассчитывать сроки для внесения сведений в реестр
                    контрактов</p>
            </article>
            <article class="w-33-100 flex-column mb-20">
                <div class="h-px-175 mb-30">
                    <img src="./img.second_lend/icon3.svg" alt="">
                </div>
                <h4 class="text-center mb-30 font-size-18">Корпоративные закупки для заказчиков по 223-ФЗ</h4>
                <p class="text-center font-size-15 px-20">Готовые инструменты для корпоративных закупок по 223-ФЗ. Подготовите требования к участникам и
                    составите заявки.</p>
            </article>
            <article class="w-33-100 flex-column-center mb-20">
                <div class="h-px-175 mb-30">
                    <img src="./img.second_lend/icon4.svg" alt="">
                </div>
                <h4 class="text-center mb-30 font-size-18">Организация закупок малого объема у единственного
                    поставщика</h4>
                <p class="text-center font-size-15 px-20">Быстро разберётесь во всех новых основаниях закупки, согласуете ее и отработаете новое на
                    тренажёрах</p>
            </article>
            <article class="w-33-100 flex-column-center mb-20">
                <div class="h-px-175 mb-30">
                    <img src="./img.second_lend/icon5.svg" alt="">
                </div>
                <h4 class="text-center mb-30 font-size-18">Противодействие коррупции в бюджетных учреждениях</h4>
                <p class="text-center font-size-15 px-20">Узнаете все о предупреждении коррупции в вашем учреждении и составите антикоррупционную политику,
                    получите антикоррупционные чек-листы и памятки</p>
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
        <div class="mb-50">
            <div class="border-radius-30 px-100 flex-center"
                 style="background-color: white; color: rgba(69, 65, 60, 1);">
                <div class="w-65-100 mr-a font-size-24">
                    Я — Мария Федюкович, руководитель Высшей школы Госзакупок приглашаю вас на новый урок
                    <br>
                    <b>«Как заказчику провести электронную приемку»</b>
                </div>
                <div class="w-25-100 pos-relative h-px-260">
                    <div class="h-px-300 pos-abs top--40">
                        <img src="./img.second_lend/people1.svg" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="flex-center">
            <button class="button-2" onclick="ModalWindow(document.getElementById('lesson1').innerHTML)">Пройти урок
            </button>
        </div>
        <span
            style="display: inline-block; width: 80px; height: 40px; position: absolute; background-color: rgba(243, 228, 181, 1); border-radius: 0 0 50px 50px; top: 0;right: 10px; rotate: -40deg;"></span>
        <span
            style="display: inline-block; width: 15px; height: 15px; position: absolute; background-color: rgba(249, 249, 249, 1); border-radius: 50px; top: 220px;left: 50px;"></span>
        <span
            style="display: inline-block; width: 30px; height: 30px; position: absolute; background-color: rgba(7, 108, 123, 1); border-radius: 50px; bottom: -15px;left: 200px;"></span>
    </section>
    <section class="w-100 mb-100">
        <h3 class="mb-80 font-size-42 text-center">
            Что нового в Высшей школе Госзакупок
        </h3>
        <article class="w-100 mb-40 open-list-wrapper cp">
            <div class="mx-100-0 border-radius-15" style="background-color: rgba(69, 65, 60, 1); color: white;">
                <h4 class="font-size-36 p-50 open-list" data-open-list="1">12 готовых программ для обучения по 44-ФЗ и 223-ФЗ •</h4>
                <div class="hide p-50 pt-35 font-size-25 open-list-data" data-open-list="1">
                    <p class="mb-35">
                        На обучение вам дается целый год и доступ ко всем программам Высшей школы Госзакупок. Вы сами формируете свой учебный план и решаете какие навыки хотите подтянуть.
                    </p>
                    <b>Программы, которые вам доступны уже сейчас:</b>
                    <div>
                        <ol>
                            <li class="mb-10">Противодействие коррупции в бюджетных учреждениях</li>
                            <li class="mb-10">Госзакупки для юриста</li>
                            <li class="mb-10">Как заработать на тендерах и госзакупках с нуля</li>
                            <li class="mb-10">Экстренные закупки у едпоставщика: новые права заказчика</li>
                            <li class="mb-10">Электронная приемка: при участии Федерального Казначейства</li>
                            <li class="mb-10">Специалист в сфере закупок</li>
                            <li class="mb-10">Организация корпоративных закупок</li>
                            <li class="mb-10">Подготовка и аттестация контрактных управляющих на соответствие квалификации "специалист-эксперт в сфере закупок”</li>
                            <li class="mb-10">Внесение сведений в реестр контрактов в ЕИС</li>
                            <li class="mb-10">Legal design: новые решения для судебной работы по 44-ФЗ и 223-ФЗ</li>
                            <li class="mb-10">Как работать с претензиями в адрес поставщиков по 44-ФЗ</li>
                            <li class="mb-10">Как проводить закупки для проведения строительных работ и кап. ремонта</li>
                        </ol>
                    </div>
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
                            <img src="./img.second_lend/exp_1.svg" alt="">
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
                        <img src="./img.second_lend/exp_2.svg" alt="">
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
                        <img src="./img.second_lend/exp_3.svg" alt="">
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
                             data-img-src="./img.second_lend/passport1.gif">
                            <p class="font-size-18">
                                Для каждого специалиста разрабатываем паспорт навыков и вектор карьерного роста
                            </p>
                        </div>
                        <div class="p-15 mb-5 border-radius-10 button-slider-1 cp" data-img="2"
                             data-img-src="./img.second_lend/passport2.gif">
                            <p class="font-size-18">
                                Учитываем должность, специфику работы, размер и тип учреждения
                            </p>
                        </div>
                        <div class="p-15 mb-5 border-radius-10 button-slider-1 cp" data-img="3"
                             data-img-src="./img.second_lend/passport3.gif">
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
                            <img src="./img.second_lend/passport1.gif" alt="">
                        </div>
                    </div>
                    <div class="slider-1" data-img="2">
                        <div class="border-radius-20"
                             style="border: 1px solid rgba(217, 217, 217, 1); overflow: hidden;">
                            <img src="./img.second_lend/passport2.gif" alt="">
                        </div>
                    </div>
                    <div class="slider-1" data-img="3">
                        <div class="border-radius-20"
                             style="border: 1px solid rgba(217, 217, 217, 1); overflow: hidden;">
                            <img src="./img.second_lend/passport3.gif" alt="">
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
            <h3 class="font-size-36 mb-40">БУДУЩИЕ ПРОГРАММЫ<br>в Высшей школе Госзакупок, которые вам тоже будут доступны</h3>
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
        <h2>Как заказчику провести электронную приемку</h2>
        <p>
            Электронная приемка нужна всем заказчикам. Вы не сможете исполнить или закрыть ни один контракт без нее. Если у вас есть конкурентные закупки, и вы еще не разобрались в электронной приемке, оттягивать уже нельзя. Посмотрите видео. Наталья Парамонова, заместитель начальника Отдела анализа функционирования информационных систем Федерального Казначейства, расскажет, как перейти на электронную приемку.
        </p>
        <div class="flex-center">
            <iframe id="YT_1691043897605" frameborder="0" allowfullscreen="1" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" title="Электронное актирование. Новации 2022-2023" width="688" height="400" src="https://www.youtube.com/embed/KAr11KEK8SE?wmode=opaque&amp;enablejsapi=1&amp;origin=https%3A%2F%2Facademy.gzakypki.ru&amp;widgetid=1" data-gtm-yt-inspected-13="true" scrolling="no" style="overflow: auto;"></iframe>
        </div>
        <p>
            На этом практическом курсе разберетесь, как внедрить в работу инструмент электронного актирования, и какие изменения при этом учесть. На старте важно представить план работа электронной приемки у себя в учреждении, поэтому мы собрали её на удобной схеме, как на рисунке 1. Чтобы увидеть схему в большом размере, нажмите на неё или скачайте в допматериалах к уроку. На уроке изучите, как назначить ответственных за приемку и завести для них КЭП.
        </p>
        <h4>Рисунок 1. Упорядоченная схема электронной приемки</h4>
        <div>
            <img src="https://api.school.glavbukh.ru/api/v2/file_download?id=cb016ca7-5e24-4f74-b023-721cc9015f82" alt="">
        </div>
        <p>
            Перед тем как перейти к процедуре назначения ответственных за электронную приемку, расскажем вам о машиночитаемой доверенности. Она непосредственно связана с получением КЭП.
        </p>
        <h3>Как оформить машиночитаемую доверенность</h3>
        <h4>Что такое машиночитаемая доверенность</h4>
        <p>
            Машиночитаемая доверенность (МЧД) — это, по своей сути, электронный документ в формате xml, который подтверждает право представителя компании или ИП действовать от имени представляемого, и заверять своей подписью документы этого представляемого.
        </p>
        <p class="addIconAndBackGround">
            Машиночитаемая доверенность должна быть заверена КЭП руководителя представляемого юридического лица (или ИП), и подлежит регистрации в госорганах
        </p>
        <h4>В чем основная «фишка»</h4>
        <p>
            С машиночитаемой доверенностью не требуется предоставлять в налоговые органы доверенность на бумаге (ИП не надо заверять «бумажную» доверенность у нотариуса).
        </p>
        <p class="addIconAndBackGround">
            С 31 августа 2023 года машиночитаемая доверенность станет обязательной при подписании документов представителем
        </p>
        <h4>Оформление машиночитаемой доверенности</h4>
        <p>Доверенность должна содержать:</p>
        <p>
        <ul>
            <li class="mb-10">наименование документа,</li>
            <li class="mb-10">сведения о доверителе и о представителе,</li>
            <li class="mb-10">дату совершения доверенности, срок действия доверенности (при его наличии),</li>
            <li class="mb-10">перечень полномочий представителя,</li>
            <li class="mb-10">идентификатор полномочий из соответствующего классификатора, либо иное описание полномочий в виде текста,</li>
            <li class="mb-10">номер доверенности,</li>
            <li class="mb-10">усиленную квалифицированную электронную подпись, которой подписана доверенность, и возможность передоверия.</li>
        </ul>
        </p>
        <p>
            Единые требования к форме МЧД установлены Приказом Министерства цифрового развития, связи и массовых коммуникаций РФ от 18 августа 2021 г. № 857 «Об утверждении единых требований к формам доверенностей, необходимых для использования квалифицированной электронной подписи».
        </p>
        <p class="addIconAndBackGround">
            В марте 2023 года на портале Госуслуг в разделе «Машиночитаемые доверенности» был опубликован единый формат, который уже можно использовать для B2B- и B2G-обмена
        </p>
        <h4>Что надо сделать для начала работы с машиночитаемыми доверенностями</h4>
        <p>
        <ol>
            <li class="mb-10">Получите квалифицированную электронную подпись на руководителя.</li>
            <li class="mb-10">Создайте машиночитаемую доверенность и выпустите для представителей ЭП на физическое лицо. МЧД создает
                на сотрудника работодатель и подписывает ее своей КЭП, указывая в документе срок действия доверенности и
                полномочия сотрудника. Одну МЧД можно выдать сразу на целую группу сотрудников. В одной МЧД можно
                указать сразу несколько полномочий - по одной доверенности сотрудник может выполнять разные операции.
            </li>
            <li class="mb-10">Добавьте МЧД в систему онлайн-документооборота (например, СБИС) и передайте в единый реестр
                машиночитаемых доверенностей ФНС России. Если подписывать документы будете в какой-то учетной
                электронной системе (допустим, 1С), а отправлять будете с помощью другой (скажем, СБИС), то настройте
                интеграцию между системами.
            </li>
        </ol>
        </p>
        <h3>Как назначить ответственных за приемку и завести для них КЭП</h3>
        <p>
            Решение по итогам приемки может подписать приемочная комиссия либо уполномоченное лицо по приемке, как на рисунке 1. На практике, если выберете первый вариант, всем членам комиссии нужна КЭП. На то, чтобы обеспечить всех членов приемочной комиссии КЭП через ТОФК, уйдет от двух до трех недель.
        </p>
        <h4>Рисунок 1. Два варианта назначить ответственных за электроприемку</h4>
        <div>
            <img src="https://e.profkiosk.ru/service_tbn2/rw4na8.jpg" alt="">
        </div>
        <p>
            Здесь затруднение у заказчиков в том, что никогда раньше приемщикам не обязательно было иметь электронную подпись: документы оформляли на бумаге. Теперь в ЕИС каждый член комиссии подписывает свое решение электронно. Поэтому второй вариант для заказчика проще: кто фактически получает товар на руки, тот и будет оформлять электроприемку в ЕИС. Но у этого лица должно быть достаточно компетенций, чтобы все документы от поставщика проверить на соответствие закону и условиям закупки.
        </p>
        <p>
            Также такое лицо несет единоличную ответственность за соответствие товара условиям закупки. Перечень документов, которые потребуется теперь сканировать для приемки, смотрите на рисунке 2.
        </p>
        <h4>Рисунок 2. Сканы каких документов сделать для электронной приемки</h4>
        <div>
            <img src="https://e.profkiosk.ru/service_tbn2/lvxpt2.jpg" alt="">
        </div>
        <p>
            Кого лучше назначить ответственным за электронную приемку, смотрите в видео-комментарии эксперта журнала «Госзакупки.ру» Елены Пановой.
        </p>
        <div class="flex-center">
            <iframe id="YT_1691043897608" frameborder="0" allowfullscreen="1" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" title="Кого назначить ответственным за электроприемку?" width="688" height="370" src="https://www.youtube.com/embed/OqCVP9RFrw0?wmode=opaque&amp;enablejsapi=1&amp;origin=https%3A%2F%2Facademy.gzakypki.ru&amp;widgetid=2" data-gtm-yt-inspected-13="true" scrolling="no" style="overflow: auto;"></iframe>
        </div>
        <p>
            <h4 class="mb-20">ОНЛАЙН-ВСТРЕЧИ ДЛЯ ВАС</h4>
            <h4 class="mb-20">Каждый месяц мы проводим встречи с экспертами в прямом эфире. На них узнаете о последних изменениях и сможете задать вопросы.</h4>
            <h4 class="mb-20">Посмотрите расписание встреч и зарегистрируйтесь</h4>
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

<!-- ID2 -->
<script type="text/javascript">
    var APP_ID = 10149
    var EMV_ID = 1213
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

<script>
    document.querySelectorAll('style').forEach((style) => {
        style.innerHTML = style.innerHTML.replaceAll("  ", "").replaceAll("\r", "").replaceAll("\n", "")
    })
</script>

</body>
</html>
