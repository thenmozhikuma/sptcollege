<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alumni Registration</title>
    
    <style>
        h2 {
            color: #0F4896;
            text-align: center;
            margin-bottom: 20px;
        }
        .error {
            color: red;
            font-size: 12px;
        }
        .submit-btn {
            background-color: #0F4896;
            color: white;
        }
        .submit-btn:hover {
            background-color: #083f72;
        }
    </style>
</head>
<?php include "header.php"; ?>
<?php
include "dbconnect.php";
if(isset($_POST['register'])){
$name=$_POST['name'];
$dob=$_POST['dob'];
$aadhar=$_POST['aadhar'];
$mobile=$_POST['mobile'];
$email=$_POST['email'];
$query="insert into online_application values (null,'$name','$dob','$aadhar','$mobile','$email',null)";
$result=mysqli_query($con,$query);
if($result){
    echo "<script>alert('Registration completed');window.location.href='index.php';</script>";
}
else{
    echo "<script>alert('Something Went Wrong');window.location.href='index.php';</script>";
}
}
?>

<body>
    <?php include "navbar.php"; ?>
    <div class="container">
        <div class="row  justify-content-center">
            <div class=" card mt-5 col-md-10">
                <h2>Online Application</h2>
                <form id="alumniForm" action="" method="post">
                    <div class="form-group">
                        <label for="firstname">Student Name(as per the 10th Marksheet)</label>
                        <input type="text" class="form-control" id="firstname" name="name">
                        <div class="error" id="firstnameError"></div>
                    </div>


                    <div class="form-group">
                        <label for="dob">Date of Birth</label>
                        <input type="date" class="form-control" id="dob" name="dob">
                        <div class="error" id="dobError"></div>
                    </div>


                    <div class="form-group">
                        <label for="batch">Aadhar Number</label>
                        <input type="text" class="form-control" id="batch" name="aadhar">
                        <div class="error" id="batchError"></div>
                    </div>
                    <div class="form-group">
                        <label for="mobile">Mobile</label>
                        <input type="text" class="form-control" id="mobile" name="mobile">
                        <div class="error" id="mobileError"></div>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email">
                        <div class="error" id="emailError"></div>
                    </div>

                   <input type="submit" name="register" value="Register" class="btn text-center mt-2 mb-2 " style="background-color:#0F4896;color:white;">
                </form>
            </div>
        </div>
    </div>

  

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <?php include "footer.php"; ?>
</body>
</html>
