<?php
include 'connection.php';
$username = $_POST['username'];
$password = md5($_POST['password']);

$query = mysqli_query($link,"SELECT * FROM admin where username='$username' and password='$password'") or die (mysqli_error($link));
$data = mysqli_fetch_array($query);
$cek = mysqli_num_rows($query);
if($cek >0){
    session_start();
    $_SESSION['username'] = $username;
    header("location:admin_process.php");
    die();
}
else{
    header("location:menu.php?role=admin");
    die();
}
