<?php

$number = 15;
$hex = 0x00000f;
$binary = 0b1111;
$exponential = 0.123456e3;

//var_dump(
//    $number === $number,  // true
//    $hex === $number,            // true
//    $hex === $binary,               // true
//    $exponential === 123.456        // true
//);

/**
 * Naming
 *
 * - case sensitive
 * - letters, numbers, underscore
 * - begining not with a number ($123)
 *
 */

/**
 * Setting
 */
$b = null;
$c = '';
$d = "";
$e = 0;
$f = 1;
$g = '0';
$h = '1';
$i = true;
$j = false;
$k = 'true';
$l = 'false';


var_dump(
    isset($a), //false
    isset($b), //false
    isset($c), //true
    isset($d), //true
    isset($e), //true
    isset($f), //true
    isset($g), //true
    isset($h), //true
    isset($i), //true
    isset($j), //true
    isset($k), //true
    isset($l), //true
);