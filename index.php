<?php

require 'vendor/autoload.php';
include 'src/http.php';
include 'src/components.php';
include 'src/router.php';
include 'src/template.php';
include 'src/err.php';
include 'src/middleware.php';
include 'src/view.php';
include 'src/js.php';


$path = Http::getRawPathAndMethod();

Router::add('GET /', function() {
    Middleware::chain(View::home());
});

Router::add('GET /articles', function() {
    Middleware::chain(View::articles());
});

Router::add('GET /contact', function() {
    Middleware::chain(View::contact());
});

$err = Router::handleRequest($path);
if ($err->isSome()) {
    Router::notFound();
}

?>