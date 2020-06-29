<?php

// Option 1
if (isset($_POST['name'])) {
    $name = $_POST['name'];
}else {
    $name = 'John Snow';
}

// Option 2
$name = isset($_POST['name']) ? $_POST['name'] : 'John Snow';

// Option 3
$name = $_POST['name'] ?? 'John Snow';

// Elvis operator
$isPayed = false;
if ($isPayed){
    $isConfirmed = true;
} else{
    $isConfirmed = false;
}

$isConfirmed = $isPayed ? $isPayed : false;
$isConfirmed = $isPayed ?: false;

var_dump(
    5 ?: false, // 5
false ?: '0', //0
    0 ?: 1,
    null ?: 123,
    'name' ?: 'lastname'
);
