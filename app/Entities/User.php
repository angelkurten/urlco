<?php

namespace App\Entities;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;

class User extends Authenticatable implements SluggableInterface
{
    use SluggableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'username', 'twitter_id', 'avatar', 'email', 'password',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function urls()
    {
        return $this->hasMany(Url::class);
    }

    public function folders()
    {
        return $this->hasMany(Folder::class);
    }

    public function getAvatarAttribute($value)
    {
        if($value == null)
        {
            return 'http://www.gravatar.com/avatar/00000000000000000000000000000000?d=mm&f=y';
        }

        return $value;
    }
}