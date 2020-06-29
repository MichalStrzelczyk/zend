<?php

namespace A\B\C;

class ThisIsClassName{

    static public function test()
    {
        var_dump(
            __DIR__,
            __LINE__,
            __CLASS__,
            __FUNCTION__,
            __METHOD__,
            __NAMESPACE__,
            __TRAIT__
        );
    }
}

ThisIsClassName::test();