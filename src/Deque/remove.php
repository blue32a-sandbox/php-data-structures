<?php

declare(strict_types=1);

use Ds\Deque;

$d = new Deque(['a', 'b', 'c']);

var_dump($d->remove(1)); // b
var_dump($d); // [a, c]

var_dump($d->remove(0)); // a
var_dump($d); // [c]

var_dump($d->remove(0)); // c
var_dump($d); // []
