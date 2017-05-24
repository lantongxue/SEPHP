<?php

/**
 * welcome to use SEPHP
 */
include dirname(__FILE__) . "/../framework/sephp.php";

$config = array(
    "app_name" => "sample",
    "app_path" => dirname(__FILE__)."/app",
    "db" => array(
        "host" => "1",
    ),
);
$app = new \SEPHP\SEPHP($config);
$app->run();
