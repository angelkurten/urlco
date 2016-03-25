<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;

class Folder extends Model implements SluggableInterface
{
    use SluggableTrait;

    protected  $fillable = ['name', 'description', 'user_id', 'privacy'];

    public function urls()
    {
        return $this->belongsToMany(Url::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
