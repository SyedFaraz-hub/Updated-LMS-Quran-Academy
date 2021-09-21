<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Courses</title>
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
                  <div class="container"> 
                    <section class="main-article main-table-coursesclasses">
                        <!-- insdie articel side row start -->
                        <div class="row ml-0px">
                            <div class="col-lg-12 col-sm-12">
                                <div class="article-image">
                                    <div class="mycourses-container">
                                        <div class="heading-mycourse">
                                            <h1>My Courses</h1>
                                        </div>
                                        <div class="Entries-mycourses Entries-courseclasses">
                                            <span> <span class="entriesshow-tag"> Show Entries :</span>
                                                <select name="" id="">
                                                    <option value="1">1</option>
                                                    <option value="1">2</option>
                                                    <option value="1">3</option>
                                                    <option value="1">4</option>
                                                    <option value="1">5</option>
                                                </select>
                                            </span>
                                            <div class="search-bar-courseclasses">
                                                <input type="text" placeholder="Search ">
                                                <a href=""> <i class="fa fa-search"></i> </a>
                                            </div>
                                        </div>

                                        <div class="dates-mycourses">
                                            <span>Sort by Date:</span>
                                            <input class="selectdate" type="date"> <span> --</span><input
                                                class="selectdate" type="date">
                                            <div class="filterbystatus-mycourses">
                                                <span>Filter By Status</span>
                                                <select name="" id="">
                                                    <option value="">Select</option>
                                                    <option value="">Select</option>
                                                    <option value="">Select</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="container ">

                                            <div class="shadow p-3 mb-5 bg-white rounded container-heading-nortifcation- margin-top">
                                                <div class="table-container">
                                                    <div class="table-wrapper-scroll-y my-custom-scrollbar-2">
                                                        <table class="table table-striped">
                                                            <thead>
                                                                <tr>
                                                                    <th scope="col" >S.No</th>
                                                                    <th scope="col">Course Title</th>
                                                                    <th scope="col">Intructor</th>
                                                                    <th scope="col">Date</th>
                                                                    <th scope="col">Cost</th>
                                                                    <th scope="col">Status</th>
                                                                    <th scope="col">Actions</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>01</td>
                                                                    <td>Course Abc</td>
                                                                    <td>instructor Abc</td>
                                                                    <td>dd/mm/yyyy</td>
                                                                    <td>$123</td>
                                                                    <td>Ongoing</td>
                                                                    <td><i class="fa-black-dot fa fa-ellipsis-v" type="Button"
                                                                            class="modal-btn-2 btn btn-outline-primary"
                                                                            data-bs-target="#exampleModalToggle7"
                                                                            data-bs-toggle="modal"></i></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>01</td>
                                                                    <td>Course Abc</td>
                                                                    <td>instructor Abc</td>
                                                                    <td>dd/mm/yyyy</td>
                                                                    <td>$123</td>
                                                                    <td>Ongoing</td>
                                                                    <td><i class="fa-black-dot fa fa-ellipsis-v" type="Button"
                                                                            class="modal-btn-2 btn btn-outline-primary"
                                                                            data-bs-target="#exampleModalToggle7"
                                                                            data-bs-toggle="modal"></i></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>01</td>
                                                                    <td>Course Abc</td>
                                                                    <td>instructor Abc</td>
                                                                    <td>dd/mm/yyyy</td>
                                                                    <td>$123</td>
                                                                    <td>Ongoing</td>
                                                                    <td><i class="fa-black-dot fa fa-ellipsis-v" type="Button"
                                                                            class="modal-btn-2 btn btn-outline-primary"
                                                                            data-bs-target="#exampleModalToggle7"
                                                                            data-bs-toggle="modal"></i></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>01</td>
                                                                    <td>Course Abc</td>
                                                                    <td>instructor Abc</td>
                                                                    <td>dd/mm/yyyy</td>
                                                                    <td>$123</td>
                                                                    <td>Ongoing</td>
                                                                    <td><i class="fa-black-dot fa fa-ellipsis-v" type="Button"
                                                                            class="modal-btn-2 btn btn-outline-primary"
                                                                            data-bs-target="#exampleModalToggle7"
                                                                            data-bs-toggle="modal"></i></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>01</td>
                                                                    <td>Course Abc</td>
                                                                    <td>instructor Abc</td>
                                                                    <td>dd/mm/yyyy</td>
                                                                    <td>$123</td>
                                                                    <td>Ongoing</td>
                                                                    <td><i class="fa-black-dot fa fa-ellipsis-v" type="Button"
                                                                            class="modal-btn-2 btn btn-outline-primary"
                                                                            data-bs-target="#exampleModalToggle7"
                                                                            data-bs-toggle="modal"></i></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>01</td>
                                                                    <td>Course Abc</td>
                                                                    <td>instructor Abc</td>
                                                                    <td>dd/mm/yyyy</td>
                                                                    <td>$123</td>
                                                                    <td>Ongoing</td>
                                                                    <td><i class="fa-black-dot fa fa-ellipsis-v" type="Button"
                                                                            class="modal-btn-2 btn btn-outline-primary"
                                                                            data-bs-target="#exampleModalToggle7"
                                                                            data-bs-toggle="modal"></i></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>01</td>
                                                                    <td>Course Abc</td>
                                                                    <td>instructor Abc</td>
                                                                    <td>dd/mm/yyyy</td>
                                                                    <td>$123</td>
                                                                    <td>Ongoing</td>
                                                                    <td><i class="fa-black-dot fa fa-ellipsis-v" type="Button"
                                                                            class="modal-btn-2 btn btn-outline-primary"
                                                                            data-bs-target="#exampleModalToggle7"
                                                                            data-bs-toggle="modal"></i></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>01</td>
                                                                    <td>Course Abc</td>
                                                                    <td>instructor Abc</td>
                                                                    <td>dd/mm/yyyy</td>
                                                                    <td>$123</td>
                                                                    <td>Ongoing</td>
                                                                    <td><i class="fa-black-dot fa fa-ellipsis-v" type="Button"
                                                                            class="modal-btn-2 btn btn-outline-primary"
                                                                            data-bs-target="#exampleModalToggle7"
                                                                            data-bs-toggle="modal"></i></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>01</td>
                                                                    <td>Course Abc</td>
                                                                    <td>instructor Abc</td>
                                                                    <td>dd/mm/yyyy</td>
                                                                    <td>$123</td>
                                                                    <td>Ongoing</td>
                                                                    <td><i class="fa-black-dot fa fa-ellipsis-v" type="Button"
                                                                            class="modal-btn-2 btn btn-outline-primary"
                                                                            data-bs-target="#exampleModalToggle7"
                                                                            data-bs-toggle="modal"></i></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>01</td>
                                                                    <td>Course Abc</td>
                                                                    <td>instructor Abc</td>
                                                                    <td>dd/mm/yyyy</td>
                                                                    <td>$123</td>
                                                                    <td>Ongoing</td>
                                                                    <td><i class="fa-black-dot fa fa-ellipsis-v" type="Button"
                                                                            class="modal-btn-2 btn btn-outline-primary"
                                                                            data-bs-target="#exampleModalToggle7"
                                                                            data-bs-toggle="modal"></i></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>01</td>
                                                                    <td>Course Abc</td>
                                                                    <td>instructor Abc</td>
                                                                    <td>dd/mm/yyyy</td>
                                                                    <td>$123</td>
                                                                    <td>Ongoing</td>
                                                                    <td><i class="fa-black-dot fa fa-ellipsis-v" type="Button"
                                                                            class="modal-btn-2 btn btn-outline-primary"
                                                                            data-bs-target="#exampleModalToggle7"
                                                                            data-bs-toggle="modal"></i></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>01</td>
                                                                    <td>Course Abc</td>
                                                                    <td>instructor Abc</td>
                                                                    <td>dd/mm/yyyy</td>
                                                                    <td>$123</td>
                                                                    <td>Ongoing</td>
                                                                    <td><i class="fa-black-dot fa fa-ellipsis-v" type="Button"
                                                                            class="modal-btn-2 btn btn-outline-primary"
                                                                            data-bs-target="#exampleModalToggle7"
                                                                            data-bs-toggle="modal"></i></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                    
                                    
                                    
                                    
                                                    <!-- <table class="GeneratedTable-nortifcation">
                                    
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <i class="bell-icon-notipage-nortifcation fa fa-bell"></i>
                                                                <p class="noti-para-nortifcation">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                                                    Dolorum qui quaerat aspernatur fuga repellat sunt optio beatae velit soluta blanditiis?
                                                                </p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <i class="bell-icon-notipage-nortifcation fa fa-bell"></i>
                                                                <p class="noti-para-nortifcation">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                                                    Quia, ipsam sapiente. Provident quasi error maxime iure animi commodi nemo velit! </p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <i class="bell-icon-notipage-nortifcation fa fa-bell"></i>
                                                                <p class="noti-para-nortifcation">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                                    Repellat, culpa placeat ad tenetur a aut impedit praesentium voluptatibus esse
                                                                    quibusdam.
                                                                </p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <i class="bell-icon-notipage-nortifcation fa fa-bell"></i>
                                                                <p class="noti-para-nortifcation">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                                    Repellat, culpa placeat ad tenetur a aut impedit praesentium voluptatibus esse
                                                                    quibusdam.
                                                                </p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <i class="bell-icon-notipage-nortifcation fa fa-bell"></i>
                                                                <p class="noti-para-nortifcation">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                                    Repellat, culpa placeat ad tenetur a aut impedit praesentium voluptatibus esse
                                                                    quibusdam.
                                                                </p>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table> -->
                                    
                                    
                                                </div>
                                            </div>
                                        </div>
                                    

                                        <!-- <div class="containerfortable-mycourses">
                                            <table class="GeneratedTable-mycourses GeneratedTable-coursesclasses">
                                                <thead>
                                                    <tr>
                                                        <th>S.No</th>
                                                        <th>Course Title</th>
                                                        <th>Intructor</th>
                                                        <th>Date</th>
                                                        <th>Cost</th>
                                                        <th>Status</th>
                                                        <th>Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>01</td>
                                                        <td>Course Abc</td>
                                                        <td>instructor Abc</td>
                                                        <td>dd/mm/yyyy</td>
                                                        <td>$123</td>
                                                        <td>Ongoing</td>
                                                        <td><i class="fa-black-dot fa fa-ellipsis-v" type="Button"
                                                                class="modal-btn-2 btn btn-outline-primary"
                                                                data-bs-target="#exampleModalToggle7"
                                                                data-bs-toggle="modal"></i></td>
                                                    </tr>
                                                    <tr>
                                                        <td>02</td>
                                                        <td>Course Abc</td>
                                                        <td>instructor Abc</td>
                                                        <td>dd/mm/yyyy</td>
                                                        <td>$123</td>
                                                        <td>Ongoing</td>
                                                        <td><i class="fa-black-dot fa fa-ellipsis-v" type="Button"
                                                                class="modal-btn-2 btn btn-outline-primary"
                                                                data-bs-target="#exampleModalToggle7"
                                                                data-bs-toggle="modal"></i></td>
                                                    </tr>
                                                    <tr>
                                                        <td>03</td>
                                                        <td>Course Abc</td>
                                                        <td>instructor Abc</td>
                                                        <td>dd/mm/yyyy</td>
                                                        <td>$123</td>
                                                        <td>Ongoing</td>
                                                        <td><i class="fa-black-dot fa fa-ellipsis-v" type="Button"
                                                                class="modal-btn-2 btn btn-outline-primary"
                                                                data-bs-target="#exampleModalToggle7"
                                                                data-bs-toggle="modal"></i></td>
                                                    </tr>
                                                    <tr>
                                                        <td>04</td>
                                                        <td>Course Abc</td>
                                                        <td>instructor Abc</td>
                                                        <td>dd/mm/yyyy</td>
                                                        <td>$123</td>
                                                        <td>Ongoing</td>
                                                        <td><i class="fa-black-dot fa fa-ellipsis-v" type="Button"
                                                                class="modal-btn-2 btn btn-outline-primary"
                                                                data-bs-target="#exampleModalToggle7"
                                                                data-bs-toggle="modal"></i></td>
                                                    </tr>
                                                    <tr>
                                                        <td>05</td>
                                                        <td>Course Abc</td>
                                                        <td>instructor Abc</td>
                                                        <td>dd/mm/yyyy</td>
                                                        <td>$123</td>
                                                        <td>Ongoing</td>
                                                        <td><i class="fa-black-dot fa fa-ellipsis-v" type="Button"
                                                                class="modal-btn-2 btn btn-outline-primary"
                                                                data-bs-target="#exampleModalToggle7"
                                                                data-bs-toggle="modal"></i></td>
                                                    </tr>
                                                    <tr>
                                                        <td>06</td>
                                                        <td>Course Abc</td>
                                                        <td>instructor Abc</td>
                                                        <td>dd/mm/yyyy</td>
                                                        <td>$123</td>
                                                        <td>Ongoing</td>
                                                        <td><i class="fa-black-dot fa fa-ellipsis-v" type="Button"
                                                                class="modal-btn-2 btn btn-outline-primary"
                                                                data-bs-target="#exampleModalToggle7"
                                                                data-bs-toggle="modal"></i></td>
                                                    </tr>
                                                    <tr>
                                                        <td>07</td>
                                                        <td>Course Abc</td>
                                                        <td>instructor Abc</td>
                                                        <td>dd/mm/yyyy</td>
                                                        <td>$123</td>
                                                        <td>Ongoing</td>
                                                        <td><i class="fa-black-dot fa fa-ellipsis-v" type="Button"
                                                                class="modal-btn-2 btn btn-outline-primary"
                                                                data-bs-target="#exampleModalToggle7"
                                                                data-bs-toggle="modal"></i></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div> -->






                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- insdie articel side row end -->
                    </section>
                </div>
                <br><br>

                <!-- article side end -->


    <!-- MODAL FOR  LESSSON  # 1   -->
    <div class="modal fade" id="exampleModalToggle7" aria-hidden="true" aria-labelledby="exampleModalToggleLabel7"
        tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h2>Lesson</h2>
                    <button type="button" class="btn-close btn-close-color" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row lessons-pop-up-style">
                        <div class="col-6"> <span class="lesson-info-bold"> Chapter*: </span></div>
                        <div class="col-6"> <span> Chapter abc </span></div>
                    </div>
                    <div class="row lessons-pop-up-style">
                        <div class="col-6"> <span class="lesson-info-bold"> Main Book*: </span></div>
                        <div class="col-6"> <span> Main Book abc </span></div>
                    </div>
                    <div class="row lessons-pop-up-style">
                        <div class="col-6"> <span class="lesson-info-bold"> From Page No.*: </span></div>
                        <div class="col-6"> <span> 00 </span> </div>
                    </div>
                    <div class="row lessons-pop-up-style">
                        <div class="col-6"> <span class="lesson-info-bold"> To Page No.*: </span></div>
                        <div class="col-6"> <span> 00 </span> </div>
                    </div>
                    <div class="row lessons-pop-up-style">
                        <div class="col-6"> <span class="lesson-info-bold"> Type*: </span> </div>
                        <div class="col-6"> <span> Type Abc </span></div>
                    </div>
                    <div class="row lessons-pop-up-style">
                        <div class="col-6"> <span class="lesson-info-bold"> From Ayah/Line*: </span></div>
                        <div class="col-6"> <span> 00 </span></div>
                    </div>
                    <div class="row lessons-pop-up-style">
                        <div class="col-6"> <span class="lesson-info-bold"> To Ayah/Line*: </span></div>
                        <div class="col-6"> <span> 00 </span></div>
                    </div>
                    <div class="row lessons-pop-up-style">
                        <div class="col-6"> <span class="lesson-info-bold"> Memorized Lesson*: </span></div>
                        <div class="col-6"> <span> Lesson abc </span></div>
                    </div>
                    <div class="row lessons-pop-up-style">
                        <div class="col-6"> <span class="lesson-info-bold"> Memorized Detail*: </span></div>
                        <div class="col-6"> <span> Lorem Ipsum </span></div>
                    </div>
                </div>
            </div>
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