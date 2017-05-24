<?php
namespace route;

use base\Object;

class Request extends Object
{

    public function get($key = "")
    {
        if(empty($key))
        {
            return $_GET;
        }

        if(array_key_exists($key, $_GET))
        {
            return $_GET[$key];
        }
    }
}