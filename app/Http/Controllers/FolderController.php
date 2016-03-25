<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Repositories\FolderRepository as Folder;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;

class FolderController extends Controller
{
    private $folder;

    public function __construct(Folder $folder)
    {
        $this->middleware('auth');
        $this->folder = $folder;
    }

    public function show($folder)
    {
        $folder_id = $this->folder->findByField('slug', $folder, ['user_id'])->first();

        $privacy = $this->privacyUser($folder_id);

        $folder = $this->folder->withRelations($folder, $privacy);

        $folders = \Auth::user()->folders()->lists('name', 'id');

        $urls = new Paginator($folder->urls, 15);
        $urls->setPath(route('folder', $folder->slug));

        return view('folder', compact('urls', 'folder', 'folders'));
    }

}
