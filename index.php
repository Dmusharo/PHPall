
<?php
$str =$arr = [ '30-11-1995', '29-10-1990','31-12-2025' ];
$str=null;
foreach ($arr as $elem=>$key)
{
    $str.=$key.' ';
}
echo '<br>'. $str . '<br>';
preg_match_all('#(?<days>\d{2})-(?<month>\d{2})-(?<years>19(9\d)|20([0-9]\d))#',$str,$res);
print_r ($res[1]);
echo '<br>';
print_r ($res[2]);
echo '<br>';
print_r ($res[3]);
