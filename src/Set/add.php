<?php

declare(strict_types=1);

use Ds\Set;

$set = new Set();

$set->add(1);
$set->add(2);
$set->add(3);
var_dump($set); // [1 2 3]

$set->add(1);
var_dump($set); // [1 2 3]

$set->add("1");
$set->add(true);
var_dump($set); // [1 2 3 '1' true]
