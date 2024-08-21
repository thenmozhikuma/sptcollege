<!DOCTYPE html>
<html lang="en">
<?php include "header.php"; ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library Facilities</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.1.0/css/bootstrap.min.css">
    <style>
        .library-section {
            padding: 40px 20px;
            text-align: center;
        }

        .library-section h1 {
            color: #0F4896;
            margin-bottom: 20px;
        }

       

        .resource-item {
            display: flex;
            align-items: center;
            padding: 10px 0;
        }

        .resource-item i {
            color: #0F4896;
            font-size: 24px;
            margin-right: 15px;
        }

        .resource-item p {
            margin: 0;
        }
    </style>
</head>

<body>
    <?php require 'navbar.php'; ?>

    <section class="library-section">
        <h1>Library Facilities</h1>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="img/Library.jpg" alt="Library Image" class="library-img" width="100%" height="400px !important">
                </div>
                <div class="col-md-6 card">
                    <p class="mt-4 " style="justify-content:center;">
                        Our Library is spacious and is well stocked with around 13,000 books for the use of the students. It also provides room for students to sit down and read or refer to books. The Library features the following facilities:
                    </p>
                    <div class="resource-item">
                        <i class="fas fa-book"></i>
                        <p>Daily Papers: 6</p>
                    </div>
                    <div class="resource-item">
                        <i class="fas fa-book-open"></i>
                        <p>Journals: 30</p>
                    </div>
                    <div class="resource-item">
                        <i class="fas fa-book-reader"></i>
                        <p>Reference Books and Materials</p>
                    </div>
                    <div class="resource-item">
                        <i class="fas fa-newspaper"></i>
                        <p>Magazines</p>
                    </div>
                  
                    <div class="resource-item">
                        <i class="fas fa-video"></i>
                        <p>CDs: 174 and Video Tapes: 40</p>
                    </div>
                    <div class="resource-item">
                        <i class="fas fa-question-circle"></i>
                        <p>Q&A Booklets for Board Examination</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php require 'footer.php'; ?>
</body>

</html>
