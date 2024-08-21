<!DOCTYPE html>
<html lang="en">
<?php include "header.php"; ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hostel Facilities</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.1.0/css/bootstrap.min.css">
    <style>
        .hostel-section {
            padding: 40px 20px;
            text-align: center;
        }

        .hostel-section h1 {
            color: #0F4896;
            margin-bottom: 20px;
        }

        .hostel-img {
            max-width: 100%;
            height: auto;
            margin: 20px 0;
        }

        .card {
            border-color: #0F4896;
        }

        .card-header {
            background-color: #0F4896;
            color: white;
            font-weight: bold;
        }

        .card-body {
            font-size: 1rem;
            color: #333;
        }

        .management-card {
            margin: 10px 0;
        }

        .management-card i {
            color: #0F4896;
            font-size: 24px;
            margin-right: 15px;
        }
    </style>
</head>

<body>
    <?php require 'navbar.php'; ?>

    <section class="hostel-section">
        <h1>Hostel Facilities</h1>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="img/Hostel.jpg" alt="Hostel Image" class="hostel-img">
                </div>
                <div class="col-md-6">
                    <p style="justify-content:center;" class="text-center mt-4 align-items-center">
                        Hostel facilities are available for both boys and girls. The hostel provides accommodation for all students who require these facilities. Currently, more than 250 students are using our hostel facilities.
                   
                        
                    
                        The hostel provides comfortable rooms, nutritious food, and purified drinking water at affordable costs for all.The hostel is managed and looked after by a team of people consisting of the following:
                    </p>
                    </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card management-card">
                                <div class="card-header">
                                    <i class="fas fa-user-tie"></i> Warden
                                </div>
                                <div class="card-body">
                                    Manages overall hostel operations and ensures a smooth functioning of the hostel.
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card management-card">
                                <div class="card-header">
                                    <i class="fas fa-user-shield"></i> Deputy Warden
                                </div>
                                <div class="card-body">
                                    Assists the Warden in managing the hostel and handling any issues that arise.
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card management-card">
                                <div class="card-header">
                                    <i class="fas fa-chalkboard-teacher"></i> Residential Tutors
                                </div>
                                <div class="card-body">
                                    Provides academic and personal support to students living in the hostel and maintaining.
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card management-card">
                                <div class="card-header">
                                    <i class="fas fa-utensils"></i> Mess Representatives
                                </div>
                                <div class="card-body">
                                    Ensures the quality and availability of food and manages mess operations.
                                </div>
                            </div>
                        </div>
                    </div>
                   
                
           
        </div>
    </section>

    <?php require 'footer.php'; ?>
</body>
</html>
