<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../CSS/style.css">
  <link rel="stylesheet" href="../CSS/bootstrap.css">
  <script src="../Script/bootstrap.js"></script>
  <link rel="shortcut icon" type="image/jpg" href="../Images/logo.png"/>

  <title>FP1</title>
</head>

<body>
   <!-- NAVBAR -->
   <header>
  <?php include '../Components/NavbarGuest.php'; ?>
  </header>


  <!-- LOGIN FORM -->
  <div class="container main-container-fp1">
    <div class="shadow p-3 mb-5 bg-white rounded container-heading-fp1">
      <div class="headings">
           <div class="UserLogin-fp1">
      <h6>Password Recovery</h6>
    </div>
      </div>
      <div class="form-1-fp1">
        <form class="form-fp1">
          <div class="mb-3">
            <label for="exampleInputEmail1" class="EmailFont-fp1 EmailFont form-label required ">Email Address:</label>
            <input type="email" placeholder="Enter your Email"
              class="EmailFont-fp1 EmailFont form-control no-radius-fp1" id="exampleInputEmail1"
              aria-describedby="emailHelp">
          </div>
          <button type="submit" class="btn-fp1 btn btn-outline-primary">Continue</button>
        </form>
        <div class="d-flex align-items-end flex-column bd-highlight mb-3" style="height: 200px;">
          <div class="p-2 bd-highlight forgot-pass-height-fp1 ">
            <div><a href="../Pages/Login.php">Back to Log in</a></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>

  <!-- FOOTER -->

  <footer>
  <?php include '../Components/Footer.php'; ?>
  </footer>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
</body>

</html>