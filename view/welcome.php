<?php
include "../model/database.php";
session_start(); 
if(!isset($_SESSION['Email'])){
    header("location:../view/login.php");
}
$em = $_SESSION['Email'];
$Sqll = $conn->query("SELECT * FROM `registration` WHERE Email='$em'");
$value="";
while($row = $Sqll->fetch(PDO::FETCH_ASSOC)){
    $value = $row['profilepic'];
} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="desgin/desgin_profile.css">
    <title><?php echo $_SESSION['Name'] ?></title>
    
</head>
<style>
    .big-box{
        display: flex;
        margin-top: 2%;
    }
    .box-2{
        margin-right:4%;
        margin-left: 3%;
    }
    /*
    .box-1 .sub-box{
        margin-top: 1em ;
        margin-left: 4em;   
    }
    .box-1 .sub-box a{
        text-decoration: none;
    }
   
    .box-3{
        background-color: darkblue;
        width: 300px;
        height: 100px;
        margin-left: 4%;
    }
    */
/*
<ul class="list">
            <li class="list-value"><a href="#"><img src="pics/newspaper.png" width="40px"></a></li>
            <li class="list-value"><a href="#"><img src="pics/friends.png" width="40px"></a></li>
            <li class="list-value"><a href="#"><img src="pics/home.png" width="40px"></a></li>
            <li class="list-value"><a href="#"><img src="pics/play-button.png" width="40px"></a></li>
            <li class="list-value"><a href="#"><img src="pics/more.png" width="40px"></a></li>
        </ul>*/
</style>
<body>
    <div class="container-1">
        <div class="blocks-1">
            <a href="#"><img src="pics/dF5SId3UHWd.svg" width="170px"></a>
        </div>
        <div class="blocks-1">
            <form action="">
                <input type="text" placeholder="Search Facebook" class="search-box" >
                <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
        <div class="blocks-1">
        <div class="dropdown" >
                <a data-toggle="dropdown">
                  <img src="<?php echo $value?>" style="width:50px;height:50px;border-radius:50%;margin-top: 5px;">
                </a>
              
                <div class="dropdown-menu" style="margin-right: 50%;margin-top: 20%;">
                <form action="" method="post">
                  <a class="dropdown-item"><input type="submit" value="Profile" name="profile"></a>
                  <a class="dropdown-item"><input type="submit" value="log" name="log"></a>
                  <?php
    if(isset($_POST['log'])){
    session_unset();
    session_destroy();
    header("location:login.php");
    }
    if(isset($_POST['profile'])){
        header("location:profile.php");
        }
    ?> 
                  </form>
                </div>
              </div>
        </div>
    </div>
    <div class="big-box" >
    <div class="box-2" >
    <?php
$em = $_SESSION['Email'];
$Sqll2 = $conn->query("SELECT image_data.image, image_data.date, registration.profilepic,registration.First_Name,registration.Sur_Name
FROM image_data
INNER JOIN registration ON image_data.Email=registration.Email;");
//$Sqlll2 = $conn->query("SELECT  `profilepic` FROM `registration` WHERE Email='$em'");
while($row = $Sqll2->fetch(PDO::FETCH_ASSOC)){  
?>
<div class="container-5">
    <div class="sub-block-5">
        <div class="sub-block-5-1">
            <img src="<?php echo $row['profilepic']; ?>" alt="" >
            <p ><?php echo $row['First_Name']." ".$row['Sur_Name'] ?></p>
            <p ><?php echo $row['date'];?></p>
        </div>
        <div class="sub-block-5-1">
            <form action="../controller/logic_profile.php" method="post">
                <label for="del"><img class="delete" src="pics/close.png" ></label>
            <input type="submit" id="del" name="d1">
        </form>
        </div>
    </div>
    
    <div class="sub-blcok-5">
        <div class="sub-block-5-2">
        </div>
        <div class="sub-block-5-2">
            <img src="<?php echo  $row['image']; ?>" style="width: 100%;">
        </div>
    </div>
    <div class="sub-blcok-5">
        <div class="sub-block-5-3">
        </div>
    </div>
</div>
<?php
}
?>
    </div>

</div>
</body>


<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</html>

?>