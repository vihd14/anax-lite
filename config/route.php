<?php
/**
 * Routes.
 */
require __DIR__ . "/route/internal.php";
require __DIR__ . "/route/base.php";
require __DIR__ . "/route/status.php";

$app->router->add("", function () use ($app) {
    $urlHome  = $app->url->create("");
    $urlAbout = $app->url->create("about");
    $navbar = <<<EOD
<navbar>
    <a href="$urlHome">Home</a> |
    <a href="$urlAbout">About</a>
</navbar>
EOD;
});
