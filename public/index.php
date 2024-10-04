<?php
// Prevent caching (use cautiously in production)
header("Cache-Control: no-cache, must-revalidate");
header("Pragma: no-cache");

// CORS headers (restrict in production)
header("Access-Control-Allow-Origin: *");

// Base path to simplify requires
define('BASE_SRC', realpath(__DIR__ . '/../src/'));
define('BASE_CFG', realpath(__DIR__ . '/../config/'));

require_once BASE_SRC . "/controllers/task.controller.php";
require_once BASE_SRC . "/controllers/route.controller.php";
