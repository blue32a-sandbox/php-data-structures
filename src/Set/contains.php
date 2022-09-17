<?php

declare(strict_types=1);

use Ds\Set;

$set = new Set([1, 2, 3]);

var_dump($set->contains(1)); // true
var_dump($set->contains(1, 2)); // true
var_dump($set->contains(...[1, 2])); // true

var_dump($set->contains('1')); // false
var_dump($set->contains(1, 2, 4)); // false
var_dump($set->contains(...[1, 2, 3, 4])); // false

var_dump($set->contains(...[])); // true
