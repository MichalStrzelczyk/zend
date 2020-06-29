<?php

namespace a\B\c;

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
 */
// variables
// - case sensitive
// - letters, numbers, underscore
// - beginning not with a number ($123)

$This_is_variable = 1;
$THIS_IS_VARIABLE = 1;


// functions
// - case insensitive
// - letters, numbers, underscore
// - beginning not with a number ($123)

function thisIsAFunction(){
    echo 'Test';
}

thisIsAFunction(); // Test
ThisIsAFunction(); // Test
THISISAFUNCTION(); // Test

function test_123(){
    echo '123';
}

test_123(); // 123


// classes
// - case insensitive
// - letters, numbers, underscore
// - beginning not with a number ($123)

class Abc{};
//class ABC{};
//class 1Abc{};
class Abc2{};
class A_b_c_2{};
class e0x0001{};

