<?php
namespace base;
class Object extends \stdClass
{
    public static function getInstance()
    {
        return self;
    }
}
