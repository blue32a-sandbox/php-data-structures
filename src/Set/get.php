<?php

declare(strict_types=1);

use Ds\Set;

$set = new Set(['a', 'b', 'c']);

var_dump($set->get(0)); // a
var_dump($set->get(1)); // b
var_dump($set->get(2)); // c


var_dump($set[0]); // a
var_dump($set[1]); // b
var_dump($set[2]); // c
