<?php
/**
 * Routes for main pages.
 */
$app->router->add("", function () use ($app) {
    $app->view->add("home/header", ["title" => "Home"]);
    $app->view->add("navbar1/navbar");
    $app->view->add("home/home");
    $app->view->add("home/footer");

    $app->response->setBody([$app->view, "render"])
              ->send();
});

$app->router->add("about", function () use ($app) {
    $app->view->add("home/header", ["title" => "About"]);
    $app->view->add("navbar1/navbar");
    $app->view->add("about/about");
    $app->view->add("home/footer");

    $app->response->setBody([$app->view, "render"])
              ->send();
});

$app->router->add("report", function () use ($app) {
    $app->view->add("home/header", ["title" => "Report"]);
    $app->view->add("navbar1/navbar");
    $app->view->add("report/report");
    $app->view->add("home/footer");

    $app->response->setBody([$app->view, "render"])
              ->send();
});

$app->router->add("status", function () use ($app) {
    $data = [
        "Server" => php_uname(),
        "PHP version" => phpversion(),
        "Included files" => count(get_included_files()),
        "Memory used" => memory_get_peak_usage(true),
        "Execution time" => microtime(true) - $_SERVER['REQUEST_TIME_FLOAT'],
    ];

    $app->response->sendJson($data);
});
