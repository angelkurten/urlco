<?php

namespace App\Http\Controllers;

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

        $this->middleware('auth');
    }

    public function store(StoreRequest $request)
    {
        $data = $request->all();
        $data['user_id'] = \Auth::user()->id;

        //Crear URL
        $url = $this->url->create($data);

        //Buscar y asignar categorias a la URL
        $categories = $this->findOrCreateCategories($data['categories']);

        $this->createRelation($categories, 'categories', $url);

        //Buscar y asignar carpetas a la URL
        $data = $this->createFolder($data);

        $this->createRelation($data['folders'], 'folders', $url);

        $this->sendUrlLiveFeed($url->toJson());

        return redirect()->route('home');
    }


    public function findOrCreateCategories($string)
    {
        $categories = explode(',', $string);
        foreach($categories as $category)
        {
            $cate[] = $this->category->findByOrCreate('name', $category, ['name' => $category]);
        }

        return $cate;
    }

    private function createFolder($data)
    {

        if (!empty($data['new_folder'])) {
            $array = [
                'name' => $data['new_folder'],
                'description' => 'Carpeta creada por ' . \Auth::user()->name,
                'privacy' => $data['privacy'],
                'user_id' => \Auth::user()->id
            ];

            $data['folders'][] = $this->folder->create($array)->id;

            return $data;
        }

        return $data;
    }

    private function createRelation($array, $relation, $model)
    {
        foreach ($array as $arr) {
            $model->$relation()->attach($arr);
        }
    }
}
