<?php

namespace App\Repositories;


use App\Entities\Url;
use App\Repositories\Criterias\OrderCriteria;
use App\Repositories\Criterias\WhereCriteria;
use Prettus\Repository\Contracts\CacheableInterface;
use Prettus\Repository\Eloquent\BaseRepository;
use App\Repositories\Criterias\PaginateCriteria;
use Prettus\Repository\Traits\CacheableRepository;

class UrlRepository extends BaseRepository
{

    public function model()
    {
        return Url::class;
    }

    public function boot()
    {
        $this->pushCriteria(new OrderCriteria('created_at'));
    }

    public function withRelations($privacy = true)
    {

        if($privacy)
        {
            $this->pushCriteria(new WhereCriteria('privacy', '=', 'public'));
            return $this->with(['user', 'folders' => function ($query) {
                $query->wherePrivacy('public');

            }, 'categories'])->paginate();

        }

        return $this->with(['user', 'folders', 'categories'])->paginate();

    }

}