<?php

declare(strict_types=1);

use Ds\Vector;

$v = new Vector([1, 2, 3]);

var_dump($v->pop()); // 3
var_dump($v); // [1 2]

var_dump($v->pop()); // 2
var_dump($v); // [1]

var_dump($v->pop()); // 1
var_dump($v); // []
