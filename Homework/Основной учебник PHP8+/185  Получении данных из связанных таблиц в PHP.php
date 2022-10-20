<?php
//
/*
 * SELECT поля FROM имя_таблицы
	LEFT JOIN имя_связанной_таблицы ON условие_связи
WHERE условие_выборки

Поля

//1
Пусть у вас есть таблица с товарами и таблица с их категориями. Напишите запрос, который достанет названия товаров вместе с их категориями


 */
//SELECT goods.name as tovar,Cartegory.name as Category1
//FROM goods
//LEFT JOIN Cartegory ON Cartegory.id_category=goods.id_cat