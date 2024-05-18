<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="desgin/style.css">
</head>
<body>
    <div class="container">
        <div class="col" style="padding-top: 10px ;">
            <img src="pics/dF5SId3UHWd.svg" width="300px">
            <p>
                Facebook helps you connect and share with the people in your life.
            </p>
        </div>
        <div class="col">
            <div class="card" style="width: 24rem;">
                <div class="card-body">
                    <!--Login form-->
                  <form action="../controller/logic_login.php" method = "post">
                    <div class="form-group">
                      
                      <input type="email" class="form-control" name="lgn-email" placeholder="Email address or phone number">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control" name="lgn-password" placeholder="Password">
                    </div>
                    <button type="submit" id="submit" class="btn btn-primary" name="login">Submit</button>
                    <div id="forget"><a href="forget_password.php">Forgotten password?</a></div>
                  <button type="submit" id="caccount" class="btn btn-primary" name="newAccount">Create new Account</button>
                </div>
                  </form>
                  <!--End of login form-->
              </div>
              <div style="margin-top: 18px;"><span><strong>Create a Page</strong> for a celebrity, brand or business.</span></div>
            </div>
        </div>
    </div>

</body>
</html>
