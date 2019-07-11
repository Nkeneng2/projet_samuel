<?php

//connection a la base de donner pour ajout des objets
class connectionClass extends mysqli
{

    private $host = "localhost", $password = "root", $username = "root", $dbname = "shoe";
//    private $host = "https://studi.f4.htw-berlin.de", $password = "samuelnoe24", $username = "s0548016", $dbname = "shoe";
    public $conn;

    function __construct()
    {
        $this->conn = $this->connect($this->host, $this->username, $this->password, $this->dbname);
    }
}

?>