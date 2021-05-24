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
        <form action="user_process.php" method="post">
            <input type="radio" name="act" id="login" value="login">
            <label for="login">Login</label>

            <input type="radio" name="act" id="signUp" value="signUp">
            <label for="signUp">Sign Up</label>

            <br>

            <input type="submit" value="Submit">
        </form>
    <?php else:?>
        <h1>Input your data</h1>
    <?php endif;?>
</body>
</html>