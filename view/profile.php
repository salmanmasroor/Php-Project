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
    <title><?php echo $_SESSION['Name'];?></title>
</head>
<body>
    <div class="container-1">
        <div class="blocks-1">
            <a href="welcome.php"><img src="pics/dF5SId3UHWd.svg" width="170px"></a>
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
                <form action="../controller/logic_profile.php" method="post">
                  <a class="dropdown-item"><input type="submit" value="Home" name="home"></a>
                  <a class="dropdown-item" href="delete_account.php">Delete</a>
                  <a class="dropdown-item"><input type="submit" value="logout" name="logout"></a>
                  </form>
                </div>
              </div>
        </div>
    </div>

  
    <div class="container-2">
        <div class="block-2">
            <div class="sub-blocks-2">
                <img src="<?php echo $value; ?>" > 
            </div>
            <div class="sub-blocks-2-1">
                <label for="profile-upload"><img src="pics/camera.png"></label>
            </div>
            <div class="sub-blocks-2-2">
                <h6><?php echo $_SESSION['Name']." ". $_SESSION['Last_Name']; ?></h6>
        </div>
        <div class="sub-blocks-2-3">
        <form action="../controller/logic_profile.php" method="post" enctype="multipart/form-data">
            <input type="file" id="profile-upload" name= "profile"style="display: none;">
            <input type="submit" value="Upload" name="profile_upload">
        </form>
       </div>   
    </div>     
</div>
<div class="container-3">
    <div class="block-3">
        <form>
            <input type="submit" value="All">
        </form>
    </div>
    <div class="block-3">
        <form action="../controller/logic_profile.php" method="post">
            <input type="submit" value="Photos" name="photos">
        </form>
    </div>
    <div class="block-3">
        <form>
            <input type="submit" value="videos">
        </form>
    </div>
</div>

<div class="container-4">
    <div class="sub-block-4">
        <form action="../controller/logic_profile.php" method="post" enctype="multipart/form-data">
        <label for="img-video-upload"><img src="pics/cloud-computing.png" width="100px"></label>
        <input type="file" id="img-video-upload" name="img-video-upload"><br>
        <input type="submit" value="Upload" name="Upload">
    </form>
    </div>
</div>

<?php
$em = $_SESSION['Email'];
$Sqll2 = $conn->query("SELECT * FROM `image_data` WHERE Email='$em'");
while($row = $Sqll2->fetch(PDO::FETCH_ASSOC)){
?>
<div class="container-5">
    <div class="sub-block-5">
        <div class="sub-block-5-1">
            <img src="<?php echo $value; ?>" alt="" >
            <p ><?php echo $_SESSION['Name']." ". $_SESSION['Last_Name']; ?></p>
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
</body>


<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</html>

<?php
if(isset($_POST['photos'])){ 
$em = $_SESSION['Email'];
$Sqll2 = $conn->query("SELECT * FROM `image_data` WHERE Email='$em'");
while($row = $Sqll2->fetch(PDO::FETCH_ASSOC)){
?>
<div class="container-5">
    <div class="sub-block-5">
        <div class="sub-block-5-1">
            <img src="<?php echo $value; ?>" alt="" >
            <p ><?php echo $_SESSION['Name']." ". $_SESSION['Last_Name']; ?></p>
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
}
?>
