<?php   
    $level = '';
    function __autoload($className) #including all classes
    {
        require_once($level.'classes/'.$className.'.php');
    }
?>

<html>
    <head>
        <?php
            include_once($level.'templates/header.php');
        ?>
    </head>

    <body>
        <?php
            include_once($level.'templates/nav.php');
        ?>
        <?php
            
			$productObj = new Product();
			$productList = $productObj->SelectAll();
        ?>
        
        <div class="container body-container container-fluid">
            <h2>FEATURED</h2>

        <?php
            $count = 0;
            foreach ($productList as $product): 
                $imgs = explode(",", $product['imgs']);
                if (($count % 3) == 0) {
					echo "<div class=\"row featured-row\">\n";
				}
            ?>
                <div class="col-md-4 product">
                    <div class="view overlay">
                        <!-- <a href= "product.php?id=<?= $product['id'] ?>"> -->
                            <a href= "#">
                            <img src="./products/<?= $product['category']?>/<?= $imgs[0] ?>" class="img img-fluid">
                            <div class="mask rgba-red-strong">
                                <p class="white-text">Strong overlay</p>
                            </div>
                        </a>
                    </div>
                </div>
            <?php
                $count++;
				if ((($count % 3) == 0) && ($count != 0)) {
					echo "</div>";
                }
            ?>	
        <?php 
            endforeach 
        ?>

        </div>

        <?php
            include_once($level.'templates/footer.php');
        ?>
    </body>  
</html>