<?php
include "ecommercedb.php";
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Query to check if the provided credentials are valid
    $sql = "SELECT * FROM createshop WHERE email = '$email' AND password = '$password'";
    $result = $conn->query($sql);
    $row_count = mysqli_fetch_array($result);
    if ($row_count > 0) {
        // Successful login
        echo "<script>alert('Login successful!');</script>";
        Header("Location: menu.php");
    } else {
        // Invalid credentials
        echo "<script>alert('Invalid username or password');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootsrtap.min.js"></script>

    <style>
        .col1{
            height:550px;
            width: 30%;
            border:1px solid black;
            margin-top:5%;
            background-color: #1f5811;
            border-top-left-radius: 30px;
            border-bottom-left-radius: 30px;
        }
        .col2{
            height:550px;
            width: 50%;
            border:1px solid black;
            margin-top:5%;
            background-color:white ;
            border-top-right-radius: 30px;
            border-bottom-right-radius: 30px;
        }
        .acc{
            margin-top: 120px;
        }
    </style>

</head>
<body>
<div class="container text-center">
  <div class="row align-items-center">
    <div class="col1">
        <br><br><br><br><br><br><br>
        <form action="" method="POST" autocomplete="on">
            <div class="form-floating mb-1">
                <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" name="email">
                <label for="floatingInput">Email</label>
            </div>
            <br>
            <div class="form-floating mb-1">
                <input type="password" class="form-control" id="floatingInput" placeholder="name@example.com" name="password">
                <label for="floatingInput">Password</label>
            </div>
            <br>
            <div class="input-group">
                <input type="submit" aria-label="First name" class="login" name="submit" value="Login"> 
            </div>
        </form>
        <h6 class="acc">Don't have account yet?<span><a href="createshop.php">Click Here.</a></span></h6>
    </div>
    <div class="col2">
    <ul>
        <li>
            <a href="inde.php">
              <span class="icon"><ion-icon name="close-circle-outline"></ion-icon></span>
            </a>
          </li>
      </ul>
    </div>
  </div>
</div>

<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>


</body>
</html>