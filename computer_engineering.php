<!DOCTYPE html>
<html lang="en">
<?php include "header.php"; ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Computer Engineering</title>
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

        .course-description {
            font-size: 1.2rem;
            color: #333;
            margin-bottom: 20px;
        }

        .course-content {
            text-align: left;
        }

        .course-content h2 {
            color: #0F4896;
            margin-bottom: 15px;
        }

        .course-content p {
            font-size: 1rem;
            margin-bottom: 10px;
        }

        .course-img {
            max-width: 100%;
            height: auto;
            margin: 20px 0;
        }

        .course-card {
            border: 1px solid #0F4896;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
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
        }
    </style>
</head>

<body>
    <?php require 'navbar.php'; ?>

    <section class="course-section">
        <h1>Computer Engineering</h1>
        <div class="container">
            <div class="course-img">
                <img src="img/computer-engineering.jpg" alt="Computer Engineering Image">
            </div>
            <div class="course-description">
                <p>Our Computer Engineering program is designed to provide students with a comprehensive understanding of computer systems, programming, and application development. The curriculum includes hands-on experience with cutting-edge technology and real-world projects.</p>
            </div>
            <div class="course-content">
                <div class="course-card">
                    <div class="course-card-header">
                        Course Overview
                    </div>
                    <div class="course-card-body">
                        <p>The Computer Engineering course covers fundamental topics such as computer architecture, programming languages, data structures, algorithms, and software engineering. Students will also gain expertise in areas like network security, database systems, and artificial intelligence.</p>
                    </div>
                </div>
                <div class="course-card">
                    <div class="course-card-header">
                        Key Modules
                    </div>
                    <div class="course-card-body">
                        <ul>
                            <li>Introduction to Programming</li>
                            <li>Computer Networks</li>
                            <li>Operating Systems</li>
                            <li>Database Management Systems</li>
                            <li>Software Engineering</li>
                            <li>Artificial Intelligence</li>
                        </ul>
                    </div>
                </div>
                <div class="course-card">
                    <div class="course-card-header">
                        Career Opportunities
                    </div>
                    <div class="course-card-body">
                        <p>Graduates of the Computer Engineering program can pursue careers in various fields, including software development, network administration, cybersecurity, data analysis, and IT consultancy. The program prepares students for roles such as software engineers, system analysts, network architects, and database administrators.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php require 'footer.php'; ?>
</body>

</html>
