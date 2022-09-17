<?php

declare(strict_types=1);

use Ds\Map;

$map = new Map(['a' => 1, 'b' => 2, 'c' => 3]);

var_dump($map->hasKey('a')); // true
var_dump($map->hasKey('d')); // false
