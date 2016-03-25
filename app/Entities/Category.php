<?php

namespace App\Entities;

use Cviebrock\EloquentSluggable\SluggableTrait;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\SluggableInterface;
use Illuminate\Support\Str;
use Symfony\Component\HttpFoundation\Tests\StreamedResponseTest;

class Category extends Model implements SluggableInterface
{
    use SluggableTrait;

    protected  $fillable = ['name'];

    public function urls()
    {
        return $this->belongsToMany(Url::class);
    }

    public function setNameAttribute($value)
    {
        if(!empty($value))
        {
            $this->attributes['name'] = Str::lower($value);
        }
    }

    public function getNameAttribute($value)
    {
        return Str::ucfirst($value);
    }
}
