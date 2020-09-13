<?php


namespace jamielong\phpmvc\middlewares;


use jamielong\phpmvc\Application;
use jamielong\phpmvc\exception\ForbiddenException;

/**
 * Class AuthMiddleware
 * @package jamielong\phpmvc\middlewares
 */
class AuthMiddleware extends BaseMiddleware
{
    public array $actions = [];

    /**
     * AuthMiddleware constructor.
     * @param array $actions
     */
    public function __construct(array $actions = [])
    {
        $this->actions = $actions;
    }


    public function execute()
    {
        if (Application::isGuest()) {
            if (empty($this->actions) || in_array(Application::$app->controller->action, $this->actions)) {
                throw new ForbiddenException();
            }
        }
    }
}