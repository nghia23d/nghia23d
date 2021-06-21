<?php

namespace nghia23d\cms\Http\Controllers\Admin;

use nghia23d\cms\Models\Slider as MainModel;
use nghia23d\cms\Http\Requests\Admin\SliderRequest as MainRequest;
//
use Illuminate\Http\Request;

class SliderController extends BaseController
{
    public function __construct(MainModel $model)
    {
        $this->module = 'slider';
        $this->pageName = 'Slider';
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
