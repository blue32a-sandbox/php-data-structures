<?php

declare(strict_types=1);

use Ds\Map;

$map = new Map();

$map->put('a', 1);
$map->put('b', 2);
$map->put('c', 3);

var_dump($map);
