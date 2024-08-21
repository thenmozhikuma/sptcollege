<?php
session_start();
error_reporting(0);
require 'header.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NSS - National Service Scheme</title>
   
    <style>
        .nss-section {
            padding: 40px 20px;
            text-align: center;
        }
        .nss-section h1 {
            color: #0F4896;
            margin-bottom: 20px;
        }
        .card {
            border-color: #0F4896;
        }
        .card-header {
            background-color: #0F4896;
            color: white;
        }
        .card-body {
            font-size: 1.1rem;
            color: #333;
        }
        .card-body p{
            text-align: left;
        }
    </style>
</head>

<body>
    <?php require 'navbar.php'; ?>

    <section class="nss-section">
        <h1>National Service Scheme (NSS)</h1>
        <div class="container">
            <div class="card">
                <div class="card-header">
                    About NSS
                </div>
                <div class="card-body">
                    <p>
                        The National Service Scheme (NSS) at Subramanian Polytechnic College is dedicated to fostering a spirit of social responsibility and community service among students. Our NSS unit comprises 100 enthusiastic and socially conscious students who are actively involved in various service activities.
                    </p>
                    <p>
                        With the unwavering support of our management, the NSS unit organizes and participates in numerous initiatives aimed at benefiting society. These include seminars on personality development, eye and organ donation drives, and blood donation camps. Each year, our college community, including students and staff, comes together to donate blood, demonstrating our commitment to humanitarian causes.
                    </p>
                    <p>
                        Under the leadership of Mr. P.L. Veerappan, Lecturer in Physics and the NSS Program Officer, our NSS unit continues to grow and expand its impact. His guidance and dedication play a crucial role in the success and effectiveness of our service programs.
                    </p>
                    <p>
                        The NSS activities at our college are designed to not only contribute to societal welfare but also to instill values of empathy, leadership, and teamwork in our students. Through active participation in these activities, our students gain valuable experiences and develop a lifelong commitment to service.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <?php require 'footer.php'; ?>

</body>
</html>
