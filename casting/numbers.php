<?php

/**
 * Numbers
 */


$value = 0; // Or $value = 0x000000 or 0b0000

var_dump(
    (int) $value,      // 0
    (bool) $value,     // false
    (float) $value,    // 0.0
    (array) $value,    // [0]
    (object) $value    // \stdClass {scalar=0}
);

$value = 1;

var_dump(
    (int) $value,      // 0
    (bool) $value,     // true
    (float) $value,    // 0.0
    (array) $value,    // [1]
    (object) $value    // \stdClass {scalar=1}
);

$value = 0;

var_dump(
    (int) $value,      // 0
    (bool) $value,     // false
    (float) $value,    // 0.0
    (array) $value,    // [0]
    (object) $value    // \stdClass {scalar=0}
);

$value = 0.123456e3;

var_dump(
    (int) $value,      // 123
    (bool) $value,     // true
    (float) $value,    // 123.456
    (array) $value,    // [1]
    (object) $value    // \stdClass {scalar=0}
);

$value = 0x000000;

var_dump(
    (int) $value,      // 123
    (bool) $value,     // false
    (float) $value,    // 123.456
    (array) $value,    // [1]
    (object) $value    // \stdClass {scalar=0}
);


var_dump(
    (int) (8.), // 8
    (int) ((.1+.7) * 10), // 7
    (int) ((.1+.5) * 10) // 6
);

var_dump(
    \PHP_INT_SIZE,
    \PHP_INT_MAX,
    \PHP_INT_MIN
);

//2^63
//00000000 00000000 00000000 00000000 00000000 00000000 00000000 00000000