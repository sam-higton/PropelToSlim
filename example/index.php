<?php
require "../vendor/autoload.php";
require "conf/config.php";

$app = new \PropelToSlim\PropelToSlim(array (
    "propelToSlim" => array (
        "schemaPath" => "schema.xml"
    )
));

$app->get('/', function () use ($app) {
    echo "hello world";
});

$app->run();