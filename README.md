# libalgo-knapsack-problem
Solution for Knapsack problem in PHP applications.

[See description of the problem.](https://en.wikipedia.org/wiki/Knapsack_problem)

## Available algorithms

| Classname | Algorithm name | Computational complexity | Space complexity |
|:---------:|:--------------:|:------------------------:|:-----------------:|
| DynamicKnapsackSolver | Solves Knapsack problem using dynamic programming. | `O(n*W)` where *n* means number of Items and *W* means Bag capacity. |  `O(n*W)` where *n* means number of Items and *W* means Bag capacity. |

## Example of use

```php
<?php

use Writ3it\LibAlgo\KnapsackProblem\Impl\Item;
use Writ3it\LibAlgo\KnapsackProblem\Impl\Bag;
use Writ3it\LibAlgo\KnapsackProblem\Algorithm\DynamicKnapsackSolver;

$items = [
    // new Item(<weight>, <value f.e. price>)
    new Item(2, 4), /** Item 0 **/
    new Item(1, 3), /** Item 1 **/
    new Item(4, 6), /** Item 2 **/
    new Item(4, 8)  /** Item 3 **/
];

// new Bag(<capacity>)
$bag = new Bag(8); 

$algo = new DynamicKnapsackSolver();
$value = $algo->solve($items, $bag);

var_dump([

     // Item 0,1,3 which are optimal content of the bag.
    'content'=>$bag->getItems(), 

     // Summary value of items in bag.
    'value' =>$value 

]);

```

## Custom Item

A item can be any PHP object. Sometimes, you may need to model your logic with more complex objects than ```Item``` class. You can do that by implementing ```ItemInterface``` on your own:

```php
<?php

use Writ3it\LibAlgo\KnapsackProblem\ItemInterface;

class CustomItem implements ItemInterface
{

    
    /**
     * {@inheritdoc}
     */
    public function getWeight(): int
    {
        // Custom logic to compute a weight.
    }
    
    /**
     * {@inheritdoc}
     */
    public function getValue(): int
    {
        // Custom logic to compute a value.
    }

    /**
     * More your own methods
     */

}
```

Efficient algorithms for solving the knapsack problem require that weight and value be integers and constant while solver runtime.

## Custom Bag

A bag can be any PHP object. Sometimes, you may need to model your logic with more complex objects than ```Bag``` class. You can do that by implementing ```BagInterface``` on your own:

```php
<?php

use Writ3it\LibAlgo\KnapsackProblem\ItemInterface;

class CustomBag implements BagInterface
{

    
    public function getCapacity(): int
    {
       // Custom logic to compute a capacity.
    }

    public function addItem(ItemInterface $item): void
    {
        // Custom logic to receive a items which are a solution.
    }

    /**
     * More your own methods
     */

}
```

Efficient algorithms for solving the knapsack problem require that weight and value be integers and constant while solver runtime.