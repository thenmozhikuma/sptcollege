
    <style>
        .portfolio-wrap {
            position: relative;
            overflow: hidden;
            cursor: pointer;
            border-radius: 8px;
        }

        .portfolio-wrap img {
            width: 100%;
            height: 100%;
            transition: transform 0.3s ease;
        }

        .portfolio-wrap:hover img {
            transform: scale(1.1);
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
            transition: opacity 0.3s ease;
            text-decoration:none;
        }
        .portfolio-wrap:hover .portfolio-info {
            opacity: 1;
        }

        .portfolio-info i {
            color: white;
            font-size: 2rem;
        }
        .a{
            text-decoration: none !important;
        }
    </style>

 <!-- ======= Portfolio Section ======= -->
        <section id="gallery" class="portfolio">
            <div class="container">
                <div class="section-title" data-aos="fade-up">
                    <h2 class="text-center mt-2">Gallery</h2>
                    <p class="text-center mt-2">Explore our company's vibrant image gallery - a visual narrative of our journey, innovation, and
                        dedication to excellence.
                    </p>
                </div>


                <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
                <?php
                  include('dbconnect.php');
                   $Gallery = mysqli_query($con,"SELECT * FROM gallery order by id desc LIMIT 9");
                   if(mysqli_num_rows($Gallery)>0){
                    while($gallery_result = mysqli_fetch_array($Gallery)){
                   ?>
              
              <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap" data-bs-toggle="modal" data-bs-target="#imageModal" data-imgsrc="admin/<?=$gallery_result['image']; ?>">
                        <img src="admin/<?=$gallery_result['image']; ?>" class="img-fluid  pt-5"  alt="">
                        <div class="portfolio-info">
                        <i class="fa-solid fa-plus"></i>
                        </div>
                    </div>
                </div>
                    <?php }} ?>
                </div>
                <div class="row text-center">
                    <div class="col-12">
                        <a href="gallery.php" class="btn-buy position-relative top-100">View More <i
                        class="bi bi-chevron-double-right"></i></a>
                    </div>
                </div>
            </div>
        </section>
        <div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body text-center">
                <img id="modalImage" src="" class="img-fluid" alt="Selected Image">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<script>
document.addEventListener('DOMContentLoaded', function () {
    const portfolioItems = document.querySelectorAll('.portfolio-wrap');
    const modalImage = document.getElementById('modalImage');

    portfolioItems.forEach(item => {
        item.addEventListener('click', function () {
            const imgSrc = item.getAttribute('data-imgsrc');
            modalImage.setAttribute('src', imgSrc);
        });
    });
});
</script>
        <!-- End Portfolio Section -->