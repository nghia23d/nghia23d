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

    public function getArticle($slug_title)
    {
      $data =  $this->model->where('slug_title', $slug_title)->active()->firstOrFail();
       
      return view('blog', ['data' => $data]);
    }
}
