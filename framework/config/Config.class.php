<?php
namespace config;

use base\Object;

/**
 * 框架配置对象
 * @package config
 */
class Config extends Object
{

    public function __construct(array $config)
    {
        //$obj_config = new Config()
        $this->arr2obj($config);

    }

    /**
     * 动态更新配置
     * @param $key
     * @param $value
     */
    public function set($key, $value)
    {
        $this->$key = $value;
    }

    protected function arr2obj(array $arr)
    {

        foreach ($arr as $key=>$value)
        {
            $this->$key = $value;
        }
    }
}