<?php

namespace App\Repositories;


use App\Entities\Folder;
use App\Repositories\Criterias\WhereCriteria;
use Prettus\Repository\Contracts\CacheableInterface;
use Prettus\Repository\Traits\CacheableRepository;

class FolderRepository extends BaseRepository
{

    function getModel()
    {
        return Folder::class;
    }

    public function withRelations($folder, $privacy = true)
    {

        if($privacy){
            $this->pushCriteria(new WhereCriteria('privacy', '=', 'public'));
            return $this->with([
                'urls' => function($q){
                    $q->wherePrivacy('public');
                },
                'urls.user',
                'urls.folders' => function($q){
                    $q->wherePrivacy('public');
                },
                'urls.categories']
            )->findByField('slug', $folder)->first();
        }


        return $this->with(['user', 'urls', 'urls.user', 'urls.folders', 'urls.categories'])->findByField('slug', $folder)->first();

    }

}