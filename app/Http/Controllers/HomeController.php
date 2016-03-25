<?php

namespace App\Http\Controllers;

use App\Repositories\UrlRepository as Url;
use App\Http\Requests;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * @var Url
     */
    private $url;

    /**
     * Create a new controller instance.
     *
     * @param Url $url
     */
    public function __construct(Url $url)
    {

        $this->middleware('auth');
        $this->url = $url;
    }

    /**
     * Show the application dashboard.
     *
     * @return Response
     */
    public function index()
    {
        $urls = $this->url->withRelations();

        $folders = \Auth::user()->folders()->lists('name', 'id');

        return view('home', compact('urls', 'folders'));
    }
}
