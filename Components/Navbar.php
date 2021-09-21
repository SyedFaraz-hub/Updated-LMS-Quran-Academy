<nav class="navbar navbar-expand-lg  navbar-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="#"> <img src="../Images/Logo.png" alt="Logo"> </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse mr-auto" id="navbarNav">

          <div class="mx-auto"></div> <!-- margin auto for nav right -->

          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" href="../Pages/Home.php">Home</a>
            </li>

            
            <li class="nav-item">
              <a class="nav-link active" href="../Pages/Courses.php">Courses</a>
            </li>

            

            <li class="nav-item">
              <a class="nav-link active" href="../Pages/Rules.php">Rules</a>
            </li>

            

            <li class="nav-item">
              <a class="nav-link active" href="../Pages/ContactUs.php">Contact Us</a>
            </li>

            
            <li class="nav-item">
              <a class="nav-link " href="../Pages/Nortification.php">
                <i class="bell-icon SetPositon-usertag-bell fa fa-bell"></i></a>
            </li>



            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                <i class="SetPositon-usertag-bell fa fa-user-circle"></i> User Abc
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="../Pages/Myprofile.php">My Profile</a></li>
                <li><a class="dropdown-item" href="../Pages/MyCourses.php">Course Logs</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item"data-bs-toggle="modal" data-bs-target="#exampleModal">Log Out</a></li>
              </ul>
            </li>
            </li>
          </ul>
        </div>
      </div>
    </nav>


    <!-- MODAL FOR LOG OUT -->
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Log out</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Are you Sure you want to Log out?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-primary" data-bs-dismiss="modal">No</button>
        <button type="button" class="btn btn-outline-primary">  <a class="underlineremove-and-colorwhite" href="../Pages/HomePageGuest.php"> Yes</a> </button>
      </div>
    </div>
  </div>
</div>
      <!-- MODAL FOR LOG OUT 

  <div class="modal fade" id="exampleModalToggle4" tabindex="-1" aria-labelledby="exampleModalToggleLabel4"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="btn-close btn-close-color" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="error-tag">
            <h6>Are you Sure you want to Log out?</h6>
          </div>
        </div>
        <div class="para-Error">
          <button class="btn modal-btn-1 btn-outline-success"> <a class="underlineremove-and-colorwhite " href="./Login.php">
              Yes </a></button>
          <button class="btn modal-btn-2 btn-outline-danger" data-bs-dismiss="modal" aria-label="Close">No</button>
        </div>
      </div>
    </div>
  </div> -->
