<?php
//1
/* Imagine a lot of code here */ 
 $very_bad_unclear_name = "15 chicken wings";

 $order = & $very_bad_unclear_name; 
 $order .= " is my dinner";

 // Don't change the line below
 echo "\nYour order is: $very_bad_unclear_name.";

//2
$variable = 1;
echo "$variable";
echo "\n";
$float = 0.1;
echo "$float";
echo "\n";
$sum = $variable + 11;
echo $sum;
echo "\n";
$last_month = 1187.23;
$this_month = 1089.98;
echo $this_month - $last_month;
echo "\n";

//11
$num_languages = 4;
$months = 11;
$days = $months * 16;
$days_per_language = $days / $num_languages;
echo $days_per_language;
echo "\n";

//12
echo 8**2, "\n";

//13
$my_num = 3.14;
$answer = $my_num;
$answer += 2;
$answer *= 2;
$answer -= 2;
$answer /= 2;
$answer -= $my_num;
echo $answer;
echo "\n";

//14
$a = 10;
$b = 3;
$mod = $a % $b;

if ($mod == 0)
    echo "Делится";
else
    echo "Делится с остатком. Остаток: ", $mod;

$p = pow(2,10);
echo "\n", $p;

$s = sqrt(245);
echo "\n", $s;

$arr = [4, 2, 5, 19, 13, 0, 10];
$sum = 0;
foreach ($arr as $var) {
    $sum += $var ** 2;
}
$root = sqrt($sum);
echo "\n", $root;

echo "\n", round(sqrt(379));
echo "\n", round(sqrt(379, 1));
echo "\n", round(sqrt(379, 2));

$root = sqrt(587);
$round =  Array('floor' => floor($root),  'ceil' => ceil($root));

$arr = [4, -2, 5, 19, -130, 0, 10];
$min = min($arr);
$max = max($arr);

echo "\n", rand(1, 100);
echo "\n";

$arr = [];
for ($i = 0; $i < 10; $i++) {
     $arr[$i] = rand(1, 100);
     echo $arr[$i], ", ";
}


$a = 1;
$b = 100;
echo "\n", "Модуль разности равен: ", abs($a - $b);
echo "\n";

$arr = [1, 2, -1, -2, 3, -3];
for ($i = 0; $i < 6; $i++) {
     $arr[$i] = abs($arr[$i]);
     echo $arr[$i], ", ";
}
echo "\n";

$num = 30;
$arr = [];
for ($i = 1; $i <= $num / 2 + 1; $i++) {
     if (0 === $num % $i ) {
         $arrDiv[$i] = $i;
         echo $i;
    }  
}
echo "\n";

$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$sum = 0;
$i = 0;
while ($sum <= 10) {
       $sum += $arr[$i];
       $i += 1;
}
echo $i;
echo "\n";

//15
function printStringReturnNumber($string)
{
    echo $string;
    return 15;
}
$my_num = printStringReturnNumber("some string");
echo "\n", $my_num;
echo "\n";

//16
function increaseEnthusiasm($string)
{
    $string .= "!";
    return $string;
}
$my_str = increaseEnthusiasm("im so lazy");
echo $my_str;

function repeatThreeTimes($string) {
    return $string . $string. $string;
}
echo "\n", repeatThreeTimes("Nothing");
echo "\n", increaseEnthusiasm(repeatThreeTimes("Nothing"));
echo "\n";

function cut($string, $len = 10) {
    return substr($string, 0, $len);
}
echo cut("HaHaHaHaHaA");

$arr = [1, 2, 3, 4];
function recursiveOutput($arr, $i = 0) {
	echo"\n", $arr[$i];
    if ($i + 1 != sizeof($arr)){
        recursiveOutput($arr, $i + 1);}
}
recursiveOutput($arr);

function sumOfDigits($var){
    $sum = 0;
    while (0 < $var)
    {
        $sum += $var % 10;
        $var = (int)($var / 10);
    }
    if (9 < $sum)
    {
        return sumOfDigits($sum);
    }
    return $sum;
}
$x = sumOfDigits(156);
echo "\n",$x;
echo "\n";

//17
function X(string $str, int $num): array //arr x xx xxx xxx etc.
{
    $arr = [];
    for ($i = 1; $i <= $num; $i++) {
        $arr[$i] = str_repeat($str, $i);
    }
    return $arr;
}	
echo "\n";
foreach (x("x", 5) as $value) echo "$value ";

function arrayFill(string $str, int $num): array 
{
    return str_split(str_repeat($str, $num), strlen($str));
}
echo "\n";
foreach (arrayFill("x", 10) as $value) echo "$value ";

$DoubleArray = [[1, 2, 3], [4, 5], [6]]; //sum 2d array
function sumOfArray(array $arr): int
{
    $sum = 0;
    foreach ($arr as $subArray) {
        foreach ($subArray as $value) {
            $sum += $value;
        }
    }
    return $sum;
}
echo "<br />Сумма чисел в двумерном массиве: " . sumOfArray($DoubleArray);

$2dArr = []; 
$Count = 1;
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        $2dArr[$i][$j] = $Count++;
    }
}

$Array = [2, 5, 3, 9]; 
$result = $Array[0] * $Array[1] + $Array[2] * $Array[3];
echo "\n", "Итоговое значение: ", $result;

$user = ["name" => "Ilya", "surname" => "Myznikov", "patronymic" => "Olegovich"];
echo "\n";
echo $user["name"] . ' ' . $user["surname"] . ' ' . $user["patronymic"] . ' ';

$date = ["year" => "2024", "month" => "Octember", "day" => "18"];
echo "\n";
echo $date["year"] . ' ' . $date["month"] . ' ' . $date["day"] . ' ';

$arr = ['a', 'b', 'c', 'd', 'e'];
echo "\n", "Количество элементов: " . count($arr);
echo "\n", "Последний элемент: " . end($arr);
echo "\n", "Предпоследний: " . prev($arr);
echo "\n";

//18
function sum10(int $a, int $b): bool
{
    if ($a + $b > 10)
    {
        return True;
    }
    else return False;
}

function equ(int $a, int $b): bool
{
    if ($a == $b)
    {
        return True;
    }
    else return False;
}

$test = 1;
if ($test == 0) echo 'Верно';

$age = 18;
if ($age < 10 || $age > 99)
{
    echo "\n", "Возраст <10 или >99. Лего Вам не собрать. ";
}
else
{
    $sum = array_sum(str_split($age));
    if ($sum <= 9)
    {
        echo "\n", "Сумма цифр однозначна. ";
    }
    else echo "\n", "Сумма цифр двузначна. ";
}

$arr = [23, 48, 69];
if (count($arr) == 3) {
    $sum = array_sum($arr);
    echo "\n", "Сумма эл-тов: $sum";
}

//task 19
function Triangle(): void // x xx xxx xxx pyramid
{
    $str = 'x';
    $num = 20;
    $arr = [];
    for ($i = 1; $i <= $num; $i++) {
        $arr[$i] = str_repeat($str, $i);
        echo "\n" , $arr[$i];
    }
}
Triangle();

//task 20
$arr = [21, 23, 69, 45, 56];
$avg = array_sum($arr) / count($arr);
echo "\n", "Среднее арифметическое: $avg";

$number = 100;
$sum = $number * 50 + 50;
echo "\n", "Сумма чисел: $sum";

$arr = [4, 9, 16, 25, 36, 49, 64, 81];
$res = array_map('sqrt', $arr);
echo "\n", "Массив с корнями: ";
foreach($res as $value) echo "$value ";

$arr = array_combine(range('a', 'z'), range(1, 26));
echo "\n", "Буква-номер: ";
foreach ($arr as $letter => $num) echo "<br />$letter - $num";;

$string = '1234567890';
echo "<br />Сумма пар: " . array_sum(str_split($string, 2));
