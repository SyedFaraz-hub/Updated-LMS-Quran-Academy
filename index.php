<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/53ccbcfe01.js" crossorigin="anonymous"></script>
    <!-- below owl carousel css links are used -->
    <!-- MAIN CSS FILE -->
    <link rel="stylesheet" href="./CSS/style.css">
    <link rel="stylesheet" href="./CSS/bootstrap.css">
    <script src="./Script/bootstrap.js"></script>
    <link rel="shortcut icon" type="image/jpg" href="../Images/logo.png"/>


    <title>Home Page Guest</title>
</head>

<body>
    <!-- NAVBAR -->
    <header>
        <nav class="navbar navbar-expand-lg  navbar-dark">
            <div class="container-fluid">
            <a class="navbar-brand" href="#"> <img src="./Images/Logo.png" width="100px" alt="Logo"> </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse mr-auto" id="navbarNav">

                    <div class="mx-auto"></div> <!-- margin auto for nav right -->

                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" href="./Pages/HomePageGuest.php">Home</a>
                        </li>

                        
                        <li class="nav-item">
                            <a class="nav-link active" href="./Pages/Courses Guest .php">Courses</a>
                        </li>

                        

                        <li class="nav-item">
                            <a class="nav-link active" href="./Pages/ContactUsGuest.php">Contact Us</a>
                        </li>

                        

                        <li class="nav-item">
                            <a class="nav-link active" href="./Pages/Login.php">Login</a>
                        </li>

                        

                        <li class="nav-item">
                            <a class="nav-link active" href="./Pages/Sign Up.php">Sign Up</a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
    </header>




    <!-- carousel slider start -->
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="./Images/Slides/Slide1.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>First slide label</h5>
              <p>Some representative placeholder content for the first slide.</p>
              <button type="button" class="btn btn-primary"> <a href="#aboutLink" class="underlineremove-and-colorwhite color-white text-light">About us</a> </button>
            </div>
          </div>
          <div class="carousel-item">
            <img src="./Images/Slides/Slide2.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Second slide label</h5>
              <p>Some representative placeholder content for the second slide.</p>
              <button type="button" class="btn btn-primary"> <a href="#coursesLink" class="underlineremove-and-colorwhite text-light">Courses</a> </button>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    <!-- carousel slider end -->


    <!-- ----Marqueee----- -->
    <Section class="Slider">
        <?php include "./Components/Marquee.php";  ?>
   </Section>


    <!-- aboutus section start -->
    <div class="aboutus-section">
        <div class="row row-col-2">
            <div class="col-lg-4 col-md-12 col-sm-12">
                <div class="aboutus-image">
                    <img class="img-fluid" src="./Images/DemoPerson.jpg">
                </div>
            </div>
            <div class="col-lg-8 col-md-12 col-sm-12">
                <div class="aboutus-heading-para fadeInRight animated">
                    <h1 id="aboutLink">About Us</h1>
                    <br>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet.
                        Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales
                        pulvinar tempor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur
                        ridiculus mus</p>
                    <p>Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus
                        sapien nunc eget odio. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean
                        euismod
                        bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo.
                        Proin sodales pulvinar tempor.
                        Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam
                        fermentum,
                        nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus sapien nunc eget
                        odio.
                        Lorem ipsum dolor sit amet,
                        consectetur adipiscing elit. Aenean euismod bibendum laoreet.
                        Proin gravida dolor sit amet lacus accumsan et viverra
                        justo commodo. Proin sodales pulvinar tempor</p>
                    <p>Cum sociis natoque penatibus et magnis
                        dis parturient montes, nascetur ridiculus mus. Nam fermentum,
                        nulla luctus pharetra vulputate, felis tellus mollis orci, sed
                        rhoncus sapien nunc eget odio. Lorem ipsum dolor sit amet, consectetur
                        adipiscing elit. Aenean euismod bibendum laoreet</p>
                </div>
            </div>

        </div>
    </div>
    <!-- about us section end -->

    <br>
     <br>
    <div class="container">
          <div class="heading-courses">
              <h1 id="coursesLink">Courses</h1>
          </div>
    </div>

    <!-- carousel start for last section of home page -->
    <div class="container-fluid">
        <div class="owl-container">
            <div class="owl-carousel owl-theme">
                <div class="item">
                    <!-- Row for enroll card -->
                    <div class="row row-col-2">

                        <div class="col-lg-4 col-md-12 col-sm-12">
                            <div class="course-enroll-card">
                                <img class="img-fluid" src="./Images/Demo Course.jpg">
                                <button class="btn btn-outline-primary" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal"><a>Enroll</a></button>
                            </div>
                        </div>

                        <div class="col-lg-8 col-md-12 col-sm-12">
                            <div class="course-card-heading">
                                <h5>Course abc</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum
                                    laoreet.</p>
                                <h5>$123</h5>
                                <h5>Instructor: <span>Instructor abc</span> </h5>
                                <h5>Days: <span>Monday, Tuesday, Wednesday</span> </h5>
                                <h5>Timing: <span>00:00 PM to 00:00 PM</span> </h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <!-- Row for enroll card -->
                    <div class="row row-col-2">

                        <div class="col-lg-4 col-md-12 col-sm-12">
                            <div class="course-enroll-card">
                                <img class="img-fluid" src="./Images/Demo Course.jpg">
                                <button class="btn btn-outline-primary" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal"><a>Enroll</a></button>
                            </div>
                        </div>

                        <div class="col-lg-8 col-md-12 col-sm-12">
                            <div class="course-card-heading">
                                <h5>Course abc</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum
                                    laoreet.</p>
                                <h5>$123</h5>
                                <h5>Instructor: <span>Instructor abc</span> </h5>
                                <h5>Days: <span>Monday, Tuesday, Wednesday</span> </h5>
                                <h5>Timing: <span>00:00 PM to 00:00 PM</span> </h5>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <!-- Row for enroll card -->
                    <div class="row row-col-2">

                        <div class="col-lg-4 col-md-12 col-sm-12">
                            <div class="course-enroll-card">
                                <img class="img-fluid" src="./Images/Demo Course.jpg">
                                <button class="btn btn-outline-primary" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal"><a>Enroll</a></button>
                            </div>
                        </div>

                        <div class="col-lg-8 col-md-12 col-sm-12">
                            <div class="course-card-heading">
                                <h5>Course abc</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum
                                    laoreet.</p>
                                <h5>$123</h5>
                                <h5>Instructor: <span>Instructor abc</span> </h5>
                                <h5>Days: <span>Monday, Tuesday, Wednesday</span> </h5>
                                <h5>Timing: <span>00:00 PM to 00:00 PM</span> </h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <!-- Row for enroll card -->
                    <div class="row row-col-2">

                        <div class="col-lg-4 col-md-12 col-sm-12">
                            <div class="course-enroll-card">
                                <img class="img-fluid" src="./Images/Demo Course.jpg">
                                <button class="btn btn-outline-primary" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal"><a>Enroll</a></button>
                            </div>
                        </div>

                        <div class="col-lg-8 col-md-12 col-sm-12">
                            <div class="course-card-heading">
                                <h5>Course abc</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum
                                    laoreet.</p>
                                <h5>$123</h5>
                                <h5>Instructor: <span>Instructor abc</span> </h5>
                                <h5>Days: <span>Monday, Tuesday, Wednesday</span> </h5>
                                <h5>Timing: <span>00:00 PM to 00:00 PM</span> </h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <!-- Row for enroll card -->
                    <div class="row row-col-2">

                        <div class="col-lg-4 col-md-12 col-sm-12">
                            <div class="course-enroll-card">
                                <img class="img-fluid" src="./Images/Demo Course.jpg">
                                <button class="btn btn-outline-primary" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal">Enroll</button>
                            </div>
                        </div>

                        <div class="col-lg-8 col-md-12 col-sm-12">
                            <div class="course-card-heading">
                                <h5>Course abc</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum
                                    laoreet.</p>
                                <h5>$123</h5>
                                <h5>Instructor: <span>Instructor abc</span> </h5>
                                <h5>Days: <span>Monday, Tuesday, Wednesday</span> </h5>
                                <h5>Timing: <span>00:00 PM to 00:00 PM</span> </h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <!-- Row for enroll card -->
                    <div class="row row-col-2">

                        <div class="col-lg-4 col-md-12 col-sm-12">
                            <div class="course-enroll-card">
                                <img class="img-fluid" src="./Images/Demo Course.jpg">
                                <button class="btn btn-outline-primary" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal"><a>Enroll</a></button>
                            </div>
                        </div>

                        <div class="col-lg-8 col-md-12 col-sm-12">
                            <div class="course-card-heading">
                                <h5>Course abc</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum
                                    laoreet.</p>
                                <h5>$123</h5>
                                <h5>Instructor: <span>Instructor abc</span> </h5>
                                <h5>Days: <span>Monday, Tuesday, Wednesday</span> </h5>
                                <h5>Timing: <span>00:00 PM to 00:00 PM</span> </h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- ___________________btn-outline-primary__________________- -->
    <!-- Modal Alert -->
    <!-- Button trigger modal -->
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close btn-close-color" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="iconcancel">
                        <i class="fa fa-times-circle"></i>
                    </div>
                    <div class="error-tag">
                        <h2>Error!</h2>
                    </div>
                </div>
                <div class="para-Error">
                    <h3>Please Login Or Sign up to Continue</h3>
                </div>
            </div>
        </div>
    </div>




    <!-- MODAL FOR LOG OUT  -->

    <div class="modal fade" id="exampleModalToggle4" tabindex="-1" aria-labelledby="exampleModalToggleLabel4"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close btn-close-color" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="error-tag">
                        <h6>Are you Sure you want to Log out?</h6>
                    </div>
                </div>
                <div class="para-Error">
                    <button class="btn modal-btn-1 btn-outline-success"> <a class="underlineremove-and-colorwhite "
                            href="./Login.html"> Yes </a></button>
                    <button class="btn modal-btn-2 btn-outline-danger" data-bs-dismiss="modal" aria-label="Close">No</button>
                </div>
            </div>
        </div>
    </div>



    <!-- FOOTER -->

    <footer>
        <?php include './Components/Footer.php'; ?>
    </footer>




    <script src="./Script/jquery.min.js"></script>
    <script src="./Script/owl.carousel.min.js"></script>
    <script src="./Script/Script.js"></script>


</body>

</html>