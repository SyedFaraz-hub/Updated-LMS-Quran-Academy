<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My Profile</title>
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <link rel="stylesheet" href="../CSS/style.css">
  <link rel="stylesheet" href="../CSS/bootstrap.css">
  <script src="../Script/bootstrap.js"></script>
  <link rel="shortcut icon" type="image/jpg" href="../Images/logo.png" />
</head>

<body>
  <!-- <div class="container"> -->
  <!-- NAVBAR -->
  <header>
    <?php include '../Components/Navbar.php'; ?>
  </header>

  <!-- header end -->

  <!-- myprofile navbar start  -->
  <!-- MAIN FORM -->
  <div class="container container-Form height-78vh">
    <div class="box-container shadow height-bc">
      <div class="container container-heading">
        <h4 class="h4-1">My Profile</h4>
        <br>
        <div class="profile-img-editprofile">
          <img src="../Images/ProfileDemo.png">
        </div>
      </div>
      <div class="Edit-btn-Myprofile">
        <center>
          <button class="btn btn-outline-primary btn-sm mb-5px" type="submit"> <a class="underlineremove-and-colorwhite"
              href="./EditProfile.php"> Edit </a> </button>
          <button class="btn btn-outline-primary btn-sm" type="submit"> <a class="underlineremove-and-colorwhite"
              href="./UpdatePassword.php"> Change Password </a> </button>
        </center>
      </div>

      <div class="bio-data-row-myprofile">
        <div class="container">
          <div class="row row-col-2 row-col-2-myprofile ml-0px pb-10px">
            <div class="col text-align-left stylecol fw-bold"> First Name:</div>
            <div class="col text-align-right" >abc</div>
          </div>
          <div class="row row-col-2 row-col-2-myprofile ml-0px pb-10px">
            <div class="col text-align-left fw-bold">Last Name:</div>
            <div class="col text-align-right">xyz</div>
          </div>
          <div class="row row-col-2 row-col-2-myprofile ml-0px pb-10px">
            <div class="col text-align-left fw-bold">Email Address</div>
            <div class="col text-align-right">email@gmail.com</div>
          </div>
          <div class="row row-col-2 row-col-2-myprofile ml-0px pb-10px">
            <div class="col text-align-left fw-bold">Country</div>
            <div class="col text-align-right">Country abc</div>
          </div>
          <div class="row row-col-2 row-col-2-myprofile ml-0px pb-10px">
            <div class="col text-align-left fw-bold">State</div>
            <div class="col text-align-right">State abc</div>
          </div>
          <div class="row row-col-2 row-col-2-myprofile ml-0px pb-10px">
            <div class="col text-align-left fw-bold">City</div>
            <div class="col text-align-right">City abc</div>
          </div>

        </div>
      </div>


    </div>
  </div>






  <!-- FOOTERTOP -->

  <footer>
    <?php include '../Components/FooterTop.php'; ?>
  </footer>



  <!-- FOOTER -->

  <footer>
    <?php include '../Components/Footer.php'; ?>
  </footer>






</body>

</html>