<?php
$con = new mysqli('localhost', 'root', '', 'myshop');

// if($con){
//     echo "Connection Successful";

// }
// else{
//     die (mysqli_error($con));
// }
//As our connection is successful , So we don't need the above condition . We will simply change if condition to not 

if (!$con) {
    die (mysqli_error($con));
}


?>
