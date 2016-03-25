<?php

namespace App\Repositories\Criterias;

use Prettus\Repository\Contracts\RepositoryInterface;
use Prettus\Repository\Contracts\CriteriaInterface;

class OrderCriteria implements CriteriaInterface {

    private $key;
    private $order;

    public function __construct($key, $order = 'DESC')
    {
        $this->key = $key;
        $this->order = $order;
    }

    public function apply($model, RepositoryInterface $repository)
    {
        $model = $model->orderBy($this->key, $this->order);

        return $model;
    }
}