<?php


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
$m = [];
$n = new \stdClass();

var_dump(
    empty($a), //true
    empty($b), //true
    empty($c), //true
    empty($d), //true
    empty($e), //true empty(0) !!!!!!!!
    empty($f), //false
    empty($g), //true empty('0') !!!!!!!!
    empty($h), //false
    empty($i), //false
    empty($j), //true empty(false) !!!!!!!!!!
    empty($k), //false
    empty($l), //false
    empty($m), //true
    empty($n), //false
);