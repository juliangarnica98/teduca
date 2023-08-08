<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Preregistration;
use Illuminate\Http\Request;

class PreregistrationController extends Controller
{
    public function __construct()
    {
        // Module Data
        $this->title = trans_choice('module_preregistration', 1);
        $this->route = 'admin.preregistration';
        $this->view = 'admin.preregistration';
        $this->path = 'preregistration';
        $this->access = 'preregistration';


        // $this->middleware('permission:'.$this->access.'-view|'.$this->access.'-create|'.$this->access.'-edit|'.$this->access.'-delete', ['only' => ['index','show']]);
        // $this->middleware('permission:'.$this->access.'-create', ['only' => ['create','store']]);
        // $this->middleware('permission:'.$this->access.'-edit', ['only' => ['edit','update']]);
        // $this->middleware('permission:'.$this->access.'-delete', ['only' => ['destroy']]);
    }
    public function index()
    {

        $data['title'] = $this->title;
        $data['route'] = $this->route;
        $data['view'] = $this->view;
        $data['path'] = $this->path;
        $data['access'] = $this->access;

        $data['rows'] = Preregistration::orderBy('fecha_de_inters', 'asc')->get();

        return view($this->view.'.index', $data);
        // return view('admin.preregistration.index');
    }
    public function show()
    {
        return view($this->view.'.show');
    }
}
