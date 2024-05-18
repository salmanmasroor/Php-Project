<?php
include "../model/database.php";
session_start(); 
if(!isset($_SESSION['Email'])){
    header("location:../view/login.php");
}
$v = "";
if(isset($_POST['delete_submit'])){
    $del_email = $_POST['del_Email'];
    $del_password = $_POST['del_password'];
$sql = $conn->query("SELECT `Email`, `Password`FROM `registration`");
}
while($row = $sql->fetch(PDO::FETCH_ASSOC)){
    if($del_email == $row['Email']){
        $passcheck = password_verify($del_password,$row["Password"]);
        $v = $row["Password"];
            if($passcheck == 1){
                $sql1 = $conn->query("DELETE FROM `registration` WHERE Email='$del_email' AND  Password='$v'");
                $sql = $conn->query("DELETE FROM `image_data` WHERE Email='$del_email'");
                session_unset();
                session_destroy();
                header("location:../view/login.php"); 
        }
    }
}
?>