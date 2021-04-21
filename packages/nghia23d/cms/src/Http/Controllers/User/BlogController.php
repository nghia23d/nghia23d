<?php

namespace nghia23d\cms\Http\Controllers\User;

use nghia23d\cms\Models\Blog as MainModel;
//

class BlogController
{
    public function __construct(MainModel $model)
    {
        $this->model = $model;
    }

    public function index()
    {
      $data =  $this->model->latest()->get();
       
      return view('blog', ['data' => $data]);
    }

    public function show($slug_title)
    {
      $data =  $this->model->where('slug_title', $slug_title)->active()->firstOrFail();
       
      return view('blog_detail', ['data' => $data]);
    }
}
