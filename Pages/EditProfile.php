<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Profile</title>
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="stylesheet" href="../CSS/bootstrap.css">
  <script src="../Script/bootstrap.js"></script>
  <link rel="shortcut icon" type="image/jpg" href="../Images/logo.png"/>

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
  <div class="container container-Form">
   <div class="box-container shadow"> 
  <div class="container container-heading">
    <h4 class="h4-1">Edit Profile</h4><br>
    <div class="profile-img-editprofile">
        <img src="../Images/ProfileDemo.png">
        <div class="camera-box-editprofile">
          <i class="fas fa-camera"></i>
        </div>
      </div>
  </div>
   <div class="container containerForForm">
     <div class="container-form2">
       <form class="row g-3 ml-0px">
         <div class="col-md-12">
           <label for="inputEmail4" class="required form-label">First Name:</label>
           <input type="text" required class="form-control no-radius" placeholder="Enter First Name" id="inputEmail4">
         </div>
         <div class="col-12">
           <br><label for="inputAddress" class="required form-label">Last Name:</label>
           <input type="text" required class="form-control no-radius" id="#" placeholder="Enter Last Name">
         </div>
         <div class="col-12">
           <br><label for="inputAddress2" class="required form-label">Email:</label>
           <input type="email" class="form-control no-radius" id="#" placeholder="Enter Email Address">
         </div>
         <br>
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
         <br>
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
         <br>
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
           <br><button type="submit" class="btn btn-outline-primary mb-15px"> <a href="../Pages/Myprofile.php" class="underlineremove-and-colorwhite">Update</a></button>
         </div>

       </form>
     </div>
   </div>
 
  </div>
</div>

 

  <!-- profile card end -->


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
            <h2>Profile Updated Successfully</h2>
          </div>
        </div>
      </div>
    </div>
  </div>








  <!-- FOOTER -->

  <footer>
  <?php include '../Components/Footer.php'; ?>
  </footer>
