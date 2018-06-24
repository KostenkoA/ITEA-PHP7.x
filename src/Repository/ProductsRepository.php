<?php
declare(strict_types=1);

namespace App\Repository;


class ProductsRepository
{
    const DEFAULT_LIMIT = 50;

    public function getAll(): array
    {
        return [];
    }

    public function getProductForSale(array $filter)
    {
//        $limit = null;
//
//        if (isset($filter['limit'])){
//            $limit = $filter['limit'];
//        }

        $limit = $filter['limit'] ?? self::DEFAULT_LIMIT;

        return $limit;
    }
    
    public function count(array $filters): int
    {
        return 0;
    }
}