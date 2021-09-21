<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CourseDetails</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <!-- for Slide bar -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
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


    <!-- pagelayout row start -->
    <div class="containerforcourselinks">
        <div class="row">
            <div class="col-3">
                <!-- sidebar section start  -->
      <section class="main-sidebar">
      <?php include '../Components/SideBar.php'; ?>
      </section>
                <div class="open-btn">
                    <i class="fas fa-bars" style="font-size: 30px;"></i>
                    <hr>
                </div>
            </div>
            <!-- sidebar section end -->
            <div class="col-lg-9 col-md-12">
                <div class="jquery-remove">
                    <section class="main-article-CourseLink">
                        <!-- insdie articel section row start for heading and search box-->
                        <div class="row">
                            <div class="col-lg-4 col-m-6 col-sm-12">
                                <div class="generic-heading-artice">
                                    <h4>Course Links</h4>
                                </div>
                            </div>
                            <div class="col-lg-4 col-m-6 col-sm-12">
                                <!-- extra columm -->
                            </div>
                            <div class="col-lg-4 col-m-6 col-sm-12">
                                <div class="form-article-CourseLink">
                                    <form class="d-flex">
                                        <input class="form-control me-2" type="search" placeholder="Search Course..."
                                            aria-label="Search">
                                        <i class="fas fa-search"></i>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- insdie articel section row end -->
                        <hr>
                        <!-- insdie articel section row start for video and links files -->
                        <center>
                            <div class="video-document-container">
                                <div class="row row-col-2">
                                    <div class="col-lg-6 col-md-6 sm-12">
                                        <div class="video-box">
                                            <!-- below youtube video embed iframe -->
                                            <iframe width="100%" height="208"
                                                src="https://www.youtube.com/embed/Q--H5uqHP5s"
                                                title="YouTube video player" frameborder="0"
                                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                                allowfullscreen></iframe>
                                            <!-- above youtube video embed iframe -->
                                            <div class="sub-video-container">
                                                <h1> <a class="" href="../Pages/ViewCourseVideo.html"> Video Title </a>
                                                </h1>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 sm-12">
                                        <div class="video-box">
                                            <!-- below youtube video embed iframe -->
                                            <iframe width="100%" height="208"
                                                src="https://www.youtube.com/embed/Q--H5uqHP5s"
                                                title="YouTube video player" frameborder="0"
                                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                                allowfullscreen></iframe>
                                            <!-- above youtube video embed iframe -->
                                            <div class="sub-video-container">
                                                <h1> <a class="" href="../Pages/ViewCourseVideo.html"> Video Title </a>
                                                </h1>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row row-col-2">
                                    <div class="col-lg-6 col-md-6 sm-12">
                                        <div class="link-box">
                                            <div class="sub-link-container">
                                                <h1>Link abc</h1>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 sm-12">
                                        <div class="link-box">
                                            <div class="sub-link-container">
                                                <h1>Link abc</h1>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row row-col-2">
                                    <div class="col-lg-6 col-md-6 sm-12">
                                        <div class="link-box">
                                            <div class="sub-link-container">
                                                <h1>Link abc</h1>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 sm-12">
                                        <div class="link-box">
                                            <div class="sub-link-container">
                                                <h1>link abc</h1>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row row-col-2">
                                    <div class="col-lg-6 col-md-6 sm-12">
                                        <div class="link-box">
                                            <div class="sub-link-container">
                                                <h1>Link abc</h1>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 sm-12">
                                        <div class="link-box">
                                            <div class="sub-link-container">
                                                <h1>Link abc</h1>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </center>
                        <!-- insdie articel section row start for video and links files -->
                        <!-- __________________________Showing result_____________ -->

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







    </div>
</body>

<script src="../Script/Script.js"></script>


</html>