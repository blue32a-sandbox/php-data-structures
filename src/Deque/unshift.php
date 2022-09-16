<?php

declare(strict_types=1);

use Ds\Deque;

$d = new Deque([1, 2, 3]);

$d->unshift('a');
$d->unshift('b', 'c');

var_dump($d); // [b, c, a, 1, 2, 3]
