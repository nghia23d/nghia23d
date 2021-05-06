<?php

namespace nghia23d\cms\Http\Controllers\Admin;

use nghia23d\cms\Models\Blog as MainModel;
use nghia23d\cms\Http\Requests\Admin\BlogRequest as MainRequest;
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
        $this->pathViewModule = "cms::pages.$this->module.";
        //
        parent::__construct();
    }

    public function store(MainRequest $request)
    {
        //merege user id and title
        $data = array_merge($request->all(), [
            'user_id'    => Auth::id(),
            'slug_title' => Str::slug($request->title, '-')
        ]);

        //
        $this->storeResource($data);

        return redirect()->route('cms.' . $this->module . '.index');
    }

    public function update(MainRequest $request, $id)
    {
        $this->updateResource($request->all(), $id);

        return redirect()
            ->route('cms.' . $this->module . '.index')
            ->with('success', "Cập nhật $this->pageName thành công");
    }
}
