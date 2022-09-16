<?php

declare(strict_types=1);

use Ds\Vector;

$v = new Vector();

$v->push('A');
$v->push('B');
$v->push('C');

var_dump($v); // [A B C]
