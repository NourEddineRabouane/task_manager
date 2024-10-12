<?php
// Daily tasks DB class
class DailyTask
{
    // 
    private $query;
    private $db;
    public function __construct($db)
    {
        $this->db = $db;
    }

    public function createTask($comment, $user_id, $start_time, $end_time, $isDone)
    {
        // Set up the query
        $this->query = 'INSERT INTO daily_tasks (id , id_user , task_comment , start_time , end_time , isDone)
                VALUES (uuid() , ? , ? , ? , ? , ?);';

        // Get results
        $results = $this-> db -> query($this->query , [$user_id , $comment , $start_time , $end_time , $isDone]);

        // 
        return $results;
    }
}
