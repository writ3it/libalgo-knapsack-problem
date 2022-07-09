<?php

declare(strict_types=1);

namespace Writ3it\LibAlgo\KnapsackProblem;

/**
 * Solver interface
 */
interface KnapsackSolverInterface
{
    /**
     * Solves Knapsack Problem.
     *
     * @param ItemInterface[] $items Const. Items to put in the bag.
     * @param BagInterface $bag The bag in which the items will be put.
     * @return int The total value of items in the backpack.
     */
    public function solve(array &$items, BagInterface $bag):int;
}
