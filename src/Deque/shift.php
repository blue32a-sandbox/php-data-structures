<?php

declare(strict_types=1);

use Ds\Deque;

$d = new Deque(['a', 'b', 'c']);

var_dump($d->shift()); // a
var_dump($d->shift()); // b
var_dump($d->shift()); // c

var_dump($d); // []
