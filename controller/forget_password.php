<?php
include "../model/database.php";
if(isset($_POST['reset_submit'])){
    $Email = $_POST['Email'];
    $reset_password = $_POST['reset_password'];
    $hash_password = password_hash($reset_password,PASSWORD_DEFAULT);
    $sql = "UPDATE `registration` SET `Password`='$hash_password' WHERE Email='$Email'";
    $reult = $conn->query("$sql");
    if($reult){
    header("location:../view/login.php");
    }
}

?>
