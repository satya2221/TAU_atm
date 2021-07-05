<?php
    include 'connection.php';
    session_start();
    if (empty($_SESSION['username'])) {
        header("location:user_process.php?act=login");
        die();
    }
    else{
        $username = $_SESSION['username'];
        $receiver = $_POST ['receiver'];
        $amount = (int) $_POST ['amount'];
        $query_receiver = mysqli_query($link, "SELECT deposit FROM user WHERE username = '$receiver' ");
        if($query_receiver){
            $query_transfer = mysqli_query($link, "INSERT INTO transaction VALUES(NULL,'$username','$receiver','$amount')");
            $query_sender = mysqli_query($link, "SELECT deposit FROM user WHERE username = '$username' ");
            if($query_transfer && $query_sender) {
                $money_receiver = mysqli_fetch_array($query_receiver);
                $money_sender = mysqli_fetch_array($query_sender);

                $final_receiver = $money_receiver[0] + $amount;
                $final_sender  = $money_sender[0] - $amount;

                $update_receiver = mysqli_query($link, "UPDATE user SET deposit = '$final_receiver' WHERE username = '$receiver'");
                $update_sender = mysqli_query($link, "UPDATE user SET deposit = '$final_sender' WHERE username = '$username'");

                if($update_receiver && $update_sender){
                    $status = "success";
                }
                else{
                    $status = "failed";
                }
            }
            else{
                $status = "not_found";
            }
        }
        else{
            $status = "failed";
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
    <title>Transfer Process</title>
</head>
<body>
    <div class="container">
        <div class="text-center mt-3">
            <?php if ($status == "success"){?>
                <h1>Success Transfer <em><?php echo $amount?></em> to <em><?php echo $receiver;?></em></h1>
                <h3>Your Balance now is <em><?php echo $final_sender;?></em></h3>
            <?php } elseif ($status == "not_found"){?>
                <h1>Username receiver not found</h1>
                <h3>Make sure username exist</h3>
            <?php } else{ ?>
                <h1>Something Went Wrong, Contact nearby office</h1>
            <?php }  ?>
            <div class="mt-3">
                <a href="logout.php" class="btn btn-primary">Log out</a>
                <a href="menu_atm.php" class="btn btn-info">Back to Main menu</a>
            </div>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
</body>
</html>
