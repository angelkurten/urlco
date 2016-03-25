<?php

namespace App\Http\Controllers;

use App\Repositories\Criterias\WhereCriteria;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Repositories\UserRepository as User;
use App\Repositories\UrlRepository as Url;

class UserController extends Controller
{

    private $user;

    private $url;

    public function __construct(User $user, Url $url)
    {
        $this->middleware('auth');
        $this->user = $user;
        $this->url = $url;
    }

    public function show($slug)
    {
        $user = $this->user->findByField('slug', $slug)->first();
        $folders = \Auth::user()->folders()->lists('name', 'id');

        $privacy = $this->privacyProfile($user);
        $urls = $this->url->pushCriteria(
            new WhereCriteria('user_id', '=', $user->id)
        )->withRelations($privacy);

        return view('profile', compact('user', 'folders', 'urls'));

    }

}
