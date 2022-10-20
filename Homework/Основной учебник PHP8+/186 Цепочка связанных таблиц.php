<?php
//Цепочка связанных таблиц

//1 Пусть товары принадлежат определенной подкатегории, а подкатегории принадлежат определенной категории. Распишите структуру хранения.
//SELECT
//	users.name as user_name,
//        users.age as user_age,
//	cities.name as city_name,
//	countries.name as country_name
//FROM
//	users
//LEFT JOIN cities ON cities.id=users.city_id
//LEFT JOIN countries ON countries.id=cities.country_id

