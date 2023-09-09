<?php
include "ecommercedb.php";
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Query to check if the provided credentials are valid
    $sql = "SELECT * FROM usersignup WHERE email = '$email' AND password = '$password'";
    $result = $conn->query($sql);
    $row_count = mysqli_fetch_array($result);
    if ($row_count > 0) {
        // Successful login
        echo "<script>alert('Login successful!');</script>";
        Header("Location: inde.php");
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
    <title>User Login</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootsrtap.min.js"></script>
</head>
<body>
<style>
        .col1{
            height:550px;
            width: 40%;
            border:1px solid black;
            margin-top:5%;
            background-color: white;
            border-top-left-radius: 30px;
            border-bottom-left-radius: 30px;
        }
        .col2{
            height:550px;
            width: 40%;
            border:1px solid black;
            margin-top:5%;
            background-color:#1f5811;
            border-top-right-radius: 30px;
            border-bottom-right-radius: 30px;
        }
        legend{
          color:white;
        }
    </style>

</head>
<body>
<div class="container text-center">
  <div class="row align-items-center">
    <div class="col1">
      
    </div>
    <div class="col2">
<form action="" method="POST" autocomplete="on">
  <fieldset>
    <legend>Sign Up Form</legend>
    <div class="infor">
    <br>
    <div class="form-floating mb-1">
        <input type="email" class="form-control" id="floatingInput" name="email">
         <label for="floatingInput">Email</label>
      </div>
    <br>
    <div class="form-floating mb-1">
        <input type="password" class="form-control" id="floatingInput" name="password">
         <label for="floatingInput">Password</label>
      </div>
    <br>
    <div class="input-group">
      <input type="submit" aria-label="First name" class="register" name="submit" value="Login"> 
    </div>
    <br>
    </div>
  </fieldset>
</form>
    </div>
  </div>
</div>  
</body>
</html>
</body>
</html>