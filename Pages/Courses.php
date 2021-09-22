<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Courses</title>
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <link rel="stylesheet" href="../CSS/style.css">
  <link rel="stylesheet" href="../CSS/bootstrap.css">
  <script src="../Script/bootstrap.js"></script>
  <link rel="shortcut icon" type="image/jpg" href="../Images/logo.png" />

</head>

<body>
  <!-- <div class="container"> -->
  <!-- header start -->
  <!-- NAVBAR -->
  <header>
    <?php include '../Components/Navbar.php'; ?>
  </header>

  <!-- header end -->

  <!-- search section start -->
  <section>
    <nav class="navbar navbar-light bg-white">
      <div class="container-fluid">
        <a class="navbar-brand"> <h2> Courses </h2></a>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search Course..." aria-label="Search">
          <i class="fas fa-search"></i>
        </form>
      </div>
    </nav>
  </section>
  <!-- search secion end -->

  <!-- horizontal line start -->
  <div class="hr1">
    <hr>
  </div>
  <!-- horizontal line end -->
  <!-- horizontal line start -->
  <div class="hr2">
    <hr>
  </div>
  <!-- horizontal line end -->

  <!-- section start  -->
  <div class="container">
    <div class="row row-cols-1 row-cols-md-3 g-4 ml-0px">
      <div class="col-lg-4 col-sm-6">
        <div class="card zoomEffect">
          <img src="../Images/Demo Course.jpg" class="card-img-top img-fluid" alt="..." />
          <div class="card-body">
            <h5 class="card-title">Course Abc</h5>
            <p class="card-text">
              This is a Course with supporting text below as a natural lead-in to
              additional content.
            </p>
            <h6>$100</h6>
            <h6>Course Instructor: <span>Abc</span></h6>
            <h6>Days: <span>Monday, Wednesday, Friday</span></h6>
            <center>
              <button class="btn btn-outline-primary my-4" ><a>Enroll</a></button>
            </center>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6">
        <div class="card zoomEffect">
          <img src="../Images/Demo Course.jpg" class="card-img-top img-fluid" alt="..." />
          <div class="card-body">
            <h5 class="card-title">Course Abc</h5>
            <p class="card-text">
              This is a Course with supporting text below as a natural lead-in to
              additional content.
            </p>
            <h6>$100</h6>
            <h6>Course Instructor: <span>Abc</span></h6>
            <h6>Days: <span>Monday, Wednesday, Friday</span></h6>
            <center>
              <button class="btn  btn-outline-success my-4">
                <i class="check-icon fa fa-check"></i> <a class="underlineremove-and-colorwhite"
                  href="./CourseDetails.php"> Enroll</a></button>
            </center>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6">
        <div class="card zoomEffect">
          <img src="../Images/Demo Course.jpg" class="card-img-top img-fluid" alt="..." />
          <div class="card-body">
            <h5 class="card-title">Course Abc</h5>
            <p class="card-text">
              This is a Course with supporting text below as a natural lead-in to
              additional content.
            </p>
            <h6>$100</h6>
            <h6>Course Instructor: <span>Abc</span></h6>
            <h6>Days: <span>Monday, Wednesday, Friday</span></h6>
            <center>
              <button class="btn btn-outline-secondary my-4" disabled><a>Applied</a></button>
            </center>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6">
        <div class="card zoomEffect">
          <img src="../Images/Demo Course.jpg" class="card-img-top img-fluid" alt="..." />
          <div class="card-body">
            <h5 class="card-title">Course Abc</h5>
            <p class="card-text">
              This is a Course with supporting text below as a natural lead-in to
              additional content.
            </p>
            <h6>$100</h6>
            <h6>Course Instructor: <span>Abc</span></h6>
            <h6>Days: <span>Monday, Wednesday, Friday</span></h6>
            <center>
              <button class="btn btn-outline-primary my-4"><a class="underlineremove-and-colorwhite"
                href="./CourseDetails - CourseClose.php">Completed</a></button>
            <button class="btn btn-outline-primary my-4" data-bs-toggle="modal"
              data-bs-target="#exampleModal"><a>Re-Enroll</a></button>
            </center>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6">
        <div class="card zoomEffect">
          <img src="../Images/Demo Course.jpg" class="card-img-top img-fluid" alt="..." />
          <div class="card-body">
            <h5 class="card-title">Course Abc</h5>
            <p class="card-text">
              This is a Course with supporting text below as a natural lead-in to
              additional content.
            </p>
            <h6>$100</h6>
            <h6>Course Instructor: <span>Abc</span></h6>
            <h6>Days: <span>Monday, Wednesday, Friday</span></h6>
            <center>
              <button class="btn btn-outline-primary my-4" ><a>Enroll</a></button>
            </center>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6">
        <div class="card zoomEffect">
          <img src="../Images/Demo Course.jpg" class="card-img-top img-fluid" alt="..." />
          <div class="card-body">
            <h5 class="card-title">Course Abc</h5>
            <p class="card-text">
              This is a Course with supporting text below as a natural lead-in to
              additional content.
            </p>
            <h6>$100</h6>
            <h6>Course Instructor: <span>Abc</span></h6>
            <h6>Days: <span>Monday, Wednesday, Friday</span></h6>
            <center>
              <button class="btn  btn-outline-success my-4">
                <i class="check-icon fa fa-check"></i> <a class="underlineremove-and-colorwhite"
                  href="./CourseDetails.php"> Enroll</a></button>
            </center>
          </div>
        </div>
      </div>
    </div>
  </div>




  <!-- ___________________EXTRA__________________- -->
  <!-- Modal Alert -->
  <!-- Button trigger modal -->


  <!-- MAIN Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <div class="join-courses-title">
            <h4>Join Courses</h4>
          </div>
          <button type="button" class="btn-close btn-close-color" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="error-tag">
            <h6>Your Request Will be Sent to admin Endroll in this coures?</h6>
          </div>
        </div>
        <div class="para-Error">
          <button class="btn modal-btn-1 btn-outline-primary" data-bs-target="#exampleModalToggle2"
            data-bs-toggle="modal" data-bs-dismiss="modal">Yes</button>
          <button class="btn modal-btn-2 btn-outline-primary" data-bs-target="#exampleModalToggle3"
            data-bs-toggle="modal" data-bs-dismiss="modal">Request For Demo</button>
        </div>
      </div>
    </div>
  </div>





  <!-- MODAL FOR YES -->
  <div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2"
    tabindex="-1">
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
            <h2>Course Enrollment Request Sent Successfully!</h2>
          </div>
          <div class="error-tag">
            <button type="submit" class="modal-btn-2 btn btn-outline-primary" data-bs-dismiss="modal"
              aria-label="Close">
              Ok
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- MODAL FOR YES -->
  <div class="modal fade" id="exampleModalToggle3" aria-hidden="true" aria-labelledby="exampleModalToggleLabel3"
    tabindex="-1">
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
            <h2>Demo Request Sent Successfully!</h2>
          </div>
          <div class="error-tag">
            <button type="submit" class="modal-btn-2 btn btn-outline-primary" data-bs-dismiss="modal"
              aria-label="Close">
              Ok
            </button>
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



  </div>
</body>

</html>