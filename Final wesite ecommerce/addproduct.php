<?php 
include "ecommercedb.php";
  if (isset($_POST['submit'])) {
    $brandname = $_POST['brandname'];
    if ($_FILES["image"]["error"] === 4){
      echo "<script> alert('Image Does not exist');</script>";
    }
    else{
      $filename = $_FILES["image"]["name"];
      $filesize = $_FILES["image"]["size"];
      $tmpName = $_FILES["image"]["tmp_name"];

      $validiImageExtension = ['jpg','jpeg','png'];
      $imageExtension = explode('.',$filename);
      $imageExtension = strtolower(end($imageExtension));
      if(!in_array($imageExtension, $validiImageExtension)){
        echo "<script> alert('Invalid Image Extension');</script>";
      }
      else if($FileSize > 1000000){
        echo "<script> alert('Image Size is too Large!');</script>";
      }
      else{
        $newImagename = uniqid();
        $newImagename - '.', $imageExtension;

        move_uploaded_file($tmpName, 'image/', $newImagename);
        $query = "INSERT INTO addproducts VALUES('', '$productname','$newImageName')";
        mysqli_query($conn, $query);
        echo "<script> alert('Successfully Added');</script>";
      }
    }
  }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootsrtap.min.js"></script>

</head>
<body>
    <div class="col">
    <form action="" method="POST" autocomplete="off">
  <fieldset>
    <legend>MyShop</legend>
    <div class="infor">
      <br>
      <div class="form-floating mb-1">
        <input type="text" class="form-control" id="floatingInput" name="brandname">
         <label for="floatingInput">Brand Name</label>
      </div>
    <br>
    <div class="input-group mb-3">
        <input type="file" class="form-control" id="inputGroupFile02" name="productimage">
        <label class="input-group-text" for="inputGroupFile02">Upload</label>
    </div>
    <br>
    <div class="form-floating mb-1">
        <input type="text" class="form-control" id="floatingInput" name="stocks">
         <label for="floatingInput">Stocks</label>
      </div>
    <br>
    <div class="form-floating mb-1">
        <input type="text" class="form-control" id="floatingInput" name="price">
         <label for="floatingInput">Price</label>
      </div>
    <br>
    <div class="input-group">
      <input type="submit" aria-label="First name" class="register" name="submit" value="Add Products"> 
    </div>
    <br>
    </div>
  </fieldset>
</form>
    </div>

</body>
</html>




