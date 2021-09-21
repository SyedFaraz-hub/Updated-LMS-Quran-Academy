<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CourseDetails - CourseClose</title>
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
     <!-- NAVBAR -->
  <header>
  <?php include '../Components/Navbar.php'; ?>
  </header>

    <!-- header end -->

    <!-- pagelayout row start -->
    <div class="containerforcoursedetails">
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
            <!-- article side start -->

            <div class="col-lg-9 col-md-12">
                <div class="jquery-remove">
                    <section class="main-article">
                        <!-- insdie articel side row start -->
                        <div class="row">
                            <div class="col-lg-6 col-sm-12">
                                <div class="article-image">
                                    <img class="img-fluid" src="../Images/CoursePicture.png">
                                </div>
                            </div>
                            <div class="ml-45 col-lg-6 col-sm-12">
                                <div class="article-content">
                                    <h1>Course abc</h1>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum
                                        laoreet.</p>
                                    <h1>Instructor: <span>Instructor abc</span></h1>
                                    <h1>Days: <span> Monday, Tuesday, Wednesday</span></h1>
                                    <h1>Timings: <span>00:00 PM to 00:00 PM</span></h1>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="article-note">
                                        <p>Note: This course has been completed.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- insdie articel side row end -->
                    </section>
                </div>
                <!-- article side end -->
            </div>
        </div>
    </div>

    <!-- paglayout row end -->





  <!-- FOOTER -->

  <footer>
  <?php include '../Components/Footer.php'; ?>
  </footer>






    </div>
</body>

<script src="../Script/Script.js"></script>


</html>