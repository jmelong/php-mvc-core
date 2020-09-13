<?php

namespace jamielong\phpmvc;

/**
 * Class Response
 * @package jamielong\phpmvc
 */

class Response
{
    public function setStatusCode(int $code)
    {
        http_response_code($code);
    }

    public function redirect($url)
    {
        header('Location: '.$url);
    }
}