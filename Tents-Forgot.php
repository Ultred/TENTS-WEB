<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/log.css">
    <link rel="stylesheet" href="css/media.css">
    <link rel="icon" href="images\TENTS-ICON.png">
    <title>Forgot password - Tents</title>
</head>
<body>

<div id="login" class="center">

<form method="post" action="" name="login"><br><br>
    <br><p class="form-title">Forgot Password</p>
    <p class="form-subtitle">Please enter your email address and we'll<br> send you a link to reset your password.</p><br><br>
    <input type="text" id="admin-acc-email" name="usernameEmail" autocomplete="off" placeholder="   Enter email address"/><br>
        
        <div class="errorMsg">
            <!-- <?php echo $errorMsgLogin; ?> -->
        </div>
    <input type="submit" class="button" name="loginSubmit" value="Send"><br>
</form>
</div>

    <img class="log-logo" src="images/tents-login.png">
</body>
</html>