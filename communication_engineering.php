<!DOCTYPE html>
<html lang="en">
<?php include "header.php"; ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Electronics and Communication Engineering</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.1.0/css/bootstrap.min.css">
    <style>
        .course-section {
            padding: 40px 20px;
            text-align: center;
        }
        .course-section h1 {
            color: #0F4896;
            margin-bottom: 20px;
        }
        .course-card {
            border: 1px solid #0F4896;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin: 20px 0;
        }
        .course-card-header {
            background-color: #0F4896;
            color: white;
            padding: 15px;
            font-size: 1.2rem;
        }
        .course-card-body {
            padding: 15px;
            text-align: left;
        }
        .course-img {
            max-width: 100%;
            height: auto;
            margin: 20px 0;
        }
    </style>
</head>

<body>
    <?php require 'navbar.php'; ?>

    <section class="course-section">
        <h1>Electronics and Communication Engineering</h1>
        <div class="container">
            <div class="course-img">
                <img src="img/electronics-communication-engineering.jpg" alt="Electronics and Communication Engineering Image">
            </div>
            <div class="course-card">
                <div class="course-card-header">Overview</div>
                <div class="course-card-body">
                    <p>The Electronics and Communication Engineering course focuses on the design and development of electronic systems and communication technologies. It combines electronics with communication protocols to prepare students for a wide range of tech roles.</p>
                </div>
            </div>
            <div class="course-card">
                <div class="course-card-header">Key Features</div>
                <div class="course-card-body">
                    <ul>
                        <li>Advanced electronics design and analysis</li>
                        <li>Communication systems and protocols</li>
                        <li>Integration of electronics with digital systems</li>
                        <li>Hands-on experience with communication devices</li>
                    </ul>
                </div>
            </div>
            <div class="course-card">
                <div class="course-card-header">Career Opportunities</div>
                <div class="course-card-body">
                    <p>Graduates can work as electronics engineers, communication systems engineers, network engineers, or R&D professionals in various sectors including telecommunications, consumer electronics, and IT services.</p>
                </div>
            </div>
        </div>
    </section>

    <?php require 'footer.php'; ?>
</body>

</html>
