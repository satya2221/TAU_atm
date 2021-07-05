<?php
   session_start();
    if (empty($_SESSION['username'])) {
        header("location:user_process.php?act=login");
        die();
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
    <title>User Process</title>
    <title>Document</title>
</head>
<body>
<div class="container">
    <div class="text-center">
        <h1>Halo, <?php echo $_SESSION['username'];?></h1>
        <h5>Select what you gonna do</h5>
        <div class="card">
            <div class="card-body">
            <form action="detail_menu_atm.php" method="post">
                <div class="form-check d-grid col-6 mx-auto my-3 text-center">
                    <input class="btn-check" type="radio" name="act1" id="deposit" value="deposit" autocomplete="off" required>
                    <label class="btn btn-outline-success" for="deposit">Deposit</label>
                </div>

                <div class="form-check d-grid col-6 mx-auto my-3 text-center">
                    <input class="btn-check" type="radio" name="act1" id="withdraw" autocomplete="off" value="withdraw">
                    <label  class="btn btn-outline-success" for="withdraw">Withdraw</label>
                </div>

                <div class="form-check d-grid col-6 mx-auto my-3 text-center">
                    <input class="btn-check" type="radio" name="act1" id="check_b" autocomplete="off" value="check_b">
                    <label class="btn btn-outline-success" for="check_b">Check Balance</label>
                </div>

                <div class="form-check d-grid col-6 mx-auto my-3 text-center">
                    <input class="btn-check" type="radio" name="act1" id="transfer" value="transfer" autocomplete="off">
                    <label class="btn btn-outline-success" for="transfer">Transfer</label>
                </div>
                <div class="form-check d-grid col-6 mx-auto my-3 text-center">
                    <input class="btn-check" type="radio" name="act1" id="check_t" value="check_t" autocomplete="off">
                    <label class="btn btn-outline-success" for="check_t">Check Transaction</label>
                </div>

                    <button type="submit" class="btn btn-danger">Submit</button>
            </form>
            </div>
        </div>
        <p class="mt-3">Done With the activity?</p>
        <a href="logout.php" class="btn btn-primary">Log out</a>
    </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
</body>
</html>
