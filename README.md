# Описание проекта

## Инфо
*Сроком начала работы над тестовым заданием считаем дату отправки, на выполнение дается не более 7 календарных дней.*

Начата задача 8 сентября, закончена 10 сентября

*Вместе с результатом надо указать количество реально потраченных часов на выполнение.*

Реально потрачено: 
 - Разработка - 4 часа
 - Упаковывание в докер - 3 часа

*Результат выполнения нужно разместить в публичном репозиторий на битбакет или гитхаб.*

https://github.com/Lightsider/random_number

## Установка

После клонирования проекта, перейти в его директорию и запустить файл `start1.sh`.

Когда он отработает, запустить файл `start2.sh`. Иногда при его запуске возинкает ошибка соединения с базой, в таком случае необходимо запустить его заново. Со второго раза отрабатывал всегда


## Задание

***Реализовать REST API для генерации рандомного числа.***

*Для получения доступа к методам API нужно реализовать механизм авторизации(временные токены, предварительная регистрация + выдача ключей, OAuth или еще что-то).*

Использован пакет Laravel Passport и сделана выдача токена доступа к API при регистрации либо входе пользователя. При логауте последний токен забывается.

*Каждой генерации присваивать уникальный id по которому можно получить результат генерации.*

Реализован с помощью встроенной функции случайной строки и проверки на существование такой. Поле `unique_id`.

*Должны быть доступны 2 публичных API метода generate() и retrieve(id).*

Оба метода реализованы, доступны по пути `/api/METHOD/{ID}`

*Также, нужно настроить работу проекта в docker (разрешено использовать docker-compose) для возможность быстро развернуть локально проект.*

Подробнее в разделе `развертывание`

***Требования к выполнению тестового задания:***
  
  - mysql + php 7 и выше + любой актуальный php framework (symfony, laravel, yii2) - использован Laravel, PHP 7.4 и MariaDB
  - комментарии в коде - приложение достаточно маленькое и несложное, чтобы отдельно описывать в комментария логику работы. PHPDoc используется
  
***Будет плюсом и зачтется:***
- написание простого фронтенда, которое будет работать с реализованным API - реализован стандартный фронтенд с кнопками для работы с API

- написание тестов - не реализовано
