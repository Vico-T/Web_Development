 <link rel="stylesheet" href="style.css">
 
 <?php
    include('includes/db.php');
    include ('includes/menubalk.php');

    $product_id = $_GET['id'];

    $product_detail = $pdo->query("SELECT * FROM producten WHERE id = '{$product_id}' LIMIT 1;")->fetch();

    if($product_detail !== false){
?>
<br>
    <img src="images/<?php echo $product_detail['afbeelding'];?>">
                    <h4><?php echo $product_detail['naam']; ?></h4>
                    <?php if($product_detail['sale'] > "0.00")
                    { ?>
                        <p class="sale">SALE</p>
                        <p class="price"><s>&euro;<?php echo $product_detail['prijs']; ?></s></p>
                        <p>&euro;<?php echo $product_detail['sale']; ?></p>
                    <?php 
                    }else{?>
                    <p>&euro;<?php echo $product_detail['prijs']; ?></p>
                    <?php 
                    }?>
                    <p><?php echo $product_detail['omschrijving']; ?><p>
                    <?php
                     }else{
                    echo "no products found";
                    }
                    ?>
    <br>
     <a href="checkout.php"><button class="but">Checkout</button></a> <a href="javascript:history.back();"><button class="btnpuls">&larr; Home</button></a>

