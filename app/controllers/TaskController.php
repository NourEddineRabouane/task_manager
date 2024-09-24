<?php   // Handle Requests... 
// Require the database configuration
$config = require_once "../config/config.php";
// Require the database conncetion class
require "../config/Database.php";
// Require the Task class
require_once __DIR__ . '/../models/Task.php';

// Connect to the Database
$db = new Database($config["database"]);
$task = new Task($db);

// Here you can start managing your task


// Format the printing arg
function dd($arg)
{
    echo "<pre/>";
    echo var_dump($arg);
    echo "<pre/>";
}
