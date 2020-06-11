<?php

/**
 * Numbers
 */

$value = 0;

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