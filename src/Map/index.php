<?php

declare(strict_types=1);

use Ds\Hashable;
use Ds\Map;

var_dump(new Map());

$map = new Map(['a' => 1, 'b' => 2, 'c' => 3]);
var_dump($map);

$map = new Map();
$map->put('1', 'a');
$map->put(1, 'b');
var_dump($map);
var_dump($map->get('1')); // a
var_dump($map->get(1)); // b
var_dump($map['1']); // a
var_dump($map[1]); // b

// class Money
// {
//     public function __construct(private int $amount)
//     {
//     }
// }

class Money implements Hashable
{
    public function __construct(private int $amount)
    {
    }

    public function equals($money): bool
    {
        return $this->amount === $money->amount;
    }

    public function hash()
    {
        return $this->amount;
    }
}

$map = new Map();
$map->put(new Money(5), '5円');
$map->put(new Money(5), '5円');
$map->put(new Money(10), '10円');
$map->put(new Money(100), '100円');
var_dump($map);
