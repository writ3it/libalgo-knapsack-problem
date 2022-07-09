<?php

declare(strict_types=1);

namespace Writ3it\LibAlgo\KnapsackProblem\Impl;

use Writ3it\LibAlgo\KnapsackProblem\ItemInterface;

/**
 * Example implementation of ItemInterface.
 */
class Item implements ItemInterface
{
    /**
     * Weight
     *
     * @var int
     */
    private $weight;

    /**
     * Value
     *
     * @var int
     */
    private $value;
    
    public function __construct(int $weight, int $value)
    {
        $this->weight = $weight;
        $this->value = $value;
    }
    /**
     * {@inheritdoc}
     */
    public function getWeight(): int
    {
        return $this->weight;
    }
    
    /**
     * {@inheritdoc}
     */
    public function getValue(): int
    {
        return $this->value;
    }
}
