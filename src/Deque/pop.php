<?php

declare(strict_types=1);

use Ds\Deque;

$d = new Deque([1, 2, 3]);

var_dump($d->pop()); // 3
var_dump($d->pop()); // 2
var_dump($d->pop()); // 1

var_dump($d); // []
