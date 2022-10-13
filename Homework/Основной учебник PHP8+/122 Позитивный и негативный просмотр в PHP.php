<?php
// Позитивный и негативный просмотр в PHP
// (?=x)  -- позитивный  вперед. (?!х) - негативный вперед

/*
 * Аналогичным образом есть позитивный просмотр назад - (?<= ). В следующем примере замена произойдет, только если перед 'aaa' стоит 'x':

<?php
	preg_replace('#(?<=x)aaa#', '!', 'xaaa'); // вернет 'x!'
?>
И есть также негативный просмотр назад - (?<! ). В следующем примере замена произойдет, только если перед 'aaa' не стоит 'x':

<?php
	preg_replace('#(?<!x)aaa#', '!', 'baaa'); // вернет 'b!'
?>
 */

//1
// Получите массив имен функций из строки.
$str = 'func1() func2() func3()';
$str1=preg_replace("#(?<=....)\(\)#",'',$str);
var_dump(explode(' ',$str1));

//1 second variant
$str='func1() func2() func3()';
preg_match_all('#(func\d)#',$str,$matches);
print_r($matches);

//2 Получите массив имен атрибутов этого тега.
$str = '<a href="" class="eee" id="zzz">';
$str1=null;
preg_match_all('#\w+\=\"\w*\"#', $str, $res); //найти только атрибуты
foreach ($res as $elem)   // из массива в строку
{
    foreach ($elem as $key=>$value){
        $str1.=$value.' ';
    }
}
echo $str1;// выведет href="" class="eee" id="zzz"


//3
//Получите массив имен переменных из этой строки (без доллара).

$str = '$aaa $bbb $ccc';
var_dump( preg_replace('#\$(?=[a-z]+)#', '', $str));

