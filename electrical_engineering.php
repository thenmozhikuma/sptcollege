<!DOCTYPE html>
<html lang="en">
<?php include "header.php"; ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Electrical and Electronic Engineering</title>
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
        <h1>Electrical and Electronic Engineering</h1>
        <div class="container">
            <div class="course-img">
                <img src="img/electrical-electronic-engineering.jpg" alt="Electrical and Electronic Engineering Image">
            </div>
            <div class="course-card">
                <div class="course-card-header">Overview</div>
                <div class="course-card-body">
                    <p>The Electrical and Electronic Engineering course covers the principles of electrical systems, electronics, and electrical circuits. It prepares students to design, develop, and maintain electrical systems and devices.</p>
                </div>
            </div>
            <div class="course-card">
                <div class="course-card-header">Key Features</div>
                <div class="course-card-body">
                    <ul>
                        <li>Study of electrical circuits and systems</li>
                        <li>Hands-on experience with electronic devices</li>
                        <li>Focus on renewable energy systems</li>
                        <li>Advanced topics like control systems and instrumentation</li>
                    </ul>
                </div>
            </div>
            <div class="course-card">
                <div class="course-card-header">Career Opportunities</div>
                <div class="course-card-body">
                    <p>Graduates can pursue careers as electrical engineers, electronics design engineers, control systems engineers, or project managers in various industries including power generation, manufacturing, and telecommunications.</p>
                </div>
            </div>
        </div>
    </section>

    <?php require 'footer.php'; ?>
</body>

</html>
