<?php
$routes = require_once BASE_CFG . "/routes.php";
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Simple routing logic
if ($uri === '/') {

    require_once BASE_SRC . "/views/" . $routes['home']; // Load home view

} elseif ($uri === '/about') {

    require_once BASE_SRC . "/views/" . $routes['about']; // Load home view

} elseif ($uri === '/dashboard') {

    require_once BASE_SRC . '/views/' . $routes['dashboard'];
} else {

    // For debugging
    echo "Requested URI: " . htmlspecialchars($uri);
    echo "404 Not Found"; // Handle not found

}
