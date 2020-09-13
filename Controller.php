<?php

namespace jamielong\phpmvc;

use jamielong\phpmvc\middlewares\BaseMiddleware;

/**
 * Class Controller
 * @package jamielong\phpmvc
 */

 class Controller
 {
    public string $layout = 'main';
    public string $action = '';

     /**
      * @var \jamielong\phpmvc\middlewares\BaseMiddleware[]
      */
    protected array $middlewares = [];

    public function setLayout($layout)
    {
        $this->layout = $layout;
    }

    public function render($view, $params = [])
    {
       return Application::$app->view->renderView($view, $params);
    }

    public function registerMiddleware(BaseMiddleware $middleware)
    {
        $this->middlewares[] = $middleware;
    }

     /**
      * @return middlewares\baseMiddleware[]
      */
     public function getMiddlewares(): array
     {
         return $this->middlewares;
     }
 }