<?php
/*
* Mysql database class - only one connection alowed
*/
class DBController {
    private string $dbHost = "localhost";
    private string $dbUser = "root";
    private string $dbPassword = "";
    private string $dbName = "survey_form";
    private mysqli $connection ;
    public function OpenConnection(): bool
    {
        $this->connection =new mysqli($this->dbHost,$this->dbUser,$this->dbPassword,$this->dbName);
        if($this->connection->connect_errno)
        {
            echo "Error in Connection : ". $this->connection->connect_errno;
            return false;
        }
        else
        {
            return true;
        }
    }

    public function insert($qry): bool
    {
        $result = $this->connection->query($qry);
        if(!$result)
        {
            echo "Error : ".mysqli_error($this->connection);
            return false;
        }
        else
        {
            return $this->connection->insert_id;
        }
    }

}


?>