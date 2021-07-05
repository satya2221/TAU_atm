<?php
    include 'connection.php';
    session_start();
    if (empty($_SESSION['username'])) {
        header("location:menu.php?role=admin");
        die();
    }
    $query_transaction = mysqli_query($link, "SELECT * FROM transaction");
    $query_user = mysqli_query($link, "SELECT username, deposit FROM user");
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <title>Admin Menu</title>
</head>
<body>
    <div class="container text-center">
        <h1>Welcome Admin</h1>
        <div class="card mb-3 bg-info">
            <div class="card-header">
                User Information
            </div>
            <div class="card-body">
                <table class="table table-success table-striped">
                    <thead>
                    <tr>
                        <th scope="col">Username</th>
                        <th scope="col">deposit</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php while($user_act = mysqli_fetch_array($query_user)) {?>
                        <tr>
                            <td><?php echo $user_act['username']; ?></td>
                            <td><?php echo $user_act['deposit']; ?></td>
                        </tr>
                    <?php }?>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="card mt-2 bg-success text-white">
            <div class="card-header">
                Transaction Information
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
                    <?php while($receive_act = mysqli_fetch_array($query_transaction)) {?>
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

        <div class="mt-3">
            <a href="logout.php" class="btn btn-danger">Log out</a>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
</body>
</html>

