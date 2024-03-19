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
$mini = min($arr);
$maxi = max($arr);

echo "\n", rand(1, 100);
$arr = [];
for($i = 0; $i <= 9; $i++) {
    $ar[] = rand(1, 100);
}


