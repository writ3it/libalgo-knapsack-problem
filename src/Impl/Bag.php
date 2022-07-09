<?php

declare(strict_types=1);

namespace Writ3it\LibAlgo\KnapsackProblem\Impl;

use Writ3it\LibAlgo\KnapsackProblem\BagInterface;
use Writ3it\LibAlgo\KnapsackProblem\ItemInterface;

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
    /**
     * Items in the bag.
     *
     * @var ItemInterface[]
     */
    private $items = [];

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
    
    /**
     * {@inheritDoc}
     */
    public function addItem(ItemInterface $item): void
    {
        $this->items[] = $item;
    }

    /**
     * Returns the contents of the bag.
     *
     * @return ItemInterface[]
     */
    public function getItems():array
    {
        return $this->items;
    }
}
