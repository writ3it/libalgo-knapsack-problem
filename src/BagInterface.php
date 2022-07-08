<?php

declare(strict_types=1);

namespace Writ3it\LibAlgo\KnapsackProblem;

/**
 * Bag abstraction in the Knapsack Problem.
 */
interface BagInterface
{

    /**
     * Returns capacity of bag.
     *
     * Capacity determines the maximum weight that can be stored in the bag.
     *
     * @return int
     */
    public function getCapacity():int;
}
