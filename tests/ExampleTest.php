<?php

namespace Writ3it\LibAlgo\KnapsackProblem\Tests;

use Writ3it\LibAlgo\KnapsackProblem\Impl\Item;
use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    public function test_simple_example()
    {
        // Given
        $items = [
            new Item(2, 30),
            new Item(1, 40),
            new Item(7, 70),
            new Item(15, 160),
            new Item(1, 10),
            new Item(4, 10),
            new Item(5, 25),
            new Item(6, 180)
        ];

        //todo
    }
}
