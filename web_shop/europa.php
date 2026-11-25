<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    include ('includes/menubalk.php');
      include ('includes/db.php');
     $producten = $pdo->query("SELECT * FROM producten WHERE id>6")->fetchAll();
    ?>

    <h2>Europa</h2>
   <div class="producten">
        <!-- producten php -->
         <?php
         foreach ($producten as $product){
        ?>
            <div class="card">
                <br>
                <img src="images/<?php echo $product['afbeelding'];?>">
                <div class="card-content">
                    <h4><?php echo $product['naam']; ?></h4>

                    <?php if($product['sale'] > "0.00")
                    { ?>
                        <p class="sale">SALE</p>
                        <p class="price"><s>&euro;<?php echo $product['prijs']; ?></s></p>
                        <p>&euro;<?php echo $product['sale']; ?></p>
                    <?php 
                    }else{?>
                    <p>&euro;<?php echo $product['prijs']; ?></p>
                    <?php 
                    }?>
                    <a href="detailpagina.php?id=<?php echo $product['id']?>"><button class="Details">Details</button></a>
                </div>
            </div>
        <?php
        }
        ?>   
        </div>
</body>

</html>