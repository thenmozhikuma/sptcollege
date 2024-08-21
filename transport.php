<!DOCTYPE html>
<html lang="en">
<?php
include "header.php";
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transport Facilities</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.1.0/css/bootstrap.min.css">
    <style>
        .transport-section {
            padding: 40px 20px;
            text-align: center;
        }

        .transport-section h1 {
            color: #0F4896;
            margin-bottom: 20px;
        }

        .transport-card {
            margin: 10px 0;
            border: 1px solid #0F4896;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .transport-card-header {
            background-color: #0F4896;
            color: white;
            padding: 15px;
            font-size: 1.2rem;
            display: flex;
            align-items: center;
        }

        .transport-card-body {
            padding: 15px;
            font-size: 1rem;
        }

        .transport-card-body i {
            color: #0F4896;
            margin-right: 10px;
            font-size: 20px;
        }

        .transport-card-body p {
            margin: 0;
        }
    </style>
</head>

<body>
    <?php require 'navbar.php'; ?>

    <section class="transport-section">
        <h1>Transport Facilities</h1>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="transport-card">
                        <div class="transport-card-header">
                            <i class="fas fa-bus"></i> Pudukottai
                        </div>
                        <div class="transport-card-body">
                            <p>3 buses and a van from Pudukottai</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="transport-card">
                        <div class="transport-card-header">
                            <i class="fas fa-bus"></i> Karaikudi
                        </div>
                        <div class="transport-card-body">
                            <p>4 buses from Karaikudi</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="transport-card">
                        <div class="transport-card-header">
                            <i class="fas fa-bus"></i> Tirupathur
                        </div>
                        <div class="transport-card-body">
                            <p>1 bus from Tirupathur</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="transport-card">
                        <div class="transport-card-header">
                            <i class="fas fa-bus"></i> Keelaseevalpatti
                        </div>
                        <div class="transport-card-body">
                            <p>1 bus from Keelaseevalpatti</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="transport-card">
                        <div class="transport-card-header">
                            <i class="fas fa-bus"></i> Aranthangi
                        </div>
                        <div class="transport-card-body">
                            <p>1 bus from Aranthangi</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="transport-card">
                        <div class="transport-card-header">
                            <i class="fas fa-van"></i> Arimalam
                        </div>
                        <div class="transport-card-body">
                            <p>1 van from Arimalam</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="transport-card">
                        <div class="transport-card-header">
                            <i class="fas fa-bus"></i> Alangudi
                        </div>
                        <div class="transport-card-body">
                            <p>1 bus from Alangudi-via-Kulavaipatti and Arimalam</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="transport-card">
                        <div class="transport-card-header">
                            <i class="fas fa-bus"></i> Devakottai
                        </div>
                        <div class="transport-card-body">
                            <p>1 bus from Devakottai-via-Kandadevi and Aravayal</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="transport-card">
                        <div class="transport-card-header">
                            <i class="fas fa-bus"></i> Kanadukathan
                        </div>
                        <div class="transport-card-body">
                            <p>1 bus from Kanadukathan and Nemathanpatti</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="transport-card">
                        <div class="transport-card-header">
                            <i class="fas fa-van"></i> Ponnamaravathy
                        </div>
                        <div class="transport-card-body">
                            <p>1 van from Ponnamaravathy-via Kulipirai and Namanasamudram</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php require 'footer.php'; ?>
</body>

</html>
