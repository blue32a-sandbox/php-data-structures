<?php

declare(strict_types=1);

use Ds\Vector;

$v = new Vector([1, 2, 3]);

$v->set(0, 'A');
$v->set(1, 'B');
$v->set(2, 'C');

var_dump($v); // [A B C]
