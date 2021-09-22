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
        <?php include '../Components/Navbar.php'; ?>
        </header>

    <!-- header end -->


    <!-- pagelayout row start -->
    <div class="viewcoursevideo">
        <div class="row">
            <div class="col-3">
                <!-- sidebar section start  -->
                <section class="main-sidebar">
                    <?php include '../Components/SideBar.php'; ?>
                    </section>
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


  <!-- FOOTERTOP -->

  <footer>
    <?php include '../Components/FooterTop.php'; ?>
  </footer>



   <!-- FOOTER -->

   <footer>
  <?php include '../Components/Footer.php'; ?>
  </footer>



</body>


<script src="../Script/Script.js"></script>



</html>