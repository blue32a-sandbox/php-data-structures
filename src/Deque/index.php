<?php

declare(strict_types=1);

use Ds\Deque;

$d = new Deque();
var_dump($d); // []

$d = new Deque([1, 2, 3]);
var_dump($d); // [1 2 3]

$d = new Deque();
$d->push('D');
$d->push('E');
$d->push('F');
print_r($d); // [D E F]
$d->unshift('C');
$d->unshift('B');
$d->unshift('A');
print_r($d); // [A B C D E F]
$d->remove(1);
print_r($d); // [A C D E F]
$d->remove(3);
print_r($d); // [A C D F]
$d->insert(2, 'G');
print_r($d); // [A C G D F]
$d->insert(1, 'H');
print_r($d); // [A H C G D F]
$d->pop();
print_r($d); // [A H C G D]
$d->pop();
print_r($d); // [A H C G]
$d->pop();
print_r($d); // [A H C]
$d->shift();
print_r($d); // [H C]
$d->shift();
print_r($d); // [C]
$d->shift();
print_r($d); // []
$d->push('D');
print_r($d); // [D]
$d->push('E');
print_r($d); // [D E]
$d->push('F');
print_r($d); // [D E F]
$d->unshift('C');
print_r($d); // [C D E F]
$d->unshift('B');
print_r($d); // [B C D E F]
$d->unshift('A');
print_r($d); // [A B C D E F]
$d->remove(1);
print_r($d); // [A C D E F]
$d->remove(3);
print_r($d); // [A C D F]
$d->insert(2, 'G');
print_r($d); // [A C G D F]
$d->insert(1, 'H');
print_r($d); // [A H C G D F]
$d->pop();
print_r($d); // [A H C G D]
$d->pop();
print_r($d); // [A H C G]
$d->pop();
print_r($d); // [A H C]
$d->shift();
print_r($d); // [H C]
$d->shift();
print_r($d); // [C]
$d->shift();
print_r($d); // []
