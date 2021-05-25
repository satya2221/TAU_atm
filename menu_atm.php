<?php
    $username = $_POST['username']; 
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Halo, <?php echo $username;?></h1>
    <h5>Select what you gonna do</h5>
    <form action="detail_menu_atm.php" method="post">
        <input type="radio" name="act1" id="deposit" value="deposit" required>
        <label for="deposit">Deposit</label>
        <br>
        <input type="radio" name="act1" id="withdraw" value="withdraw">
        <label for="withdraw">Withdraw</label>
        <br>
        <input type="radio" name="act1" id="check_b" value="check_b">
        <label for="check_b">Check Balance</label>
        <br>
        <input type="radio" name="act1" id="transfer" value="transfer">
        <label for="transfer">Transfer</label>
        <br>
        <input type="radio" name="act1" id="check_t" value="check_t">
        <label for="check_t">Check Transaction</label>

        <br>
        <input type="submit" value="Submit">
    </form>
    <br>
    <a href="index.php"><button>Back to Role selection</button></a>
</body>
</html>
