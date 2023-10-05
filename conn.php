<?php
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "visual";

//create connection
$conn = mysqli_connect($servername,$username,$password,$db_name);

// check connection

if(!$conn){
    die("connection failed:".mysqli_connect_errors());
}
echo"connection successfully";

mysqli_close($conn);
    
?>