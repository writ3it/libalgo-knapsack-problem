<?php

declare(strict_types=1);

namespace Writ3it\LibAlgo\KnapsackProblem\Tests;

use PHPUnit\Framework\TestCase;
use Writ3it\LibAlgo\KnapsackProblem\Impl\Item;
use Writ3it\LibAlgo\KnapsackProblem\Impl\Bag;
use Writ3it\LibAlgo\KnapsackProblem\Algorithm\DynamicKnapsackSolver;


class ExampleTest extends TestCase
{
    public function test_solve_example1()
    {
        // Given
        $items = [
            new Item(2, 4),
            new Item(1, 3),
            new Item(4, 6),
            new Item(4, 8)
        ];

        $bag = new Bag(8);

        $algo = new DynamicKnapsackSolver();
        $value = $algo->solve($items, $bag);

        self::assertEquals(15, $value);

        self::assertEquals(
            [
                $items[3],
                $items[1],
                $items[0]
            ],
            $bag->getItems()
        );
    }

    public function test_solve_example2()
    {
        // Given
        $items = [
            new Item(2, 4),
            new Item(1, 3),
            new Item(4, 6),
            new Item(4, 8),
            new Item(3, 7)
        ];

        $bag = new Bag(8);

        $algo = new DynamicKnapsackSolver();
        $value = $algo->solve($items, $bag);

        self::assertEquals(18, $value);

        self::assertEquals(
            [
                $items[4],
                $items[3],
                $items[1]
            ],
            $bag->getItems()
        );

      
    }
}
