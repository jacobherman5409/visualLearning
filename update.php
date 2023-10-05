<?php
include('conn.php');
echo '<br>';
$sql = "UPDATE users SET fname = 'Lio' WHERE id = 1";
$res = mysqli_query($conn, $sql);

if($res){
    echo "data updated!";
}
else{
    echo "Error: not update".mysqli_error($conn);
}

?>