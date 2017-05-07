<!doctype html>
<html lang="en">
<?php
    // KONG Config
    $KONG_URL = "http://54.215.145.110:8000";

    // Helper functions
    function match($_pattern, $_path) {
        $_pattern = '/^' . str_replace('/', '\/', $_pattern) . '$/';
        return (preg_match($_pattern, $_path) ? true : false);
    }

    function debug($d) {
        echo '<pre>' . var_export($d, true) . '</pre>';
    }

    // Routing logic
    $http_verb = $_SERVER['REQUEST_METHOD'];
    $uri = $_SERVER['REQUEST_URI'];
    $path = parse_url($uri, PHP_URL_PATH);

    $route = 'home.php';
    switch ($http_verb) {
    case ('GET') :
        if(match('/.*/order/.*', $path)) {
            $route = 'orders/show.php';
        } elseif(match('/.*/orders', $path)) {
            $route = 'orders/index.php';
        }
        break;
    case ('POST') :
        if(match('/order', $path)) {
            $route = 'orders/create.php';
        } elseif(match('/.*/order/.*/pay', $path)) {
            $route = 'orders/pay.php';
        }
        elseif(match('/.*/order/.*', $path)){
             $route = 'orders/delete.php';
        }
        break;
    case ('PUT') :
        if(match('/.*/order/.*', $path)) {
            $route = 'orders/update.php';
        }
        break;
    case ('DELETE') :
        if(match('/.*/order/.*', $path)) {
            $route = 'orders/delete.php';
        }
        break;
    }

    // look for store in url
    $stores = array("mountainview", "paloalto", "sunnyvale");
    $x = explode('/', $path)[1];
    if (in_array($x, $stores)) {
        $store = $x;
    }
   // debug($_SERVER);
    require 'common/header.php';
    // $route is similar to a controller file
    require $route;
    require 'common/footer.php';
?>
