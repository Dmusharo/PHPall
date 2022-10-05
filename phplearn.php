<?php
//$str = 'ahb acb aeb aeeb adcb axeb';
//echo preg_replace('#a.b#', '!', $str);
//echo "<br>";
//$st = 'ahb acb aeb aeeb adcb axeb';
//echo preg_replace('#a..b#', '!', $st);
//echo "<br>";
//$strs = 'aa aba abba abbba abca abea';
//echo preg_replace('#ab+a#', '!', $strs);
//echo "<br>";
//$st2 = 'aa aba abba abbba abca abea';
//echo preg_replace('#ab*a#', '!', $st2);
//echo "<br>";
//$st4 = 'ab abab abab abababab abea';
//echo preg_replace('#(ab)+#', '!', $st4);
//echo "<br>";
//$st5 = 'a+x ax aax aaax';
//echo preg_replace('#a\+x#', '!', $st5); // екранування рядка
//echo "<br>";
//$ut = '23 2+3 2++3 2+++3 345 567';
//echo preg_replace('#2(\+)+3#', '!', $ut);
//echo "<br>";
//$ut2 = '23 2+3 2++3 2+++3 445 677';
//echo preg_replace('#2(\+)*3#', '!', $ut2);
//echo "<br>";
//$ut5 = 'aa aba abba abbba abbbba abbbbba';
//echo preg_replace( '#ab{1,3}a#', '!', $ut5);
//echo "<br>";
//$str4 = 'aba accca azzza wwwwa';
//echo preg_replace( '#a.+?a#', '!', $str4);
//echo "<br>";
//$str4 = 'aba accca azzza wwwwa';
//echo preg_replace( '#a.+?a#', '!', $str4);
//echo "<br>";
//$str44 = 'aa a1a a22a a333a a4444a a55555a aba aca';
//echo preg_replace( '#a\d*a#', '!', $str44);
//echo "<br>";
//$str454 = 'aXAa aeffa aGha aza ax23a a3sSa';
//echo preg_replace( '#a[a-z0-9]*a#', '!', $str454);
//echo "<br>";
//$str9 = 'ааа ббб єєє ззз ййй ААА БББ ЗЗЗ';
//echo preg_replace( '#[а-я]+#u', '!', $str9);
//echo "<br>";
//$stt = 'xaz x.z x3z x@z x$z xrz';
//echo preg_replace( '#x[^.^@^$]z#', '!', $stt);

//class Car
//{
//    const WHEELS = 4;
//    public $color;
//    public function test()
//    {
//        echo $this->color;
//        echo self::WHEELS;
//    }
//}
//
//class Bicycle
//{
//    const WHEELS = 2;
//
//    public function test()
//    {
//        echo self::WHEELS;
//    }
//}
//
//$car1 = new Car;
//$car1->color='white';
//$car1->test();
//$car2 = new Bicycle;
//$car2->test();

class Engine {
    public static $engine = 1;
    public static function whatlslt(){
        echo "В авто присутні різні типу двигунів";
    }
    public function test(){
        echo self::$engine;
        self::whatlslt();
    }
}
//echo Engine::$engine;
//Engine::whatlslt();
$cars = new Engine();
$cars->test();
