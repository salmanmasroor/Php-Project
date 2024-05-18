<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="desgin/stylereg.css"> 
</head>
<body>
    <div class="header">
    <img src="pics/dF5SId3UHWd.svg" width="300px">
</div>
    <div class="container">
        <div class="card" style="width: 435px;">
            <div class="card-head">
                <span id="span1">
                    Create a new account
                </span><br>
                <span id="span2">
                    It's quick and easy.
                </span>
            </div>
            <hr>
            <div class="card-body">
                <form action="../controller/logic_registration.php" method="post">
                <div class="name">
                    <input type="text" placeholder="First name" name="firstname">
                    <input type="text" placeholder="Surname" name="surname">
                </div>
                <div class="data">
                    <input type="text" placeholder="Mobile number or email address" name="Email_phone">
                    <input type="text" placeholder="New password" name="password">

                    <span>Gender</span><br>
                    
                    <div class="info">
                    <p>
                        People who use our service may have uploaded your contact information to Facebook. <a href="#">Learn more.</a>
                    </p>
                    <p>
                        By clicking Sign Up, you agree to our <a href="#">Terms</a>, <a href="#">Privacy Policy</a> and <a href="#">Cookies Policy</a>. You may receive SMS notifications from us and can opt out at any time.
                    </p>
                    </div>
                    <button id="signup" type="submit"  class="btn btn-primary" name="Signup" ><strong>Sign Up</strong></button>
                    <div id="forget"><a href="login.php">Already have an account?</a></div>
                </div>
            </form>    
            </div>
          </div>
    </div> 
</body>
</html>
