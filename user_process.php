<?php 
    $act = $_POST['act'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Process</title>
</head>
<body>
    <?php if($act == "login"):?>
        <h1>Please Login</h1>
        <form action="menu_atm.php" method="post">
            <label for="uname">Username</label><br>
            <input type="text" name="username" id="uname"><br>

            <label for="pass">Password</label><br>
            <input type="password" name="password" id="pass"><br>
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
</body>
</html>