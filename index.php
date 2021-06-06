<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <title>Role Selection</title>
</head>
<body>
    <center class="mt-2">
        <h1>Choose your role</h1>
    </center>
    <div class="container my-1">
        <form action="menu.php" method="get">
            <div class="form-check d-grid col-6 mx-auto my-3 text-center">
                <input class="btn-check" type="radio" name="role" id="user" value="User" autocomplete="off" required>
                <label class="btn btn-outline-success" for="user">
                    User
                </label>
            </div>
            <div class="form-check d-grid col-6 mx-auto my-3">
                <input class="btn-check" type="radio" name="role" id="admin" value="Admin" autocomplete="off">
                <label class="btn btn-outline-primary" for="admin">
                    Admin
                </label>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-danger">Submit</button>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
</body>
</html>