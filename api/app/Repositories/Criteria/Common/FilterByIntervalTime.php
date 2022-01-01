<?php

namespace App\Repositories\Criteria\Common;

use App\Repositories\Criteria\Criteria;
use App\Repositories\Repository;

class FilterByIntervalTime extends Criteria
{
    private $interval;
    private $field;

    public function __construct($interval, $field = 'created_at')
    {
        $this->interval = $interval;
        $this->field = $field;
    }

    public function apply($queryBuilder, Repository $repository)
    {
        if (!$this->interval) {
            return $queryBuilder;
        }

        if ($this->interval == 'today') {
            $intervalDay = [
                now()->startOfDay()->toDateTimeString(),
                now()->endOfDay()->toDateTimeString(),
            ];

            return $queryBuilder->whereBetween($this->field, $intervalDay);
        }

        if ($this->interval == 'yesterday') {
            $intervalDay = [
                now()->subDays(1)->startOfDay()->toDateTimeString(),
                now()->subDays(1)->endOfDay()->toDateTimeString(),
            ];

            return $queryBuilder->whereBetween($this->field, $intervalDay);
        }

        if ($this->interval == 'last-15-days') {
            return $queryBuilder->where($this->field, '>=', now()->subDays(15)->toDateTimeString());
        }

        if ($this->interval == 'last-30-days') {
            return $queryBuilder->where($this->field, '>=', now()->subDays(30)->toDateTimeString());
        }
    }
}
