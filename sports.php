<?php
session_start();
error_reporting(0);
require 'header.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <style>
        .sports-section {
            padding: 40px 20px;
            text-align: center;
        }
        .sports-section h1 {
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

    <section class="sports-section">
        <h1>Sports and Games</h1>
        <div class="container">
            <div class="card">
                <div class="card-header">
                    Sports and Games Overview
                </div>
                <div class="card-body">
                    <p>
                        Our college takes pride in its sports and games programs, which are managed by a dedicated full-time Physical Director. The Physical Director is responsible for selecting talented students and providing them with the necessary training to excel in various sports activities.
                    </p>
                    <p>
                        Students representing our college participate in Thanjavur Divisional Tournaments for Polytechnic colleges. Over the years, our teams have achieved remarkable success in various sports:
                    </p>
                    <ul class="align-items-center " style="justify-content:center;">
                        <li>Kho-Kho</li>
                        <li>Kabaddi</li>
                        <li>Ball Badminton</li>
                    </ul>
                    <p>
                        Annual sports competitions are held each year, where prizes are awarded to the winners of different events. Notably, our college won the overall championship in Sports and Games during the Thanjavur Divisional Tournaments for the year 2012-2013.
                    </p>
                    <p class="highlight">
                        We continue to encourage and support our students in their athletic endeavors, aiming for excellence both on and off the field.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <?php require 'footer.php'; ?>

</body>
</html>
