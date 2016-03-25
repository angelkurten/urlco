<?php

namespace App\Entities;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;

class Url extends Model implements SluggableInterface
{
    use SluggableTrait;

    protected  $fillable = ['name', 'url', 'description', 'user_id', 'privacy'];

    protected $dates = ['created_at', 'updated_at'];

    public function folders()
    {
        return $this->belongsToMany(Folder::class);
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getCreateDateAttribute()
    {
        $create = new Carbon($this->created_at);
        $now = Carbon::now();
        return $create->diffForHumans($now);
    }

    public function getIconAttribute()
    {
        if($this->privacy == 'public')
        {
            return 'fa fa-globe';
        }

        return 'fa fa-lock';
    }

    public function getStatusAttribute()
    {
        try {
            $client = new \GuzzleHttp\Client();

            $code =  $client->get($this->url)->getStatusCode();

            if($code == 200){
                return true;
            }

            throw new \Exception(false);

        } catch (\Exception $e) {
            return false;
        }
    }

}
