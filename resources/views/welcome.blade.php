<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{env("APP_NAME")}}</title>

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
            color: rgba(69, 65, 60, 1);
        }

        img {
            width: 100%;
            height: 100%;
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

        .flex-center {
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
        .p-{{$i}}       {
            padding: {{$i}}px;
        }

        .px-{{$i}}       {
            padding-left: {{$i}}px;
            padding-right: {{$i}}px;
        }

        .py-{{$i}}       {
            padding-top: {{$i}}px;
            padding-bottom: {{$i}}px;
        }

        .pl-{{$i}}       {
            padding-left: {{$i}}px;
        }

        .pr-{{$i}}       {
            padding-right: {{$i}}px;
        }

        .pt-{{$i}}       {
            padding-top: {{$i}}px;
        }

        .pb-{{$i}}       {
            padding-bottom: {{$i}}px;
        }

        .m-{{$i}}       {
            margin: {{$i}}px;
        }

        .mx-{{$i}}       {
            margin-left: {{$i}}px;
            margin-right: {{$i}}px;
        }

        .my-{{$i}}       {
            margin-top: {{$i}}px;
            margin-bottom: {{$i}}px;
        }

        .ml-{{$i}}       {
            margin-left: {{$i}}px;
        }

        .mr-{{$i}}       {
            margin-right: {{$i}}px;
        }

        .mt-{{$i}}       {
            margin-top: {{$i}}px;
        }

        .mb-{{$i}}       {
            margin-bottom: {{$i}}px;
        }

        .w-{{$i}}       {
            width: {{$i}}%;
        }

        .w-px-{{$i}}      {
            width: {{$i}}px;
        }

        .h-{{$i}}       {
            height: {{$i}}%;
        }

        .h-px-{{$i}}      {
            height: {{$i}}px;
        }

        .top-{{$i}}      {
            top: {{$i}}px;
        }

        .top--{{$i}}      {
            top: -{{$i}}px;
        }

        .left-{{$i}}      {
            left: {{$i}}px;
        }

        .right-{{$i}}      {
            right: {{$i}}px;
        }

        .bottom-{{$i}}      {
            bottom: {{$i}}px;
        }

        .opacity-{{$i}}      {
            opacity: {{$i}}%;
        }

        .z-{{$i}}      {
            z-index: {{$i}};
        }

        .z-{{$i}}      {
            z-index: {{$i}};
        }

        .z--{{$i}}      {
            z-index: -{{$i}};
        }

        .font-size-{{$i}}     {
            font-size: {{$i}}px;
        }

        .border-radius-{{$i}}  {
            border-radius: {{$i}}px;
        }


        /* adaptive */

        .w-{{$i}}-100 {
            width: {{$i}}%;
        }

        .p-{{$i}}-0       {
            padding: {{$i}}px;
        }

        .px-{{$i}}-0       {
            padding-left: {{$i}}px;
            padding-right: {{$i}}px;
        }

        .py-{{$i}}-0       {
            padding-top: {{$i}}px;
            padding-bottom: {{$i}}px;
        }

        .pl-{{$i}}-0       {
            padding-left: {{$i}}px;
        }

        .pr-{{$i}}-0       {
            padding-right: {{$i}}px;
        }

        .pt-{{$i}}-0       {
            padding-top: {{$i}}px;
        }

        .pb-{{$i}}-0       {
            padding-bottom: {{$i}}px;
        }

        .p-0-{{$i}}       {
             padding: 0;
         }

        .px-0-{{$i}}       {
            padding-left: 0;
            padding-right: 0;
        }

        .py-0-{{$i}}       {
            padding-top: 0;
            padding-bottom: 0;
        }

        .pl-0-{{$i}}       {
            padding-left: 0;
        }

        .pr-0-{{$i}}       {
            padding-right: 0;
        }

        .pt-0-{{$i}}       {
            padding-top: 0;
        }

        .pb-0-{{$i}}       {
            padding-bottom: 0;
        }

        .m-{{$i}}-0       {
            margin: {{$i}}px;
        }

        .mx-{{$i}}-0       {
            margin-left: {{$i}}px;
            margin-right: {{$i}}px;
        }

        .my-{{$i}}-0       {
            margin-top: {{$i}}px;
            margin-bottom: {{$i}}px;
        }

        .ml-{{$i}}-0       {
            margin-left: {{$i}}px;
        }

        .mr-{{$i}}-0       {
            margin-right: {{$i}}px;
        }

        .mt-{{$i}}-0       {
            margin-top: {{$i}}px;
        }

        .mb-{{$i}}-0       {
            margin-bottom: {{$i}}px;
        }

        @media screen and (max-width: 768px) {
            .w-{{$i}}-100 {
                width: 100%;
            }

            .p-{{$i}}-0       {
                padding: 0;
            }

            .px-{{$i}}-0       {
                padding-left: 0;
                padding-right: 0;
            }

            .py-{{$i}}-0       {
                padding-top: 0;
                padding-bottom: 0;
            }

            .pl-{{$i}}-0       {
                padding-left: 0;
            }

            .pr-{{$i}}-0       {
                padding-right: 0;
            }

            .pt-{{$i}}-0       {
                padding-top: 0;
            }

            .pb-{{$i}}-0       {
                padding-bottom: 0;
            }

            .p-0-{{$i}}       {
                 padding: {{$i}}px;
             }

            .px-0-{{$i}}       {
                padding-left: {{$i}}px;
                padding-right: {{$i}}px;
            }

            .py-0-{{$i}}       {
                padding-top: {{$i}}px;
                padding-bottom: {{$i}}px;
            }

            .pl-0-{{$i}}       {
                padding-left: {{$i}}px;
            }

            .pr-0-{{$i}}       {
                padding-right: {{$i}}px;
            }

            .pt-0-{{$i}}       {
                padding-top: {{$i}}px;
            }

            .pb-0-{{$i}}       {
                padding-bottom: {{$i}}px;
            }

            .m-{{$i}}-0       {
                margin: 0;
            }

            .mx-{{$i}}-0       {
                margin-left: 0;
                margin-right: 0;
            }

            .my-{{$i}}-0       {
                margin-top: 0;
                margin-bottom: 0;
            }

            .ml-{{$i}}-0       {
                margin-left: 0;
            }

            .mr-{{$i}}-0       {
                margin-right: 0;
            }

            .mt-{{$i}}-0       {
                margin-top: 0;
            }

            .mb-{{$i}}-0       {
                margin-bottom: 0;
            }
        }

        @endfor

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
            width: 17px;
            height: 17px;
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
            bottom: 3px;
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
    </style>



</head>
<body class="p-0-10" style="background-color: rgba(69, 65, 60, 0.03);">
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
                <h2 class="mb-90 font-size-42">Новинка августа — программа «Главный бухгалтер госсектора (код В) —
                    2024»</h2>
                <p class="font-size-20">Финансисты госсектора должны соответствовать профстандарту «Бухгалтер». А
                    профстандарт требует, чтобы
                    главбухи ежегодно повышали квалификацию. Докажите, что выполняете это требование. Пройдите обучение,
                    получите официальное удостоверение и (тут про аттестат навыков)</p>

            </div>
            <div class="w-40-100 mt-50">
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
        <span style="display: inline-block; width: 30px; height: 30px; position: absolute; background-color: rgba(7, 108, 123, 1); border-radius: 50px; top: -20px;left: 50px;"></span>
        <span style="display: inline-block; width: 20px; height: 20px; position: absolute; background-color: rgba(236, 139, 0, 1); border-radius: 50px; top: 220px;left: -10px;"></span>
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
        <span style="display: inline-block; width: 80px; height: 40px; position: absolute; background-color: rgba(243, 228, 181, 1); border-radius: 0 0 50px 50px; top: 0;right: 10px; rotate: -40deg;"></span>
        <span style="display: inline-block; width: 15px; height: 15px; position: absolute; background-color: rgba(249, 249, 249, 1); border-radius: 50px; top: 220px;left: 50px;"></span>
        <span style="display: inline-block; width: 30px; height: 30px; position: absolute; background-color: rgba(7, 108, 123, 1); border-radius: 50px; bottom: -15px;left: 200px;"></span>
    </section>
    <section class="mb-80">
        <h3>Готовый урок</h3>
        <p>
            Устная передача — самый древний способ передачи знаний в истории человечества. После изобретения древними
            цивилизациями систем записи люди начали использовать для письма почти всё, на чём можно писать — глиняные
            таблички, кору дерева, листы металла и т. п.
            Таблички
            Шумерская глиняная табличка с клинописью

            Табличку можно определить как физически прочный, надёжный носитель письменной информации, относительно
            удобный в повседневном использовании и транспортировке. Пишущим средством в этом случае, как правило,
            выступало стило. Можно выделить два основных типа табличек: глиняные (например, у населения долины между
            Тигром и Евфратом), которые часто использовались для письма клинописью[4], и восковые. Последние
            представляли собой дощечки, покрытые слоем воска, в то время как глиняные полностью состояли из глины и
            после нанесения надписей часто обжигались для придания им дополнительной прочности. После этой процедуры,
            соответственно, изменить текст было уже невозможно; напротив, записи на восковых табличках можно было
            стереть и использовать носитель повторно. В Древнем Риме дощечки часто скрепляли друг с другом. Известно,
            что существовали «диптихи», «триптихи» и «полиптихи» (соответственно две, три и много дощечек)[5], образуя
            тем самым своеобразный прототип современной книги — кодекс[6].
            Свитки
            Винченцо Фоппа. Юный Цицерон за книгой
        </p>
    </section>
    <section class="w-100 mb-100">
        <h3 class="mb-80 font-size-42 text-center">
            Что нового в Школе Главбуха госучреждения
            <br>в 2024 году?
        </h3>
        <article class="w-100 mb-40">
            <div class="mx-100-0 p-50 border-radius-15" style="background-color: rgba(69, 65, 60, 1); color: white;">
                <h4 class="font-size-36">Новые форматы интерактивных заданий •</h4>
                <div class="hide pt-35 font-size-20">
                    <p class="mb-35">Сформируйте ваш паспорт навыков профессионального бухгалтера госсектора</p>
                    <p>Подтвердите свои знания и получите цифровой паспорт профессиональных навыков, одобренный органами власти,
                        специалистами Минфина и Федерального казначейства. Управляйте своим профессиональным присутствием в
                        интернете, получайте новые навыки и возможности для карьерного роста.</p>
                </div>
            </div>
        </article>
        <article class="w-100">
            <div class="mx-100-0 p-50 border-radius-15" style="background-color: rgba(69, 65, 60, 1); color: white;">
                <h4 class="font-size-36">Паспорт навыков •</h4>
                <div class="pt-35 w-75 font-size-20">
                    <p class="mb-35">Сформируйте ваш паспорт навыков профессионального бухгалтера госсектора</p>
                    <p>Подтвердите свои знания и получите цифровой паспорт профессиональных навыков, одобренный органами власти,
                        специалистами Минфина и Федерального казначейства. Управляйте своим профессиональным присутствием в
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
                <article class="w-px-300 border-radius-10 flex-column" style="background-color: rgba(249, 248, 244, 1);">
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
                <article class="w-px-300 border-radius-10 flex-column" style="background-color: rgba(249, 248, 244, 1);">
                    <div class="w-px-280 p-10">
                        <img src="{{asset('assets/imgs/exp_2.svg')}}" alt="">
                    </div>
                    <div class="p-10 flex-column h-100">
                        <h4 class="font-size-24">Алексей Сосновский</h4>
                        <p class="font-size-18 mb-10">начальник отдела бухгалтерского учета и отчетности Министерства финансов Архангельской области</p>
                        <div class="font-size-14 mb-10 mt-a" style="color: rgba(166, 162, 153, 1);">Бухгалтерия</div>
                    </div>
                </article>
                <article class="w-px-300 border-radius-10 flex-column" style="background-color: rgba(249, 248, 244, 1);">
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
                        <div class="p-15 mb-5 border-radius-10 button-slider-1 --active cp" data-img="1" data-img-src="{{asset('assets/imgs/passport1.gif')}}">
                            <p class="font-size-18">
                                Для каждого специалиста разрабатываем паспорт навыков и вектор карьерного роста
                            </p>
                        </div>
                        <div class="p-15 mb-5 border-radius-10 button-slider-1 cp" data-img="2" data-img-src="{{asset('assets/imgs/passport2.gif')}}">
                            <p class="font-size-18">
                                Учитываем должность, специфику работы, размер и тип учреждения
                            </p>
                        </div>
                        <div class="p-15 mb-5 border-radius-10 button-slider-1 cp" data-img="3" data-img-src="{{asset('assets/imgs/passport3.gif')}}">
                            <p class="font-size-18">
                                Паспорт ежемесячно показывает, какие компетенции начинают устаревать из-за прошедших изменений
                            </p>
                        </div>
                    </div>
                </div>
                <div class="w-50-100" style="overflow: hidden;">
                    <div class="slider-1 --active --current" data-img="1">
                        <div class="border-radius-20" style="border: 1px solid rgba(217, 217, 217, 1); overflow: hidden;">
                            <img src="{{asset('assets/imgs/passport1.gif')}}" alt="">
                        </div>
                    </div>
                    <div class="slider-1" data-img="2">
                        <div class="border-radius-20" style="border: 1px solid rgba(217, 217, 217, 1); overflow: hidden;">
                            <img src="{{asset('assets/imgs/passport2.gif')}}" alt="">
                        </div>
                    </div>
                    <div class="slider-1" data-img="3">
                        <div class="border-radius-20" style="border: 1px solid rgba(217, 217, 217, 1); overflow: hidden;">
                            <img src="{{asset('assets/imgs/passport3.gif')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <section class="w-100 pos-relative" style="background-color: rgba(56, 52, 48, 1); color: white;">
        <div class="px-150-0 py-100">
            <h3 class="font-size-36 mb-40">НОВЫЕ ПРОГРАММЫ<br>в Школе Главбуха госучреждения в 2024</h3>
            <article class="mb-15 p-40 border-radius-15" style="background-color: rgba(133, 204, 255, 1);">
                <div class="mb-10 font-size-20">Продвинутый •</div>
                <h4 class="font-size-26 w-90">Основные средства и материальные запасы: кейсы по приему имущества к бухучету</h4>
            </article>
            <article class="mb-15 p-40 border-radius-15" style="background-color: rgba(133, 204, 255, 1);">
                <div class="mb-10 font-size-20">Продвинутый •</div>
                <h4 class="font-size-26 w-90">Специалист по внутреннему контролю в учреждении</h4>
            </article>
            <article class="mb-15 p-40 border-radius-15" style="background-color: rgba(133, 204, 255, 1);">
                <div class="mb-10 font-size-20">Продвинутый •</div>
                <h4 class="font-size-26 w-90">Новая цифровая бухгалтерия в бюджетной сфере: планирование, отчетность, контроль</h4>
            </article>
            <article class="mb-15 p-40 border-radius-15" style="background-color: rgba(133, 204, 255, 1);">
                <div class="mb-10 font-size-20">Базовый •</div>
                <h4 class="font-size-26 w-90">Безвозмездная передача имущества: учет у передающей и принимающей стороны в программе 1С</h4>
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
        <span style="display: inline-block; width: 80px; height: 40px; position: absolute; background-color: rgba(236, 139, 0, 1); border-radius: 0 0 50px 50px; top: -15px;left: 10px; rotate: 130deg;"></span>
        <span style="display: inline-block; width: 30px; height: 30px; position: absolute; background-color: rgba(240, 237, 203, 1); border-radius: 50px; top: 1020px;right: 50px;"></span>
        <span style="display: inline-block; width: 15px; height: 15px; position: absolute; background-color: rgba(224, 25, 24, 1); border-radius: 50px; bottom: -8px;right: 350px; z-index: 1;"></span>
    </section>
    <section class="w-100 py-100 pos-relative" style="background-color: white;">
        <div class="px-150-0">
            <h3 class="font-size-36 mb-80 w-50-100">Пройдите промежуточный тест из аттестации главбухов</h3>
            <div class="flex-center">
                <article class="w-50-100" style="background-color: rgba(249, 249, 249, 1);">
                    <div class="py-50 px-100-0">
                        <div class="mb-20">1 вопрос из 3</div>
                        <h4 class="mb-40">Нужно ли включать положение о комиссии по поступлению и выбытию активов в учетную политику?</h4>
                        <div class="mb-50 p-0" style="list-style-type: none;">
                            <div class="form_radio">
                                <input id="radio-1" type="radio" name="radio">
                                <label for="radio-1" class="font-size-20" style="color: rgba(11, 7, 8, 1);">Да, обязательно</label>
                            </div>
                            <div class="form_radio">
                                <input id="radio-2" type="radio" name="radio">
                                <label for="radio-2" class="font-size-20" style="color: rgba(11, 7, 8, 1);">Нет</label>
                            </div>
                            <div class="form_radio">
                                <input id="radio-3" type="radio" name="radio">
                                <label for="radio-3" class="font-size-20" style="color: rgba(11, 7, 8, 1);">Затрудняюсь ответить</label>
                            </div>
                        </div>
                        <button class="button-1">Следующий вопрос</button>
                    </div>
                </article>
            </div>
        </div>
        <span style="display: inline-block; width: 80px; height: 40px; position: absolute; background-color: rgba(219, 25, 13, 1); border-radius: 0 0 50px 50px; top: 70px;left: 80px; rotate: 130deg;"></span>
        <span style="display: inline-block; width: 30px; height: 30px; position: absolute; background-color: rgba(236, 139, 0, 1); border-radius: 50px; top: 520px;right: 100px;"></span>
        <span style="display: inline-block;width: 15px;height: 15px;position: absolute;background-color: rgba(11, 7, 8, 1);border-radius: 50px;bottom: 50px;left: 300px;"></span>
    </section>
    <section class="h-px-300 w-100" style="background-color: rgba(56, 52, 48, 1);">

    </section>
</main>
<script>
    document.body.querySelectorAll('.button-slider-1').forEach((buttonSlider1) => {
        buttonSlider1.addEventListener('click', () => {
            document.body.querySelectorAll('.button-slider-1').forEach((buttonSlider1Inside) => {
                buttonSlider1Inside.classList.remove('--active')
            })
            document.body.querySelectorAll('.slider-1').forEach((slider1Inside) => {
                slider1Inside.classList.remove('--active')
                slider1Inside.classList.remove('--current')
            })
            buttonSlider1.classList.add('--active')
            document.body.querySelector(`.slider-1[data-img="${buttonSlider1.dataset.img}"]`).classList.add('--active')
            document.body.querySelector(`.slider-1[data-img="${buttonSlider1.dataset.img}"] img`).setAttribute("src", buttonSlider1.dataset.imgSrc + "?" + Date.now())
            setTimeout(() => {
                document.body.querySelector(`.slider-1[data-img="${buttonSlider1.dataset.img}"]`).classList.add('--current')
            }, 10)
        })
    })
</script>
</body>
</html>
