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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
</body>
</html>
