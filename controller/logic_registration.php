<?php
include "../model/database.php";
if(isset($_POST['Signup'])){
$firstname = $_POST['firstname'];
$surname = $_POST['surname'];
$email = $_POST ['Email_phone'];
$password = $_POST['password'];
$defaultpic = "../model/fixedpic/user.png";
$hash_password = password_hash($password,PASSWORD_DEFAULT);
if($firstname === "" || $surname === "" || $email === "" || $password === "" || $password<6){
    header("location:../view/registration.php");
}

else{
    if(preg_match_all("/[a-zA-z]/",$firstname)){
        if(preg_match_all("/[a-zA-z]/",$surname)){
            if(preg_match_all(("/[a-zA-z0-9_\-\.]+[@][a-z]+[\.][a-z]{2,3}/"),$email)){
            $sql = $conn->query("INSERT INTO `registration`(`Email`, `Password`, `First_Name`, `Sur_Name`, `profilepic`) VALUES ('$email','$hash_password','$firstname','$surname','$defaultpic')");
            header("location:../view/login.php");
            }
            else{
                header("location:../view/registration.php");
            }
        }
        else{
            header("location:../view/registration.php");
        }
    }
    else{
        header("location:../view/registration.php");
    }
}
}
?>