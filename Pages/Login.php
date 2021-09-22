<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
  integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <link rel="stylesheet" href="../CSS/style.css">
  <link rel="stylesheet" href="../CSS/bootstrap.css">
  <script src="../Script/bootstrap.js"></script>
  <link rel="shortcut icon" type="image/jpg" href="../Images/logo.png"/>

  <title>Login</title>
</head>

<body>
   <!-- NAVBAR -->
   <header>
  <?php include '../Components/NavbarGuest.php'; ?>
  </header>

  <!-- LOGIN FORM -->
  <div class="container main-container-login">
    <div class="shadow p-3 mb-5 bg-white rounded container-heading-login">
      <div class="form-1-login">
        <div class="headings-login">
          <div class="UserLogin-login">
            <h6>User Login</h6>
            <p>If you have an account, sign in with your email address.</p>
          </div>
        </div>
        <form>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label required ">Email Address:</label>
            <input type="email" placeholder="Enter your Email" class="form-control no-radius-login"
              id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label required">Password:</label>
            <input type="password" placeholder="Enter your Password" class="form-control no-radius-login"
              id="exampleInputPassword1">
          </div>
          <button type="submit" class="btn-login btn btn-outline-primary"> <a class="underlineremove-and-colorwhite"
              href="./Home.php"> Sign In </a> </button>
        </form>
        <div class="d-flex align-items-end flex-column bd-highlight mb-3" style="height: 200px;">
          <div class="p-2 bd-highlight">
            <div><a href="./FP1.php">Forgot Passoword? </a></div>
          </div>
          <div class="p-2 bd-highlight">
          </div><a href="./Sign Up.php">New Here? Register your Account </a>
        </div>
      </div>
    </div>
  </div>
  </div>
  </div>

  
  <!-- FOOTERTOP -->

  <footer>
    <?php include '../Components/FooterTopGuest.php'; ?>
  </footer>

  <!-- FOOTER -->

  <footer>
  <?php include '../Components/Footer.php'; ?>
  </footer>



</body>

</html>