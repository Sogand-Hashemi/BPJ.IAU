<?php

require_once("config.php");


$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


// Check connection
//if ($conn->connect_error) {
//    die("Connection failed: " . $conn->connect_error);
//}


class dataBase
{

    public $connection;

    function __construct()
    {
        $this->open_db_connection();
    }

    public function open_db_connection()
    {
        //   $this->connection=  mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

        //   if(mysqli_connect_errno()){
        //       die("database connection failed" .mysqli_connect_error());
        //   }

        // another way:

        $this->connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        $this->connection->set_charset("utf8");
        if ($this->connection->connect_errno) {
            die ("connection failed" . mysqli_connect_error());
        }

    }

    public function Query($sql)
    {
        $result = mysqli_query($this->connection, $sql);
        $this->confirm_Query($result);
        return $result;

    }

    private function confirm_Query($result)
    {
        if (!$result) {
            die("Query failed");
        }
    }

    // this function is for security:
    public function escape_string($string)
    {
        return mysqli_escape_string($this->connection, $string);
    }

    public function the_insert_id(){
        return mysqli_insert_id($this->connection);
    }


}

$dataBase = new dataBase();


?>