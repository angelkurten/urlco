<?php

namespace App\Http\Controllers;

use App\Events\LiveFeedEvent;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Auth;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function privacyUser($model)
    {
        if(Auth::user()->id == $model->user_id)
        {
            return false;
        }

        return true;
    }

    public function privacyProfile($user)
    {
        if(Auth::user()->id == $user->id)
        {
            return false;
        }

        return true;
    }

    public function sendUrlLiveFeed($url)
    {
        \Event::fire(new LiveFeedEvent($url));
    }
}
