<?php

namespace nghia23d\cms\Http\Controllers\Admin;

use nghia23d\cms\Models\User as MainModel;

class UserController extends BaseController
{
    public function __construct()
    {
        $this->pageName = 'Manager';
        $this->model = new MainModel();
        $this->pathViewModule = 'cms::pages.user.';
        //
        parent::__construct();
    }

    public function createAdmin($email, $password)
    {
        return $this->model->createAdmin($email, $password);
    }
}
