<?php

namespace nghia23d\cms\Http\Controllers\Admin;

use nghia23d\cms\Models\QuestionAsk as MainModel;
use nghia23d\cms\Http\Requests\Admin\QuestionAskRequest as MainRequest;
//
use Illuminate\Http\Request;

class QuestionAskController extends BaseController
{
    public function __construct(MainModel $model)
    {
        $this->module = 'question_ask';
        $this->pageName = 'Câu hỏi thường gặp';
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
