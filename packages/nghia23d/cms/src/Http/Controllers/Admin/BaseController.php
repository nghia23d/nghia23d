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

    public function index()
    {
        $data = $this->model->latest()->get();

        return view($this->pathViewModule . 'index', compact('data'));
    }

    public function storeResource($resources)
    {
        return $this->model->create($resources);
    }

    public function show($id)
    {
        return view($this->pathViewModule . "report", [
            'data' =>  $this->model->findOrFail($id)
        ]);
    }

    public function updateResource($resources, $id)
    {
        $data = $this->model->findOrFail($id);

        return $data->update(array_filter($resources, 'strlen'));
    }

    public function changeStatus(Request $request, $id)
    {
        $request->validate([
            'status' => 'required|in:'.$this->model::STATUS_INACTIVE.','.$this->model::STATUS_ACTIVE,
        ]);

        $data = $this->model->findOrFail($id);
        $data->status = $request->status;
        $data->save();

        return response()->json([
            'status' => 200,
            'item'   => $data
        ]);
    }

    public function destroy($id)
    {
        $this->model->destroy($id);

        return redirect()
            ->route('cms.' . $this->module . '.index')
            ->with('success', "Xóa  $this->pageName  thành công");
    }
}
