<?php

declare(strict_types=1);

use Ds\Deque;

$d = new Deque(['a', 'b', 'c']);

var_dump($d->get(0)); // a
var_dump($d->get(1)); // b
var_dump($d->get(2)); // c

var_dump($d); // [a, b, c]
