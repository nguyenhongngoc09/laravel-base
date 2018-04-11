<?php
namespace App\Backend\Http\Controllers;

use App\Backend\Services\FormService;
use Illuminate\Http\Request;
use App\Backend\Http\Controllers\Controller as BaseController;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use League\Flysystem\Exception;

abstract class FormController extends BaseController
{
    private $service;
    protected $serviceClass;
    protected $viewFolder;
    protected $views = [];

    function __construct()
    {
        $this->views = $this->defineViews();
        $this->makeService();
    }

    /**
     * Handle index action
     *
     * @return View
     */
    public function index()
    {
        $records = $this->service->all();
        $viewPath = sprintf('%s.%s', $this->viewFolder, $this->views['index']);
        return view($viewPath)->with(compact('records'));
    }

    /**
     * Handle create action
     *
     * @return View
     */
    public function create()
    {
        $viewPath = sprintf('%s.%s', $this->viewFolder, $this->views['create']);
        return view($viewPath);
    }

    /**
     * Handle confirm action
     * @param  Request  $request
     * @return View
     */
    public function confirm(Request $request)
    {
        $this->validateRequest($request);
        $data = $this->getInputs($request);
        $viewPath = sprintf('%s.%s', $this->viewFolder, $this->views['confirm']);
        return view($viewPath)->with(compact('data'));
    }

    /**
     * Assign action to back, save, update
     * @param  Request  $request
     * @return View
     */
    public function store(Request $request)
    {
        $inputs = $this->getInputs($request);
        if (!empty($inputs['back'])) {
            return $this->back($inputs);
        }
        $this->validateRequest($request);
        $this->service->save($inputs);
        return view($this->views['complete']);
    }

    /**
     * Handle edit action
     * @param  integer  $id
     * @return View
     */
    public function edit($id)
    {
        $data = $this->service->find($id);
        $viewPath = sprintf('%s.%s', $this->viewFolder, $this->views['edit']);
        return view($viewPath)->with(compact('data'));
    }

    /**
     * Get input from Request
     * @param  Request  $request
     * @return array
     */
    protected function getInputs(Request $request)
    {
        $inputs = $request->all();
        return $inputs;
    }

    /**
     * Handle validate button
     * @param  Request  $request
     * @return Redirect
     */
    protected function validateRequest(Request $request)
    {
        $this->validate($request, $this->defineRules(), $this->defineMessages());
    }

    /**
     * Handle back button
     * @param  array  $inputs
     * @return View
     */
    protected function back($inputs)
    {
        if(isset($inputs['id'])) {
            $action = action(sprintf('%s@%s', $this->getClassName(), 'edit'), $inputs['id']);
        } else {
            $action = action(sprintf('%s@%s', $this->getClassName(), 'create'));
        }
        return redirect($action)->withInput();
    }

    /**
     * Define views for actions: index, create, confirm, edit, complete
     *
     * @return array
     */
    protected function defineViews()
    {
        return [
            'index'     => 'index',
            'create'    => 'create',
            'confirm'   => 'confirm',
            'edit'      => 'edit',
            'complete'  => 'complete'
        ];
    }

    /**
     * Define rules for validation
     *
     * @return array
     */
    protected function defineRules()
    {
        return [];
    }

    /**
     * Define error messages for validation
     *
     * @return array
     */
    protected function defineMessages()
    {
        return [];
    }

    /**
     * Check record exist
     * @param  integer  $id
     * @return Mixed
     */
    protected function exist($id)
    {
        try {
            $data = $this->service->find($id);
        } catch(ModelNotFoundException $e) {
            return redirect(action($this->getClassName(). '@index'));
        }

        return $data;
    }

    /**
     * Create a Service.
     *
     * @return FormService
     */
    private function makeService()
    {
        $service = resolve($this->serviceClass);
        if (!$service instanceof FormService) {
            throw new Exception("Class {$this->serviceClass} must be an instance of FormService");
        }

        return $this->service = $service;
    }

    /**
     * Get own class name.
     *
     * @return String
     */
    private function getClassName() {
        return (new \ReflectionClass(static::class))->getShortName();
    }
}