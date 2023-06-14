@extends("layouts.layout")

@section("content")
    <style>
        .docs {
            max-width: 1200px;
            margin: auto;
            display: flex;
            flex-direction: column;
        }

        .docs__item {
            position: relative;
            margin-bottom: 20px;
        }

        .doc {
            padding: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;

            border: 1px solid black;
            border-radius: 10px;
        }

        .doc__title {
            margin: 0;
        }

        .doc__date {
            margin: 0;
        }

        .doc__buttons {
            display: flex;
        }

        .doc__button {
            margin-left: 20px;
            margin-top: 10px;
            margin-bottom: 10px;
        }

        .button {
            align-self: flex-start;
        }

        .docs__label {
            font-size: 20px;
            position: relative;
        }

        .docs__input:focus {
            outline: none;
        }

        .docs__input {
            padding-left: 20px;
            margin: 10px 0;

            font-size: 18px;

            border: none;
            font-family: 'Montserrat', sans-serif;
            border-bottom: 1px solid black;
        }

        .docs__label::before {
            content: "";
            width: 20px;
            height: 20px;
            position: absolute;
            top: 12px;
            left: 0;

            background-size: contain;
            background-image: url({{asset("img/search.svg")}});
        }

        .docs__main {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
    </style>

    <section class="docs">
        <div class="docs__main">
            <h2 class="docs__title">
                Дополнительные материалы
            </h2>
        </div>

        <ul class="docs__list">
            <li class="docs__item doc">
                <h3 class="doc__title">Презентация по теме "ООП"</h3>
                <p class="doc__type">Презентация</p>
                <div class="doc__buttons">
                    <a href="{{asset("public/1.1.pptx")}}" class="doc__button button">Открыть</a>
                </div>
            </li>
        </ul>
        <ul class="docs__list">
            <li class="docs__item doc">
                <h3 class="doc__title">Презентация по теме "Типы данных в Java"</h3>
                <p class="doc__type">Презентация</p>
                <div class="doc__buttons">
                    <a href="{{asset("public/2.1.ppt")}}" class="doc__button button">Открыть</a>
                </div>
            </li>
        </ul>
        <ul class="docs__list">
            <li class="docs__item doc">
                <h3 class="doc__title">Презентация по теме "Конструкторы класса, перегрузки метода"</h3>
                <p class="doc__type">Презентация</p>
                <div class="doc__buttons">
                    <a href="{{asset("public/3.2.pptx")}}" class="doc__button button">Открыть</a>
                </div>
            </li>
        </ul>
        <ul class="docs__list">
            <li class="docs__item doc">
                <h3 class="doc__title">Презентация по теме "Управляющие конструкции"</h3>
                <p class="doc__type">Презентация</p>
                <div class="doc__buttons">
                    <a href="{{asset("public/2.4.pptx")}}" class="doc__button button">Открыть</a>
                </div>
            </li>
        </ul>
        <ul class="docs__list">
            <li class="docs__item doc">
                <h3 class="doc__title">Презентация по теме "Статические элементы.Спецификатор final."</h3>
                <p class="doc__type">Презентация</p>
                <div class="doc__buttons">
                    <a href="{{asset("public/3.4.pptx")}}" class="doc__button button">Открыть</a>
                </div>
            </li>
        </ul>
        <ul class="docs__list">
            <li class="docs__item doc">
                <h3 class="doc__title">Презентация по теме "Обработка строк. Класс String."</h3>
                <p class="doc__type">Презентация</p>
                <div class="doc__buttons">
                    <a href="{{asset("public/4.1.ppt")}}" class="doc__button button">Открыть</a>
                </div>
            </li>
        </ul>
        <ul class="docs__list">
            <li class="docs__item doc">
                <h3 class="doc__title">Презентация по теме "Классы и интерфейсы ввода/вывода Java."</h3>
                <p class="doc__type">Презентация</p>
                <div class="doc__buttons">
                    <a href="{{asset("public/4.2.1.pptx")}}" class="doc__button button">Открыть</a>
                </div>
            </li>
        </ul>
        <ul class="docs__list">
            <li class="docs__item doc">
                <h3 class="doc__title">Презентация по теме "Наследование."</h3>
                <p class="doc__type">Презентация</p>
                <div class="doc__buttons">
                    <a href="{{asset("public/3.5.pptx")}}" class="doc__button button">Открыть</a>
                </div>
            </li>
        </ul>
        <ul class="docs__list">
            <li class="docs__item doc">
                <h3 class="doc__title">Презентация по теме "Апплеты, обработка исключительных ситуаций."</h3>
                <p class="doc__type">Презентация</p>
                <div class="doc__buttons">
                    <a href="{{asset("public/5.1.ppt")}}" class="doc__button button">Открыть</a>
                </div>
            </li>
        </ul>
        <ul class="docs__list">
            <li class="docs__item doc">
                <h3 class="doc__title">Презентация по теме "Основы Java и JavaScript в документах HTML."</h3>
                <p class="doc__type">Презентация</p>
                <div class="doc__buttons">
                    <a href="{{asset("public/5.2.pptx")}}" class="doc__button button">Открыть</a>
                </div>
            </li>
        </ul>
        <ul class="docs__list">
            <li class="docs__item doc">
                <h3 class="doc__title">Презентация по теме "Java и взаимодействия между апплетами."</h3>
                <p class="doc__type">Презентация</p>
                <div class="doc__buttons">
                    <a href="{{asset("public/5.3.pptx")}}" class="doc__button button">Открыть</a>
                </div>
            </li>
        </ul>
        <ul class="docs__list">
            <li class="docs__item doc">
                <h3 class="doc__title">Презентация по теме "Создание приложение «клиент-сервер»."</h3>
                <p class="doc__type">Презентация</p>
                <div class="doc__buttons">
                    <a href="{{asset("public/6,3.ppt")}}" class="doc__button button">Открыть</a>
                </div>
            </li>
        </ul>
        <ul class="docs__list">
            <li class="docs__item doc">
                <h3 class="doc__title">Презентация по теме "Основы XML и взаимодействие XML-Java-JavaScript.."</h3>
                <p class="doc__type">Презентация</p>
                <div class="doc__buttons">
                    <a href="{{asset("public/6,2.ppt")}}" class="doc__button button">Открыть</a>
                </div>
            </li>
        </ul>
        <ul class="docs__list">
            <li class="docs__item doc">
                <h3 class="doc__title">Презентация по теме "Использование Java Beans в других средах."</h3>
                <p class="doc__type">Презентация</p>
                <div class="doc__buttons">
                    <a href="{{asset("public/6.4.pptx")}}" class="doc__button button">Открыть</a>
                </div>
            </li>
        </ul>
        <ul class="docs__list">
            <li class="docs__item doc">
                <h3 class="doc__title">Тестовое задание по теме "Наследование"</h3>
                <p class="doc__type">Тестовое задание</p>
                <div class="doc__buttons">
                    <a href="https://docs.google.com/forms/d/e/1FAIpQLScRPFjBHyDyDIpoN2cIiITmWHaTsmE3F4OTHvdLf3hnzdbAOg/viewform" class="doc__button button">Открыть</a>
                </div>
            </li>
        </ul>
         <ul class="docs__list">
            <li class="docs__item doc">
                <h3 class="doc__title">Тестовое задание по теме "Методы и классы"</h3>
                <p class="doc__type">Тестовое задание</p>
                <div class="doc__buttons">
                    <a href="https://docs.google.com/forms/d/e/1FAIpQLSf18pMtkG9ERkbZ2RtW_WVG8eV5xojdSBHWDpyCD8qQ6Uf1Lg/viewform" class="doc__button button">Открыть</a>
                </div>
            </li>
        </ul>
        <ul class="docs__list">
            <li class="docs__item doc">
                <h3 class="doc__title">Контроль знаний по теме "Массивы"</h3>
                <p class="doc__type">Игровое задание</p>
                <div class="doc__buttons">
                    <a href=" https://learningapps.org/view21642217" class="doc__button button">Открыть</a>
                </div>
            </li>
        </ul>
        <ul class="docs__list">
            <li class="docs__item doc">
                <h3 class="doc__title">Контроль знаний по теме "Ветвления"</h3>
                <p class="doc__type">Игровое задание</p>
                <div class="doc__buttons">
                    <a href="https://learningapps.org/view23695580" class="doc__button button">Открыть</a>
                </div>
            </li>
        </ul>
        <ul class="docs__list">
            <li class="docs__item doc">
                <h3 class="doc__title">Контроль знаний по теме "Вычисления в массивах"</h3>
                <p class="doc__type">Игровое задание</p>
                <div class="doc__buttons">
                    <a href="https://learningapps.org/view24024664" class="doc__button button">Открыть</a>
                </div>
            </li>
        </ul>
        <ul class="docs__list">
            <li class="docs__item doc">
                <h3 class="doc__title">Контроль знаний по теме "Принципы ООП"</h3>
                <p class="doc__type">Игровое задание</p>
                <div class="doc__buttons">
                    <a href=" https://learningapps.org/view10160041" class="doc__button button">Открыть</a>
                </div>
            </li>
        </ul>
       
    </section>
@endsection
