<!DOCTYPE html>
<html lang="en">
<style>
    .news-container {
        width: 100%;
        background-color: #f9f9f9;
        border-radius: 0;
        padding-right: 2px !important;
    }

    .news-scroller {
        height: 345px;
        overflow-y: hidden;
        position: relative;
    }

    .news-list {
        list-style: none;
        margin: 0;
        padding: 0;
    }

    .news-item {
        display: flex;
        align-items: center;
        padding: 10px;
        background-color: #fff;
        margin-bottom: 10px;
        border-radius: 2px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    .news-item .date {
        font-size: 14px;
        color: #007bff;
        margin-right: 10px;
        font-weight: bold;
    }

    @keyframes scrollUp {
        0% {
            transform: translateY(0);
        }

        100% {
            transform: translateY(-100%);
        }
    }

    .scroll {
        animation: scrollUp 25s linear infinite;
    }
</style>

<body>
    <div class=" py-4">
        <div class="row g-4 px-2 py-2">
            <div class="col-lg-7 col-xl-8 mt-0">
                <div class="position-relative overflow-hidden rounded slider p-0">
                    <div class="slider-inner">
                        <?php
                            include "dbconnect.php";
                            $query = "select * from banner";
                            $result = mysqli_query($con, $query);
                            while ($row = mysqli_fetch_array($result)) {
                                $image = $row['image'];
                        ?>
                        <img src="<?php echo 'admin/' . $image; ?>" style="height:420px;"
                            class="img-fluid rounded img-zoomin w-100 slider-image" alt="">
                        <?php
                            }
                        ?>
                    </div>
                    <button class="prev-btn">&#10092;</button>
                    <button class="next-btn">&#10093;</button>
                </div>
            </div>
            <div class="col-lg-5 col-xl-4 container mt-2 px-3">
                <div class="bg-light rounded pt-0" style="border:1px solid rgba(0, 0, 0, 0.1);">
                    <div class="news-container p-3">
                        <h3>News and Events</h3>
                        <div class="news-scroller">
                            <ul class="news-list scroll">
                                <?php
                                    include "dbconnect.php";
                                    $fetch="select * from newsandevents";
                                    $fetch_res=mysqli_query($con,$fetch);
                                    while($rr=mysqli_fetch_array($fetch_res)){
                                ?>
                                <li>
                                    <div class="news-item">
                                        <span class="date"><?php echo $rr['date']; ?></span>
                                        <p><?php echo $rr['subject']; ?></p>
                                    </div>
                                </li>
                                <?php
                                    }
                                ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
    const slider = document.querySelector('.slider');
    const sliderInner = document.querySelector('.slider-inner');
    const sliderImages = document.querySelectorAll('.slider-image');
    const prevBtn = document.querySelector('.prev-btn');
    const nextBtn = document.querySelector('.next-btn');

    let currentIndex = 0;

    // Function to update the slider position
    const updateSlider = () => {
        const slideWidth = slider.clientWidth;
        sliderInner.style.transform = `translateX(-${currentIndex * slideWidth}px)`;
    };

    // Automatic slider function
    const startAutoSlide = () => {
        setInterval(() => {
            currentIndex = (currentIndex + 1) % sliderImages.length;
            updateSlider();
        }, 5000); // Change slide every 5 seconds
    };

    // Event listeners for manual control
    nextBtn.addEventListener('click', () => {
        currentIndex = (currentIndex + 1) % sliderImages.length;
        updateSlider();
    });

    prevBtn.addEventListener('click', () => {
        currentIndex = (currentIndex - 1 + sliderImages.length) % sliderImages.length;
        updateSlider();
    });

    // Ensure the slider updates on window resize
    window.addEventListener('resize', updateSlider);

    // Initialize the slider
    updateSlider();
    startAutoSlide(); // Start the automatic slider
    </script>

</body>

</html>
