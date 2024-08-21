<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        .features-content p, .icon {
            font-weight: bold;
            font-size: 14px;
            padding-left:80px !important;
        }
        .features-content h6 {
          
            padding-left:80px !important;
        }

        .features-content a {
            font-size: 16px;
            text-decoration: none;
        }

        .features-item img {
            transition: transform 0.3s;
        }

        .features-item img:hover {
            transform: scale(1.1);
        }

        .btn-sm-square {
            width: 30px;
            height: 30px;
            line-height: 30px;
            text-align: center;
        }

        .sticky-top {
            top: 0;
            z-index: 1000;
        }
       

        /* Mobile View Styles */
        @media (max-width: 768px) {
            .topbar {
                display: block !important;
                flex-direction: column;
                align-items: center;
            }

            .topbar-top {
                flex-direction: column;
                text-align: center;
                border-bottom: 1px solid #fff;
            }

            .top-info {
                width: 100%;
                text-align: center;
                margin-bottom: 10px;
            }

            .news-ticker {
                margin-top: 10px;
                width: 100%;
            }

            .features-item {
                display: flex;
                flex-direction: column;
                align-items: center;
                text-align: center;
            }

            .features-item img {
                margin-bottom: 10px;
            }

            .features-content {
                margin-bottom: 10px;
                align-items: center;
                justify-content: center;
            }

            .features-container {
                flex-direction: column;
            }

            .navbar-nav {
                display: flex;
                flex-direction: column;
                text-align: center;
                padding: 10px;
                background-color: #0F4896;
            }

            .navbar-nav .nav-link {
                padding: 10px 0;
            }

            .top-link {
                flex-direction: column;
                align-items: center;
                margin-top: 10px;
            }

            .icon {
                justify-content: center;
                margin-top: 10px;
            }

            .top-link p {
                margin-bottom: 5px;
            }

            .features-content h1,
            .features-content h6 {
                margin: 5px 0;
            }

            .navbar {
                display: flex;
                justify-content: center;
                align-items: center;
            }
        }

        /* Tablet View Styles */
        @media (min-width: 769px) and (max-width: 991px) {
            .navbar-nav {
                flex-direction: row;
                justify-content: center;
                text-align: center;
            }
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
    <div class="sticky-top">
        <div class="topbar d-none d-lg-block" style="background-color:#0F4896;">
            <div class="px-0">
                <div class="topbar-top d-flex justify-content-between flex-lg-wrap">
                    <div class="top-info flex-grow-0">
                        <div class="pe-2 me-3 border-end border-white d-flex align-items-center">
                            <p class="mb-0 text-white fs-6 fw-normal px-2">Latest Information</p>
                        </div>
                        <div class="news-ticker" style="background-color:#0F4896;">
                            <marquee behavior="scroll" direction="left" scrollamount="10" class="text-white"
                                style="background-color:#0F4896;">
                                Breaking News: Example headline 1 &nbsp;&nbsp; | &nbsp;&nbsp; Breaking News: Example headline 2 &nbsp;&nbsp; | &nbsp;&nbsp; Breaking News: Example headline 3
                            </marquee>
                        </div>
                    </div>
                </div>
               
            </div>
        </div>
    </div>

    <div class="py-4">
        <div class="">
            <div class="row g-4">
                <!-- Feature Item 1 -->
                <div class="col-md-6 col-lg-6 col-xl-6">
                    <div class="row g-4 align-items-center features-item">
                        <div class="col-12">
                            <div class="features-content d-flex flex-column">
                                <div class="row">
                                    <div class="col-lg-4 d-flex justify-content-center align-items-center">
                                        <img src="download.png" width="100px" height="100px" class="text-center">
                                    </div>
                                    <div class="col-lg-8 justify-content-center align-items-center pt-2">
                                        <h4 style="color:#0F4896;">Subramanian Polytechnic College</h4>
                                        <h5>Rayavaram, Pudukkottai, Tamil Nadu, India <br> – 622 506.</h>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Feature Item 2 -->
                <div class="col-md-6 col-lg-6 col-xl-6 mt-4 pt-2" style="padding-left:80px !important;">
                    <div class="row g-2 align-items-center features-item">
                        <div class="col-lg-12 d-flex">
                            <div class="features-container d-flex">
                                <div class="features-content d-flex flex-column">
                                    <h1 class="text-uppercase">
                                        <i class="fa-solid fa-envelope icon" style="font-size:large;color:#0F4896;"></i> E-mail Us
                                    </h1>
                                    <h6>principal@sptc.org.in</h6>
                                </div>
                                <div class="features-content d-flex flex-column" >
                                    <h1 class="text-uppercase">
                                        <i class="fa-solid fa-phone-volume icon" style="font-size:medium;color:#0F4896;"></i> Contact Us
                                    </h1>
                                    <h6>+91-4333-272226, 272878.</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Repeat similar structure for other items -->
            </div>
        </div>
    </div>

    <div class="sticky-top" style="background-color:#0F4896;">
        <div class="px-0">
            <nav class="navbar navbar-light navbar-expand-xl">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse py-1" id="navbarCollapse" style="background-color:#0F4896;">
                    <div class="navbar-nav mx-auto border-top">
                        <a href="index.php" class="text-white nav-link active">Home</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link text-white dropdown-toggle" data-bs-toggle="dropdown">About Us</a>
                            <div class="dropdown-menu m-0 rounded-0">
                                <a href="history.php" class="dropdown-item">History</a>
                                <a href="#visionandmission" class="dropdown-item">Vision Mission</a>
                                <a href="profile.php" class="dropdown-item">Profile of the College</a>
                            </div>
                        </div>
                        <div class="nav-item dropdown">
    <a href="#" class="nav-link text-white dropdown-toggle" data-bs-toggle="dropdown">Admission</a>
    <div class="dropdown-menu m-0 rounded-0">
        <div class="dropdown-item dropdown">
            
  
        </div>
        <a href="#" class="dropdown-item">Fees Structure</a>
        <a href="online_app.php" class="dropdown-item">Online Application</a>
    </div>
</div> <div class="nav-item dropdown">
                            <a href="#" class="nav-link text-white dropdown-toggle" data-bs-toggle="dropdown">Departments</a>
                            <div class="dropdown-menu m-0 rounded-0">
                            <a href="basic_engi.php" class="dropdown-item">Basic Engineering</a>
                <a href="computer_engineering.php" class="dropdown-item">Computer Engineering</a>
                <a href="electrical_engineering.php" class="dropdown-item">Electrical and Electronic Engineering</a>
                <a href="communication_engineering.php" class="dropdown-item">Electronics and Communication Engineering</a>
                <a href="mech_engineering.php" class="dropdown-item">Mechanical Engineering</a>
                 <a href="civil_engineering.php" class="dropdown-item">Civil Engineering</a>
                              
                            </div>
                        </div>

                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link text-white dropdown-toggle" data-bs-toggle="dropdown">Gallery</a>
                            <div class="dropdown-menu m-0 rounded-0">
                                <a href="imggallery.php" class="dropdown-item">Image Gallery</a>
                                <a href="videogallery.php" class="dropdown-item"> Video Gallery </a>
                              
                            </div>
                        </div>
                        
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link text-white dropdown-toggle" data-bs-toggle="dropdown">Facilities</a>
                            <div class="dropdown-menu m-0 rounded-0">
                                <a href="hostel.php" class="dropdown-item"> Hostel</a>
                                <a href="library.php" class="dropdown-item">  Library </a>
                                <a href="transport.php" class="dropdown-item">  Transport </a>
                                <a href="added_facility.php" class="dropdown-item">  Added Facility </a>
                              
                            </div>
                        </div>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link text-white dropdown-toggle" data-bs-toggle="dropdown">Activities</a>
                            <div class="dropdown-menu m-0 rounded-0">
                                <a href="alumni.php" class="dropdown-item"> Alumni</a>
                                <a href="sports.php" class="dropdown-item">  Sports </a>
                                <a href="placement.php" class="dropdown-item">  Placement </a>
                                <a href="nss.php" class="dropdown-item">  NSS </a>
                              
                            </div>
                        </div>
                        <a href="bus_timing.php" class="nav-link text-white">Bus Timings</a>
                      
                        <a href="contact.php" class="nav-link text-white">Contact Us</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>

</body>

</html>
