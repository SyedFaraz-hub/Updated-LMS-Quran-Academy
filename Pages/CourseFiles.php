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
        <!-- NAVBAR -->
  <header>
  <?php include '../Components/Navbar.php'; ?>
  </header>

    <!-- header end -->


    <!-- pagelayout row start -->
    <div class="containerforcoursefiles">
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


            <!-- article section end -->
            <div class="col-lg-9 col-md-12">
                <div class="jquery-remove">
                    <section class="main-article-CourseFiles">
                        <!-- insdie articel section row start for heading and search box-->
                        <div class="row">
                            <div class="col-lg-4 col-m-6 col-sm-12">
                                <div class="generic-heading-artice">
                                    <h4>Course Files</h4>
                                </div>
                            </div>
                            <div class="col-lg-4 col-m-6 col-sm-12">
                                <!-- extra columm -->
                            </div>
                            <div class="col-lg-4 col-m-6 col-sm-12">
                                <div class="form-article">
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

    <!-- Nortification -->
    <div class="container container-nortifcation">

        <div class="shadow p-3 mb-5 bg-white rounded margin-top">
            <div class="UserLogin-nortifcation ">
                <h6>Courses</h6>
            </div>
            <div class="table-container">
                <div class="table-wrapper-scroll-y my-custom-scrollbar">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">First</th>
                                <th scope="col">Last</th>
                                <th scope="col">Handle</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row"> 1 </th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <th scope="row"> 2 </th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                            </tr>
                            <tr>
                                <th scope="row"> 3 </th>
                                <td>Larry</td>
                                <td>the Bird</td>
                                <td>@twitter</td>
                            </tr>
                            <tr>
                                <th scope="row"> 4 </th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <th scope="row"> 5 </th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                            </tr>
                            <tr>
                                <th scope="row"> 6 </th>
                                <td>Larry</td>
                                <td>the Bird</td>
                                <td>@twitter</td>
                            </tr>
                            <tr>
                                <th scope="row"> 7 </th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <th scope="row"> 8 </th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                            </tr>
                            <tr>
                                <th scope="row"> 9 </th>
                                <td>Larry</td>
                                <td>the Bird</td>
                                <td>@twitter</td>
                            </tr>
                            <tr>
                                <th scope="row"> 10 </th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <th scope="row"> 11 </th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                            </tr>
                            <tr>
                                <th scope="row"> 12 </th>
                                <td>Larry</td>
                                <td>the Bird</td>
                                <td>@twitter</td>
                            </tr>
                        </tbody>
                    </table>
                </div>




  

            </div>
        </div>
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







    </div>
</body>

<script src="../Script/Script.js"></script>


</html>