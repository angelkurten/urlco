<?php

namespace App\Repositories;


use App\Entities\Category;
use Prettus\Repository\Contracts\CacheableInterface;
use Prettus\Repository\Traits\CacheableRepository;


class CategoryRepository extends BaseRepository
{

    public function getModel()
    {
        return Category::class;
    }

    public function withRelations($category)
    {

       return $this->with([
                'urls' => function($q){
                    $q->wherePrivacy('public');
                },
                'urls.user',
                'urls.folders' => function($q){
                    $q->wherePrivacy('public');
                },
                'urls.categories']
        )->findByField('slug', $category)->first();

    }


}