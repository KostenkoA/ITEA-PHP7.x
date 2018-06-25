<?php
declare(strict_types=1);

namespace App\Repository;

use App\Models\{
    Product,
    ProductCategory
};
//use iterable;

class ProductsRepository
{
    private const DEFAULT_LIMIT = 50;

    private $products = [
        'PHPStorm',
        'WEBStorm',
        'Visual Studio'
    ];

    public function getAll(): array
    {
        return [];
    }

    public function getProductForSale(iterable $filter)
    {
//        $limit = null;
//
//        if (isset($filter['limit'])){
//            $limit = $filter['limit'];
//        }

        $limit = $filter['limit'] ?? self::DEFAULT_LIMIT;

        return $limit;
    }
    
    public function count(?array $filters): ?int
    {
        return 0;
    }

    public function getProductionCollection()
    {
        $products = $this->products;

        return new class($products) implements \ArrayAccess {

            private $items;

            public function __construct($items)
            {
                $this->items = $items;
            }

            public function offsetExists($offset)
            {
                return isset($this->items[$offset]);
            }

            public function offsetGet($offset)
            {
                return $this->items[$offset];
            }

            public function offsetSet($offset, $value)
            {
                throw $this->createReadOnlyException();
            }

            public function offsetUnset($offset)
            {
                throw $this->createReadOnlyException();
            }

            public function createReadOnlyException()
            {
                return new \LogicException('Products collection is read only');
            }
        };
        
    }

    public function save(): void
    {
        $types = ['integer', 'string', 'float'];

        $integer = $types[0];
        $string = $types[1];
        $float = $types[2];

        list($int, $str, $float) = $types;
        [$int, $str, $float] = $types;

        $test = ['a' => 1, 'b' => 2, 'c' => 3];
        ['a' => $a] = $test;
    }
}