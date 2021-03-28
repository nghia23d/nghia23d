<?php

namespace nghia23d\cms\Http\Controllers;

use nghia23d\cms\Models\Blog as MainModel;

class BlogController extends BaseController
{
    public function __construct(MainModel $model)
    {
        $this->pageName = 'Bài viết';
        $this->model = $model;
        $this->pathViewModule = 'cms::pages.blog.';
        //
        parent::__construct();
    }
}
