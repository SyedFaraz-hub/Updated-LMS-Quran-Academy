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
  <title>FP2</title>
</head>

<body>
   <!-- NAVBAR -->
   <header>
  <?php include '../Components/NavbarGuest.php'; ?>
  </header>

  <!-- LOGIN FORM -->
  <div class="container main-container-fp2">

    <div class="shadow p-3 mb-5 bg-white rounded container-heading-fp2 ">
      <div class="headings">
      <div class="UserLogin-fp2 ">
      <h6>Password Recovery</h6>
    </div>
      </div>
      <div class="form-1-fp2 ">
        <form class="form-fp2">
          <div class="mb-3">
            <label for="exampleInputEmail1" class="EmailFont EmailFont-fp2  form-label required ">Verification
              Code:</label>
            <input type="text" placeholder="Enter your Verification Code"
              class="EmailFont EmailFont-fp2 form-control no-radius-fp2 " id="exampleInputEmail1"
              aria-describedby="emailHelp">
          </div>
          <div class="bd-highlight mb-3" style="height: 200px;">
            <div class=" ">
              <div><a href="">Resend Code</a></div>
            </div>
            <div class="d-flex align-items-end flex-column bd-highlight mb-3" style="height: 200px;">
              <div class="p-2 bd-highlight forgot-pass-height-fp2  ">
                <div><a href="">Back to Log in</a></div>
              </div>
              <button type="submit" class="btn btn-fp2  btn-outline-primary">Continue</button>
        </form>

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


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
</body>

</html>