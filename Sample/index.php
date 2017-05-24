<?php
include dirname(__FILE__) . "/framework/sephp.php";

$config = array(
  "app_name" => "Sample",
  "app_path" => dirname(__FILE__)."/Sample",
);
$app = new SEPHP($config);
$app->run();
