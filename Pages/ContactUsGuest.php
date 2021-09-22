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

  <title>Contact Us</title>
</head>

<body>
  <!-- NAVBAR -->
  <header>
  <?php include '../Components/NavbarGuest.php'; ?>
  </header>



 <!-- FORM -->


 <!-- MAIN FORM -->
 <div class="container container-Form">
   <div class="box-container shadow"> 
  <div class="container container-heading">
    <h4 class="h4-1">Contact Us</h4><br>
    <h7 class="h4-1">Got Any Queries? Fill the Form below</h7>
  </div>
   <div class="container containerForForm">
     <div class="container-form2">
       <form class="row g-3">
         <div class="col-md-12">
           <label for="inputEmail4" class="required form-label">Name:</label>
           <input type="text" required class="form-control no-radius" placeholder="Enter Your Name" id="inputEmail4">
         </div>
         <div class="col-12">
           <br><label for="inputAddress" class="required form-label">Email Address:</label>
           <input type="email" required class="form-control no-radius" id="#" placeholder="Enter Email Address">
         </div>
         <div class="col-12">
           <br><label for="inputAddress2" class="form-label">Subject:</label>
           <input type="text" class="form-control no-radius" id="#" placeholder="Enter Subject">
         </div>
         <div class="col-12">
           <br><label class="required" for="exampleFormControlTextarea1">Message:</label>
           <textarea class=" form-control no-radius" required placeholder="Enter your Message here"
             id="exampleFormControlTextarea1" rows="4"></textarea>
         </div>
         <div class="center col-15">
           <br><button type="submit" class="btn btn-outline-primary mb-15px" data-bs-toggle="modal" data-bs-target="#exampleModal"> <a class="underlineremove-and-colorwhite">Submit </a></button>
         </div>
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
            <i class="alert-contactus fa fa-exclamation-circle"></i>
          </div>
          <br>
          <div class="error-tag">
            <h2>Your query has been submitted!</h2>
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