<?php

$con = mysqli_connect("127.0.0.1", "root", "", "mid_mini");
 

if($con === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$uname = mysqli_real_escape_string($con, $_REQUEST['uname']);
$password = mysqli_real_escape_string($con, $_REQUEST['password']);
$email = mysqli_real_escape_string($con, $_REQUEST['email']);
 

$sql = "INSERT INTO user (name,password,email) VALUES ('$uname', '$password', '$email')";
if(mysqli_query($con, $sql)){

    header('location: login.html');
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
}

mysqli_close($con);
?>