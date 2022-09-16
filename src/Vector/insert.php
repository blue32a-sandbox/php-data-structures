<?php

declare(strict_types=1);

use Ds\Vector;

$v = new Vector();

$v->insert(0, 'A');
$v->insert(1, 'B');
$v->insert(2, 'C');

var_dump($v); // [A B C]

$v->insert(0, 'D');

var_dump($v); // [D A B C]

$v->insert(2, 'E', 'F');

var_dump($v); // [D A E F B C]
