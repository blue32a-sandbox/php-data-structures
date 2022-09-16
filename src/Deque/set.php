<?php

declare(strict_types=1);

use Ds\Deque;

$d = new Deque([1, 2, 3]);

$d->set(0, 'a');
$d->set(1, 'b');
$d->set(2, 'c');

var_dump($d); // [a b c]
