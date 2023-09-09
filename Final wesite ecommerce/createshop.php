<?php 
include "ecommercedb.php";
  if (isset($_POST['submit'])) {
    $fullname = $_POST['fullname'];
    $storename = $_POST['storename'];
    $shopaddress = $_POST['shopaddress'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql = "INSERT INTO `createshop`(`fullname`,`storename`,`shopaddress`,`email`,`password`) VALUES ('$fullname','$storename','$shopaddress','$email','$password')";
    $result = $conn->query($sql);
    if ($result == TRUE) {
      echo "<script> alert ('Registration Complete'); </script>";
    }else{
      echo "Error:". $sql . "<br>". $conn->error;
    } 
    $conn->close(); 
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Shop</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootsrtap.min.js"></script>

    <style>
      body{
        background-color:#1f5811;
      }
        .row{
            margin-left:10%;
        }
        .col1{
            height:610px;
            width: 50%;
            border:1px transparent;
            margin-top:5%;
            background-color: white;
            border-top-left-radius: 30px;
            border-bottom-left-radius: 30px;
            
        }
        .col2{
            height:610px;
            width: 50%;
            border:1px transparent;
            margin-top:5%;
            background-color: #E4E7E4;
            border-top-right-radius: 30px;
            border-bottom-right-radius: 30px;
        }
        legend{
          color: #3c8c30;
          font-size: 2em;
        }
        ul li{
          list-style:none;
        }
        ul li a .icon ion-icon{
            font-size: 1.50em;
            color: red;
        }
        h6{
          color: #3c8c30;
        }
    </style>
</head>
<body>
<div class="container text-center">
  <div class="row align-items-center">
    <div class="col1">
      <ul>
        <li>
            <a href="inde.php">
              <span class="icon"><ion-icon name="close-circle-outline"></ion-icon></span>
            </a>
          </li>
      </ul>
      
    </div>
    <div class="col2">
<form action="" method="POST" autocomplete="off">
  <fieldset>
    <legend>Flower Shop</legend>
    <div class="infor">
      <br>
      <div class="form-floating mb-1">
        <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" name="fullname">
         <label for="floatingInput">Fullname</label>
      </div>
    <br>
    <div class="form-floating mb-1">
        <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" name="storename">
         <label for="floatingInput">Business name</label>
      </div>
    <br>
    <div class="form-floating mb-1">
        <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" name="shopaddress">
         <label for="floatingInput">Shop address</label>
      </div>
    <br>
    <div class="form-floating mb-1">
        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email">
         <label for="floatingInput">Email</label>
      </div>
    <br>
    <div class="form-floating mb-1">
        <input type="password" class="form-control" id="floatingInput" placeholder="name@example.com" name="password">
         <label for="floatingInput">Password</label>
      </div>
    <br>
    <div class="input-group">
      <input type="submit" aria-label="First name" class="register" name="submit" value="Register"> 
    </div>
    <br>
    <a href="login.php">Back</a>
    </div>
  </fieldset>
</form>
    </div>
  </div>
</div>

  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</body>
</html>