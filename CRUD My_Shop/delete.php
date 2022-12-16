<?php
include 'connect.php';

if (isset($_GET['deleteid'])){
    $ID = $_GET['deleteid'];


    $sql = "DELETE FROM my_shop where id=$ID";
    $result = mysqli_query($con, $sql);
    if($result){
        // echo"Deleted Successfully";
        header("location:display.php");
    }
    else{
        die(mysqli_error($con));
    }
        
    
}
?>