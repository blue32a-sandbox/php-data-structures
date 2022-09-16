<?php

declare(strict_types=1);

use Ds\Deque;

$d = new Deque();

$d->push('a');
$d->push('b');
var_dump($d); // [a, b]

$d->push('c', 'd');
var_dump($d); // [a, b, c, d]

$d->push(...['e', 'f']);
var_dump($d); // [a, b, c, d, e, f]
