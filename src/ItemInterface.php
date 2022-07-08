<?php

declare(strict_types=1);

namespace Writ3it\LibAlgo\KnapsackProblem;

/**
 * Item abstraction in the Knapsack Problem.
 */
interface ItemInterface
{

    /**
     * Returns weight of item.
     *
     * Weight determines the size of the object in Bag.
     *
     * @return int
     */
    public function getWeight():int;

    /**
     * Returns value of item.
     *
     * Value is the parameter to be maximized.
     *
     * @return int
     */
    public function getValue():int;
}
