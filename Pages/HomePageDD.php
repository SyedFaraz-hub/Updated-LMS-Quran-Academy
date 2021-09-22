<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home page DD</title>
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="stylesheet" href="../CSS/bootstrap.css">
  <script src="../Script/bootstrap.js"></script>
  <link rel="shortcut icon" type="image/jpg" href="../Images/logo.png"/>

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
        <a class="navbar-brand">Courses</a>
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
  <div class="container-fluid">
    <div class="main-section">
      <div class="sub1-section">
        <div class="row">
          <div class="col-4">
            <div class="picborder">
              <img src="../Images/Demo Course.PNG">
              <button class="btn btn-outline-primary" data-bs-toggle="modal"
                data-bs-target="#exampleModal"><a>Enroll</a></button>
            </div>
          </div>
          <div class="col-8">
            <div class="headingcourse">
              <h1>Course abc</h1>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet.</p>
              <h5>$123</h5>
              <h5>Instructor:<span>Instructor abc</span></h5>
              <h5>Days:<span>Monday, Tuesday, Wednesday</span></h5>
            </div>
          </div>
        </div>
      </div>
      <div class="sub2-section">
        <div class="row">
          <div class="col-4 ">
            <div class="picborder">
              <img src="../Images/Demo Course.PNG">
              <button class="btn  btn-outline-success">
                <i class="check-icon fa fa-check"></i> <a class="underlineremove-and-colorwhite"
                  href="./CourseDetails.php"> Enroll</a></button>

            </div>
          </div>
          <div class="col-8">
            <div class="headingcourse">
              <h1>Course abc</h1>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet.</p>
              <h5>$123</h5>
              <h5>Instructor:<span>Instructor abc</span></h5>
              <h5>Days:<span>Monday, Tuesday, Wednesday</span></h5>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- section1 and 2 end -->

  <!-- section3 and section4 start -->
  <div class="container-fluid">
    <div class="main-section">
      <div class="sub1-section">
        <div class="row">
          <div class="col-4">
            <div class="picborder">
              <img src="../Images/Demo Course.PNG">
              <button class="btn btn-secondary" disabled><a>Applied</a></button>
            </div>
          </div>
          <div class="col-8">
            <div class="headingcourse">
              <h1>Course abc</h1>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet.</p>
              <h5>$123</h5>
              <h5>Instructor:<span>Instructor abc</span></h5>
              <h5>Days:<span>Monday, Tuesday, Wednesday</span></h5>
            </div>
          </div>
        </div>


      </div>
      <div class="sub2-section">
        <div class="row">
          <div class="col-4">
            <div class="picborder">
              <img src="../Images/Demo Course.PNG">
              <button class="btn btn-outline-primary"><a class="underlineremove-and-colorwhite reduce-compelete-btn"
                  href="./CourseDetails - CourseClose.php">Completed</a></button>
              <button class="btn btn-outline-primary" data-bs-toggle="modal"
                data-bs-target="#exampleModal"><a>Re-Enroll</a></button>
            </div>
          </div>
          <div class="col-8">
            <div class="headingcourse">
              <h1>Course abc</h1>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet.</p>
              <h5>$123</h5>
              <h5>Instructor:<span>Instructor abc</span></h5>
              <h5>Days:<span>Monday, Tuesday, Wednesday</span></h5>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- section3 and 4 end -->

  <!-- horizontal line start -->
  <div class="hr2">
    <hr>
  </div>
  <!-- horizontal line end -->

  <!-- section5 and6 start -->
  <div class="container-fluid">
    <div class="main-section">
      <div class="sub1-section">
        <div class="row">
          <div class="col-4">
            <div class="picborder">
              <img src="../Images/Demo Course.PNG">
              <button class="btn btn-outline-primary" data-bs-toggle="modal"
                data-bs-target="#exampleModal"><a>Enroll</a></button>
            </div>
          </div>
          <div class="col-8">
            <div class="headingcourse">
              <h1>Course abc</h1>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet.</p>
              <h5>$123</h5>
              <h5>Instructor:<span>Instructor abc</span></h5>
              <h5>Days:<span>Monday, Tuesday, Wednesday</span></h5>
            </div>
          </div>
        </div>
      </div>
      <div class="sub2-section">
        <div class="row">
          <div class="col-4">
            <div class="picborder">
              <img src="../Images/Demo Course.PNG">
              <button class="btn  btn-outline-success">
                <i class="check-icon fa fa-check"></i> <a class="underlineremove-and-colorwhite"
                  href="./CourseDetails.php"> Enroll</a></button>
            </div>
          </div>
          <div class="col-8">
            <div class="headingcourse">
              <h1>Course abc</h1>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet.</p>
              <h5>$123</h5>
              <h5>Instructor:<span>Instructor abc</span></h5>
              <h5>Days:<span>Monday, Tuesday, Wednesday</span></h5>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- section5 and 6 end -->


  <!-- ___________________btn-outline-primary__________________- -->
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
          <button class="btn modal-btn-1 btn-outline-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal"
            data-bs-dismiss="modal">Yes</button>
          <button class="btn modal-btn-2 btn-outline-primary" data-bs-target="#exampleModalToggle3" data-bs-toggle="modal"
            data-bs-dismiss="modal">Request For Demo</button>
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
            <button type="submit" class="modal-btn-2 btn btn-outline-primary" data-bs-dismiss="modal" aria-label="Close">
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
            <button type="submit" class="modal-btn-2 btn btn-outline-primary" data-bs-dismiss="modal" aria-label="Close">
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