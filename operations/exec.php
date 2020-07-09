<?php

$response1 = shell_exec('pwd');
$response2 = exec('pwd');
$response3 = `pwd`;

var_dump(
    [
        '1' => $response1,
        '2' => $response2,
        '3' => $response3
    ]
);