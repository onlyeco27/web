<?php

session_start();
include "ecommercedb.php";


if (isset($_POST['add_to_cart'])){
    if (isset($_SESSION['cart'])){

        $session_array_id = array_colimn($SESSION['cart'], "item_id");

        if(!in_array($_GET['id'], $session_array_id)){
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>addtocart</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootsrtap.min.js"></script>
</head>
<body>
    <div class="col-md-6">
              <h2 class="text-center">Item Selected</h2>
              <?php     
              $output = "";
              $output .= "
                <table class='table table-bordered table-striped'>
                <tr>
                <th>id</th>
                <th>item name</th>
                <th>item price</th>
                <th>item quantity</th>
                <th>total price</th>
                <th>action</th>
                <tr>
              ";

              if(!empty($_SESSION['cart'])){
                foreach ($_SESSION['cart'] as $key => $value){
                    $output.= "
                        <tr>
                            <td>".$value['item_id']."</td>
                            <td>".$value['brandname']."</td>
                            <td>".$value['price']."</td>
                            <td>".$value['quantity']."</td>
                            <td>".number_format($value['price'] * $value['quantity'])."</td>
                            <td>
                                <a href = 'addtocart.php?action=remove&item_id=".$value['item_id']."'>
                                    <button class = 'btn btn-danger btn-block'>Remove</button>
                                </a>
                            </td>
                    ";
                }
              }



             echo $output; 
               
              ?>
    </div>
</body>
</html>