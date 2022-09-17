<?php

declare(strict_types=1);

use Ds\Map;

$map = new Map(['a' => 1, 'b' => 2, 'c' => 3]);

var_dump($map->remove('a')); // 1
var_dump($map->remove('b', 10)); // 2
var_dump($map->remove('d', 10)); // 10

var_dump($map); // [c => 3]
