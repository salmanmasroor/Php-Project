<?php
include "../model/database.php";
session_start(); 
if(!isset($_SESSION['Email'])){
    header("location:../view/login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facebook</title>
    <link rel="stylesheet" href="desgin/forget_password.css">
</head>
<body>
<div class="container">
    <h2>Delete your Account</h2>
    <form action="../controller/delete_account.php" method="post">
        <input type="text" placeholder="Email" name="del_Email"><br>
        <input type="password" placeholder="Password" name="del_password"><br>
        <input type="submit" name="delete_submit">
    </form>
</div>
</body>
</html>