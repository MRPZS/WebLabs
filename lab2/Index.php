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
