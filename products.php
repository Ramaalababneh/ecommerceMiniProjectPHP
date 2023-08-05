<?php
      include 'nav.php'; 
    ?>

<link rel="stylesheet" href="./products.css">
<?php
session_start();
?>
<div class="container mt-4" >
    <div class="row">
        <?php
        // Check if the session array 'products' exists
        if (isset($_SESSION['product'])) {
            foreach ($_SESSION['product'] as $productItem) {
        ?> 
                <div class="col-sm-4 mb-4" >
                    <div class="card">
                        <img class="card-img-top" src="<?php echo $productItem['img']; ?>"alt="product image">
                        <div class="card-body">
                            <h5 class="card-title"  style="color:#808000;"  ><?php echo $productItem['name']; ?></h5>
                            <p class="card-text"><?php echo $productItem['description']; ?></p>
                            <p class="card-text">Price: <?php echo $productItem['price'] . " $"; ?></p>

                        </div>
                    </div>
                </div>
        <?php
            }
        }
        ?>
    </div>
</div>

<?php include 'footer.php'; ?>
