<<<<<<< HEAD
<?php 
// require "../src/controllers/TaskController.php";
require "../src/views/home.php";
// 
=======
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
>>>>>>> c17974646f7f668dc9a5b4af12ef1b6abebda4ca
