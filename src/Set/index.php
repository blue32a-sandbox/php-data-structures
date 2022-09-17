<?php

declare(strict_types=1);

use Ds\Hashable;
use Ds\Set;

var_dump(new Set()); // []

$set = new Set([1, 2, 3]);
var_dump($set); // [1, 2, 3]

$set = new Set(['a', 'b', 'c', 'b']);
var_dump($set); // [a b c]

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

$set = new Set();
$set->add(new Money(5));
$set->add(new Money(5));
$set->add(new Money(10));
$set->add(new Money(100));
var_dump($set);
