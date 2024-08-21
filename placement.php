<?php
session_start();
error_reporting(0);
require 'header.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <style>
        .section {
            padding: 40px 20px;
            text-align: center;
        }
        .section h1 {
            color: #0F4896;
            margin-bottom: 20px;
        }
        .card {
            border-color: #0F4896;
            margin-bottom: 20px;
        }
        .card-header {
            background-color: #0F4896;
            color: white;
        }
        .card-body {
            font-size: 1.1rem;
            color: #333;
            text-align: left;
        }
        .card-body ul {
            list-style-type: none;
            padding-left: 0;
        }
        .card-body ul li {
            margin-bottom: 10px;
        }
        .highlight {
            color: #0F4896;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <?php require 'navbar.php'; ?>

    <section class="section">
        <h1>Placement and Career Opportunities</h1>
        <div class="container">
            <div class="card">
                <div class="card-header">
                    Placement Overview
                </div>
                <div class="card-body">
                    <p>
                        A Part-Time Placement Officer, assisted by a group of dedicated staff, oversees the following activities. Leading companies like TVS – Sundaram Fasteners, HCL, and LGB – Eureka Forbes regularly visit our college to recruit students.
                    </p>
                    <ul>
                        <li>Arranging campus interviews</li>
                        <li>Conduct of Entrepreneurship Awareness Programme</li>
                        <li>Arranging Inplant training for students</li>
                        <li>Industrial Visits</li>
                        <li>Roping in Alumni to share their experience with the students</li>
                    </ul>
                    <p>
                        Placement Officer: Mr. P. Ramalingam, Sr. Lecturer/Mech<br>
                        Contact Number: 04333-272226<br>
                        Mobile Number: 99448 87889
                    </p>
                    <p class="highlight">
                        Kindly forward your resume by e-mail to <a href="mailto:placement@sptc.org.in">placement@sptc.org.in</a>
                    </p>
                    <p>
                        Placements for the years 2011-2012 and 2012-2013 have been particularly successful, reflecting the strong placement support provided by our institution.
                    </p>
                </div>
                <table class="table table-bordered mt-4 table-container-fluid" style="color:#0F4896;">
                    <thead>
                        <tr>
                            <th>Name of the Company</th>
                            <th>Textile</th>
                            <th>Computer</th>
                            <th>ECE</th>
                            <th>EEE</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>TVS – Sundaram Fasteners</td>
                            <td>✔</td>
                            <td>✔</td>
                            <td>✔</td>
                            <td>✔</td>
                        </tr>
                        <tr>
                            <td>HCL</td>
                            <td>✘</td>
                            <td>✔</td>
                            <td>✔</td>
                            <td>✘</td>
                        </tr>
                        <tr>
                            <td>LGB – Eureka Forbes</td>
                            <td>✔</td>
                            <td>✔</td>
                            <td>✘</td>
                            <td>✔</td>
                        </tr>
                    </tbody>
                </table>
                <!-- Table ends here -->
            </div>
        </div>
    </section>

    <?php require 'footer.php'; ?>

</body>
</html>
