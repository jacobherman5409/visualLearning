<?php
include('conn.php');
$del = "DELETE FROM users WHERE id=5";
$res = mysqli_query($conn, $del);
if($res){
    echo 'Record deleted';
}
else{
    echo 'error not delete:'.mysqli_error($conn);
}

?>