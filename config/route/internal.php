<?php
/**
 * Route for internal error.
 */
$app->router->addInternal("404", function () use ($app) {
    $currentRoute = $app->request->getRoute();
    $routes = "<ul>";
    foreach ($app->router->getAll() as $route) {
        $routes .= "<li>'" . $route->getRule() . "'</li>";
    }
    $routes .= "</ul>";

    $intRoutes = "<ul>";
    foreach ($app->router->getInternal() as $route) {
        $intRoutes .= "<li>'" . $route->getRule() . "'</li>";
    }
    $intRoutes .= "</ul>";

    $app->view->add("home/header", ["title" => "404"]);
    $app->view->add("internal/internal");
    $app->view->add("home/footer");

    $app->response->setBody([$app->view, "render"])
              ->send(404);
});
