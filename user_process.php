<?php 
    include 'connection.php';
    $act = $_GET['act'];
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
    <div class="container my-1"> 
        <?php if($act == "login"):?>
            <h1>Please Login</h1>
            <div class="card">
                <div class="card-body"> 
                    <form action="login.php" method="post">
                        <div class="mb-3">
                            <label for="uname" class="form-label">Username</label><br>
                            <input type="text" name="username" id="uname" class="form-control" required>
                        </div>    
                        <div class="mb-3">
                            <label for="pass" class="form-label">Password</label><br>
                            <input type="password" name="password" id="pass" class="form-control" required>
                        </div>    
                        <div class="text-center">
                            <button type="submit" class="btn btn-danger">Log In</button>
                        </div>
                    </form>
                </div>
            </div>
            <center>
                <p class="mt-3">Have no account or want to back to role selection?</p>
                <a href="user_process.php?act=Sign" class="btn btn-primary">Sign Up</a>
                <a href="index.php" class="btn btn-info">Back to role selection</a>
            </center>
        <?php else:?>
            <h1>Input your data</h1>
            <div class="card">
                <div class="card-body"> 
                    <form action="registration.php" method="post">
                        <div class="mb-3">
                            <label for="uname" class="form-label">Username</label>
                            <input type="text" name="username" id="uname" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="pass" class="form-label">Password</label>
                            <input type="password" name="password" id="pass" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="deposit" class="form-label">First deposit</label>
                            <input type="number" name="deposit" id="deposit" min="0"  class="form-control" required>
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-danger">Sign Up</button>
                        </div>
                    </form>
                </div>
            </div>        

            <center>
                <p class="mt-3">Already have an account?</p>
                <a href="user_process.php?act=login" class="btn btn-primary">Log in</a>
            </center>
        <?php endif;?>
    </div>    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
</body>
</html>