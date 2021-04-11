<?php

namespace nghia23d\cms\Http\Controllers\Admin;

use nghia23d\cms\Models\Blog as MainModel;
//
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BlogController extends BaseController
{
    public function __construct(MainModel $model)
    {
        $this->module = 'blog';
        $this->pageName = 'Bài viết';
        $this->model = $model;
        $this->pathViewModule = 'cms::pages.blog.';
        //
        parent::__construct();
    }

    public function store(Request $request)
    {   
        //merege user id
        $data = array_merge($request->all(), ['user_id' => Auth::id(), 'slug_title' => Str::slug($request->title, '-')]);

        $this->model->create($data);
        //
        return redirect()->route('cms.' . $this->module . '.index');
    }
}
