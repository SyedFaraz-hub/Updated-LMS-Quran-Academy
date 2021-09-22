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

  <title>Update Password</title>
</head>

<body>
  <!-- NAVBAR -->
  <header>
  <?php include '../Components/Navbar.php'; ?>
  </header>


  <!-- LOGIN FORM -->
  <div class="container main-container-fp3 height-fix">
    <div class="shadow p-3 mb-5 bg-white rounded container-heading-fp3 mb-20 height-445">
      <div class="headings">
      <div class="UserLogin-fp3 ">
      <h6>Update Password</h6>
    </div>
      </div>
      <div class="form-1-fp3">
        <form class="form-fp3">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="EmailFont-fp3 EmailFont form-label required ">Current Password</label>
            <input type="password" placeholder="Enter New Password"
              class="EmailFont EmailFont-fp3 form-control no-radius-fp3" id="exampleInputEmail1">
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="EmailFont-fp3 EmailFont form-label required ">New Password</label>
            <input type="password" placeholder="Enter New Password"
              class="EmailFont EmailFont-fp3 form-control no-radius-fp3" id="exampleInputEmail1">
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="EmailFont  EmailFont-fp3  form-label required ">Confirm
              Password</label>
            <input type="password" placeholder="Confirm Password"
              class="EmailFont EmailFont-fp3  form-control no-radius-fp3" id="exampleInputEmail1">
          </div>
          <center> 
          <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"
           class="btn btn-fp3 btn-outline-primary">Update</button> </center>
           <br> 
        </form>
      </div>
    </div>
  </div>
  </div>



  <!-- ___________________EXTRA__________________- -->
  <!-- Modal Alert -->
  <!-- Button trigger modal -->

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="btn-close btn-close-color" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="icongreentick">
            <i class="fa fa-check-circle"></i>
          </div>
          <div class="error-tag">
            <h2>Password Updated Successfully</h2>
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


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
</body>

</html>