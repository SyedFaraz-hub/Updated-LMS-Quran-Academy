<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Course Video</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <!-- for Slide bar -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="../CSS/bootstrap.css">
    <script src="../Script/bootstrap.js"></script>
    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="shortcut icon" type="image/jpg" href="../Images/logo.png"/>
</head>

<body>
    <!-- <div class="container"> -->
    <!-- header start -->
    <!-- NAVBAR -->
    <header>
        <nav class="navbar navbar-expand-lg  navbar-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">LOGO</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse mr-auto" id="navbarNav">

                    <div class="mx-auto"></div> <!-- margin auto for nav right -->

                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" href="./Home.html">Home</a>
                        </li>

                        <div class="border"></div> <!-- for border between home links -->
                        <li class="nav-item">
                            <a class="nav-link active" href="./Courses.html">Courses</a>
                        </li>

                        <div class="border"></div> <!-- for border between home links -->

                        <li class="nav-item">
                            <a class="nav-link active" href="./Rules.html">Rules</a>
                        </li>

                        <div class="border"></div> <!-- for border between home links -->

                        <li class="nav-item">
                            <a class="nav-link active" href="./ContactUs.html">Contact Us</a>
                        </li>

                        <div class="border"></div> <!-- for border between home links -->
                        <li class="nav-item dropdown">
                            <a class="nav-link " href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <i class="bell-icon SetPositon-usertag-bell fa fa-bell"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-notification" aria-labelledby="navbarDropdown">
                                <div class="row m-auto ">
                                    <div class="col-2">
                                        <i style="color: black;" class="fa fa-bell"></i>
                                    </div>
                                    <div class="col-10">
                                        You have a new Nortifcation
                                    </div>
                                </div>

                                <div class="row m-auto ">
                                    <div class="col-2">
                                        <i style="color: black;" class="fa fa-bell"></i>
                                    </div>
                                    <div class="col-10">
                                        You have a new Nortifcation
                                    </div>
                                </div>

                                <div class="row m-auto ">
                                    <div class="col-2">
                                        <i style="color: black;" class="fa fa-bell"></i>
                                    </div>
                                    <div class="col-10">
                                        You have a new Nortifcation
                                    </div>
                                </div>

                                <div class="row m-auto ">
                                    <div class="col-2">
                                        <i style="color: black;" class="fa fa-bell"></i>
                                    </div>
                                    <div class="col-10">
                                        You have a new Nortifcation
                                    </div>
                                </div>


                                <hr class="dropdown-divider">
                                <div class="row m-auto">
                                    <div class="col-12 text-center">
                                        <a href="../Pages/Nortification.html">Vew All</a>
                                    </div>
                                </div>
                            </ul>
                        </li>



                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="SetPositon-usertag-bell fa fa-user-circle"></i> User Abc
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="./Myprofile.html">My Profile</a></li>
                                <li><a class="dropdown-item" href="./MyCourses.html">Course Logs</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" data-bs-target="#exampleModalToggle4"
                                        data-bs-toggle="modal" data-bs-dismiss="modal">Log Out</a></li>
                            </ul>
                        </li>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- header end -->


    <!-- pagelayout row start -->
    <div class="viewcoursevideo">
        <div class="row">
            <div class="col-3">
                <!-- sidebar section start  -->
                <!-- sidebar section start  -->
                <section class="main-sidebar">
                    <div class="close-btn"><i class="fas fa-times"></i> </div>
                    <div class="course-container-sidebar">
                        <h4>Course ABC</h4>
                        <h6>Instructor abc </h6>
                    </div>
                    <div class="course-button-sidebar"><button class="btn"><a href="./CourseDetails.html">Cours
                                Details</a></button></div>
                    <div class="classes-button-sidebar"><button class="btn"><a
                                href="./CourseClasses.html">Classes</a></button></div>
                    <div class="files-button-sidebar"><button class="btn"><a
                                href="./CourseFiles.html">Files</a></button>
                    </div>
                    <div class="links-button-sidebar"><button class="btn"><a
                                href="./CourseLinks.html">Links</a></button></div>
                    <div class="annoucement-button-sidebar"><button class="btn"><a
                                href="./CourseAnnoucement.html">Annoucement</a></button></div>
                    <div class="generic-button-sidebar"><button class="btn"><a
                                href="./Generic-Course-Content.html">Generic
                                Coursecontent</a></button></div>
                    <div class="row margin-auto">
                        <div class="col-12">
                            <div class="notify-container-sidebar">
                                <h2>Notices</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum</p>
                                <hr>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum</p>
                                <hr>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum</p>
                            </div>
                        </div>
                    </div>
                    <div class="row margin-auto">
                        <div class="col-lg-6 col-sm-12">
                            <div class="todayclass-container-sidebar">
                                <h2>Today Class</h2>
                                <p>Monday: 14/12/2020</p>
                                <p>Time: 06.30pm - 08:30pm</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-12">
                            <div class="nextclass-container-sidebar">
                                <h2>Next Class</h2>
                                <p>Monday: 17/12/2020</p>
                                <p>Time: 06.30pm - 08:30pm</p>
                            </div>
                        </div>
                    </div>
                </section>
                <div class="open-btn">
                    <i class="fas fa-bars" style="font-size: 30px;"></i>
                    <hr>
                </div>
            </div>


            <!-- article section end -->
            <div class="col-lg-9 col-md-12">
                <div class="jquery-remove">
                    <section class="main-article-ViewCourseVideo">
                        <center>
                            <div class="video-document-container-ViewCourseVideo ">
                                <div class="row ">



                                    <div id="carouselExampleControls" class="carousel slide" data-interval="false">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <div class="col-lg-12 col-md-12 sm-12">
                                                    <div class="video-box-ViewCourseVideo ">
                                                        <div class="sub-video-container-ViewCourseVideo ">
                                                            <h1>Video Title</h1>
                                                        </div>
                                                        <div class="videoself">
                                                            <!-- below youtube video embed iframe -->
                                                            <iframe width="100%" height="500"
                                                                src="https://www.youtube.com/embed/Q--H5uqHP5s"
                                                                title="YouTube video player" frameborder="0"
                                                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                                                allowfullscreen></iframe>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <div class="col-lg-12 col-md-12 sm-12">
                                                    <div class="video-box-ViewCourseVideo ">
                                                        <div class="sub-video-container-ViewCourseVideo ">
                                                            <h1>Video Title</h1>
                                                        </div>
                                                        <div class="videoself">
                                                            <!-- below youtube video embed iframe -->
                                                            <iframe width="100%" height="500"
                                                                src="https://www.youtube.com/embed/Q--H5uqHP5s"
                                                                title="YouTube video player" frameborder="0"
                                                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                                                allowfullscreen></iframe>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <div class="col-lg-12 col-md-12 sm-12">
                                                    <div class="video-box-ViewCourseVideo">
                                                        <div class="sub-video-container-ViewCourseVideo">
                                                            <h1>Video Title</h1>
                                                        </div>
                                                        <div class="videoself">
                                                            <!-- below youtube video embed iframe -->
                                                            <iframe width="100%" height="500"
                                                                src="https://www.youtube.com/embed/Q--H5uqHP5s"
                                                                title="YouTube video player" frameborder="0"
                                                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                                                allowfullscreen></iframe>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <button class="carousel-control-prev" type="button"
                                            data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                            <span class="carousel-control-prev-icon btn-dark"></span>
                                            <span class="visually-hidden">Previous</span>
                                        </button>
                                        <button class="carousel-control-next" type="button"
                                            data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                            <span class="carousel-control-next-icon btn-dark"></span>
                                            <span class="visually-hidden">Next</span>
                                        </button>
                                    </div>



                                </div>
                        </center>
                        <!-- insdie articel section row start for video and document files -->
                    </section>
                </div>
                <!-- article section end -->








            </div>


        </div>





    </div>






   <!-- FOOTER -->

   <footer>
  <?php include '../Components/Footer.php'; ?>
  </footer>



</body>


<script src="../Script/Script.js"></script>



</html>