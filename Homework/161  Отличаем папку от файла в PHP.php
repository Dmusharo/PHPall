<?php
////Пусть дан путь. Если путь ведет к папке выведите сообщение об этом
//$path='Homework/159 Операции над папками в PHP/test/1.txt';
//var_dump(is_file($path));
//var_dump(is_dir($path));
////1-q2
//$path='Homework/159 Операции над папками в PHP/test';
//var_dump(is_file($path));
//var_dump(is_dir($path));

//Разбираем содержимое папки
/*
 * <?php
	$dir = 'dir';
	$files = array_diff(scandir($dir), ['..', '.']);

	foreach ($files as $file) {
		$path = $dir. '/' . $file; // путь к файлу

		if (is_file($path)) {
			echo file_get_contents($path);
		}
	}
?>
 */

//3 Дана папка. Выведите на экран столбец имен подпапок из этой папки.
$dir='Homework/159 Операции над папками в PHP';
$files=array_diff(scandir($dir),['..','.']);
//foreach ($files as $file) {
// $path=$dir.'/'.$file; //путьк к папке
//    if(is_file($path)) {
//        echo file_get_contents($path);
//    }
//}
//echo '<pre>';
//var_dump(($files));
//echo '<pre>';
foreach ($files as $file) {
    $file.=$file.date("Y-m-d-H-i-s");
    echo $file.'<br>';

}

