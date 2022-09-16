<?php

declare(strict_types=1);

use Ds\Deque;

$d = new Deque();

$d->insert(0, 'e');
$d->insert(1, 'f');
$d->insert(2, 'g');
var_dump($d); // [e, f, g]

$d->insert(0, 'a', 'b');
var_dump($d); // [a, b, e, f, g]

$d->insert(2, ...['c', 'd']);
var_dump($d); // [a, b, c, d, e, f, g]
