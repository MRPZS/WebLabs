<?php
$str = 'a1b2c3';
$regexp = '/\d/';
preg_match_all($regexp, $str, $matches);
foreach ($matches[0] as $num) {
	$str = str_replace($num, strval(intval($num) ** 3), $str);
}
echo $str;
