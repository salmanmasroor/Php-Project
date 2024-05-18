<?php
include "../model/database.php";
session_start();
$img1 ='profile';
$img2 = 'img-video-upload';
$upload1 = 'profile_upload';
$upload2 = 'Upload';
$em = $_SESSION['Email'];
function upload_pic($img_name,$name_button){
if(isset($_POST["$name_button"])){
    if(isset($_FILES["$img_name"])){
        $profilepic = $_FILES[$img_name];
        $profile_pic_name = $profilepic['name'];
        if($profile_pic_name === ""){
            header("location:../view/profile.php");
        }
        else{
        $profile_pic_tmp_name = $profilepic['tmp_name'];
        $folder = "../model/upload/";
        move_uploaded_file($profile_pic_tmp_name,$folder.$profile_pic_name);
        $storeimage= $folder.$profile_pic_name;
        return $storeimage;
    }
}
}
}
if(upload_pic($img1,$upload1))
{
$location = upload_pic($img1,$upload1);
$sqll = "UPDATE `registration` SET `profilepic`='$location' WHERE Email='$em'";
$sql = $conn->query("$sqll");
header("location:../view/profile.php");
}
else if(upload_pic($img2,$upload2)){
    $date_pic = date("d/m/Y");
    $s1 = upload_pic($img2,$upload2);
    $sqll = "INSERT INTO `image_data`(`Email`, `image`, `date`) VALUES ('$em','$s1','$date_pic')";
    $sql = $conn->query("$sqll");
    header("location:../view/profile.php");
}
if(isset($_POST['d1'])){
    header("location:../view/profile.php");
}
if(isset($_POST['logout'])){
    session_unset();
    session_destroy();
    header("location:../view/login.php");  
}
if(isset($_POST['home'])){
    header("location:../view/welcome.php");  
}


/*
function store($a,$c)
{        $sql = $c->query("UPDATE `registration` SET `profilepic`='$a' WHERE Email='$em'");
        header("location:../view/profile.php");
}
store($s1,$conn);
*/
/*
if(isset($_POST['save'])){
    if(isset($_FILES['pic']) && !empty($_FILES['pic'])){
        $ppicname  = $_FILES['pic']['name'];
        if($ppicname === ""){
            header("location:../view/profile.php");
        }
        else{
        $pictmp  = $_FILES['pic']['tmp_name'];
        $folder = "../model/upload/";
        move_uploaded_file($pictmp,$folder.$ppicname);
        $em = $_SESSION['Email'];
        $storeimage= $folder.$ppicname;
        $sql = $conn->query("UPDATE `registration` SET `profilepic`='$storeimage' WHERE Email='$em'");
        header("location:../view/profile.php");
        }
    }
}

if(isset($_POST['save1'])){
    if(isset($_FILES['pic1']) && !empty($_FILES['pic1'])){
        $ppicname  = $_FILES['pic1']['name'];
        if($ppicname === ""){
            header("location:../view/profile.php");
        }
        else{
        $pictmp  = $_FILES['pic1']['tmp_name'];
        $folder = "../model/data/";
        move_uploaded_file($pictmp,$folder.$ppicname);
        $em = $_SESSION['Email'];
        $storeimage= $folder.$ppicname;
        $sql = $conn->query("INSERT INTO `image_data`(`Email`, `image`) VALUES ('$em','$storeimage')");
        header("location:../view/profile.php");
        }
    }
}

if(isset($_POST['logout'])){
    session_unset();
    session_destroy();
    header('location:../view/login.php');
}

*/




?>