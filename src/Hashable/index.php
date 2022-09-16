<?php

declare(strict_types=1);

use Ds\Hashable;

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

$a = new Money(10);
$b = new Money(10);
$c = new Money(5);

var_dump($a->equals($b)); // true
var_dump($a->equals($c)); // false

// 比較演算子で比較できるわけではない
var_dump($a === $b); // false
