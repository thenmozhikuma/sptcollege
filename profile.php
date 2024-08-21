<?php
session_start();
error_reporting(0);
require 'header.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile of Our College</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+2iy1B4Qq1nL2XkH4zF02m6y8U9y8zL1c4xQ5J1d" crossorigin="anonymous">

    <style>
        .table-custom {
            border: 2px solid #0F4896;
            border-collapse: collapse;
            margin: 0 auto;
            width: 80%; 
        }

        .table-custom th,
        .table-custom td {
            border: 1px solid #0F4896;
            padding: 10px;
            text-align: left;
        }

        .table-custom th {
           color: #0F4896;
           
        }

        .table-custom td {
            background-color: #f9f9f9;
        }

        h5 {
            color: #0F4896;
        }
    </style>
</head>
<?php
    require 'navbar.php';
    ?>
<body>
  
    <h5 class="text-center py-5" style="color:#0F4896;">PROFILE OF OUR COLLEGE</h5>
    <table class="table table-custom">
        <tr>
            <th>Name of the College</th>
            <td>Subramanian Polytechnic College</td>
        </tr>
        <tr>
            <th>Place</th>
            <td>Rayavaram, Pudukkottai, Tamil Nadu, India – 622 506.</td>
        </tr>
        <tr>
            <th>State</th>
            <td>TamilNadu</td>
        </tr>
        <tr>
            <th>Affiliating University</th>
            <td>Bharathidasan University</td>
        </tr>
        <tr>
            <th>Status of the College</th>
            <td>Self - Financing</td>
        </tr>
        <tr>
            <th>Type of College</th>
            <td>Non-Coeducational</td>
        </tr>
        <tr>
            <th>No. of Departments</th>
            <td>7</td>
        </tr>
        <tr>
            <th>No.of Programmes</th>
            <td>s51</td>
        </tr>
        <tr>
            <th>Date of establishment</th>
            <td>17.01.1994</td>
        </tr>
        <tr>
            <th>Date of conferment of the Autonomous Status</th>
            <td>17.08.2012</td>
        </tr>
        <tr>
            <th>Location of the College</th>
            <td>Rural</td>
        </tr>
        <tr>
            <th>Campus area</th>
            <td>24.9 acres</td>
        </tr>
    </table>

    <?php
    require 'footer.php';
    ?>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK3pkF7GB5b5O9qFcf5RSPtiF2b2NeW4zZpV9wR3H6e0zO" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UOaE4iy1b1Mli1nFQpV7bW5hrHj8g5G6uD49s3JJH4a6ZtF02nK22l8ro4CQ+B5e" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-f5F6U8PpB3hD4B8W3F7u0Z3i8C5u5JxjbPpT3EN8nF96pGo5yZw2w5y4qv4pyd7F" crossorigin="anonymous"></script>

</body>

</html>
