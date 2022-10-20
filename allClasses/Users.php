<?php
    require("Connection.php");
    if ($_POST['addBudget']) {
        $budgetName = $_POST['budgetName'];
        $budgetAmount = $_POST['budgetAmount'];
        $deadline = $_POST['deadline'];
    }

    class Users extends Connection{
        public function __construct()
        {
            parent::__construct();
        }

        public function addBudget($budgetName, $budgetAmount, $deadline)
        {
            $query = "INSERT INTO `budgets_tb`(`budget_name`, `budget_amount`, `deadline`) VALUES(?, ?, ?)";
            $dataSet = mysqli_query($this->connectToDb, $query);
            $dataSet = $this->connectToDb->prepare($query);
            $dataSet->bind_param('sss', $budgetName, $budgetAmount, $deadline);
            $checkBudget = $dataSet->execute();

            if ($checkBudget) {
                echo "Budget added";
            } else {
                echo "Error occurred";
            }
            
        }

        public function displayBudgets()
        {
            $query = "SELECT * FROM budgets_tb";
            $check = mysqli_query($this->connectToDb, $query);
            if($check) {
                $allBudgets = mysqli_fetch_all($check);
                print_r($allBudgets);
            }else {
                echo "Error occurred";
            }
        }
    }

    $users = new Users;
    $users->addBudget($budgetName, $budgetAmount, $deadline);
    $users->displayBudgets();
?>