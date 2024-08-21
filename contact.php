<!DOCTYPE html>
<html lang="en">

<?php
include "header.php";
?>
<?php
include "dbconnect.php";
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $query = "insert into contact values (null,'$name','$email','$phone','$subject','$message',null)";
    $result = mysqli_query($con, $query);
    if ($result) {
        echo "<script>alert('Thankyou for contacting us!');window.location.href='contact.php';</script>";
    } else {
        echo "<script>alert('sorry, failed to insert');window.location.href='contact.php';</script>";
    }
}
?>

<body>
    <?php include "navbar.php"; ?>
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="bg-light rounded p-5">
                <div class="row g-4">
                    <div class="col-lg-5">
                        <div class="">
                            <h1 class="mb-4">Contact Us</h1>

                            <div class="rounded">

                                <iframe class="rounded w-100"
                                    style="height: 575px; border:1px solid black;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7852.095394126696!2d78.816673!3d10.257737!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b007ab77b7bfef5%3A0x30dfd60743321221!2sIndianOil!5e0!3m2!1sen!2sus!4v1724098035387!5m2!1sen!2sus"
                                    loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <form action="" method="post" class="mb-4">
                            <div class="row g-4">
                                <div class="col-lg-6">
                                    <input type="text" class="w-100 form-control border-0 py-3" name="name" placeholder="Your Name">
                                </div>
                                <div class="col-lg-6">
                                    <input type="email" class="w-100 form-control border-0 py-3" name="email" placeholder="Enter Your Email">
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" class="w-100 form-control border-0 py-3" name="phone" placeholder="Enter Your Phone">
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" class="w-100 form-control border-0 py-3" name="subject" placeholder="Subject">
                                </div>
                                <div class="col-12">
                                    <textarea class="w-100 form-control border-0" rows="6" cols="10" placeholder="Your Message" name="message"></textarea>
                                </div>
                                <div class="col-12">
                                    <button class="w-100 btn btn-primary form-control py-3" type="submit" name="submit">Submit Now</button>
                                </div>
                            </div>
                        </form>
                        <div class="row g-4">
                            <div class="col-xl-6">
                                <div class="d-flex p-4 rounded bg-white">
                                    <i class="fas fa-map-marker-alt fa-2x text-primary me-4"></i>
                                    <div>
                                        <h4>Address</h4>
                                        <p class="mb-0">Subramanian Polytechnic College
                                            Rayavaram, Pudukkottai,
                                            622 506.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="d-flex p-4 rounded bg-white">
                                    <i class="fa fa-phone-alt fa-2x text-primary me-4"></i>
                                    <div>
                                        <h4>Telephone</h4>
                                        <p class="mb-0">+91-4333-272226, 272878.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="d-flex p-4 rounded bg-white">
                                    <i class="fas fa-envelope fa-2x text-primary me-4"></i>
                                    <div>
                                        <h4>Mail Us</h4>
                                        <p class="mb-0">principal@sptc.org.in</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-6">
                                <div class="d-flex p-4 rounded bg-white">
                                    <i class="fa fa-share-alt fa-2x text-primary me-4"></i>
                                    <div>
                                        <h4>Share</h4>
                                        <div class="d-flex">
                                            <a class="me-3" href=""><i class="fab fa-twitter text-dark link-hover"></i></a>
                                            <a class="me-3" href=""><i class="fab fa-facebook-f text-dark link-hover"></i></a>
                                            <a class="me-3" href=""><i class="fab fa-youtube text-dark link-hover"></i></a>
                                            <a class="" href=""><i class="fab fa-linkedin-in text-dark link-hover"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Us End -->


    <!-- Footer Start -->
    <?php include "footer.php"; ?>
</body>

</html>