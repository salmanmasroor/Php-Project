<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facebook-Forget Password</title>
    <link rel="stylesheet" href="desgin/forget_password.css">
</head>
<body>
<div class="container">
    <h2>Reset your Password</h2>
    <form action="../controller/forget_password.php" method="post">
        <input type="text" placeholder="Email" name="Email"><br>
        <input type="password" placeholder="Reset Password" name="reset_password"><br>
        <input type="submit" name="reset_submit">
    </form>
</div>
</body>
</html>