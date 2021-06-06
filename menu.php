<?php 
    $role = $_GET['role'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <title>Activity Menu</title>
</head>
<body>
    <?php if($role == "User"):?>
        <center class="my-2">
            <h1>Hello there select what you gonna do</h1>
        </center>
        <form action="user_process.php" method="get">
            <div class="form-check d-grid col-6 mx-auto my-3 text-center">
                <input class="btn-check" type="radio" name="act" id="login" value="login" autocomplete="off" required>
                <label class="btn btn-outline-success" for="login">Login</label>
            </div>

            <div class="form-check d-grid col-6 mx-auto my-3">
                <input class="btn-check" type="radio" name="act" id="signUp" value="signUp" autocomplete="off">
                <label class="btn btn-outline-primary" for="signUp">Sign Up</label>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-danger">Submit</button>
            </div>
        </form>
    <?php else:?>
        <center class="my-2">
            <h1>Please Login Admin</h1>
        </center>
        <div class="container my-1">
            <div class="card">
                <div class="card-body"> 
                    <form action="admin_process.php" method="post">
                        <div class="mb-3">
                            <label for="uname" class="form-label">Username</label>
                            <input type="text" class="form-control" name="username" id="uname" required>
                        </div>
                        <div class="mb-3">
                            <label for="pass" class="form-label">Password</label><br>
                            <input type="password" class="form-control" name="password" id="pass" required>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-danger">Submit</button>
                        </div>
                    </form>
                </div>   
            </div>
        </div>    
    <?php endif;?>
    <center>
        <a href="index.php" class="btn btn-primary mt-4">Back to role selection</a>
    </center>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
</body>
</html>