<?php

$number = 15;
$hex = 0x00000f;
$binary = 0b1111;
$exponential = 0.123456e3;

var_dump(
    $number === $number,  // true
    $hex === $number,            // true
    $hex === $binary,               // true
    $exponential === 123.456        // true
);

/**
 * Naming
 *
 * - case sensitive
 * - letters, numbers, underscore
 * - begining not with a number ($123)
 *
 */
