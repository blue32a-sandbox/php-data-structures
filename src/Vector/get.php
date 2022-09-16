<?php

declare(strict_types=1);

use Ds\Vector;

$v = new Vector(['A', 'B', 'C']);

var_dump($v->get(0)); // A
var_dump($v->get(1)); // B
var_dump($v->get(2)); // C
