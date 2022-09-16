<?php

declare(strict_types=1);

use Ds\Vector;

$v = new Vector(['a', 'b', 'c']);

var_dump($v->remove(1)); // b
var_dump($v); // [a c]

var_dump($v->remove(0)); // a
var_dump($v); // [c]

var_dump($v->remove(0)); // c
var_dump($v); // []
