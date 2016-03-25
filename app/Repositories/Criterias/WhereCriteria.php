<?php

namespace App\Repositories\Criterias;

use Prettus\Repository\Contracts\RepositoryInterface;
use Prettus\Repository\Contracts\CriteriaInterface;

class WhereCriteria implements CriteriaInterface {

    private $key;
    private $operator;
    private $value;

    public function __construct($key, $operator, $value)
    {
        $this->key = $key;
        $this->operator = $operator;
        $this->value = $value;
    }

    public function apply($model, RepositoryInterface $repository)
    {
        $model = $model->where($this->key, $this->operator, $this->value);

        return $model;
    }
}