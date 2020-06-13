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
    isset($m), //true
    isset($n), //true
);
