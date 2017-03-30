<?php
/**
 * Routes for main pages.
 */
$app->router->add("", function () use ($app) {
    $app->view->add("home/header", ["title" => "Home"]);
    $app->view->add("home/navbar");
    $app->view->add("home/home");

    $app->response->setBody([$app->view, "render"])
              ->send();
});

$app->router->add("about", function () use ($app) {
    $app->view->add("home/header", ["title" => "About"]);
    $app->view->add("home/navbar");
    $app->view->add("about/about");

    $app->response->setBody([$app->view, "render"])
              ->send();
});
