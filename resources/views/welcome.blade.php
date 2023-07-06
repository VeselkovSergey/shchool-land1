<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{env("APP_NAME")}}</title>

    <style>
        body {
            padding: 0;
            margin: 0;
        }

        img {
            width: 100%;
            height: 100%;
        }

        .flex {
            display: flex;
        }

        .flex-column {
            display: flex;
            flex-direction: column;
        }

        .flex-center {
            display: flex;
            justify-content: center;
            align-items: center;
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

        @for($i = 0; $i <= 100; $i++)
        .p-{{$i}}  {
            padding: {{$i}}px;
        }

        .px-{{$i}}  {
            padding-left: {{$i}}px;
            padding-right: {{$i}}px;
        }

        .py-{{$i}}  {
            padding-top: {{$i}}px;
            padding-bottom: {{$i}}px;
        }

        .pl-{{$i}}  {
            padding-left: {{$i}}px;
        }

        .pr-{{$i}}  {
            padding-right: {{$i}}px;
        }

        .pt-{{$i}}  {
            padding-top: {{$i}}px;
        }

        .pb-{{$i}}  {
            padding-bottom: {{$i}}px;
        }

        .m-{{$i}}  {
            margin: {{$i}}px;
        }

        .mx-{{$i}}  {
            margin-left: {{$i}}px;
            margin-right: {{$i}}px;
        }

        .my-{{$i}}  {
            margin-top: {{$i}}px;
            margin-bottom: {{$i}}px;
        }

        .ml-{{$i}}  {
            margin-left: {{$i}}px;
        }

        .mr-{{$i}}  {
            margin-right: {{$i}}px;
        }

        .mt-{{$i}}  {
            margin-top: {{$i}}px;
        }

        .mb-{{$i}}  {
            margin-bottom: {{$i}}px;
        }

        .w-{{$i}}  {
            width: {{$i}}%;
        }

        .h-{{$i}}  {
            height: {{$i}}%;
        }

        .top-{{$i}} {
            top: {{$i}}px;
        }

        .left-{{$i}} {
            left: {{$i}}px;
        }

        .right-{{$i}} {
            right: {{$i}}px;
        }

        .bottom-{{$i}} {
            bottom: {{$i}}px;
        }

        .opacity-{{$i}} {
            opacity: {{$i}}%;
        }

        .z-{{$i}} {
            z-index: {{$i}};
        }

        .z-{{$i}} {
            z-index: {{$i}};
        }

        .z--{{$i}} {
            z-index: -{{$i}};
        }

        @endfor
    </style>

</head>
<body>
<main>
    <section class="pos-relative">
        <div>
            <div>Школа</div>
            <div>Главбуха госучреждения</div>
        </div>
        <h1>Новые программы для учеников Школы Главбуха госучреждения</h1>
        <h2>Новинка августа — программа «Главный бухгалтер госсектора (код В) — 2024»</h2>
        <p>Финансисты госсектора должны соответствовать профстандарту «Бухгалтер». А профстандарт требует, чтобы главбухи ежегодно повышали квалификацию. Докажите, что выполняете это требование. Пройдите обучение, получите официальное удостоверение и (тут про аттестат навыков)</p>
        <div class="w-30">
            <img src="https://source.unsplash.com/random/200x200?sig={{rand(0, 1000)}}" alt="">
        </div>
        <div class="pos-abs top-0 bg-black opacity-50 w-100 h-80 z--1">-</div>
    </section>
    <section>
        <h3>Какие навыки получите</h3>
        <div class="flex">
            <article>
                <div>
                    <img src="https://source.unsplash.com/random/200x200?sig={{rand(0, 1000)}}" alt="">
                </div>
                <h4>Применение правил новых федеральных стандартов в госсекторе</h4>
                <p>Изучите новые стандарты учета и отчетности. Сможете сопоставить стандарты с инструкциями, скорректировать проводки и снизить риск искажения учета</p>
            </article>
            <article>
                <div>
                    <img src="https://source.unsplash.com/random/200x200?sig={{rand(0, 1000)}}" alt="">
                </div>
                <h4>Оформление и сверка первичных документов в госучреждении</h4>
                <p>Составите первичные учетные документы без ошибок. Проведете внутриформенную проверку, чтобы исключить ошибки</p>
            </article>
            <article>
                <div>
                    <img src="https://source.unsplash.com/random/200x200?sig={{rand(0, 1000)}}" alt="">
                </div>
                <h4>Составите первичные учетные документы без ошибок. Проведете внутриформенную проверку, чтобы исключить ошибки</h4>
                <p>Попрактикуетесь классифицировать имущество учреждения по видам и критериям актива. Сможете правильно оценивать, принимать к учету, обесценивать и списывать объекты</p>
            </article>
            <article>
                <div>
                    <img src="https://source.unsplash.com/random/200x200?sig={{rand(0, 1000)}}" alt="">
                </div>
                <h4>Переход на смарт-контроль</h4>
                <p>Отработаете правила СМАРТ-контроля и сможете подготовить бухгалтерию к этому новому бизнес-процессу</p>
            </article>
        </div>
    </section>
    <section>
        <h3>Отработаете правила СМАРТ-контроля и сможете подготовить бухгалтерию к этому новому бизнес-процессу</h3>
        <div>
            <div>
                <div>
                    Я — Марина Уткина, руководитель Школы Главбуха госучреждения приглашаю вас на новый урок
                    <b>Я — Марина Уткина, руководитель Школы Главбуха госучреждения приглашаю вас на новый урок</b>
                </div>
                <div class="w-20">
                    <img src="https://source.unsplash.com/random/200x200?sig={{rand(0, 1000)}}" alt="">
                </div>
            </div>
        </div>
    </section>
    <section>
        <h3>Готовый урок</h3>
    </section>
    <section>
        <h3>Я — Марина Уткина, руководитель Школы Главбуха госучреждения приглашаю вас на новый урок</h3>
        <p>Что то написано. Раскрывающийся блок</p>
    </section>
    <section>
        <h3>Паспорт навыков</h3>
        <p>Сформируйте ваш паспорт навыков профессионального бухгалтера госсектора</p>
        <p>Подтвердите свои знания и получите цифровой паспорт профессиональных навыков, одобренный органами власти, специалистами Минфина и Федерального казначейства. Управляйте своим профессиональным присутствием в интернете, получайте новые навыки и возможности для карьерного роста.</p>
    </section>
    <section>
        <h3>Паспорта одобрены экспертами профессионального сообщества бухгалтеров бюджетной сферы</h3>
        <p>Специалисты Минфина, Казначейства и других ведомств контролируют, чтобы паспорта учитывали требования законодательства и профессиональных стандартов</p>
        <div>
            <article>
                <div class="w-30">
                    <img src="https://source.unsplash.com/random/200x200?sig={{rand(0, 1000)}}" alt="">
                </div>
                <h4>Павел Зайцев</h4>
                <p>начальник отдела отчетности об исполнении бюджетов Управления бюджетного учета и отчетности Федерального казначейства</p>
                <div>Бухгалтерия</div>
            </article>
            <article>
                <div class="w-30">
                    <img src="https://source.unsplash.com/random/200x200?sig={{rand(0, 1000)}}" alt="">
                </div>
                <h4>Алексей Сосновский</h4>
                <p>начальник отдела бухгалтерского учета и отчетности Министерства финансов Архангельской области</p>
                <div>Бухгалтерия</div>
            </article>
            <article>
                <div class="w-30">
                    <img src="https://source.unsplash.com/random/200x200?sig={{rand(0, 1000)}}" alt="">
                </div>
                <h4>Юлия Казанцева</h4>
                <p>начальник финансово-экономического отдела ФКУ ЦНТЛ ФСИН России</p>
                <div>Бухгалтерия</div>
            </article>
        </div>
    </section>
    <section>
        <div>
            <h3>Цифровой паспорт ключевых навыков</h3>
            <p>Для каждого специалиста разрабатываем паспорт навыков и вектор карьерного роста</p>
            <p>Учитываем должность, специфику работы, размер и тип учреждения</p>
            <p>Паспорт ежемесячно показывает, какие компетенции начинают устаревать из-за прошедших изменений</p>
        </div>
        <div class="w-50">
            <img src="https://source.unsplash.com/random/200x200?sig={{rand(0, 1000)}}" alt="">
        </div>
    </section>
    <section>
        <h3>Новые программы в Школе Главбуха госучреждения в 2024</h3>
        <article>
            <div>Продвинутый •</div>
            <h4>Основные средства и материальные запасы: кейсы по приему имущества к бухучету</h4>
        </article>
        <article>
            <div>Продвинутый •</div>
            <h4>Специалист по внутреннему контролю в учреждении</h4>
        </article>
        <article>
            <div>Продвинутый •</div>
            <h4>Новая цифровая бухгалтерия в бюджетной сфере: планирование, отчетность, контроль</h4>
        </article>
        <article>
            <div>Базовый •</div>
            <h4>Безвозмездная передача имущества: учет у передающей и принимающей стороны в программе 1С</h4>
        </article>
        <article>
            <div>Продвинутый •</div>
            <h4>Главный бухгалтер госсектора (код В) - 2024</h4>
        </article>
        <article>
            <div>Продвинутый •</div>
            <h4>Бухгалтер госсектора (код А) - 2024</h4>
        </article>
    </section>
    <section>
        <h3>Пройдите промежуточный тест из аттестации главбухов</h3>
        <article>
            <div>1 вопрос из 3</div>
            <h4>Нужно ли включать положение о комиссии по поступлению и выбытию активов в учетную политику?</h4>
            <ol>
                <li><input type="radio">Да, обязательно</li>
                <li><input type="radio">Нет</li>
                <li><input type="radio">Затрудняюсь ответить</li>
            </ol>
            <button>Следующий вопрос</button>
        </article>
        <article>
            <div>2 вопрос из 3</div>
            <h4>Нужно ли включать положение о комиссии по поступлению и выбытию активов в учетную политику?</h4>
            <ol>
                <li><input type="radio">Да, обязательно</li>
                <li><input type="radio">Нет</li>
                <li><input type="radio">Затрудняюсь ответить</li>
            </ol>
            <button>Следующий вопрос</button>
        </article>
        <article>
            <div>3 вопрос из 3</div>
            <h4>Нужно ли включать положение о комиссии по поступлению и выбытию активов в учетную политику?</h4>
            <ol>
                <li><input type="radio">Да, обязательно</li>
                <li><input type="radio">Нет</li>
                <li><input type="radio">Затрудняюсь ответить</li>
            </ol>
            <button>Следующий вопрос</button>
        </article>
    </section>
</main>
</body>
</html>
