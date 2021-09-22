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
    <title>Home</title>
</head>

<body>

  <!-- header start -->
      <!-- NAVBAR -->
      <header>
       <?php include '../Components/Navbar.php'; ?>
      </header>

  <!-- header end -->

    <!-- carousel slider start -->
    <Section class="Slider">
   <?php include "../Components/Slider.php";  ?>
    </Section>
    <!-- carousel slider end -->

    <Section class="Slider">
        <?php include "../Components/Marquee.php";  ?>
   </Section>



    <!-- aboutus section start -->
    <div class="aboutus-section">
        <div class="row row-col-2">
            <div class="col-lg-4 col-md-12 col-sm-12">
                <div class="aboutus-image">
                    <img class="img-fluid" src="../Images/DemoPerson.jpg">
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

    <!-- ------------PLANS SECTION---------- -->
    <section>
        <?php include '../Components/Plans.php'; ?>
    </section>


         
    <br>
     <br>
    <div class="container">
          <div class="heading-courses">
              <h1 id="coursesLink">Courses</h1>
          </div>
    </div>

    <!-- carousel start for last section of home page -->
    <div class="container">
        <div class="owl-container">
            <div class="owl-carousel owl-theme">
                <div class="item">
                    <!-- Row for enroll card -->
                    <div class="row row-col-2 ml-0px">

                        <div class="col-lg-4 col-md-12 col-sm-12">
                            <div class="course-enroll-card">
                                <img class="img-fluid" src="../Images/Demo Course.jpg">
                                <button class="btn btn-outline-primary" >Enroll</button>
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
                    <div class="row row-col-2 ml-0px">

                        <div class="col-lg-4 col-md-12 col-sm-12">
                            <div class="course-enroll-card">
                                <img class="img-fluid" src="../Images/Demo Course.jpg">
                                <button class="btn btn-outline-primary" >Enroll</button>
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
                    <div class="row row-col-2 ml-0px">

                        <div class="col-lg-4 col-md-12 col-sm-12">
                            <div class="course-enroll-card">
                                <img class="img-fluid" src="../Images/Demo Course.jpg">
                                <button class="btn btn-outline-primary" >Enroll</button>
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
                    <div class="row row-col-2 ml-0px">

                        <div class="col-lg-4 col-md-12 col-sm-12">
                            <div class="course-enroll-card">
                                <img class="img-fluid" src="../Images/Demo Course.jpg">
                                <button class="btn btn-outline-primary" >Enroll</button>
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
                    <div class="row row-col-2 ml-0px">

                        <div class="col-lg-4 col-md-12 col-sm-12">
                            <div class="course-enroll-card">
                                <img class="img-fluid" src="../Images/Demo Course.jpg">
                                <button class="btn btn-outline-primary" >Enroll</button>
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
                    <div class="row row-col-2 ml-0px">

                        <div class="col-lg-4 col-md-12 col-sm-12">
                            <div class="course-enroll-card">
                                <img class="img-fluid" src="../Images/Demo Course.jpg">
                                <button class="btn btn-outline-primary" >Enroll</button>
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


    <!-- MAIN Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="join-courses-title">
                        <h4>Join Courses</h4>
                    </div>
                    <button type="button" class="btn-close btn-close-color" data-bs-dismiss="modal"
                        aria-label="Close"></button>
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
                    <button type="button" class="btn-close btn-close-color" data-bs-dismiss="modal"
                        aria-label="Close"></button>
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
                    <button type="button" class="btn-close btn-close-color" data-bs-dismiss="modal"
                        aria-label="Close"></button>
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






    <script src="../Script/jquery.min.js"></script>
    <script src="../Script/owl.carousel.min.js"></script>
    <script src="../Script/Script.js"></script>
</body>

</html>