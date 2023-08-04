<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Новые программы для учеников Школы Главбуха госучреждения</title>

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
                    <div>Школа</div>
                    <div><b>Главбуха госучреждения</b></div>
                </div>
                <h1 class="mb-35 font-size-20">Новые программы для учеников Школы Главбуха госучреждения</h1>
                <h2 class="mb-90 font-size-42">Обновленная программа «Главный бухгалтер госсектора (код В) —
                    2024»</h2>
                <p class="font-size-20">Пройдите аттестацию в Школе Главбуха госучреждения еще 28 + дополнительные
                    программы для бухгалтера и главбуха. Освойте цифровые навыки в работе бухгалтерии, навыки
                    планирования и финансового анализа в госсекторе. Подготовьтесь к совершенно новой инвентаризации и
                    будьте востребованным специалистом при глобальной централизации учета.</p>

            </div>
            <div class="w-40-100 mt-130">
                <img src="./img.first_lend/main-block.svg" alt="">
            </div>
        </div>
        <div class="pos-abs top-0 w-100 h-80 z--1" style="background-color: rgba(56, 52, 48, 1)">-</div>
    </section>
    <section class="mb-80 pos-relative">
        <h3 class="font-size-36 mb-100 ml-150">Формируйте план обучения и получайте новые навыки в работе</h3>
        <div class="flex-wrap px-150-0" style="justify-content: space-evenly;">
            <article class="w-33-100 flex-column">
                <div class="h-px-175 mb-30">
                    <img src="./img.first_lend/icon4.svg" alt="">
                </div>
                <h4 class="text-center mb-30 font-size-18">
                    Цифровизация бухгалтерии
                </h4>
                <p class="text-center font-size-15 px-20">
                    Работа в ГИИС «Электронный бюджет». Интеграция ЕИС и 1С, настройка в бухгалтерской программе расширенной аналитики. Учет операций в цифровых рублях и переход на автоматизированный смарт контроль
                </p>
            </article>
            <article class="w-33-100 flex-column">
                <div class="h-px-175 mb-30">
                    <img src="./img.first_lend/icon1.svg" alt="">
                </div>
                <h4 class="text-center mb-30 font-size-18">
                    Инвентаризация активов и обязательств
                </h4>
                <p class="text-center font-size-15 px-20">
                    Инвентаризация имущества по обновленному стандарту. Оформление новых форм инвентаризационных описей. Списание имущества, которое не отвечает критериям актива. Оформление результатов инвентаризации в 1С
                </p>
            </article>
            <article class="w-33-100 flex-column">
                <div class="h-px-175 mb-30">
                    <img src="./img.first_lend/icon3.svg" alt="">
                </div>
                <h4 class="text-center mb-30 font-size-18">
                    Планирование и финансовый анализ в госсекторе
                </h4>
                <p class="text-center font-size-15 px-20">
                    Расчет нормативных затрат и себестоимость платных услуг. Обоснование расходов в плане ФХД или бюджетной смете. Перераспределение экономии. Финансовый анализ деятельности учреждения. Расчеты показателей в специальных приложениях
                </p>
            </article>
            <article class="w-33-100 flex-column">
                <div class="h-px-175 mb-30">
                    <img src="./img.first_lend/icon2.svg" alt="">
                </div>
                <h4 class="text-center mb-30 font-size-18">
                    Первичные учетные документы и регистры в госучреждении
                </h4>
                <p class="text-center font-size-15 px-20">
                    Оформление новых электронных первичных документов. Составление графика документооборота и организация внутреннего контроля первички
                </p>
            </article>
            <article class="w-33-100 flex-column">
                <div class="h-px-175 mb-30">
                    <img src="./img.first_lend/icon5.svg" alt="">
                </div>
                <h4 class="text-center mb-30 font-size-18">
                    Отчетность в госучреждении
                </h4>
                <p class="text-center font-size-15 px-20">
                    Составление отчетных форм и и консолидированной отчетности. Проверка показателей по контрольным соотношениям. Формирование аналитической пояснительной записки.Критерии достоверности бухгалтерской (бюджетной) отчетности
                </p>
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
                    Я — Марина Уткина, руководитель Школы Главбуха госучреждения приглашаю вас на новый урок
                    <br>
                    <b>«Новые требования к аналитике: как теперь вести учет по дате исполнения»</b>
                </div>
                <div class="w-25-100 pos-relative h-px-260">
                    <div class="h-px-300 pos-abs top--40">
                        <img src="./img.first_lend/people1.svg" alt="">
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
            Что нового в Школе Главбуха госучреждения?
        </h3>
        <article class="w-100 mb-40 open-list-wrapper cp">
            <div class="mx-100-0 border-radius-15" style="background-color: rgba(69, 65, 60, 1); color: white;">
                <h4 class="font-size-36 p-50 open-list" data-open-list="1">28 готовых программ для обучения бухгалтеру и главбуху •</h4>
                <div class="hide p-50 pt-35 font-size-20 open-list-data flex-center" data-open-list="1">
                    <p class="mb-35">
                        На обучение вам дается целый год и доступ ко всем программам Школы Главбуха госучреждения. Вы сами формируете свой учебный план и решаете какие навыки хотите подтянуть.
                    </p>
                    <b>Вам уже доступно 28 программ. Рейтинг самых популярных у наших учеников:</b>
                    <div>
                        <ol>
                            <li class="mb-10">Закрытие отчетного периода в «1С: Бухгалтерия государственного учреждения»</li>
                            <li class="mb-10">Инструменты Excel, которые помогут бухгалтеру работать быстрее и сократить ошибки</li>
                            <li class="mb-10">Главбух госсектора по подготовке консолидированной бюджетной отчетности (код D)</li>
                            <li class="mb-10">Санкционирование расходов в программе 1С для бюджетных (автономных) учреждений</li>
                            <li class="mb-10">Составление и представление финансовой отчетности экономического субъекта (код В)</li>
                            <li class="mb-10">Расчеты с подотчетными лицами в учреждении бюджетной сферы</li>
                            <li class="mb-10">Подготовка и аттестация бухгалтеров учреждений на соответствие квалификации "Ведение бухгалтерского учета" (код А)</li>
                            <li class="mb-10">Экономист по планированию финансово-хозяйственной деятельности госучреждения</li>
                            <li class="mb-10">Бухгалтер по зарплате государственного (муниципального) учреждения</li>
                            <li class="mb-10">Бухгалтерская отчетность в 1С: инструменты, как найти и обезвредить ошибки</li>
                            <li class="mb-10">Бухгалтер госсектора. «Ведение бухгалтерского учета» (код А)</li>
                            <li class="mb-10">Алгоритм расчетов и выплат сотрудникам по новым правилам в программе «1С: Зарплата и кадры государственного учреждения»</li>
                            <li class="mb-10">Бухгалтер-кассир в государственном (муниципальном) учреждении</li>
                            <li class="mb-10">Единый налоговый платеж: все настройки и отчеты в программе «1С: Бухгалтерия государственного учреждения»</li>
                            <li class="mb-10">Основные средства и материальные запасы: кейсы по приему имущества к бухучету</li>
                            <li class="mb-10">Идеальная учетная политика: как составить, чтобы вести учет удобно и без нарушений</li>
                            <li class="mb-10">Бухгалтер по банковским операциям в государственном (муниципальном) учреждении</li>
                        </ol>
                    </div>
                    <b>И еще 11 полезных программ!</b>
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
                            <img src="./img.first_lend/exp_1.svg" alt="">
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
                        <img src="./img.first_lend/exp_2.svg" alt="">
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
                        <img src="./img.first_lend/exp_3.svg" alt="">
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
                             data-img-src="./img.first_lend/passport1.gif">
                            <p class="font-size-18">
                                Для каждого специалиста разрабатываем паспорт навыков и вектор карьерного роста
                            </p>
                        </div>
                        <div class="p-15 mb-5 border-radius-10 button-slider-1 cp" data-img="2"
                             data-img-src="./img.first_lend/passport2.gif">
                            <p class="font-size-18">
                                Учитываем должность, специфику работы, размер и тип учреждения
                            </p>
                        </div>
                        <div class="p-15 mb-5 border-radius-10 button-slider-1 cp" data-img="3"
                             data-img-src="./img.first_lend/passport3.gif">
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
                            <img src="./img.first_lend/passport1.gif" alt="">
                        </div>
                    </div>
                    <div class="slider-1" data-img="2">
                        <div class="border-radius-20"
                             style="border: 1px solid rgba(217, 217, 217, 1); overflow: hidden;">
                            <img src="./img.first_lend/passport2.gif" alt="">
                        </div>
                    </div>
                    <div class="slider-1" data-img="3">
                        <div class="border-radius-20"
                             style="border: 1px solid rgba(217, 217, 217, 1); overflow: hidden;">
                            <img src="./img.first_lend/passport3.gif" alt="">
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
            <h3 class="font-size-36 mb-40">БУДУЩИЕ ПРОГРАММЫ<br>в Школе Главбуха госучреждения</h3>
            <article class="mb-15 p-40 border-radius-15" style="background-color: rgba(133, 204, 255, 1);">
                <div class="mb-10 font-size-20">Продвинутый •</div>
                <h4 class="font-size-26 w-90">Новые первичные документы для учета нефинансовых активов в программе «1С: Бухгалтерия государственного учреждения», 40 часов, 1 месяц</h4>
            </article>
            <article class="mb-15 p-40 border-radius-15" style="background-color: rgba(133, 204, 255, 1);">
                <div class="mb-10 font-size-20">Продвинутый •</div>
                <h4 class="font-size-26 w-90">Внутренний финансовый аудит в бюджетной сфере, 72 часа, 1 месяц</h4>
            </article>
            <article class="mb-15 p-40 border-radius-15" style="background-color: rgba(133, 204, 255, 1);">
                <div class="mb-10 font-size-20">Продвинутый •</div>
                <h4 class="font-size-26 w-90">Инвентаризация активов и обязательств в государственном (муниципальном) учреждении, 14 дней, 40 часов</h4>
            </article>
        </div>
        <span
            style="display: inline-block; width: 80px; height: 40px; position: absolute; background-color: rgba(236, 139, 0, 1); border-radius: 0 0 50px 50px; top: -15px;left: 10px; rotate: 130deg;"></span>
        <span
            style="display: inline-block; width: 30px; height: 30px; position: absolute; background-color: rgba(240, 237, 203, 1); border-radius: 50px; top: 1020px;right: 50px;"></span>
        <span
            style="display: inline-block; width: 15px; height: 15px; position: absolute; background-color: rgba(224, 25, 24, 1); border-radius: 50px; bottom: -8px;right: 350px; z-index: 1;"></span>
    </section>
    <section class="w-100 pt-50-0 pb-20" style="background-color: white;">
        <style>
            .crazy-img {
                width: 216px;
                height: 216px;
            }
            @media screen and (max-width: 768px) {
                .crazy-img {
                    width: 168px;
                    height: 168px;
                }
            }
        </style>
        <article class="w-75-100 border-radius-25 mx-a mb-20 delete-after-date" data-delete-date="08/07/2023 10:00:00" style="background-color: rgba(249, 248, 244, 1);">
            <div class="flex-wrap p-30">
                <div class="w-30-100 flex-center">
                    <div class="pos-relative">
                        <div class="border-radius-50 h-px-70 p-5 flex-column-center w-px-70 color-white pos-abs" style="background-color: #7268f2; left: -30px;">
                            <div><b>07</b></div>
                            <div><b>авг</b></div>
                            <div>10:00</div>
                        </div>
                        <div>
                            <img class="crazy-img border-radius-120" style="" src="https://finacademy.budgetnik.ru/webcontent/images/photos/Author_5eb2f56b25d14a72a201cfb770ef0207_20230724T165429.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="w-70-100">
                    <div class="m-20-0">
                        <h2 class="mb-20 font-size-28">Расчеты с пододчетниками и МОЛ: как и по каким документам вести учет</h2>
                        <p class="font-size-18"><i><b>Кузенкова Татьяна</b>, главный бухгалтер Некоммерческого фонда реструктуризации предприятий и развития финансовых институтов,  консультант по вопросам учета и отчетности государственного сектора</i></p>
                    </div>
                </div>
            </div>
        </article>
        <article class="w-75-100 border-radius-25 mx-a mb-20 delete-after-date" data-delete-date="08/10/2023 12:00:00" style="background-color: rgba(249, 248, 244, 1);">
            <div class="flex-wrap p-30">
                <div class="w-30-100 flex-center">
                    <div class="pos-relative">
                        <div class="border-radius-50 h-px-70 p-5 flex-column-center w-px-70 color-white pos-abs" style="background-color: #7268f2; left: -30px;">
                            <div><b>10</b></div>
                            <div><b>авг</b></div>
                            <div>12:00</div>
                        </div>
                        <div>
                            <img class="crazy-img border-radius-120" style="" src="https://finacademy.budgetnik.ru/webcontent/images/photos/Author_2da6fd4d04a6413eb06d8bee4c966739_20230724T170143.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="w-70-100">
                    <div class="m-20-0">
                        <h2 class="mb-20 font-size-28">КВР и КОСГУ: разбор ситуаций, где возникают вопросы по кодам для учета</h2>
                        <p class="font-size-18"><i><b>Володина Елена Викентиевна</b>, Государственный советник 2 класса г. Москвы</i></p>
                    </div>
                </div>
            </div>
        </article>
        <article class="w-75-100 border-radius-25 mx-a delete-after-date" data-delete-date="08/17/2023 11:00:00" style="background-color: rgba(249, 248, 244, 1);">
            <div class="flex-wrap p-30">
                <div class="w-30-100 flex-center">
                    <div class="pos-relative">
                        <div class="border-radius-50 h-px-70 p-5 flex-column-center w-px-70 color-white pos-abs" style="background-color: #7268f2; left: -30px;">
                            <div><b>17</b></div>
                            <div><b>авг</b></div>
                            <div>11:00</div>
                        </div>
                        <div>
                            <img class="crazy-img border-radius-120" style="" src="https://finacademy.budgetnik.ru/webcontent/images/photos/Author_31c69a81e49e458c9f791599fbea1c10_20230606T112153.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="w-70-100">
                    <div class="m-20-0">
                        <h2 class="mb-20 font-size-28">Забалансовый учет по новым правилам</h2>
                        <p class="font-size-18"><i><b>Елена Кравченко</b>, Член методического совета по бюджетному (бухгалтерскому) учету и отчетности при Минфине Республики Удмуртия</i></p>
                    </div>
                </div>
            </div>
        </article>
        <script>
            document.body.querySelectorAll('.delete-after-date').forEach((deleteBlock) => {
                if ((new Date(deleteBlock.dataset.deleteDate)).getTime() < (new Date()).getTime()) {
                    deleteBlock.remove()
                }
            })
        </script>
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
        <h2>Новые требования к аналитике: как теперь вести учет по дате исполнения</h2>
        <p>
            Теперь у вас есть новое требование к аналитическому учету. Расчеты по доходам и расходам надо отражать в разрезе дат исполнения. Поправки в Инструкцию №157н ввели в действие в апреле 2023 года приказом № 192н. Однако новые правила надо применять с 1 января 2023 года. Так что придется срочно править учет. В этом уроке на популярных примерах потренируетесь отражать допаналитику. Определите, к каким счетам учета следует ее добавить. Узнаете, где взять информацию по дате исполнения, и как ее проставить.
        </p>
        <h3>Для каких счетов применять новый уровень аналитики</h3>
        <p>
            Раньше у вас было требование вести аналитику на счетах бухучета в разрезе контрагентов (групп контрагентов) и правовых оснований (п. 3 Инструкции 157н). С 1 января 2023 года добавился еще один уровень — дата исполнения (приказ Минфина России от 21.12.2022 № 192н).
        </p>
        <div class="flex">
            <div class="m-a w-75 p-50 pos-relative" style="  border-top: 1px solid #549ffa; border-bottom: 1px solid #549ffa;">
                <h3>Пересмотрите свои операции по начислению дебиторки по доходам, кредиторки по обязательствам, которые провели с начала года, и по всем укажите предельную дату исполнения. Расчеты 2022 года и ранее не корректируйте</h3>
                <span class="sovet"></span>
            </div>
        </div>
        <p>
            Давайте разберемся, к каким счетам добавлять углубленную аналитику, ведь прямо в Инструкции № 157н они не прописаны. Поскольку новая норма касается доходов и расходов, аналитику по дате исполнения нужно добавить к счетам: 205.00 «Расчеты по доходам»; 206.00 «Расчеты по выданным авансам»; 208.00 «Расчеты с подотчетными лицами»; 209.00 «Расчеты по ущербу и иным доходам»; 302.00 «Расчеты по принятым обязательствам»; 303.00 «Расчеты по платежам в бюджеты».
        </p>
        <div class="flex-center">
            <iframe allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen="" frameborder="0" height="315" scrolling="no" src="https://finacademy.budgetnik.ru/interactive/doc/d6604275-1af5-47bb-9bae-fa903b5b94fe/index.html" title="video-30733e5c-bf87-4f53-8e0d-dd8a553f6dd3" width="560" data-gtm-yt-inspected-17="true" id="iFrameResizer0" style="overflow: auto; height: 1055px;"> </iframe>
        </div>
        <div class="flex">
            <div class="m-a w-75 p-50 pos-relative" style="  border-top: 1px solid #549ffa; border-bottom: 1px solid #549ffa;">
                <h3>Если нет возможности установить конкретную дату исполнения задолженности или обязательства, укажите значение «31.12.2999»</h3>
                <span class="sovet"></span>
            </div>
        </div>
        <p>
            Показатель даты исполнения проставляйте в операциях начисления. Например, так:
        </p>
        <p>
            <i>
                Дебет 0.401.20.226 (0.109.Х0.226) Кредит 0.302.26.73Х
            </i>
        </p>
        <p>
            <i>
                — 31 мая приняты к учету расходы (в аналитике счета 0.302.00 следует указать предельную дату оплаты, установленную контрактом, — «15 июня 2023 года»).
            </i>
        </p>
        <h3>Где взять информацию по дате исполнения</h3>
        <p>
            Ищите дату исполнения в документах, которые связаны с определенной хозоперацией. Например, дата погашения задолженности есть условиях договора; сроки по платежам в бюджет — в Налоговом кодексе. Для расчетов с подотчетниками в локальном акте фиксируют, в течение какого периода они должны представить авансовый отчет.
        </p>
        <h4>Схема 1. Начисляете зарплату или стипендию: счет 302.00</h4>
        <div>
            <img src="https://api.school.glavbukh.ru/api/v2/file_download?id=4d45761a-9c0c-4739-9aa3-c4280c8af659" alt="">
        </div>
        <p>
            Обратите внимание, что для депонированных сумм дата исполнения будет 31.12.2999.
        </p>
        <h4>Схема 1. Выдали деньги под отчет: счет 208.00</h4>
        <div>
            <img src="https://api.school.glavbukh.ru/api/v2/file_download?id=d995b60c-7583-49b3-a1a5-e668c22dacb2" alt="">
        </div>
        <p>
            <a href="https://finacademy.budgetnik.ru/storage/text/c801fe7b-a410-4b61-a797-0456018b63a8.doc">Скачайте все схемы, с помощью которых сможете определить дату исполнения.</a> Смотрите презентацию с примерами из бухгалтерской практики.
        </p>
        <div class="flex-center">
            <iframe allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen="" frameborder="0" height="315" scrolling="no" src="https://finacademy.budgetnik.ru/interactive/doc/6def2aac-a353-47aa-949a-40bad3fd6d6f/index.html" title="video-8b666d6d-a2aa-4c7c-89ab-7c489281774e" width="560" data-gtm-yt-inspected-17="true" id="iFrameResizer1" style="overflow: auto; height: 502px;"> </iframe>
        </div>
        <p>
            По схемам и презентации вы сможете понять принцип действий, как проставлять в учете расширенную аналитику по дате исполнения.
        </p>
        <h3>Самое важное</h3>
        <p>
            <ul>
                <li class="mb-10">С 1 января 2023 года в аналитике расчетов по доходам и расходам добавился еще один уровень — «дата исполнения»</li>
                <li class="mb-10">Ищите дату исполнения в документах, которые связаны с определенным счетом</li>
                <li class="mb-10">Укажите дату исполнения, когда оформляете операции начисления</li>
            </ul>
        </p>
        <h3>Дополнительные материалы</h3>
        <div><a target="_blank" href="https://finacademy.budgetnik.ru/webcontent/courses/78ce12a66d254babaec006b2d30b938a/o%20suschestvennosty%20uchetnoy%20politiki_20220525T154043_20221011T123639_20221114T161211.docx">Профессиональное суждение бухгалтера о существенности изменений учетной политики</a></div>
        <div><a target="_blank" href="https://finacademy.budgetnik.ru/webcontent/courses/78ce12a66d254babaec006b2d30b938a/profsuzhdenie%20spod_20220525T154043_20221011T123639_20221114T161211.docx">Профессиональное суждение бухгалтера о событиях после очередной даты</a></div>
        <div><a target="_blank" href="https://finacademy.budgetnik.ru/webcontent/courses/78ce12a66d254babaec006b2d30b938a/oshibka%20v%20zarplate_20220525T154043_20221011T123639_20221114T161211.doc">Образец профессионального суждения бухгалтера об ошибке в зарплате</a></div>
        <div><a target="_blank" href="https://finacademy.budgetnik.ru/webcontent/courses/78ce12a66d254babaec006b2d30b938a/s%20zabalanca%20na%20zabalans_20220525T154043_20221011T123639_20221114T161211.doc">Профсуждение о переводе запасов с забаланса на баланс</a></div>
        <div><a target="_blank" href="https://finacademy.budgetnik.ru/webcontent/courses/78ce12a66d254babaec006b2d30b938a/profsuzhd%20matzapasy_20220525T154043_20221011T123639_20221114T161211.doc">Образец профессионального суждения бухгалтера о единице учета матзапасов</a></div>
        <div><a target="_blank" href="https://finacademy.budgetnik.ru/webcontent/courses/78ce12a66d254babaec006b2d30b938a/poffsuzhd%20fin%20arenda_20220525T154043_20221011T123639_20221114T161211.doc">Образец профсуждения о договоре финансовой аренды</a></div>
        <div><a target="_blank" href="https://finacademy.budgetnik.ru/webcontent/courses/78ce12a66d254babaec006b2d30b938a/standart%20arenda_20220525T154043_20221011T123639_20221114T161211.doc">Образец профсуждения о договоре, который не попадает под стандарт Аренда</a></div>
        <div><a target="_blank" href="https://finacademy.budgetnik.ru/webcontent/courses/78ce12a66d254babaec006b2d30b938a/arenda%20objecty_20220525T154043_20221011T123639_20221114T161211.doc">Профессиональное суждение бухгалтера по объектам аренды</a></div>
        <div><a target="_blank" href="https://finacademy.budgetnik.ru/webcontent/courses/78ce12a66d254babaec006b2d30b938a/arenda%20bezvozmezn_20220525T154043_20221011T123639_20221114T161211.docx">Образец профессионального суждения бухгалтера о договоре безвозмездного пользования</a></div>
        <div><a target="_blank" href="https://finacademy.budgetnik.ru/webcontent/courses/78ce12a66d254babaec006b2d30b938a/proffsuzhd%20oper%20arenda_20220525T154043_20221011T123639_20221114T161212.doc">Образец профсуждения о договоре операционной аренды</a></div>
        <div><a target="_blank" href="https://finacademy.budgetnik.ru/webcontent/courses/78ce12a66d254babaec006b2d30b938a/profsuzhd%20obescen_20220525T154043_20221011T123639_20221114T161212.docx">Профсуждение о стоимости при обесценении ОС</a></div>
        <div><a target="_blank" href="https://finacademy.budgetnik.ru/webcontent/courses/78ce12a66d254babaec006b2d30b938a/srok%20profsuzhd_20220525T154043_20221011T123639_20221114T161212.doc">Образец профессионального суждения бухгалтера о сроке полезного использования имущества</a></div>
        <div><a target="_blank" href="https://finacademy.budgetnik.ru/webcontent/courses/78ce12a66d254babaec006b2d30b938a/ocen%20pokazatel_20220525T154043_20221011T123639_20221114T161212.doc">Профессиональное суждение бухгалтера о величине оценочного показателя</a></div>
        <div><a target="_blank" href="https://finacademy.budgetnik.ru/webcontent/courses/78ce12a66d254babaec006b2d30b938a/spaved%20stoimost_20220525T154043_20221011T123639_20221114T161212.doc">Образец профессионального суждения бухгалтера о справедливой стоимости при безвозмездной передаче</a></div>
        <div><a target="_blank" href="https://finacademy.budgetnik.ru/webcontent/courses/78ce12a66d254babaec006b2d30b938a/primer%20arenda%20po%20objecatam_20220525T154043_20221011T123639_20221114T161212.doc">Пример, как оформить «профессиональное суждение бухгалтера» по объектам аренды</a></div>
        <div><a target="_blank" href="https://finacademy.budgetnik.ru/webcontent/courses/78ce12a66d254babaec006b2d30b938a/Reservy_20211018T181614_20221114T172334.docx">Новый стандарт «Резервы»</a></div>
        <div><a target="_blank" href="https://finacademy.budgetnik.ru/webcontent/courses/78ce12a66d254babaec006b2d30b938a/DolgosrochnyeDogovory_20211018T183533_20221114T172334.docx">Новый стандарт «Долгосрочные договоры»</a></div>
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
    var APP_ID = 172
    var EMV_ID = 1005
    window.ID2_SITE_USER_ID = 0;

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

            document.body.querySelector('a.passport-link').href = "https://profpasport.ru/specialist/" + window.ID2_SITE_USER_ID
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
