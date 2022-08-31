<?php
//1
/*
 * Дан список городов и их стран, хранящийся в следующей структуре:

[
	[
		'country' => 'Россия',
		'city' =>    'Москва',
	],
	[
		'country' => 'Беларусь',
		'city' =>    'Минск',
	],
	[
		'country' => 'Россия',
		'city' =>    'Питер',
	],
	[
		'country' => 'Россия',
		'city' =>    'Владивосток',
	],
	[
		'country' => 'Украина',
		'city' =>    'Львов',
	],
	[
		'country' => 'Беларусь',
		'city' =>    'Могилев',
	],
	[
		'country' => 'Украина',
		'city' =>    'Киев',
	],
]
Напишите код, которой переделает структуру данных вот в такую:
 */
$arr=[
    [
        'country' => 'Россия',
        'city' =>    'Москва',
    ],
    [
        'country' => 'Беларусь',
        'city' =>    'Минск',
    ],
    [
        'country' => 'Россия',
        'city' =>    'Питер',
    ],
    [
        'country' => 'Россия',
        'city' =>    'Владивосток',
    ],
    [
        'country' => 'Украина',
        'city' =>    'Львов',
    ],
    [
        'country' => 'Беларусь',
        'city' =>    'Могилев',
    ],
    [
        'country' => 'Украина',
        'city' =>    'Киев',
    ],
];
$result=[];
foreach ($arr as $sub) {
    $result[$sub["country"]][] = $sub['city'];
}
var_dump($result);

//2
/*
 * Дан список событий за определенные даты, хранящийся в следующей структуре:

[
	[
		'date'  => '2019-12-29',
		'event' => 'name1'
	],
	[
		'date'  => '2019-12-31',
		'event' => 'name2'
	],
	[
		'date'  => '2019-12-29',
		'event' => 'name3'
	],
	[
		'date'  => '2019-12-30',
		'event' => 'name4'
	],
	[
		'date'  => '2019-12-29',
		'event' => 'name5'
	],
	[
		'date'  => '2019-12-31',
		'event' => 'name6'
	],
	[
		'date'  => '2019-12-29',
		'event' => 'name7'
	],
	[
		'date'  => '2019-12-30',
		'event' => 'name8'
	],
	[
		'date'  => '2019-12-30',
		'event' => 'name9'
	],
]
Напишите код, которой переделает структуру данных вот в такую:

[
	'2019-12-29'=> ['name1', 'name3', 'name5',
		'name7'],
	'2019-12-30'=> ['name4', 'name8',
		'name9'],
	'2019-12-31'=> ['name2', 'name6'],
]
 */

$arr=[
    [
        'date'  => '2019-12-29',
        'event' => 'name1'
    ],
    [
        'date'  => '2019-12-31',
        'event' => 'name2'
    ],
    [
        'date'  => '2019-12-29',
        'event' => 'name3'
    ],
    [
        'date'  => '2019-12-30',
        'event' => 'name4'
    ],
    [
        'date'  => '2019-12-29',
        'event' => 'name5'
    ],
    [
        'date'  => '2019-12-31',
        'event' => 'name6'
    ],
    [
        'date'  => '2019-12-29',
        'event' => 'name7'
    ],
    [
        'date'  => '2019-12-30',
        'event' => 'name8'
    ],
    [
        'date'  => '2019-12-30',
        'event' => 'name9'
    ],
];
$result=[];
foreach ($arr as $item) {
    $result[$item['date']][]=$item['event'];
}
var_dump($result);

//3
/*
 * $arr=[
    [
        'date'  => '2019-12-29',
        'event' => 'name1'
    ],
    [
        'date'  => '2019-12-31',
        'event' => 'name2'
    ],
    [
        'date'  => '2019-12-29',
        'event' => 'name3'
    ],
    [
        'date'  => '2019-12-30',
        'event' => 'name4'
    ],
    [
        'date'  => '2019-12-29',
        'event' => 'name5'
    ],
    [
        'date'  => '2019-12-31',
        'event' => 'name6'
    ],
    [
        'date'  => '2019-12-29',
        'event' => 'name7'
    ],
    [
        'date'  => '2019-12-30',
        'event' => 'name8'
    ],
    [
        'date'  => '2019-12-30',
        'event' => 'name9'
    ],
];
$result=[];
foreach ($arr as $item) {
    $result[$item['date']][]=$item['event'];
}
var_dump($result);
 */
$arr=[
    '2019-12-29'=> ['name1', 'name2', 'name3',
        'name4'],
    '2019-12-30'=> ['name5', 'name6',
        'name7'],
    '2019-12-31'=> ['name8', 'name9'],
];
$result = [];
foreach ($arr as $date => $events) {
    foreach ($events as $event) {
        $result[] = [
            'date' => $date,
            'event' => $event
        ];
    }
}
print_r($result);