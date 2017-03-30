<?php
/**
 * Routes.
 */
require __DIR__ . "/route/internal.php";
require __DIR__ . "/route/base.php";

$app->router->add("", function () use ($app) {
    $urlHome  = $app->url->create("");
    $urlAbout = $app->url->create("about");
    $urlReport = $app->url->create("report");
    $urlStatus = $app->url->create("status");
    $navbar = <<<EOD
<navbar>
    <a href="$urlHome">HOME</a>
    <a href="$urlAbout">ABOUT</a>
    <a href="$urlReport">REPORT</a>
</navbar>
EOD;
});
