<?php 
namespace app\core;


/**
* Class Application
* @author vantuong
* @package app\core 
*/
class Controller
{
    public string $layout = 'main';
    public function setLayout($layout)
    {
        $this->layout = $layout;
    }
    public function render($view, $params=[])
    {
        return Application::$app->router->renderView($view, $params);
    }
}