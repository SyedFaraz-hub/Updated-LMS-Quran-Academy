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

  <title>Sign Up</title>
</head>

<body>
   <!-- NAVBAR -->
   <header>
  <?php include '../Components/NavbarGuest.php'; ?>
  </header>

  

  <!-- MAIN FORM -->
 <div class="container container-Form">
   <div class="box-container shadow"> 
  <div class="container container-heading">
    <h4 class="h4-1">Sign Up</h4><br>
    <h6 >Become a Member</h6>
    <p>If you are new here, we are glad to have you as our member.</p>
  </div>
   <div class="container containerForForm">
     <div class="container-form2">
       <form class="row g-3">
         <div class="col-md-12">
           <label for="inputEmail4" class="required form-label">First Name:</label>
           <input type="text" required class="form-control no-radius" placeholder="Enter Your First Name" id="inputEmail4">
         </div>
         <div class="col-12">
           <br><label for="inputAddress" class="required form-label">Last Name:</label>
           <input type="text" required class="form-control no-radius" id="#" placeholder="Enter Last Name">
         </div>
         <div class="col-12">
           <br><label for="inputAddress2" class="required form-label">Email:</label>
           <input type="email" class="form-control no-radius" id="#" placeholder="Enter Email Address">
         </div>
         <div class="col-12">
           <br><label for="inputAddress2" class="required form-label">Password:</label>
           <input type="password" class="form-control no-radius" id="#" placeholder="Enter Password">
         </div>
         <div class="col-12">
           <br><label for="inputAddress2" class=" required form-label">Confirm Password:</label>
           <input type="password" class="form-control no-radius" id="#" placeholder="Enter Confirm Password">
         </div>
         <div class="col-12">
          <label for="inputPassword3" class="col-sm-2 col-form-label">Country</label>  
          <select id="inputState" class="form-select">
            <option selected>Select</option>
            <option>Country abc</option>
            <option>Country abc</option>
            <option>Country abc</option>
            <option>Country abc</option>
          </select>
         </div>
         <div class="col-12">
          <label for="inputPassword3" class=" required col-sm-2 col-form-label">State</label>
            
          <select id="inputState" class="form-select">
            <option selected>Select</option>
            <option>State abc</option>
            <option>State abc</option>
            <option>State abc</option>
            <option>State abc</option>
          </select>
         </div>
         <div class="col-12">
          <label for="inputPassword3" class="required col-sm-2 col-form-label">City</label>
            
          <select id="inputState" class="form-select">
            <option selected>Select</option>
            <option>City abc</option>
            <option>City abc</option>
            <option>City abc</option>
            <option>City abc</option>
          </select>
         </div>

         <div class="center col-15">
           <br><button type="submit" class="btn btn-outline-primary mb-15px"> <a class="underlineremove-and-colorwhite">Sign Up </a></button>
         </div>

       </form>
       <div  class="toLogin">
        <a href="../Pages/Login.php">Already Have an Account? Log in</a>
      </div>
     </div>
   </div>
 
  </div>
</div>


  <!-- FOOTER -->

  <footer>
  <?php include '../Components/Footer.php'; ?>
  </footer>



</body>

</html>