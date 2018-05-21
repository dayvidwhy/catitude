<?php
// Example from Laravel framework 
return call_user_func(function () {
    $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    $publicDir = __DIR__ ;
    $uri = urldecode($uri);
 
    $requested = $publicDir . '/' . $uri;
    
    // was it homepage
    if ($uri === '') {
        require_once $publicDir . '/index.php';
    // or a route
    } else if (file_exists($requested . '.php')) {
        require_once $requested . '.php';
    // or a resource
    } else if (file_exists($requested)) {
        return false;
    // or just 404
    } else {
        require_once $publicDir . '/404.php';
    }
});

?>