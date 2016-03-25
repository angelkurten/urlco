<?php

namespace App\Http\Controllers;

use App\Repositories\UserRepository;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class LiveWidgetController extends Controller
{

    private $user;

    public function __construct(UserRepository $user)
    {

        $this->user = $user;
    }

    public function show($user)
    {
        $user = $this->user->with(['urls'=>function($q){
            $q->limit(5);
            $q->orderBy('created_at', 'DESC');
        }])->find($user);

        $urls = $user->urls;

        return view('widget.live', compact('user', 'urls'));
    }

}
