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
if(isset($_POST['submit'])){
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$gender=$_POST['gender'];
$dob=$_POST['dob'];
$department=$_POST['department'];
$batch=$_POST['batch'];
$address=$_POST['address'];
$pincode=$_POST['pincode'];
$mobile=$_POST['mobile'];
$email=$_POST['email'];
$query="insert into alumni values (null,'$fname','$lname','$gender','$dob','$department','$batch','$address','$pincode','$mobile','$email',null)";
$result=mysqli_query($con,$query);
if($result){
    echo "<script>alert('Registered Successfully');window.location.href='index.php';</script>";
}
else{
    echo "<script>alert('Something went wrong!');window.location.href='index.php';</script>";
}
}
?>

<body>
    <?php include "navbar.php"; ?>
    <div class="container">
        <div class="row  justify-content-center">
            <div class=" card mt-5 col-md-10">
                <h2>Alumni Registration</h2>
                <form id="alumniForm" onsubmit="return validateForm()" action="" method="post">
                    <div class="form-group">
                        <label for="firstname">First Name</label>
                        <input type="text" class="form-control" id="firstname" name="fname">
                        <div class="error" id="firstnameError"></div>
                    </div>

                    <div class="form-group">
                        <label for="lastname">Last Name</label>
                        <input type="text" class="form-control" id="lastname" name="lname">
                        <div class="error" id="lastnameError"></div>
                    </div>

                    <div class="form-group">
                        <label>Gender</label><br>
                        <div class="form-check form-check-inline">
                            <input type="radio" class="form-check-input" id="male" name="gender" value="Male">
                            <label class="form-check-label" for="male">Male</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="radio" class="form-check-input" id="female" name="gender" value="Female">
                            <label class="form-check-label" for="female">Female</label>
                        </div>
                        <div class="error" id="genderError"></div>
                    </div>

                    <div class="form-group">
                        <label for="dob">Date of Birth</label>
                        <input type="date" class="form-control" id="dob" name="dob">
                        <div class="error" id="dobError"></div>
                    </div>

                    <div class="form-group">
                        <label>Department</label><br>
                        <div class="form-check form-check-inline">
                            <input type="radio" class="form-check-input" id="cse" name="department" value="CSE">
                            <label class="form-check-label" for="cse">CSE</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="radio" class="form-check-input" id="ece" name="department" value="ECE">
                            <label class="form-check-label" for="ece">ECE</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="radio" class="form-check-input" id="eee" name="department" value="EEE">
                            <label class="form-check-label" for="eee">EEE</label>
                        </div>
                        <div class="error" id="departmentError"></div>
                    </div>

                    <div class="form-group">
                        <label for="batch">Batch</label>
                        <input type="text" class="form-control" id="batch" name="batch">
                        <div class="error" id="batchError"></div>
                    </div>

                    <div class="form-group">
                        <label for="address">Address</label>
                        <textarea class="form-control" id="address" name="address" rows="3"></textarea>
                        <div class="error" id="addressError"></div>
                    </div>

                    <div class="form-group">
                        <label for="pincode">Pincode</label>
                        <input type="text" class="form-control" id="pincode" name="pincode">
                        <div class="error" id="pincodeError"></div>
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

                   <input type="submit" name="submit" value="Register" class="btn text-center mt-2 mb-2 " style="background-color:#0F4896;color:white;">
                </form>
            </div>
        </div>
    </div>

    <script>
        function validateForm() {
            let isValid = true;

            const firstName = document.getElementById("firstname").value.trim();
            const lastName = document.getElementById("lastname").value.trim();
            const gender = document.querySelector('input[name="gender"]:checked');
            const dob = document.getElementById("dob").value;
            const department = document.querySelector('input[name="department"]:checked');
            const batch = document.getElementById("batch").value.trim();
            const address = document.getElementById("address").value.trim();
            const pincode = document.getElementById("pincode").value.trim();
            const mobile = document.getElementById("mobile").value.trim();
            const email = document.getElementById("email").value.trim();

            // Reset errors
            document.getElementById("firstnameError").textContent = "";
            document.getElementById("lastnameError").textContent = "";
            document.getElementById("genderError").textContent = "";
            document.getElementById("dobError").textContent = "";
            document.getElementById("departmentError").textContent = "";
            document.getElementById("batchError").textContent = "";
            document.getElementById("addressError").textContent = "";
            document.getElementById("pincodeError").textContent = "";
            document.getElementById("mobileError").textContent = "";
            document.getElementById("emailError").textContent = "";

            // Validations
            if (!firstName) {
                document.getElementById("firstnameError").textContent = "First name is required";
                isValid = false;
            }

            if (!lastName) {
                document.getElementById("lastnameError").textContent = "Last name is required";
                isValid = false;
            }

            if (!gender) {
                document.getElementById("genderError").textContent = "Please select your gender";
                isValid = false;
            }

            if (!dob) {
                document.getElementById("dobError").textContent = "Date of birth is required";
                isValid = false;
            }

            if (!department) {
                document.getElementById("departmentError").textContent = "Please select a department";
                isValid = false;
            }

            if (!batch) {
                document.getElementById("batchError").textContent = "Batch is required";
                isValid = false;
            }

            if (!address) {
                document.getElementById("addressError").textContent = "Address is required";
                isValid = false;
            }

            if (!pincode.match(/^\d{6}$/)) {
                document.getElementById("pincodeError").textContent = "Pincode must be a 6-digit number";
                isValid = false;
            }

            if (!mobile.match(/^\d{10}$/)) {
                document.getElementById("mobileError").textContent = "Mobile number must be a 10-digit number";
                isValid = false;
            }

            if (!email.match(/^\S+@\S+\.\S+$/)) {
                document.getElementById("emailError").textContent = "Invalid email address";
                isValid = false;
            }

            return isValid;
        }
    </script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <?php include "footer.php"; ?>
</body>
</html>
