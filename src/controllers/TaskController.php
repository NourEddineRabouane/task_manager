<?php   // Handle Requests... 
// Require the database configuration
$config = require_once __DIR__ . "/../../config/config.php";

// Require the database connection class
require_once __DIR__ . "/../../config/Database.php";

// Require the Task class
require_once __DIR__ . "/../models/Task.php";

// // Require the database configuration
// $config = require_once  "../../config/config.php";
// // Require the database conncetion class
// require "../../config/Database.php";
// // Require the Task class
// require_once __DIR__ . '../models/Task.php';

// Connect to the Database
$db = new Database($config["database"]);
$task = new Task($db);

// $db->query("ALTER TABLE tasks ADD COLUMN (time_start time , time_end time);");
// Here you can start managing your task

// $task->updateTask("217db5e4-7a6b-11ef-b4fc-54e1adb1f6ef", "Go shop", "Go to the Guest shop and get...", "15:30:00", "16:30:00");
// Format the printing arg
function dd($arg)
{
    echo "<pre/>";
    echo var_dump($arg);
    echo "<pre/>";
}
