<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Role Selection</title>
</head>
<body>
    <h1>Choose your role</h1>
    <form action="menu.php" method="post">
        <input type="radio" name="role" id="user" value="User">
        <label for="user">User</label>
        <input type="radio" name="role" id="admin" value="Admin">
        <label for="admin">Admin</label>
        <br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>