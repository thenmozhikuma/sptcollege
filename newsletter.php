<?php
include "dbconnect.php";
$newsletter=$_POST['newsletter'];
$insert="insert into newsletter values (null,'$newsletter')";
$result=mysqli_query($con,$insert);
if($result){
    echo "<script>alert('Thankyou for contacting us!');window.location.href='index.php';</script>";
}
else{
    echo "<script>alert('Sorry something wrong!');window.location.href='index.php';</script>";
}
?>