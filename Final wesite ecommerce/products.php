<?php include "ecommercedb.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootsrtap.min.js"></script>

    <style>
        *
        {
            margin:0;
            padding:0;
            box-sizing: border-box;
            font-family: 'Ubuntu', sans-serif;
        }
        :root{
            --blue: #287bff;
            --white: #fff;
            --black: #222;
            --black: #999;
            --darkgreen: #1f5811;
            --grey: #E4E7E4
        }
        body{
            min-height:100vh;
            overflow-x: hidden;
        }
        .container{
            position: relative;
            width: 100%;
        }
        .navigation{
            position: fixed;
            width: 310px;
            height: 100%;
            background: var(--darkgreen);
            border-left: 10px solid var(--darkgreen);
            margin-left: -125px;
            margin-top:-20px;
            transition: 0.5s;
            overflow:hidden;
        }
        .navigation ul{
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
        }
        .navigation ul li{
            position: relative;
            width: 200%;
            list-style: none;
            border-top-left-radius: 30px;
            border-bottom-left-radius: 30px;
        }
        .navigation ul li:hover{
            background: var(--white);
        }
        .navigation ul li:nth-child(1){
            margin-bottom:40px;
            pointer-events: none;
        }
        .navigation ul li a{
            position: relative;
            display: block;
            width: 100%;
            margin-left:30px;
            display: flex;
            text-decoration: none;
            color: var(--white);

        }
        .navigation ul li:hover a{
            color: var(--darkgreen);
        }
        .navigation ul li a .icon{
            position: relative;
            display: block;
            min-width: 60px;
            height: 60px;
            line-height: 60px;
            text-align: center;
        }
        .navigation ul li a .icon ion-icon{
            font-size: 1.75em;
        }
        .navigation ul li a .title{
            position: relative;
            display: block;
            padding: 0 10px;
            height: 60px;
            line-height: 50px;
            text-align: start;
            white-space: nowrap;
        }
        .shop{
            background-color:white;
            border-top-left-radius: 30px;
            border-bottom-left-radius: 30px;
        }
        .navigation ul li .shop{
            color: var(--darkgreen);
        }
        
        .infor{
            border: 1px transparent;
            width: 80%;
            margin-left: 19.5%;
            background-color:#E4E7E4;
            border-radius: 10px;
        }
        legend{
            width: 80%;
            color: #1f5811;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="">
                        <span class="icon"><ion-icon name="rose-outline"></ion-icon></span>
                        <span class="title">FlowerShop</span>
                    </a>
                </li>
                <li>
                    <a href="menu.php">
                        <span class="icon"><ion-icon name="storefront-outline"></ion-icon></span>
                        <span class="title">MyShop</span>
                    </a>
                </li>
                <li>
                    <a href="dashboard.php">
                        <span class="icon"><ion-icon name="home-outline"></ion-icon></span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="products.php" class="shop">
                        <span class="icon"><ion-icon name="pricetags-outline"></ion-icon></span>
                        <span class="title">Products</span>
                    </a>
                </li>
                <li>
                    <a href="setting.php">
                        <span class="icon"><ion-icon name="settings-outline"></ion-icon></span>
                        <span class="title">Setting</span>
                    </a>
                </li>
                <li>
                    <a href="inde.php">
                        <span class="icon"><ion-icon name="log-out-outline"></ion-icon></span>
                        <span class="title">Sign Out</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
<?php 

$sql = "SELECT * FROM addproducts";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootsrtap.min.js"></script>

    <style>
        ul{
            list-style-type: none;
            margin-left:-20px;
        }
        .icon ion-icon{
            font-size: 1.75em;
        }
        .table{
            border: 1px #E4E7E4;
            width: 75%;
            margin-left: 23%;
            margin-top: 20px;
            background-color: white;
        }
        body{
            background-color: #E4E7E4;
        }
    </style>

</head>
<body>
    <div class="container-1"></div>
<table borders = 1 cellspacing = 0 cellpadding = 10 class="table" >
    <thead>
        <tr>
            <th>Products #</th>
            <th>Brand Name</th>
            <th>Image</th>
            <th>Stocks</th>
            <th>Price</th>
        </tr>
    </thead>
    <?php
    $i = 1;
    $rows = mysqli_query($conn, "SELECT * FROM addproducts ORDER BY item_id DESC"); 
    ?>
    <?php foreach($rows as $row) : ?>
   
    <tr>
        <td><?php echo $i++; ?></td>
        <td><?php echo $row['brandname']; ?></td>
        <td> <img src="image/<?php echo $row['productimage'];?>" width=200 title="image/<?php echo $row['productimage'];?>"></td>
        <td><?php echo $row['stocks']; ?></td>
        <td><?php echo $row['price']; ?></td>
    </tr>    

    <?php endforeach; ?>
</table>
    </div> 

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</body>
</html>