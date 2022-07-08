<?php

declare(strict_types=1);

namespace Writ3it\LibAlgo\KnapsackProblem\Impl;

use Writ3it\LibAlgo\KnapsackProblem\BagInterface;

/**
 * Example implementation of BagInterface.
 */
class Bag implements BagInterface
{
    /**
     * Capacity
     *
     * @var int
     */
    private $capacity;
    public function __construct(int $capacity)
    {
        $this->capacity = $capacity;
    }

    /**
     * {@inheritDoc}
     */
    public function getCapacity(): int
    {
        return $this->capacity;
    }
}
