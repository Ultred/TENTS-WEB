<?php
   include("connect.php");

  if(isset($_POST['submitForm']))
  {
    $email = $_POST["mail"];
    $password = $_POST["pass"];
    $firstname = $_POST["fname"];
    $lastname = $_POST["lname"];
    $organization = $_POST["orga"];
    $phoneNum = $_POST["num"];
    $username = $_POST["uname"];
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $data = [
      'firstname' => $firstname,
      'lastname' => $lastname,
      'email' => $email,
      'username' => $username,
      'password' => $hashed_password,
      'organization' => $organization,
      'phone' => $phoneNum
    ];

    $sql = "INSERT INTO users (email, username, password, firstname, lastname, organization, phone) VALUES (:email, :username, :password, :firstname, :lastname, :organization, :phone)";
    $stmt = $connection->prepare($sql);
    $stmt->execute($data);
    echo '<script type = "text/javascript">',
            'alert("Registered successfully!"); window.location.href="Tents-Login.php";',
            '</script>'; //successful registration
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"  />
    <link rel="stylesheet" href="css/signup.css" />
    <link rel="icon" href="images\TENTS-ICON.png" />
    <script src="Tents.js"></script>
    <title>Sign Up</title>
  </head>
  <body>
    <form action="" method="POST" enctype="multipart/form-data" id="signup_form">
      <div class="invi">
        <!--------------------------------- SignUp-Form  -->
        <div class="step-row">
          <div id="progress"></div>
          <div class="step-col">
            <p><i class="fa-regular fa-user"></i>1. Personal Details
            </p>
          </div>
          <div class="step-col"><p><i class="fa-solid fa-user-check"></i>2. Confirmation</p></div>
        </div>
        <section class="signup">
          <div id="form1" class="signup-container">
            <div class="signup-container1">
              <!------------------------- Input textfield for Personal Details -->
              <h1 class="title">Personal Details</h1>
              <div class="signup-input-container">
                <div class="signup-input">
                  <div>
                    <p class="signup-headline">First Name</p>
                    <input type="text" placeholder="First Name" name="firstname" id="firstname" required autocomplete="off" value="<?php echo isset($_POST['firstname']) ? htmlspecialchars($_POST['firstname'], ENT_QUOTES) : ''; ?>"/>
                  </div>
                  <div>
                    <p class="signup-headline">Username</p>
                    <input type="text" placeholder="Username" name="username" id="username" required autocomplete="off" value="<?php echo isset($_POST['username']) ? htmlspecialchars($_POST['username'], ENT_QUOTES) : ''; ?>"/>
                  </div>
                  <div>
                    <p class="signup-headline">Organization</p>
                    <input type="text" placeholder="Organization" name="organization" id="oraganization" required autocomplete="off" value="<?php echo isset($_POST['organization']) ? htmlspecialchars($_POST['organization'], ENT_QUOTES) : ''; ?>"/>
                  </div>
                  <div>
                    <p class="signup-headline">Password</p>
                    <input type="password" placeholder="Password" name="password" id="password" required autocomplete="off" value="<?php echo isset($_POST['password']) ? htmlspecialchars($_POST['password'], ENT_QUOTES) : ''; ?>"/>
                  </div>
                  <div id="error-message" name="error-message" class="error"><?php echo ((isset($errorMsg) && $errorMsg != '') ? $errorMsg : ''); ?></div>
                </div>

                <div class="signup-input">
                  <div>
                    <p class="signup-headline">Last Name</p>
                    <input type="text" placeholder="Last Name" name="lastname" id="lastname" required autocomplete="off" value="<?php echo isset($_POST['lastname']) ? htmlspecialchars($_POST['lastname'], ENT_QUOTES) : ''; ?>"/>
                  </div>
                  <div>
                    <p class="signup-headline">Email</p>
                    <input type="email" placeholder="Email" name="Email" id="Email" required autocomplete="off" value="<?php echo isset($_POST['Email']) ? htmlspecialchars($_POST['Email'], ENT_QUOTES) : ''; ?>"/>
                  </div>
                  <div>
                    <p class="signup-headline">Phone Number</p>
                    <input type="number" placeholder="Phone Number" name="number" id="number" required autocomplete="off" value="<?php echo isset($_POST['number']) ? htmlspecialchars($_POST['number'], ENT_QUOTES) : ''; ?>"/>
                  </div>
                  <div>
                    <p class="signup-headline">Confirm Password</p>
                    <input type="password" placeholder="Confirm Password" name="confirmpass" id="confirmpass" required autocomplete="off" value="<?php echo isset($_POST['confirmpass']) ? htmlspecialchars($_POST['confirmpass'], ENT_QUOTES) : ''; ?>"/>
                  </div>
                </div>
              </div>

              <div class="signup-button">
                <a href="Tents-Login.php"><input type="button" class="button-back" value="Back"/></a>
                <input type="submit" class="button-submit" name ="continue" id="continue" value="Continue" />
              </div>
            </div>
          </div>
          </form>

          <!-- Confirmation  -->
          <?php 
          if(isset($_POST['continue']))
          {
              $lowerCaseLetters = "/[a-z]/";
              $upperCaseLetters = "/[A-Z]/";
              $numbers = "/[0-9]/";
              $specialCharacters = "/[-._~*]/";

              $email = $_POST["Email"];
              $password = $_POST["password"];
              $confirmpass = $_POST["confirmpass"];
              $firstname = $_POST["firstname"];
              $lastname = $_POST["lastname"];
              $organization = $_POST["organization"];
              $phoneNum = $_POST["number"];
              $numlength = strlen((string)$phoneNum);
              $username = $_POST["username"];
              $errorMsg = "";
              $hashed_password = password_hash($confirmpass, PASSWORD_DEFAULT);

              if(empty($_POST["firstname"]) || empty($_POST["username"]) || empty($_POST["organization"]) || empty($_POST["password"]) || empty($_POST["lastname"]) || empty($_POST["Email"]) || empty($_POST["number"]) || empty($_POST["confirmpass"]))
              {
                echo '<script>alert("Please fill out all required fields.")</script>';
              }

              if(!filter_var($email, FILTER_VALIDATE_EMAIL))
              {
                $errorMsg = "Invalid email format. Try again.";
              }

              if($numlength < 11 || $numlength > 11 || (!preg_match('/^[0-9]{11}+$/', $phoneNum)))
              {
                $errorMsg = "Invalid phone number.";

              }

              if(strlen($password) < 8)
              {
                $errorMsg = "Password must contain at least 8 characters.";
              }
              
              if(!preg_match($lowerCaseLetters, $password))
              {
                $errorMsg = "Password must contain lowercase letter.";
              }

              if(!preg_match($upperCaseLetters, $password))
              {
                $errorMsg = "Password must contain uppercase letter.";
              }

              if(!preg_match($numbers, $password))
              {
                $errorMsg = "Password must contain at least one number.";
              }

              if($password != $confirmpass)
              {
                $errorMsg = "Password did not match.";
              }

              $stmt = $connection->prepare("SELECT * FROM users WHERE email=:email");
              $stmt->execute([':email' => $email]);

              if($stmt->rowCount() > 0)
              {
                $errorMsg = "User already exist.";
              }
              else
              {
            }
          ?>
          <form action="" method="POST" enctype="multipart/form-data" id="confirmation">
          <div id="form2" class="signup-container">
            <div class="signup-container1">
              <h1 class="title">Confirmation</h1>
              <div class="signup-input-container">
                <div class="signup-input">
                  <div>
                    <p class="signup-headline">First Name:</p>
                    <input class="signup-output" name="fname" id="fname" readonly value="<?php echo isset($_POST['firstname']) ? htmlspecialchars($_POST['firstname'], ENT_QUOTES) : ''; ?>"></input>
                  </div>
                  <div>
                    <p class="signup-headline">UserName:</p>
                    <input class="signup-output" name="uname" id="uname" readonly value="<?php echo isset($_POST['username']) ? htmlspecialchars($_POST['username'], ENT_QUOTES) : ''; ?>"></input>
                  </div>
                  <div>
                    <p class="signup-headline">Organization:</p>
                    <input class="signup-output" name="orga" id="orga" readonly value="<?php echo isset($_POST['organization']) ? htmlspecialchars($_POST['organization'], ENT_QUOTES) : ''; ?>"></input>
                  </div>
                  <div>
                    <p class="signup-headline">Password:</p>
                    <input type ="password" class="signup-output" name="pass" id="pass" readonly  value="<?php echo isset($_POST['password']) ? htmlspecialchars($_POST['password'], ENT_QUOTES) : ''; ?>"></input>
                  </div>
                </div>

                <div class="signup-input">
                  <div>
                    <p class="signup-headline">Last Name:</p>
                    <input class="signup-output" name="lname" id="lname" readonly  value="<?php echo isset($_POST['lastname']) ? htmlspecialchars($_POST['lastname'], ENT_QUOTES) : ''; ?>"></input>
                  </div>
                  <div>
                    <p class="signup-headline">Email:</p>
                    <input class="signup-output" name="mail" id="mail" readonly  value="<?php echo isset($_POST['Email']) ? htmlspecialchars($_POST['Email'], ENT_QUOTES) : ''; ?>"></input>
                  </div>
                  <div>
                    <p class="signup-headline">Phone Number:</p>
                    <input class="signup-output" name="num" id="num" readonly  value="<?php echo isset($_POST['number']) ? htmlspecialchars($_POST['number'], ENT_QUOTES) : ''; ?>"></input>
                  </div>
                </div>
              </div>
              <div class="flex">
                <input type="checkbox" name="" id="check" required /> I have read and agree to <span>Terms and Conditions</span>
              </div>
              <div id="error-message" name="error-message" class="error"><?php echo ((isset($errorMsg) && $errorMsg != '') ? $errorMsg : ''); ?>
              </div>
              <div class="signup-button">
                <input
                  type="button" class="button-back" id="back1" name="back1" value="Back"/>
                <input class="button-submit" id="submitForm" value="Submit" name="submitForm" type="submit"/>
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>
    <?php
        echo '<script>
              form1.style.left = "-150%";
              form2.style.visibility = "visible";
              form1.style.visibility = "hidden";
              form2.style.left = "0%";
              progress.style.left = "189.5px";
          </script>';
        }
    ?>

    <script>
      let form1 = document.getElementById("form1");
      let form2 = document.getElementById("form2");

      let next1 = document.getElementById("continue");
      let next2 = document.getElementById("next2");

      let back1 = document.getElementById("back1");
      let back2 = document.getElementById("back2");

      let progress = document.getElementById("progress");

      back1.onclick = function () {
        form1.style.left = "0%";
        form1.style.visibility = "visible";
        form2.style.visibility = "hidden";
        form2.style.left = "150%";
        progress.style.left = "0px";
      };
    </script>
  </body>
</html>
