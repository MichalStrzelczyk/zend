<?php

/**
 * Strings
 */

$value = '';

var_dump(
    (int) $value,      // 0
    (bool) $value,     // false
    (float) $value,    // 0.0
    (array) $value,    // ['']
    (object) $value    // \stdClass {scalar=''}
);

$value = '0';

var_dump(
    (int) $value,      // 0
    (bool) $value,     // false
    (float) $value,    // 0.0
    (array) $value,    // ['0']
    (object) $value    // \stdClass {scalar='0'}
);

$value = '1';

var_dump(
    (int) $value,      // 1
    (bool) $value,     // true
    (float) $value,    // 1.0
    (array) $value,    // ['1']
    (object) $value    // \stdClass {scalar='1'}
);

$value = 'true';

var_dump(
    (int) $value,      // 0
    (bool) $value,     // true
    (float) $value,    // 0.0
    (array) $value,    // ['true']
    (object) $value    // \stdClass {scalar='true'}
);

$value = 'false';

var_dump(
    (int) $value,      // 0
    (bool) $value,     // true
    (float) $value,    // 0.0
    (array) $value,    // ['false']
    (object) $value    // \stdClass {scalar='false'}
);

$value = '25thJanuary';

var_dump(
    (int) $value,      // 25
    (bool) $value,     // true
    (float) $value,    // 25.0
    (array) $value,    // ['25thJanuary']
    (object) $value    // \stdClass {scalar='25thJanuary'}
);

$value = '0x00000f';

var_dump(
    (int) $value,      // 0
    (bool) $value,     // true
    (float) $value,    // 0.0
    (array) $value,    // ['0x00000f']
    (object) $value    // \stdClass {scalar='0x00000f'}
);

$value = '20e2';

var_dump(
    (int) $value,      // 2000
    (bool) $value,     // true
    (float) $value,    // 2000.0
    (array) $value,    // ['20e2']
    (object) $value    // \stdClass {scalar='20e2'}
);

