<?php

if(version_compare(PHP_VERSION,"5.3.0","<")){
    die("require PHP version > 5.3.0");
}

include dirname(__FILE__) . "/../framework/sephp.php";

$config = array(
    "app_name" => "sample",
    "app_path" => dirname(__FILE__)."/app",
);
$app = new \SEPHP\SEPHP($config);
$app->run();
