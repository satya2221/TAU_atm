<?php 
    $role = $_POST['role'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activity Menu</title>
</head>
<body>
    <?php if($role == "User"):?>
        <h1>Hello there select what you gonna do</h1>
        <form action="user_process.php" method="post">
            <input type="radio" name="act" id="login" value="login">
            <label for="login">Login</label>

            <input type="radio" name="act" id="signUp" value="signUp">
            <label for="signUp">Sign Up</label>

            <br>

            <input type="submit" value="Submit">
        </form>
    <?php else:?>
        <h1>Please Login Admin</h1>
    <?php endif;?>
    <br>
    <a href="index.php"><button>Back to role selection</button></a>
</body>
</html>