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
    <title>College History</title>
   
    <style>
        .history-section {
            padding: 40px 20px;
            text-align: center;
        }
        .history-section h1 {
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
            justify-content: center;
        }
    </style>
</head>

<body>
    <?php require 'navbar.php'; ?>

    <section class="history-section">
        <h1>Our College History</h1>
        <div class="container">
            <div class="card">
                <div class="card-header">
                    College History
                </div>
                <div class="card-body">
                    <p>
                        Subramanian Polytechnic College was established on January 17, 1994, with the aim of providing quality education in the field of engineering and technology. Over the years, the college has grown significantly and has earned a reputation for excellence in both academic and extracurricular activities.
                    </p>
                    <p>
                        The college was affiliated with Bharathidasan University, which helped shape its curriculum and maintain high educational standards. With a focus on holistic development, Subramanian Polytechnic College offers a range of undergraduate, postgraduate, M.Phil, and Ph.D. programs.
                    </p>
                    <p>
                        From its inception, the college has been committed to fostering a conducive learning environment and has continuously upgraded its facilities and programs to meet the evolving needs of students and the industry.
                    </p>
                    <p>
                        Today, Subramanian Polytechnic College stands as a beacon of educational excellence in Tamil Nadu, contributing to the growth and development of its students and the community at large.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <?php require 'footer.php'; ?>

  
</body>
</html>
