<?php
namespace SEPHP;
use config\Config;

class SEPHP
{
    private $mini_version = "5.4.0";

    /**
     * 构造函数，初始化应用
     * @param array $config 应用配置信息
     * @throws \Exception 抛出自动加载产生的异常
     */
    public function __construct(array $config)
    {
        try
        {
            if (version_compare(PHP_VERSION, $this->mini_version, "<"))
            {
                App::writeEnd("require PHP version > {$this->mini_version} <br/> now version : ".PHP_VERSION);
            }

            spl_autoload_register("self::autoload");

            App::$config = new Config($config);

        }catch (\Exception $ex)
        {
            throw $ex;
        }

    }

    public function run()
    {

        echo "app running";


    }

    public static function autoload($class)
    {
        include $class . ".class.php";
    }
}

/**
 * APP 类，用于全局配置，动态参数等访问
 * @package SEPHP
 */
class App
{
    /**
     * @var string 框架版本
     */
    public static $version = "1.0";

    /**
     * @var Config 框架全局配置
     */
    public static $config = null;

    /**
     * @var string 控制器名称
     */
    public static $controller = "";

    /**
     * @var string action 名称
     */
    public static $action = "";

    /**
     * 打印信息，并终止后面的代码执行
     * @param $info 信息
     */
    public static function writeEnd($info)
    {
        App::write($info);
        exit;
    }

    /**
     * 打印一行信息
     * @param $info 信息
     */
    public static function writeLine($info)
    {
        App::write($info);
        App::write("<br/>");
    }

    /**
     * 打印信息
     * @param $info 信息
     */
    public static function write($info)
    {
        header("Content-Type: text/html; charset=UTF-8");
        echo $info;
    }
}