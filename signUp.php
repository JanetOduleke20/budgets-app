<?php
    require('allClasses/Connection.php');
    if ($_POST['submit']) {
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $userpassword = $_POST['userpassword'];
    }

    class Users extends Connection{
        public function __construct() {
            parent::__construct();
        }

        public $query = "";
        public $prepared;
        public $data = "";


        public function SaveNewUser($firstname, $lastname, $email, $userpassword)
        {

            $this->query = "INSERT INTO `users_tb`(`firstname`, `lastname`, `email`, `password`) VALUES(?, ?, ?, ?)";
            $this->prepared = mysqli_query($this->connectToDb, $this->query);

            $this->prepared = $this->connectToDb->prepare($this->query);
            $this->prepared->bind_param('ssss', $firstname, $lastname, $email, $userpassword);
            $check = $this->prepared->execute();
            if($check) {
                // echo "User saved successfully";
                header("location: budgets.php");
            }else {
                echo "Error occurred";
            }
            
        }
    }

    $saveUser = new Users;
    $saveUser->SaveNewUser($firstname, $lastname, $email, $userpassword);
?>