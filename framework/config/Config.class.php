<?php
namespace config;

use base\Object;

class Config extends Object
{

    public function __construct(array $config)
    {
        print_r($config);
    }
}