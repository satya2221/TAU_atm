<?php
    include 'connection.php';
    session_start();
    if (empty($_SESSION['username'])) {
        header("location:user_process.php?act=login");
        die();
    }
    else {
        $username = $_SESSION['username'];
        $activity = $_POST['act1'];
        $query_money = mysqli_query($link, "SELECT deposit FROM user WHERE username = '$username' ");
        if ($query_money !== false) {
            $value = mysqli_fetch_array($query_money);
            $money = $value;
        }
    }
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
<div class="container">
    <div class="text-center mt-2">
        <?php if($activity == "deposit"){?>
                <h1>Deposit</h1>
                <div class="card">
                    <div class="card-body">
                        <form action="deposit.php" method="post">
                            <div class="mb-3">
                                <label for="deposit" class="form-label">How much money do you want to deposit?</label>
                                <input type="number" name="deposit" id="deposit" min="0" class="form-control" required>
                            </div>
                            <button type="submit" class="btn btn-danger">Submit</button>
                        </form>
                    </div>
                </div>
        <?php }
            elseif ($activity == "withdraw") { ?>
                <h1>Withdraw</h1>
                <div class="card">
                    <div class="card-body">
                        <form action="withdraw.php" method="post">
                            <div class="mb-3">
                                <label for="withdraw" class="form-label">How much money do you want to withdraw?</label>
                                <input type="number" name="withdraw" id="withdraw" max="<?php echo $money[0]; ?>" min="0" class="form-control" required>
                            </div>
                            <button type="submit" class="btn btn-danger">Submit</button>
                        </form>
                    </div>
                </div>
        <?php }
            elseif ($activity == "check_b") { ?>
                <h1>Your Balance now is <em><?php echo $money[0]; ?></em></h1>
        <?php }
            elseif ($activity == "transfer") { ?>
                <h1>Transfer</h1>
                <div class="card">
                    <div class="card-body">
                        <form action="transfer.php" method="post">
                            <div class="mb-3">
                                <label for="receiver"  class="form-label">Recipient username</label>
                                <input type="text" name="receiver" id="receiver" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="amount" class="form-label">How much do you want to send</label>
                                <input type="number" name="amount" id="amount" min="0" max="<?php echo $money[0]; ?>" class="form-control" required>
                            </div>
                            <button type="submit" class="btn btn-danger">Submit</button>
                        </form>
                    </div>
                </div>
        <?php }
            elseif($activity == "check_t"){
                $query_send = mysqli_query($link, "SELECT * FROM transaction WHERE sender = '$username' ");
                $query_receive = mysqli_query($link, "SELECT * FROM transaction WHERE receiver = '$username' ");
            ?>
                <h1>Your Transaction</h1>
                <div class="card mb-3 bg-info">
                    <div class="card-header">
                       Your Sending Transaction
                    </div>
                    <div class="card-body">
                        <table class="table table-success table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Sender</th>
                                    <th scope="col">Receiver</th>
                                    <th scope="col">Amount</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php while($send_act = mysqli_fetch_array($query_send)) {?>
                                    <tr>
                                        <td><?php echo $send_act['id']; ?></td>
                                        <td><?php echo $send_act['sender']; ?></td>
                                        <td><?php echo $send_act['receiver']; ?></td>
                                        <td><?php echo $send_act['amount']; ?></td>
                                    </tr>
                                <?php }?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card mt-2 bg-success text-white">
                    <div class="card-header">
                        Your Receiving Transaction
                    </div>
                    <div class="card-body">
                        <table class="table table-info table-striped">
                            <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Sender</th>
                                <th scope="col">Receiver</th>
                                <th scope="col">Amount</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php while($receive_act = mysqli_fetch_array($query_receive)) {?>
                                <tr>
                                    <td><?php echo $receive_act['id']; ?></td>
                                    <td><?php echo $receive_act['sender']; ?></td>
                                    <td><?php echo $receive_act['receiver']; ?></td>
                                    <td><?php echo $receive_act['amount']; ?></td>
                                </tr>
                            <?php }?>
                            </tbody>
                        </table>
                    </div>
                </div>
        <?php }
        ?>
        <div class="mt-3">
            <a href="logout.php" class="btn btn-primary">Log out</a>
            <a href="menu_atm.php" class="btn btn-info">Back to Main menu</a>
        </div>
    </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
</body>
</html>
