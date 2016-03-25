<?php

namespace App\Repositories;


use App\Entities\Url;
use App\Entities\User;
use Prettus\Repository\Contracts\CacheableInterface;
use Prettus\Repository\Traits\CacheableRepository;

class UserRepository extends BaseRepository implements CacheableInterface
{
    use CacheableRepository;

    function getModel()
    {
        return User::class;
    }

}