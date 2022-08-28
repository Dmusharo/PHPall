<?php
//Функции для массивов в PHP
$arr = [1, 2, 3, 4, 5];
echo in_array("3", $arr);
//
//Работа с array_sum и array_product
//2 Найдите сумму элементов данного массива.
$arr = [1, 2, 3, 4, 5];
echo array_sum($arr);
//3 Найдите произведение (умножение) элементов данного массива.
echo array_product($arr);
//4 С помощью функций array_sum и count найдите среднее арифметическое элементов (сумма элементов делить на их количество) данного массива.
$arr = [1, 2, 3, 4, 5];
echo(array_sum($arr) / count($arr));
//5 Работа с range
// Работа с range
var_dump(range(1, 100, 10));
// 6 Создайте массив, заполненный буквами от 'a' до 'z'.
var_dump(range("a", "z"));
//7  Создайте строку '1-2-3-4-5-6-7-8-9' не используя цикл
$arr = range(1, 9);
echo implode("-", $arr);
//8 Найдите сумму чисел от 1 до 100 не используя цикл.
$arr = range(1, 100);
echo array_sum($arr);
//9 Найдите произведение чисел от 1 до 10 не используя цикл.
$arr = range(1, 10);
echo array_product($arr);

//10 array_merge
$arr1 = [1, 2, 3];
$arr2 = ['a', 'b', 'c'];
var_dump(array_merge($arr1,$arr2));

//11 Работа с array_slice
$arr = [1, 2, 3, 4, 5];
var_dump(array_slice($arr,1,3));
//12 array_splice
$arr = [1, 2, 3, 4, 5];
var_dump(array_splice($arr,1,3));
var_dump($arr);

//13
$arr = [1, 2, 3, 4, 5];
$arr=array_splice($arr,1,3);
var_dump($arr);

//14
$arr = [1, 2, 3, 4, 5];
$arr1=range("a","c");
$arr2=array_slice($arr,0,3);
$arr3=array_splice($arr,3,2);
var_dump(array_merge($arr2,$arr1,$arr3));

$arr = [1, 2, 3, 4, 5];
$result=array_splice($arr,3,0,["a","b","c"]);
var_dump ($arr);

//15
/*
 * <?php
	$arr = [1, 2, 3, 4, 5];
?>
С помощью функции array_splice сделайте из него следующий массив:

<?php
	[1, 'a', 'b', 2, 3, 4, 'c',  5,
		'e']
?>
 */
$arr = [1, 2, 3, 4, 5];
$result=array_splice($arr,1,0,["a","b"] );
$result2=array_splice($arr,9,0,["d"] );
$result1=array_splice($arr,-2,0,["c"] );
var_dump($arr);

//16
/*
 * <?php
	$arr = ['a' => 1, 'b' => 2, 'c'
		=> 3];
?>
Запишите в массив $keys ключи из этого массива, а в $values – значения.
 */

$arr = ['a' => 1, 'b' => 2, 'c'=> 3];
$keys=array_keys($arr);
$values=array_values($arr);
var_dump($keys)."\n";
var_dump($values);

//17
/*
 * <?php
	$arr1 = ['a', 'b', 'c'];
	$arr2 = [1, 2, 3];
?>
Создайте с их помощью следующий массив:

<?php
	['a' => 1, 'b' => 2, 'c' => 3]
?>
 */
$arr1 = ['a', 'b', 'c'];
$arr2 = [1, 2, 3];

var_dump(array_combine($arr1,$arr2));

//18 Работа с array_flip, array_reverse  Поменяйте в нем местами ключи и значения.

$arr = ['a' => 1, 'b' => 2, 'c' => 3];
var_dump(array_flip($arr));

//19
$arr = [1, 2, 3, 4, 5];
var_dump(array_reverse($arr));

//20
$arr = ['a', '-', 'b', '-', 'c',
    '-', 'd'];
var_dump(array_search("-",$arr));

//21
/*
 * <?php
	$arr = ['a', '-', 'b', '-', 'c',
		'-', 'd'];
?>
Найдите позицию первого элемента '-' и удалите его с помощью функции array_splice.
 */
$arr = ['a', '-', 'b', '-', 'c', '-', 'd'];
$arr1=(array_splice($arr,array_search("-",$arr),1));
var_dump($arr);

//22  Работа с array_replace
/*
 * <?php
	$arr = ['a', 'b', 'c', 'd', 'e'];
?>
Поменяйте элемент с ключом 0 на '!', а элемент с ключом 3 - на '!!'.
 */
$arr = ['a', 'b', 'c', 'd', 'e'];
$result=array_replace($arr,[0=>"!",3=>"!!"]);
var_dump($result);

//Работа с сортировку
/*
 * <?php
	$arr = ['3'=>'a', '1'=>'c', '2'=>'e',
		'4'=>'b'];
?>
Попробуйте на нем различные типы сортировок.
 */
//23
$arr = ['3'=>'a', '1'=>'c', '2'=>'e', '4'=>'b'];
rsort($arr);
ksort($arr);
var_dump($arr);

//24 Выведите на экран случайный ключ из данного массива.

$arr = ['a' => 1, 'b' => 2, 'c'=> 3];
echo array_rand($arr);

//25 Выведите на экран случайный элемент данного массива.
$arr = ['a' => 1, 'b' => 2, 'c'=> 3];
$key=array_rand($arr);
echo $arr[$key];

//26  Работа с shuffle
/*
 * <?php
	$arr = [1, 2, 3, 4, 5];
?>
Перемешайте его элементы в случайном порядке
 */

$arr = [1, 2, 3, 4, 5];
shuffle($arr);
var_dump($arr);

//27
//Заполните массив числами от 1 до 25 с помощью range, а затем перемешайте его элементы в случайном порядке.
$arr=range(1,25);
shuffle($arr);
var_dump($arr);

//28  Создайте массив, заполненный буквами от 'a' до 'z' так, чтобы буквы шли в случайном порядке и не повторялись.
$arr=range("a","z");
shuffle($arr);
var_dump($arr);

//29 Сделайте строку длиной 6 символов, состоящую из маленьких английских букв, расположенных в случайном порядке. Буквы не должны повторяться.
$arr=range("a","z");
shuffle($arr);
$result=array_splice($arr,6,6);
echo implode($result);

//30 Работа с array_unique
/*
 * <?php
	$arr = ['a', 'b', 'c', 'b', 'a'];
?>
Удалите из этого массива повторяющиеся элементы.
 */
$arr = ['a', 'b', 'c', 'b', 'a'];
var_dump(array_unique($arr));

//31 Начало и конец массива
/*
 * <?php
	$arr = [1, 2, 3, 4, 5];
?>
Выведите на экран его первый и последний элемент, причем так, чтобы в исходном массиве они исчезли.
 */
$arr = [1, 2, 3, 4, 5];
echo array_shift($arr)." ".array_pop($arr);
var_dump($arr);

//32 Добавьте ему в начало элемент 0, а в конец - элемент 6.
$arr = [1, 2, 3, 4, 5];
array_unshift($arr,0);
array_push($arr,6);
var_dump($arr);

//33
/*
 * Изучите теорию по следующим ссылкам:

array_pad array_fill array_fill_keys
<?php
	$arr = ['a', 'b', 'c'];
?>
Сделайте из него следующий массив:

<?php
	['a', 'b', 'c', '-', '-', '-']
?>
 */
$arr = ['a', 'b', 'c'];
$result=array_pad($arr,6,"-");
var_dump($result);

//34 Заполните массив 10-ю буквами 'x'.
$arr=[];
$result=array_pad($arr,10,"x");
var_dump($result);

//35 array_chunk
//Создайте массив, заполненный целыми числами от 1 до 20.
// С помощью функции array_chunk разбейте этот массив на 5 подмассивов по пять элементов в каждом.
$arr=range(1,20);
$result=array_chunk($arr,5);
var_dump($result);

//36 Работа с array_count_values
/*
 * <?php
	$arr = ['a', 'b', 'c', 'b', 'a'];
?>
Подсчитайте сколько раз встречается каждая из букв.
 */
$arr = ['a', 'b', 'c', 'b', 'a'];
var_dump(array_count_values($arr));

//37 Работа с array_map
$arr = [1, 2, 3, 4, 5];
$result = array_map('sqrt', $arr);
var_dump($result);

//38 Работа с array_intersect, array_diff
/*
 * <?php
	$arr1 = [1, 2, 3, 4, 5];
	$arr2 = [3, 4, 5, 6, 7];
?>
Запишите в новый массив элементы, которые есть и в том, и в другом массиве.
 */
$arr1 = [1, 2, 3, 4, 5];
$arr2 = [3, 4, 5, 6, 7];
$result=array_intersect($arr1,$arr2);
var_dump($result);

//39
//Запишите в новый массив элементы, которые не присутствуют в обоих массивах одновременно.
$arr1 = [1, 2, 3, 4, 5];
$arr2 = [3, 4, 5, 6, 7];
$result=array_diff($arr2,$arr1);
$result1=array_diff($arr1,$arr2);
var_dump(array_merge($result1,$result));


?>




