<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BUDGET</title>
</head>
<body>
    <form action="allClasses/Users.php" method="POST">
        <div>
            <div>
                <label for="bugetName">Budget Name</label> <br>
                <input type="text" name="budgetName" placeholder="Budget Name" >
            </div>
            <div>
                <label for="budgetAmount">Budget Amount</label> <br>
                <input type="number" name="budgetAmount" placeholder="Budget Amount" >
            </div>
            <div>
                <label for="bugetName">Deadline</label> <br>
                <input type="date" name="deadline" >
            </div>
            <div>
                <input type="submit" value="Add Budget" name="addBudget">
            </div>
        </div>

    </form>
</body>
</html>