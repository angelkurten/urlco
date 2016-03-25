<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\Url\StoreRequest;
use App\Repositories\UrlRepository as Url;
use App\Repositories\CategoryRepository as Category;
use App\Repositories\FolderRepository as Folder;

class UrlController extends Controller
{

    private $url;
    private $category;
    private $folder;

    public function __construct(Url $url, Category $category, Folder $folder)
    {
        $this->url = $url;
        $this->category = $category;
        $this->folder = $folder;
    }

    public function index()
    {
        $urls = $this->url->withRelations();

        return $urls;
    }
}
