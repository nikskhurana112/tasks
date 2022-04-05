<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <a href="customerData.php">See Customers who paid</a>
    <form action="index.php" method="POST">
        <div>
            <label for="">Game Name</label>
            <input type="text" name="game_name" required>
        </div>
        <br>
        <div>
            <label for="">Number of Friends</label>
            <input type="text" name="number_friends" required>
        </div>
        <br>
        <div>
            <label for="">Fees</label>
            <input type="text" name="fees" required>
        </div>
        <br>
        <div>
            <button>Submit</button>
        </div>
    </form>

</body>

</html>