<?php
include 'connect.php';

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
        <button class="btn btn-primary my-5"><a href="user.php" class="text-light" style="text-decoration:none;">Add User</a>

        </button>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">S.No</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Mobile No</th>
                </tr>
            </thead>
            <tbody>

                <?php

                $sql = "SELECT * FROM my_shop ";

                $result = mysqli_query($con, $sql);

                if ($result) {

                    while ($row = mysqli_fetch_assoc($result)) {
                        $ID = $row['ID'];
                        $Name = $row['Name'];
                        $Email = $row['Email'];
                        $MobileNo = $row['Mobile No'];
                        echo '<tr>
                        <th scope="row">' . $ID . '</th>
                        <td>' . $Name . '</td>
                        <td>' . $Email . '</td>
                        <td>' . $MobileNo . '</td>

                         <td>
                             <button class="btn btn-primary"><a href="update.php?updateid='.$ID.'" class="text-light">UPDATE</a></button>
                             <button class="btn btn-danger"><a href="delete.php?deleteid='.$ID.'" class="text-light">DELETE</a></button>
                        </td>
                      </tr>';
                    }
                }
                ?>


            </tbody>
        </table>


    </div>






    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>