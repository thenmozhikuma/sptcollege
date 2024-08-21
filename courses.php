<style>
.card {
    width: 280px;
    height: 400px;
}
</style>

<div class="container-fluid latest-news ">
    <div class="container pb-2">
        <h2 class="mb-4">Courses We Offer</h2>
        <div class="latest-news-carousel owl-carousel">
            <?php 
                        include "dbconnect.php";
                        $query1="select * from course";
                        $result1=mysqli_query($con,$query1);
                        while($row1=mysqli_fetch_array($result1)){
                          $course_name=$row1['course_name'];
                          $course_image=$row1['course_image'];
                          $course_description=$row1['course_description'];
                         ?>

            <div class="latest-news-item">
                <div class="bg-light rounded card">

                    <div class="rounded-top overflow-hidden">
                        <img src="<?php echo 'admin/'.$course_image; ?>" class="img-zoomin img-fluid rounded-top "
                            style="width:300px; height:200px !important;" alt="">
                    </div>
                    <div class="d-flex flex-column p-4">
                        <a href="#" class="h4"><?php echo $course_name; ?> </a>
                        <div class="d-flex justify-content-between">
                            <p class="small text-body hover"><?php echo $course_description; ?></p>

                        </div>
                    </div>
                </div>
            </div>


            <?php
                        }
                        ?>
        </div>
    </div>
</div>
<!-- Latest News End -->