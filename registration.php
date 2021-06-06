<?php
    include 'connection.php';
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $deposit = (int)$_POST['deposit'];

    $query = mysqli_query($link, "INSERT INTO user VALUES ('$username','$password','$deposit')");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <title>Registration process</title>
</head>
<body>
    <?php if ($query) { ?>
        <center>
            <h1 class="m-2">Sign Up Successfull, Please Log in</h1>
            <a href="user_process.php?act=login" class="btn btn-primary">Log in</a>
        </center>
    <?php } else { ?>  
        <center>
            <h1>Sign Up Failed , Please try again</h1> 
            <a href="user_process.php?act=Sign" class="btn btn-primary">Sign Up</a>
        </center>
    <?php } ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>    
</body>
</html>