<?php

declare(strict_types=1);

namespace Writ3it\LibAlgo\KnapsackProblem\Algorithm;

use Writ3it\LibAlgo\KnapsackProblem\KnapsackSolverInterface;
use Writ3it\LibAlgo\KnapsackProblem\BagInterface;
use Writ3it\LibAlgo\KnapsackProblem\ItemInterface;

class DynamicKnapsackSolver implements KnapsackSolverInterface
{
    
    /**
     * {@inheritDoc}
     */
    public function solve(array &$items, BagInterface $bag): int
    {
        $n = count($items);
        $capacity = $bag->getCapacity();
        
        $decisionTable = $this->createDecisionTable($n, $capacity);
        $this->computeDecisionTable($decisionTable, $items, $n, $capacity);
        return $this->readSolution($decisionTable, $items, $bag, $n, $capacity);
    }

    /**
     * Create empty decision table for dynamic programming.
     *
     * @param int $numberOfItems
     * @param int $capacity
     * @return int[][]
     */
    private function createDecisionTable(int $numberOfItems, int $capacity):array
    {
        return array_fill(0, $numberOfItems+1, array_fill(0, $capacity+1, 0));
    }

    /**
    * Compute values in decision table.
    *
    * @param int[][] $decisionTable
    * @param ItemInterface[] $items
    * @param int $n
    * @param int $capacity
    * @return void
    */
    private function computeDecisionTable(array &$decisionTable, array &$items, int $n, int $capacity):void
    {
        for ($i = 1; $i<=$n; $i++) {
            for ($j = 0; $j<=$capacity; $j++) {
                $item = $items[$i-1];
                if ($item->getWeight() > $j) {
                    $decisionTable[$i][$j] =$decisionTable[$i-1][$j];
                } else {
                    $decisionTable[$i][$j] = max($decisionTable[$i-1][$j], $decisionTable[$i-1][$j - $item->getWeight()] + $item->getValue());
                }
            }
        }
    }

    /**
    * Read solution from decision table.
    *
    * @param int[][] $decisionTable Const
    * @param ItemInterface[] $items
    * @param int $n
    * @param int $capacity
    * @return int
    */
    private function readSolution(array &$decisionTable, array &$items, BagInterface $bag, int $n, int $capacity):int
    {
        $max = $decisionTable[$n][$capacity];
        $i = $n;
        $j = $capacity;

        while ($decisionTable[$i][$j] > 0) {
            if ($decisionTable[$i][$j] > $decisionTable[$i-1][$j]) {
                $item = $items[$i -1];
                $bag->addItem($item);
                $j -= $item->getWeight();
            }
            $i -= 1;
        }
        return $decisionTable[$n][$capacity];
    }
}
