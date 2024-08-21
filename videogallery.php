<?php
session_start();
error_reporting(0);
require 'header.php';
?>
<!DOCTYPE html>
<html lang="en">

    <style>
    .portfolio-wrap {
        position: relative;
        overflow: hidden;
        cursor: pointer;
        border-radius: 10px;
    }

    .portfolio-wrap video {
        width: 100%;
        height: 100%;
        object-fit: cover; /* Ensure the video fits well within the container */
        transition: transform 0.5s ease;
    }

    .portfolio-wrap:hover video {
        transform: scale(1.1); /* Limit the scale to avoid excessive zoom */
    }

    .portfolio-info {
        position: absolute;
        top: 25px;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(0, 0, 0, 0.6);
        display: flex;
        align-items: center;
        justify-content: center;
        opacity: 0;
        transition: opacity 0.2s ease;
    }

    .portfolio-wrap:hover .portfolio-info {
        opacity: 1;
    }

    .portfolio-info i {
        color: white;
        font-size: 2rem;
    }
    </style>

<body>
<?php
require 'navbar.php';
?>
<main id="main">
    <section id="portfolio" class="portfolio mb-3">
        <div class="container">
            <div class="section-title" data-aos="fade-up">
                <h2 class="text-center mt-2">Video Gallery</h2>
                <p>Explore our company's dynamic video gallery - a visual narrative of our journey, innovation, and dedication to excellence.</p>
            </div>
            <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
                <?php
                include('dbconnect.php');
                $Gallery = mysqli_query($con, "SELECT * FROM video ORDER BY id DESC");
                if (mysqli_num_rows($Gallery) > 0) {
                    while ($gallery_result = mysqli_fetch_array($Gallery)) {
                ?>
                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap" data-bs-toggle="modal" data-bs-target="#videoModal" data-videosrc="admin/<?=$gallery_result['video']; ?>">
                        <video class="img-fluid pt-5" muted>
                            <source src="admin/<?=$gallery_result['video']; ?>" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                        <div class="portfolio-info">
                            <i class="fa-solid fa-play"></i>
                        </div>
                    </div>
                </div>
                <?php }} ?>
            </div>
        </div>
    </section>
</main>
<div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="videoModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body text-center">
                <video id="modalVideo" class="img-fluid" controls>
                    Your browser does not support the video tag.
                </video>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<?php
require 'footer.php';
?>
<script>
document.addEventListener('DOMContentLoaded', function () {
    const portfolioItems = document.querySelectorAll('.portfolio-wrap');
    const modalVideo = document.getElementById('modalVideo');

    portfolioItems.forEach(item => {
        item.addEventListener('click', function () {
            const videoSrc = item.getAttribute('data-videosrc');
            modalVideo.setAttribute('src', videoSrc);
        });
    });
});
</script>
</body>
</html>
