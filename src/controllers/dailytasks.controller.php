<?php

require_once BASE_SRC . "/views/dailytasks.view.php";
require_once BASE_SRC . "/models/DailyTask.php";
require_once BASE_CFG . "/Database.php"; // Get the database connection
$config = require_once BASE_CFG . "/config.php"; // Get the database connection configuration

$db = new Database($config['database']); // Connect to the Database
$task = new DailyTask($db); // Get the functions to manages daily tasks

// Example to create a demo task
// $task->createTask('hello', '765cb173-867f-11ef-9968-54e1adb1f6ef', '14:30:00', '15:00:00', false);

// dd($_SERVER);
// $qp = parse_url($_SERVER['REQUEST_URI']);

// print_r($qp);
// if (isset($qp['query'])) {
//     print_r($qp['query']);
// }
