<?php


namespace jamielong\phpmvc\exception;


/**
 * Class NotFoundException
 * @package jamielong\phpmvc\exception
 */
class NotFoundException extends \Exception
{
    protected $message = 'Page not found';
    protected $code = 404;
}