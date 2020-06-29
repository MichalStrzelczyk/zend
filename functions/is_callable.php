<?php

/**
 * Setting
 */

$config = [];

$a = function($argument) use ($config) {
  return $argument;
};

function test(){
    return 'test';
}

$b = test();

(function(){
    echo 123;
})();

$object = new \stdClass();

var_dump(
    is_callable($a), //false
    is_callable(test()), //true
    is_callable($b), //true
    is_callable(1), //false
    is_callable(true), //false
    is_callable('test'), //true
    is_callable($object) //false
);



