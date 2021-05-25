<?php
    $activity = $_POST['act1'];
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>activity</title>
</head>
<body>
    <?php if($activity == "deposit"){?>
            <form action="deposit.php" method="post">
                <label for="deposit">How much money do you want to deposit?</label> <br>
                <input type="number" name="deposit" id="deposit" min="0" required>

                <input type="submit" value="submit">
            </form> 
            <br>
    <?php }
        elseif ($activity == "withdraw") { ?>
            <form action="withdraw.php" method="post">
                <label for="withdraw">How much money do you want to withdraw?</label> <br>
                <input type="number" name="withdraw" id="withdraw" min="0" required>

                <input type="submit" value="submit">
            </form>
            <br>
    <?php }
        elseif ($activity == "check_b") { ?>
            <h1>Your Balance now is <em>$500</em></h1>
    <?php }
        elseif ($activity == "transfer") { ?>
            <form action="transfer.php" method="post">
                <label for="receiver">Recipient username</label> <br>
                <input type="text" name="receiver" id="receiver" required> <br>

                <label for="amount">How much do you want to send</label> <br>
                <input type="number" name="amount" id="amount" min="0" required>
                <br> <br>
                <input type="submit" value="submit">
            </form>
            <br>
    <?php }
        else{ ?>
            <h1>There is no transaction going on</h1>
    <?php }
    ?>
</body>
</html>
