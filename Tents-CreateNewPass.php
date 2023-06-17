<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/log.css">
    <link rel="stylesheet" href="css/media.css">
    <link rel="icon" href="images\TENTS-ICON.png">
    <title>Create New Password - Tents</title>
</head>
<body>

<div id="login" class="center">

<form method="post" action="" name="login"><br><br>
    <br><p class="form-title">Create New Password</p>
    <p class="form-subtitle">Please create your new password make sure its<br>different from your previous password.</p><br><br>
    <input type="password" id="admin-acc-pass" name="password" autocomplete="off" placeholder="   New password"/><br>
    <input type="password" id="admin-acc-pass" name="cpassword" autocomplete="off" placeholder="   Confirm password"/><br>
        
        <div class="errorMsg">
            <!-- <?php echo $errorMsgLogin; ?> -->
        </div>
    <input type="submit" class="button" name="loginSubmit" value="Confirm"><br>
</form>
</div>

    <img class="log-logo" src="images/tents-login.png">
</body>
</html>