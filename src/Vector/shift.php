<?php

declare(strict_types=1);

use Ds\Vector;

$v = new Vector(['A', 'B', 'C']);

var_dump($v->shift()); // A
var_dump($v); // [B C]

var_dump($v->shift()); // B
var_dump($v); // [C]

var_dump($v->shift()); // C
var_dump($v); // []
