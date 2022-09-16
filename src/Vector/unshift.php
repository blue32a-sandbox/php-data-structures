<?php

declare(strict_types=1);

use Ds\Vector;

$v = new Vector([1, 2, 3]);

$v->unshift('a');
var_dump($v); // [a 1 2 3]

$v->unshift('b', 'c');
var_dump($v); // [b c a 1 2 3]
