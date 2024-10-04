<?php
// Deal with database ==> tasks'operation

// Task class that containes all tasks operations
class Task
{
    private $query; // For queries
    private $db;    // For the database connection
    public $result; // For results
    public function __construct($db)
    {
        $this->db = $db;
    }
    public function createTask($title, $comment)
    {
        // Make the query
        $this->query = "INSERT INTO tasks (id , title , comment , isDone , created_at)
         VALUES(UUID() , ? , ? , ? ,NOW() );";
        // Get the result
        $this->result = $this->db->query($this->query, [$title, $comment, false]);
    }

    public function deleteTask($id)
    {
        $this->query = 'DELETE FROM tasks WHERE id=?';
        $this->result = $this->db->query($this->query, [$id]);
    }

    public function getTask($id)
    {
        $this->query = 'SELECT * FROM tasks WHERE id=?';
        $this->result = $this->db->query($this->query, [$id]);
        return $this->result;
    }

    public function fetchAll()
    {
        $this->query = "SELECT * FROM tasks ORDER BY created_at DESC";
        $this->result = $this->db->query($this->query);
        return $this->result;
    }

    public function updateTask($id, $title, $comment, $time_start, $time_end)
    {
        $this->query = "UPDATE tasks SET title=? , comment=? , time_start=? , time_end=? ,created_at=NOW()
        WHERE id=?";
        $this->result = $this->db->query($this->query, [$title, $comment, $time_start, $time_end, $id]);
    }
    public function taskDone($id)
    {
        $this->query = "UPDATE tasks SET isDone=1 WHERE id=?";
        $this->result = $this->db->query($this->query, [$id]);
    }
    public function taskNotDone($id)
    {
        $this->query = "UPDATE tasks SET isDone=0 WHERE id=?";
        $this->result = $this->db->query($this->query, [$id]);
    }
}
