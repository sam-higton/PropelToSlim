<?php
require "../vendor/autoload.php";
require "conf/config.php";

$app = new \PropelToSlim\PropelToSlim(array (
    "propelToSlim" => array (
        "schemaPath" => "schema.xml",
        "api" => array (
            "basePath" => "api"
        ),
        "admin" => array (
           "basPath" => "admin"
        ),
        "auth" => array (
            "method" => "simple",
            "model" => "user",
            "username" => "name",
            "password" => "password"
        )
    )
));

$app->get('/', function () use ($app) {
    echo "hello world";
});

$app->initApi();

$app->run();