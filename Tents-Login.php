<?php
  session_start();
  include("connect.php");

  if(isset($_POST['loginSubmit']))
  {
    $email = $_POST['usernameEmail'];
    $password = $_POST['passw'];
    $errorMsg = "";

    try
    {
      if(!filter_var($email, FILTER_VALIDATE_EMAIL))
      {
        $stmt = $connection->prepare("SELECT *, COUNT(*) AS numrows FROM users WHERE username = ?");
      }
      else
      {
        $stmt = $connection->prepare("SELECT *, COUNT(*) AS numrows FROM users WHERE email = ?");
      }
      
      $stmt->execute(array($email));
      $row = $stmt->fetch(PDO::FETCH_OBJ);

      if($row->numrows > 0)
      {
        if($row->email == $email || $row->username == $email && password_verify($password, $row->password))
        {
          $_SESSION["email"] = $email;
          $_SESSION["username"] = $email;
          echo '<script type = "text/javascript">
                  alert("Login successfully!"); window.location.href="Tents-Categories.php";
                </script>';
        }
        else
        {
          $errorMsg = "Incorrect email and password.";
        }
      }
      else
      {
        $errorMsg = "Invalid email and password.";
      }
    }
    catch(PDOException $e)
    {
      echo "There is some problem in connection: ".$e->getMessage();
    }
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/log.css">
    <link rel="stylesheet" href="css/media.css">
    <link rel="icon" href="images/TENTS-ICON.png">
    <script src="Tents.js"></script>
    <title>Login - Tents Accounts</title>
</head>
<body>

<div id="mySidebar" class="sidebar">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">☰</a>
  <a href="index.php"><img class="logo-nav" src="images/tents-index.png"></a><br>
  <a href="index.php">Home</a><br>
  <a href="#">Analytics</a><br>
  <a href="#">Contact Us</a><br>
</div>

<div id="login main" class="center">

<form method="post" action="" name="login">
    <br><p class="form-title">Login</p>
    <p class="form-subtitle">We're happy to see you back again!</p><br>
    <input type="text" id="usernameEmail" name="usernameEmail" autocomplete="off" placeholder="   Enter email address" required value="<?php echo isset($_POST['usernameEmail']) ? htmlspecialchars($_POST['usernameEmail'], ENT_QUOTES) : ''; ?>"/><br>
    <input type="password" id="passw" name="passw" autocomplete="off" placeholder="   Enter password" required value="<?php echo isset($_POST['passw']) ? htmlspecialchars($_POST['passw'], ENT_QUOTES) : ''; ?>"/><br>
    <a href="Tents-Forgot.php"><p class="form-forgot-pass">Forgot Password</p></a><br><br>
        
        <div class="errorMsg">
            <?php echo ((isset($errorMsg) && $errorMsg != '') ? $errorMsg : ''); ?>
        </div>
    <input type="submit" class="button" name="loginSubmit" id="loginSubmit" value="Login"><br>
    <a href="Tents-SignUp.php">Create an Account</a>
</form>
</div>

    <img class="log-logo" src="images/tents-login.png">
<button class="openbtn" onclick="openNav()">☰</button>     

<script>

function openNav() {
  document.getElementById("mySidebar").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
  document.getElementById("mySidebar").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}

</script>
</body>
</html>