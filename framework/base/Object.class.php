<?php
namespace base;
class Object extends \stdClass
{
    public function getInstance()
    {
        return self;
    }
}