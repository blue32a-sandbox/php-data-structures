<?php

declare(strict_types=1);

use Ds\Vector;

$v = new Vector();
var_dump($v);

$v = new Vector([1, 2, 3]);
var_dump($v);

$v = new Vector(['a', 'b', 'c']);
var_dump($v);
