<?php

declare(strict_types=1);

use Ds\Map;

$map = new Map(['a' => 1, 'b' => 2, 'c' => 3]);

var_dump($map->get('a')); // 1
var_dump($map->get('b')); // 2
var_dump($map->get('c', 10)); // 3
var_dump($map->get('d', 10)); // 10
