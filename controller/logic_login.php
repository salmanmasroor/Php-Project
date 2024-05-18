<?php
include "../model/database.php";
if(isset($_POST['newAccount'])){
    header("location:../view/registration.php");
}
if(isset($_POST['login'])){
$lgn_email = $_POST['lgn-email'];
$lgn_password = $_POST['lgn-password'];
if($lgn_email === "" || $lgn_password === ""){
    header("location:../login.html");
}
else{
$sql = $conn->query("SELECT `Email`, `Password`, `First_Name`, `Sur_Name` FROM `registration`");
}
}
while($row = $sql->fetch(PDO::FETCH_ASSOC)){
    if($lgn_email == $row["Email"]){
        $passcheck = password_verify($lgn_password,$row["Password"]);
            if($passcheck == 1){
                session_start();
                $_SESSION['Name'] = $row['First_Name'];
                $_SESSION['Email'] = $row['Email'];
                $_SESSION['pic'] = $row['profilepic'];
                $_SESSION['Last_Name'] = $row['Sur_Name'];
                header("location:../view/profile.php");
        }
    }
}
?>