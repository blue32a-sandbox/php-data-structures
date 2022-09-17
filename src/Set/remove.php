<?php

declare(strict_types=1);

use Ds\Set;

$set = new Set([1, 2, 3, 4, 5]);

$set->remove(1);
var_dump($set); // [2 3 4 5]

$set->remove(1, 2);
var_dump($set); // [3 4 5]

$set->remove(...[3, 4]);
var_dump($set); // [5]
