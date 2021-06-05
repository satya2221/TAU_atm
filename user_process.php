<?php 
    $act = $_POST['act'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <title>User Process</title>
</head>
<body>
    <?php if($act == "login"):?>
        <h1>Please Login</h1>
        <form action="menu_atm.php" method="post">
            <label for="uname">Username</label><br>
            <input type="text" name="username" id="uname" required><br>

            <label for="pass">Password</label><br>
            <input type="password" name="password" id="pass" required><br>
            <br>
            <input type="submit" value="Submit">

        </form>
    <?php else:?>
        <h1>Input your data</h1>
        <form action="menu_atm.php" method="post">
            <label for="uname">Username</label><br>
            <input type="text" name="username" id="uname" required><br>

            <label for="pass">Password</label><br>
            <input type="password" name="password" id="pass" required><br>

            <label for="deposit">First deposit</label><br>
            <input type="number" name="password" id="pass" min="0" required>
            <br><br>
            <input type="submit" value="Submit">

        </form>
    <?php endif;?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
</body>
</html>