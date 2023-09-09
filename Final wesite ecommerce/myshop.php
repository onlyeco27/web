<?php 
include "ecommercedb.php";
$sql = "SELECT * FROM createshop";
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
    </style>

</head>
<body>
    <div class="container">
        <h2>Flower<span>Shop</h2>
        <ul>
            <li>
                <a href="dashboard.php">
                    <span class="icon"><ion-icon name="arrow-back-circle-outline"></ion-icon></span>
                </a>
            </li>
        </ul>
<table class="table">
    <thead>
        <trc>
        <th>ID</th>
        <th>Full Name</th>
        <th>Store Name</th>
        <th>Shop Address</th>
        <th>Email</th>
        <th>Password</th>
    </tr>
    </thead>
    <tbody> 
        <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
        ?>
                    <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['fullname']; ?></td>
                    <td><?php echo $row['storename']; ?></td>
                    <td><?php echo $row['shopaddress']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['password']; ?></td>
                    </tr>                       
        <?php       }
            }
        ?>                
    </tbody>
</table>
    </div> 

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</body>
</html>



