<?php
//184 Связывание таблиц в базах данных
/*
 * Нужно разбить нашу таблицу на две: в одной будут хранится города, а во второй - юзеры. При этом в таблице с юзерами будет колонка city_id, которая будет ссылаться на город юзера.

Итак, давайте сделаем две таблицы. Таблица с городами
 */
//185 Получении данных из связанных таблиц в PHP

//Команда LEFT JOIN

/*
 * SELECT поля FROM имя_таблицы
	LEFT JOIN имя_связанной_таблицы ON условие_связи
WHERE условие_выборки
 */

//1
/*
 * Пусть у вас есть таблица с товарами и таблица с их категориями.
 * Напишите запрос, который достанет названия товаров вместе с их категориями.
 */
//SELECT
//	cities.id as city_id, cities.name
//		as city_name, cities.country_id as city_country_id,
//	countries.id as country_id, countries.name as country_name
//FROM cities
//LEFT JOIN countries ON countries.id=cities.country_id