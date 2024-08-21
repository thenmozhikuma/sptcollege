<link href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
    .carousel-item img {
        width: 100%;
        height: 150px;
        object-fit: cover;
    }

    .carousel-item {
        text-align: center;
    }

    .card {
        max-height: 350px; /* Limit the card height */
        overflow: hidden;
        width: 18rem;
    }

    .card-title {
        font-size: 18px;
        font-weight: bold;
    }

    .card-text {
        font-size: 14px;
        margin-bottom: 0;
    }

    .administrator {
        height: 400px !important;
    }

    .card-body {
        height: 120px; 
        display: flex;
        flex-direction: column;
        justify-content: center;
    }
</style>

<body>

<div class="container my-5">
    <h2 class="text-center">Administrators</h2>
    <div id="adminCarousel" class="carousel slide administrator" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="d-flex justify-content-center">
                    <?php
                    include "dbconnect.php";
                    $query="select * from admin_details";
                    $result=mysqli_query($con,$query);
                    while($row=mysqli_fetch_array($result)){
                        ?>
                    <div class="card mx-2">
                        <img src="admin/<?php echo $row['admin_image']; ?> " class="card-img-top" alt="Admin Image">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $row['admin_name']; ?></h5>
                            <p class="card-text"><?php echo $row['qualification']; ?></p>
                            <p class="card-text"><?php echo $row['designation']; ?></p>
                        </div>
                    </div>
                   <?php
                    }
                    ?>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#adminCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <i class="fa-solid fa-arrow-left text-dark"></i>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#adminCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <i class="fa-solid fa-arrow-right text-dark"></i>
        </button>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>