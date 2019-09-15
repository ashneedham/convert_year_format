<?php

$two_digit = 94;
$current_year = 2019;

$four_digit = (floor(($current_year - $two_digit) / 100) * 100) + $two_digit;

var_dump($two_digit, $four_digit);
// (int) 94   (float) 1994
