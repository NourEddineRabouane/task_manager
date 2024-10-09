<?php
define("BASE_PARTIAL", "/../partials/");

$routes = require_once BASE_CFG . "/routes.php";

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Check wich page to load based on the URL
if ($uri === '/') {

    require_once BASE_SRC . "/controllers/" . $routes['home'];
} elseif ($uri === '/about') {

    require_once BASE_SRC . "/controllers/" . $routes['about'];
} elseif ($uri === '/dashboard') {

    require_once BASE_SRC . '/controllers/' . $routes['dashboard'];
}
 elseif ($uri === '/dailytasks') {

    require_once BASE_SRC . '/controllers/' . $routes['dailytasks'];
} else {

    // For debugging
    echo "Requested URI: " . htmlspecialchars($uri);
    echo " <h1>404 Not Found</h1>"; // Handle not found

}
