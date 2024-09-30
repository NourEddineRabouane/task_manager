<?php
// Do not use cache to ensure loading the changes 
header("Cache-Control: no-cache, must-revalidate"); // HTTP 1.1
header("Pragma: no-cache");
//
header("Access-Control-Allow-Origin: *");
// 
require __DIR__ . "/../src/controllers/TaskController.php";
require_once __DIR__ . "/../src/views/home.view.php";
