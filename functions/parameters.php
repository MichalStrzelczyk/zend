<?php

function myFunction(string $name, $lastName, $age = 18, $description = null, ...$params): array
{
    func_get_arg(0); // John
    func_get_args(); // ["John", "Snow", 33, null, 1, 2, 3, 4, 5]
    func_num_args(); //9

    return [
        $name,
        $lastName,
        $age,
        $description,
        $params
    ];
}

$result = myFunction("John", "Snow", 33, null, 1, 2, 3, 4, 5);
var_dump($result);

/**
 *
 * array(5) {
 * [0] =>
 * string(4) "John"
 * [1] =>
 * string(4) "Snow"
 * [2] =>
 * int(33)
 * [3] =>
 * NULL
 * [4] =>
 * array(5) {
 * [0] =>
 *      int(1)
 * [1] =>
 *      int(2)
 * [2] =>
 *      int(3)
 * [3] =>
 *      int(4)
 * [4] =>
 *      int(5)
 * }
 * }
 *
 */