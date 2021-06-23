<?php

namespace nghia23d\cms\Http\Controllers\Admin;

use nghia23d\cms\Models\Review as MainModel;
use nghia23d\cms\Http\Requests\Admin\ReviewRequest as MainRequest;
//
use Illuminate\Http\Request;

class ReviewController extends BaseController
{
    public function __construct(MainModel $model)
    {
        $this->module = 'review';
        $this->pageName = 'Review';
        $this->model = $model;
        $this->pathViewModule = "cms::pages.$this->module.";
        //
        parent::__construct();
    }

    public function store(MainRequest $request)
    {
        $this->storeResource($request->all());

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
