<?php
    class Connection {
        public $username = "root";
        public $server = "localhost";
        public $dbName = "budgets_db";
        public $password = '';
        public $connectToDb = '';

        public function __construct()
        {
            $this->connectToDb = mysqli_connect($this->server, $this->username, $this->password, $this->dbName);
            if (!$this->connectToDb) {
                echo "Connected successfully";
            }

        }
    }

    $connect = new Connection;
    // $connect->Connect();
?>