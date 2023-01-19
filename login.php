<?php
session_start();
// connection 
include('koneksi.php');

if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $query = "SELECT * FROM user WHERE username='$username' AND password='$password'";
    $result = mysqli_query($koneksi, $query);
    if (mysqli_num_rows($result) == 1) {
        $_SESSION['username'] = $username;
        header("Location: nota.php");
    } else {
        echo "<script>alert('Invalid Usernama Password');window.location='index.php';</script>";
    }
}
?>
