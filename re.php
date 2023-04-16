<?php
$host='localhost';
$conn=mysqli_connect($host,'root','','treasure');
$name=$_POST["nm"];
$emailid=$_POST["em"];
$password= $_POST["pass"];
$cpassword= $_POST["cpass"];
$sql="INSERT INTO users VALUES('$name','$emailid','$password','$cpassword')";
if (mysqli_query($conn, $sql)) {
    header('LOCATION:index.php');
 }
 else{
    echo("Connection failed");
 }