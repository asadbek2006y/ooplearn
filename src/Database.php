<?php 

class Database
{
    public $username;
    public $password;
    public $database;
    public $servername;

    public function __construct($servername,$database,$username,$password)
    {
        $this->servername = $servername;
        $this->username = $username;
        $this->password = $password;
        $this->database = $database;
        $this->connect();

    }

    public function connect()
    {
        
        try 
        {
            $conn = new PDO("mysql:host=$this->servername;dbname=$this->database;", $this->username, $this->password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
            echo "Connected successfully";
        }
        catch(PDOException $e)
        {
            echo "Connection failed: " . $e->getMessage();
        }
    }

}