<?php

session_start();
include "ecommercedb.php";


if (isset($_POST['addtocart'])){
  
  
    if (isset($_SESSION['cart'])){

        $session_array_id = array_colimn($SESSION['cart'], "item_id");

        if(!in_array($_GET['item_id'], $session_array_id)){
            $session_array = array(
                'item_id' => $_GET['item_id'],
                "brandname" => $_POST['brandname'],
                "price" => $_POST['price'],
                "quantity" => $_POST['quantity']
            );
            $_SESSION['cart'][] = $session_array;
        }

    }
    else{
        $session_array = array(
            'item_id' => $_GET['item_id'],
            "brandname" => $_POST['brandname'],
            "price" => $_POST['price'],
            "quantity" => $_POST['quantity']
        );
        $_SESSION['cart'][] = $session_array;
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flower Shop-HomePage</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootsrtap.min.js"></script>
    <style>
      body{
        background-color:#E4E7E4;
      }
      .container{
    border: 1px solid white;
    height: 500px;
    width: 20%;
    float: left;
    margin-top:50px;
    margin-left:10px;
    background-color:white;
    border-radius:10px;
}
.nav{
  background-color:#1f5811;
  height: 50px;
}
.flex-md-fill{
  color:white;
}
.flex-sm-fill{
  color:white;
}
.flex-sm-fill:hover{
  color:#3c8c30;
}
.btn{
  background-color:#3C8C30;
  color:#E4E7E4;
  height:40px;
  margin-top:5px;
}
.btn:hover{
  background-color:#1f5811;
}
.form-control{
  height:40px;
  margin-top:5px;
}
.load{
    border: 1px solid grey;
    height: 250px;
    width: 100%;
    margin-left: 35px;
    margin-top: 100px;
    border-radius:10px;
    animation: slide 5s;
    animation: slide 40s infinite;
    background-repeat: no-repeat;
  background-size: cover;
  background-position: center;
}

.slider{
  width: 50%;
}
@keyframes slide{
  0%{
    background-image: url('flowers/purple-flowers.jpg');
  }
  20%{
    background-image: url('flowers/pottingsoil.jpg');
  }
  40%{
    background-image: url('flowers/minishovel.webp');
  }
  60%{
    background-image: url('flowers/trim.webp');
  }
  80%{
    background-image: url('flowers/fertilizer.webp');
  }
  100%{
    background-image: url('flowers/branchcutter.webp');
  }
}
.p-3{
    border: 1px solid white;
    height: 250px;
    width: 100%;
    margin-left: 35px;
    margin-top: -30px;
    background-color:white;
    border-radius:10px;
    background-image: radial-gradient(circle, #006400, #0e7d0b, #1b9718, #27b125, #32cd32);
}
.p-2{
    border: 1px solid white;
    height: 200px;
    width: 90%;
    margin-left: 40px;
    margin-top:50px;
    background-color:white;
    border-radius:10px;
}
a{
    display:flex;
    justify-content: space-evenly;
    text-decoration:none
}
h4{
  color:#1f5811;
  margin-top:20px;
}
.sign{
  border:1px solid white;
  height:30px;
  width:30%;
  border-radius:15px;
  margin-top:5%;
  background-color:#3C8C30;
  color:white;
}
.sign:hover{
  background-color:#1f5811;
}

.container-lg{
    border: 1px solid white;
    height: 200px;
    width: 99%;
    margin-top: 20px;
    background-color:#E4E7E4;
    border-radius:10px;
}
.container-lg-5{
  border: 1px solid white;
    height: 500px;
    width: 99%;
    margin-top: 20px;
    background-color:whitesmoke;
    border-radius:10px;
    margin-left: 10px;
}
.col{
    border: 1px solid black;
    height: 100px;
    width: 10%;
    margin-left: 5px;
    margin-top: 70px;
}
.container-1{
    position: relative;
    width: 100%;
}
.navigation{
            
            width: 300px;
            height: 100%;
            margin-left: -100px;
            transition: 0.5s;
            overflow:hidden;
        }
        .navigation ul{
            position:relative;
            top: 0;
            left: 0;
            width: 100%;
        }
        .navigation ul li{
            list-style: none;
        }
        .navigation ul li a .icon ion-icon{
            font-size: 1.50em;
            color: green;
        }
        .navigation ul li a .title{
            position: relative;
            display: block;
            padding: 0 10px;
            height: 30px;
            line-height: 30px;
            text-align: start;
            white-space: nowrap;
            color: green;
        }
        .container-sm-2{
          width: 150px;
          height: 150px;
        }
        .container-sm-2 img{
          width: 100%;
          height: 100%;
          margin-top: 30px;
        }
        .nav ul li a .icon ion-icon{
            font-size: 2.5em;
            margin-top: 5px;
        }
        .nav ul li{
            position: relative;
            width: 10%;
            list-style: none;
        }
    </style>
</head>
<body>
<nav class="nav nav-pills flex-column flex-sm-row">
  <h2 class="flex-md-fill text-sm-center">Lolit's Gardening</h2>
  <a class="flex-sm-fill text-sm-center nav-link" href="#">Location</a>
  <a class="flex-sm-fill text-sm-center nav-link" href="#">Contact Us</a>
  <ul>
    <li>
      <a href="addtocart.php">
          <span class="icon"><ion-icon name="cart-outline"></ion-icon></span>
          <span class="title"></span>
      </a>
    </li>
  </ul>

      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
  </div>
</nav>
<div class="container px-4 text-center">
  <div class="row gx-5">
    <div class="col1">
     <div class="p-0">
      <h4>Categories</h4>

      <div class="container-1">
        <div class="navigation">
            <ul>
                <li>
                    <a href="">
                        <span class="icon"><ion-icon name="flower-outline"></ion-icon></span>
                        <span class="title">Flowers</span>
                    </a>
                </li>
                <li>
                    <a href="" >
                        <span class="icon"><ion-icon name="trash-bin-outline"></ion-icon></span>
                        <span class="title">Vase</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <span class="icon"><ion-icon name="hammer-outline"></ion-icon></span>
                        <span class="title">Tools</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <span class="icon"><ion-icon name="nutrition-outline"></ion-icon></span>
                        <span class="title">Supply</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <span class="icon"><ion-icon name="bug-outline"></ion-icon></span>
                        <span class="title">fertilizer</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <span class="icon"><ion-icon name="earth-outline"></ion-icon></span>
                        <span class="title">Garden Soil</span>
                    </a>
                </li>
                
            </ul>
        </div>
    </div>
     </div>
    </div>
  </div>
</div>
  
<div class="container1 overflow-hidden text-center">
  <div class="row gy-5">
    <div class="slider">
      <div class="load">
      </div>
    </div>
    <div class="col-6">
      <div class="p-2">
      <div class="container-sm-1">
      <h4>Welcome to Lolit's gardening</h4>
        <a href="login.php">
        <div class="sign">My Shop</div>
        </a>
        <a href="signup.php">
        <div class="sign">Sign up</div>
        </a>
      </div>
      </div>
    </div>
    <div class="col-6">
      <div class="p-3">
        <div class="container-sm-2">
          <img src="image/bugam.jpg" class="img-thumbnail" alt="...">
        </div>
      </div>
    </div>
    <style>
    .loader{
      border: 1px ;
    height: 480px;
    width: 90%;
    margin-left: 40px;
    margin-top: -140px;
    background-color:#E4E7E4;
    border-radius:10px;
    background-image: linear-gradient(to right, #006400, #0e7d0b, #1b9718, #27b125, #32cd32);
}

.sliding{
  border: 1px solid grey;
    height: 250px;
    width: 85%;
    margin-left: 35px;
    border-bottom-left-radius: 5px;
    border-bottom-right-radius: 5px;
    animation: slide 5s;
    animation: slide 40s infinite;
    background-repeat: no-repeat;
  background-size: cover;
  background-position: center;
  
}
.show{
  width: 10%;
}
@keyframes slide{
  0%{
    background-image: url('flowers/purple-flowers.jpg');
  }
  20%{
    background-image: url('flowers/pottingsoil.jpg');
  }
  40%{
    background-image: url('flowers/minishovel.webp');
  }
  60%{
    background-image: url('flowers/trim.webp');
  }
  80%{
    background-image: url('flowers/fertilizer.webp');
  }
  100%{
    background-image: url('flowers/branchcutter.webp');
  }
}
</style>

    <div class="col-6">
      <div class="loader">
        <div class="sliding">
          <div class="show"></div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container-lg-5">
  <div class="container-2 text-center">
      <div class="row">
          <div class="col-md-6">
            <h2 class="text-center">Shopping Cart</h2>
            <div class="col-md-12">
              <div class="row">

                <?php
                $query = "SELECT * FROM addproducts";
                $result = mysqli_query($conn,$query);

                while($row = mysqli_fetch_array($result)) {?>
                  <div class="col-md-4">
                    <form action="post" action="addtocart.php?item_id=<?=$row['item_id'] ?>">
                      <img src="image/<?php echo $row['productimage'];?>" style='height: 100px;' class="img-fluid">
                      <h6 class="text-center"><?=$row['brandname'];?></h6>
                      <h6 class="text-center">PHP<?= number_format($row['price'],2);?></h6>
                      <input type="hidden" name="bradname" value="<?php echo $row['brandname']?>">
                      <input type="hidden" name="price" value="<?php echo $row['price']?>">
                      
                    </form>
                  </div>
                <?php }

                ?>
             </div>
            </div>
          </div>
          
        </div>
      </div>
  </div>
</div>

<div class="container-lg">
  breakpoint
  <div class="container2 text-center">
  <div class="row">
    
  </div>
</div>

</div>
<div class="container-lg">
  breakpoint
  <div class="container2 text-center">
    <div class="row">
    
    </div>
  </div>
</div>

<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>


</body>
</html>