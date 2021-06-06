<?php
    include 'connection.php';
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $query = mysqli_query($link,"SELECT * FROM admin where username='$username' and password='$password'") or die (mysqli_error($link));
    $data = mysqli_fetch_array($query);
    $cek = mysqli_num_rows($query);
    if($cek >0){
        $_SESSION['username'] = $username;
    }
    else{
        header("location:menu.php?role=admin");
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
    <title>Admin Menu</title>
</head>
<body>
    <h1>Welcome Admin</h1>
    <p>Data</p>
    <p>Data</p>
    <p>Data</p>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
</body>
</html>

