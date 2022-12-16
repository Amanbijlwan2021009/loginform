<?php
include 'connect.php';
$ID = $_GET['updateid'];


$sql = "SELECT * FROM my_shop where id=$ID";

$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
$Name = $row['Name'];
$Email = $row['Email'];
$MobileNo = $row['Mobile No'];

if (isset($_POST['submit'])) {
    $Name = $_POST['name'];
    $Email = $_POST['email'];
    $MobileNo = $_POST['mobile_no'];

    // $sql = "INSERT INTO 'my_shop' ('Name','Email','Mobile No') Values('$Name','$Email','$MobileNo')";
    // $sql = "UPDATE my_shop set 'ID'='$ID','Name'='$Name','Email'='$Email','Mobile No'='$MobileNo'";

    $sql="UPDATE my_shop SET `ID`='$ID',`Name`='$Name',`Email`='$Email',`Mobile No`='$MobileNo' where id=$ID";


    $result = mysqli_query($con, $sql);
    if ($result) {
        // echo "Updated successfully";
        header('location:display.php');
    } else {
        die(mysqli_error($con));
    }
}

?>



<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="user.css">
    <title>Hello, world!</title>
</head>

<body>
    <div class="container">

        <form method="post">
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" placeholder="Name" name="name" autocomplete="off" value="<?php echo $Name;?>">
            </div>
            <div class="form-group">
                <label>Email address</label>
                <input type="email" class="form-control" placeholder="Enter email" name="email" autocomplete="off" value="<?php echo $Email;?>">
                <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
            </div>
            <div class="form-group">
                <label>Mobile No</label>
                <input type="text" class="form-control" placeholder="Mobile No" name="mobile_no" autocomplete="off" value="<?php echo $MobileNo;?>">
            </div>
            <!-- <div class="form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div> -->
            <button type="submit" class="btn btn-primary" name="submit">Update</button>
        </form>
    </div>






    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>