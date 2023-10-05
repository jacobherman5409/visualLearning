
<?php
require_once("conn.php");

//assign variables 

$fname = $_POST["fname"];
$lname = 'kefa';
$email = 'demo@gmail.com';
$pwd = $_POST["pwd"];


//insert data into db
$sql = "INSERT INTO users (fname,lname,email,pwd) VALUES('$fname','$lname','$email','$pwd')";

$query = mysqli_query($conn,$sql);

//check query succession
if($query){
    echo'<br>';
    echo 'your details are added';
}
else{
    echo "ERROR: sorry.$sqL".mysqli_errors($conn);
}





?>