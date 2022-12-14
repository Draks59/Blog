<?php

namespace App\Controller;

use App;
use Core\Controller\Controller;

class AppController extends Controller
{

    protected $template = 'default';

    function __construct()
    {
        $this->viewPath = ROOT . "/app/Views/";
        $this->loadModel('Photo');
    }

    /**
     * It loads a model into the controller.
     * 
     * @param model_name The name of the model you want to load.
     */
    protected function loadModel($model_name)
    {

        $this->$model_name = App::getInstance()->getTable($model_name);
    }

    public function index()
    {
        $photos = $this->Photo->all();
        $this->render('templates.index', compact('photos'));
    }
}
