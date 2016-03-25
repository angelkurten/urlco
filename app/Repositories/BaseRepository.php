<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository as Base;

abstract class BaseRepository extends Base
{
    abstract function getModel();

    public function model()
    {
        return $this->getModel();
    }

    public function findByOrCreate($field, $value, $data)
    {
        $result = $this->findByField($field, $value);

        if($result->isEmpty())
        {
            return $this->create($data);
        }

        return $result->first();
    }


}