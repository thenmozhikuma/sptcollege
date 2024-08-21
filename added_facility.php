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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.1.0/css/bootstrap.min.css">
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
        .history-item {
            display: flex;
            align-items: center;
            padding: 10px 0;
        }
        .history-item i {
            color: #0F4896;
            font-size: 24px;
            margin-right: 15px;
        }
        .history-item p {
            margin: 0;
        }
    </style>
</head>

<body>
    <?php require 'navbar.php'; ?>

    <section class="history-section">
        <h1>Facilities</h1>
        <div class="container">
            <div class="card">
                <div class="card-header">
                    Added Facilities 
                </div>
                <div class="card-body">
                    <div class="history-item">
                        <i class="fas fa-book"></i>
                        <p>Air-conditioned Library, Seminar Hall & Computer Lab</p>
                    </div>
                    <div class="history-item">
                        <i class="fas fa-chalkboard-teacher"></i>
                        <p>Smart Class Room</p>
                    </div>
                    <div class="history-item">
                        <i class="fas fa-camera"></i>
                        <p>IP Cameras in Important Locations</p>
                    </div>
                    <div class="history-item">
                        <i class="fas fa-cogs"></i>
                        <p>One more CNC Machine added in Mechanical Department Lab</p>
                    </div>
                    <div class="history-item">
                        <i class="fas fa-solar-panel"></i>
                        <p>Solar Power Plant</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php require 'footer.php'; ?>
</body>
</html>
