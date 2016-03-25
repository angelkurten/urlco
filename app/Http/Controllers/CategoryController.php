<?php

namespace App\Http\Controllers;

use App\Repositories\CategoryRepository;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Pagination\Paginator;

class CategoryController extends Controller
{

    private $category;

    public function __construct(CategoryRepository $category)
    {
        $this->middleware('auth');
        $this->category = $category;
    }

    public function show($slug)
    {
        $category = $this->category->withRelations($slug);
        $folders = \Auth::user()->folders()->lists('name', 'id');

        $urls = new Paginator($category->urls, 15);
        $urls->setPath(route('category', $category->slug));

        return view('category', compact('urls', 'category', 'folders'));
    }
}
