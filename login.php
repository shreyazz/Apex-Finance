<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
  <?php include "css/style.php" ?>
  <link rel="shortcut icon" href="./images/favicon.ico" type="image/x-icon">
  <title>Apex Finance</title>
</head>

<body>
  <div class="container">
    <p class="logo">Apex Finance</p>
    <p class="logo-2">Apex Finance</p>
    <div class="forms-container">
      <div class="signin-signup">
        <!--------------------------------Sign-In Page---------------------------->
        <form action="" method="post" class="sign-in-form">
          <h2 class="title">Sign in</h2>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Email" class="userNameSignIn" name="email_in">
            <!-- <img src="./images/error_1.svg" class="error errorUserNameLogIn"> -->

          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Password" class="passSignIn" name="pass_in">
            <!-- <img src="./images/error_1.svg" class="error errorPassLoginIn"> -->

          </div>
          <span class="forgot">Forgot Password?</span>
          <input type="submit" value="Login" class="btn solid submitLogIn" name="login">
          <p class="social-text">Or Sign in with social platforms</p>
          <div class="social-media">
            <a href="#" class="social-icon">
              <i class="fab fa-facebook-f"></i>
            </a>

            <a href="#" class="social-icon">
              <i class="fab fa-google"></i>
            </a>

          </div>
        </form>
        <!--------------------------------Sign-Up Page---------------------------->
        <form action="" method="post" class="sign-up-form">
          <h2 class="title">Sign up</h2>
          <div class="name">
            <div class="input-field nameDiv">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="First Name" class="firstNameSignUp" name="fname">
              <!-- <img src="./images/error_1.svg" class="error errorUserNameSignUp"> -->
            </div>
            <div class="input-field nameDiv">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Last Name" class="lastNameSignUp" name="lname">
              <!-- <img src="./images/error_1.svg" class="error errorUserNameSignUp"> -->
            </div>
          </div>
          <div class="input-field">
            <i class="fas fa-phone"></i>
            <input type="text" placeholder="Phone No." class="userNameSignUp" name="number">
            <!-- <img src="./images/error_1.svg" class="error errorUserNameSignUp"> -->

          </div>
          <div class="input-field">
            <i class="fas fa-envelope"></i>
            <input type="email" placeholder="Email" id="emailSignUp" autocomplete="off" name="email">
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Password" class="passSignUp" name="password">
          </div>
          <spam class="terms">By clicking on this button, you are agreeing our <span class="sub">Terms and Conditions</span></spam>
          <input type="submit" value="Sign up" class='btn' id="submitSignUp" name="btn">
          <p class="social-text">Or Sign up with social platforms</p>
          <div class="social-media">
            <a href="#" class="social-icon">
              <i class="fab fa-facebook-f"></i>
            </a>

            <a href="#" class="social-icon">
              <i class="fab fa-google"></i>
            </a>

          </div>
        </form>
      </div>
    </div>

    <div class="panels-container">
      <div class="panel left-panel">
        <div class="content">
          <h3>New here ?</h3>
          <p>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis,
            ex ratione. Aliquid!
          </p>
          <button class="btn-1 transparent" id="sign-up-btn">
            Sign up
          </button>
        </div>
        <img src="./images/graph_1.svg" class="image" alt="">
      </div>
      <div class="panel right-panel">
        <div class="content">
          <h3>One of us ?</h3>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum
            laboriosam ad deleniti.
          </p>
          <button class="btn-1 transparent" id="sign-in-btn">
            Sign in
          </button>
        </div>
        <img src="./images/laptop_1.svg" class="image image-wallet">
      </div>
    </div>
  </div>

  <script type="text/javascript">
    const sign_in_btn = document.querySelector("#sign-in-btn");
    const sign_up_btn = document.querySelector("#sign-up-btn");
    let container = document.querySelector(".container");
    // to toggle b/w sign-in and sign-up
    sign_up_btn.addEventListener("click", () =>
      container.classList.add("sign-up-mode")
    );

    sign_in_btn.addEventListener("click", () =>
      container.classList.remove("sign-up-mode")
    );
  </script>
</body>

</html>


<?php
include "server/connection.php";
// Signup Code 
if (isset($_POST['btn'])) {
  $fname = mysqli_real_escape_string($con, $_POST['fname']);
  $lname = mysqli_real_escape_string($con, $_POST['lname']);
  $phone = mysqli_real_escape_string($con, $_POST['number']);
  $email = mysqli_real_escape_string($con, $_POST['email']);
  $password = mysqli_real_escape_string($con, $_POST['password']);

  $blc = rand(10000,100000);

  $pin = rand(1000,9999);

  $acc = rand(10000,100000);

  $pass_encrpt = password_hash($password, PASSWORD_BCRYPT);

  $email_count = " select * from data where email= '$email'";
  $query = mysqli_query($con, $email_count);
  $email_row = mysqli_num_rows($query);

  $phone_count = " select * from data where phone = '$phone'";
  $p_query = mysqli_query($con, $phone_count);
  $phone_row = mysqli_num_rows($p_query);

  if ($email_row > 0) {
?>
    <script>
      alert("Email Already Exist");
    </script>
    <?php
  } else {
    if ($phone_row > 0) {
    ?>
      <script>
        alert("Phone Number Already Exist");
      </script>
      <?php
    } else {
      if (strlen($fname) > 0) {
        if (strlen($lname) > 0) {
          if (strlen($phone) == 0 && strlen($phone) < 10 || strlen($phone) > 10) {
            echo ("Please provide valid Phone Number.");
          }
          if (!preg_match('/^([A-Z a-z _@0-9]{8,20})$/', $password)) {
              ?>
                    <script>
                      alert("password must contain an uppercase, a lowercase, a special character and more than 8 characters.");
                    </script>
              <?php
          } else {
            $c_query = "insert into data(fname, lname, phone, email, password, blc, acc, pin) VALUES ('$fname','$lname','$phone','$email','$pass_encrpt', '$blc', '$acc', '$pin')";
            $res = mysqli_query($con, $c_query);
            if ($res) {
              echo ("Register Successfully");
            } else {
              echo ("Data Not Inserted!");
            }
          }
        }
      }
    }
  }
}
// Signup Code End

// Signin Code 
if (isset($_POST['login'])) {
  $email = $_POST['email_in'];
  $password = $_POST['pass_in'];

  $email_search = " select * from data where email = '$email'";
  $query_in = mysqli_query($con, $email_search);

  $email_count = mysqli_num_rows($query_in);
  if ($email_count) {
    $email_pass = mysqli_fetch_assoc($query_in);

    $dp_pass = $email_pass['password'];

    $_SESSION['fname'] = $email_pass['fname'];

    $_SESSION['blc'] = $email_pass['blc'];

    $_SESSION['id'] = $email_pass['id'];

    $pass_decode = password_verify($password, $dp_pass);

    if ($pass_decode) {
      ?>
      <script>
        location.replace("dashboard.php");
      </script>
    <?php
    } else {
    ?>
      <script>
        alert("Invalid Password");
      </script>
    <?php
    }
  } else {
    ?>
    <script>
      alert("Invalid Email");
    </script>
<?php
  }
}
// Signin Code End
?>