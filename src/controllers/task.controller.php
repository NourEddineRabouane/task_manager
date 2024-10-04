<?php   // Handle Requests... 
// Require the database configuration
$config = require_once __DIR__ . "/../../config/config.php";
// Require the database connection class
require_once __DIR__ . "/../../config/Database.php";
// Require the Task class
require_once __DIR__ . "/../models/Task.php";

// Connect to the Database
$db = new Database($config["database"]);
$task = new Task($db);


function dd($arg)
{
    echo "<pre/>";
    echo var_dump($arg);
    echo "<pre/>";
}
