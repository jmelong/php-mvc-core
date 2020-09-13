<?php


namespace jamielong\phpmvc\middlewares;


/**
 * Class baseMiddleware
 * @package jamielong\phpmvc\middlewares
 */
abstract class BaseMiddleware
{
    abstract public function execute();
}