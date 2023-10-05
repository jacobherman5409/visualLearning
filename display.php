<?php
include('conn.php');

$sql = "SELECT * FROM users";
$result=mysqli_query($conn,$sql);

if(mysqli_num_rows($result) > 0){
    while($dip = mysqli_fetch_assoc($result)){
        echo "id:".$dip["id"].  "fname:".$dip["fname"].   "lname:".$dip["lname"].   "email:".$dip["email"].   "pwd: ".$dip["pwd"]. "<br>";
    }
}
else{
echo " no result";
}


?>