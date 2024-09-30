<?php

// Define Database connection
class Database
{
    private $connection;
    private $dsn;

    public function __construct($config, $user = 'root', $password = '')
    {
        $this->dsn = "mysql:" . http_build_query($config, '', ';');
        $this->connection = new PDO($this->dsn, $user, $password, [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]);
    }
    // Method tha takes the query and params and return imidiatlly the result
    public function query($query, $params = null)
    {
        try {
            // Prepare the query to be executed
            $statemnt = $this->connection->prepare($query);
            // Execute the query with the given params
            $params ? $statemnt->execute($params) : $statemnt->execute();
            // Fetch the result and return it
            return $statemnt->fetchAll();
        } catch (\Throwable $th) {
            // In case of an error throw it 
            throw $th;
        }
    }
}
