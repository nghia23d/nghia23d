<?php

namespace nghia23d\cms\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BaseController extends Controller
{
    protected $module;
    protected $pageName;
    protected $model;
    protected $itemPerPage = 10;
    protected $pathViewModule = '';
    
  
    public function __construct()
    {
        view()->share('pageName', $this->pageName);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = $this->model->all();

        return view($this->pathViewModule . 'index', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->model->create($request->all());

        return redirect()->route('cms.' . $this->module . '.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view($this->pathViewModule . "report", ['data' =>  $this->model->findOrFail($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $this->model->findOrFail($id);
        $data->update($request->all());
        //
        return redirect()->route('cms.' . $this->module . '.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->model->destroy($id);

        return redirect()->route('cms.' . $this->module . '.index');
    }
}
