<?php
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Home page</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./home.css">
  </head>
  <body>
    <?php
      include 'nav.php'; 
    ?>
  
<!-- section one Slider--------------------------------------------------------------------------------->
<div class="slider">
    <img src="hhh.jpg" alt="Image 1">
    <img src="img2.jpg" alt="Image 2">
    <img src="img3.jpg" alt="Image 3">
    <img src="img4.jpg" alt="Image 4">
</div>

<!-- section welcome --------------------------------------------------------------------------------->
<div>
    <div class="container d-flex justify-content-center align-items-center" style="height: 12vh; max-width: 800px;"> <!-- Add a max-width value to limit the container's width on larger screens -->
        <h1 style="color:#808000; font-size: 2rem;">Welcome to <span style="color:#BAB86C;">Art</span>Zone</h1> <!-- Adjust font-size to make the heading smaller on smaller screens -->
    </div>
    <div class="container d-flex justify-content-center align-items-center" style="height: 10vh; max-width: 800px;"> <!-- Add a max-width value to limit the container's width on larger screens -->
        <h3 class="text-center" style="color:#808000; font-size: 1.5rem;">A place where you can Buy & Sell art equipment</h3> <!-- Adjust font-size to make the paragraph text smaller on smaller screens -->
    </div>
</div>

<br>
<!-- form ------------------------------------------------------------------------------------------------>
     <div class="container" id="add">
        <form action="phphome.php" method="POST">
            <div class="row">
                <div class="col-25">
                    <label for="name" style="color:#808000;">Name :</label>
                </div>
                <div class="col-75">
                    <input type="text" id="name" name="name" placeholder="Name ..." Required>
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="description" style="color:#808000;">Description :</label>
                </div>
                <div class="col-75">
                    <input type="text" id="description" name="description" placeholder="Description ..."Required>
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="price" style="color:#808000;">Price :</label>
                </div>
                <div class="col-75">
                    <input type="text" id="price" name="price" placeholder="Price ..." Required>
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="img" style="color:#808000;">Image :</label>
                </div>
                <div class="col-75">
                    <input type="text" id="img" name="img" placeholder="Image Link ..." value = "https://cdn11.bigcommerce.com/s-3svqmxmj8l/images/stencil/500x659/products/1843/3829/Bob_Ross_3_Fan_Blender-CU__32514.1656602746.jpg?c=2">
                </div>
            </div>
            <br>
            <div class="row">
                <button class="addbtn" name= "submit" style="background-color:#808000;" >Add Products</button>
            </div>
        </form>
        <!-- <?php print_r($_SESSION); ?> -->
    </div>
<!-- table ------------------------------------------------------------------------------------------------>
  <div class="container mt-4">
  <table class="table table-bordered">
    <thead>
      <tr>
        <th style="color:#808000;"> Product Name</th>
        <th style="color:#808000;"> Product description</th>
        <th style="color:#808000;"> Product Price</th>
        <th style="color:#808000;"> Product Image</th>
      </tr>
    </thead>
    <tbody>
    <?php
            // Check if the session array 'product' exists
            if (isset($_SESSION['product'])) {
                foreach ($_SESSION['product'] as $productItem) {
            ?>
                    <tr>
                        <td><?php echo $productItem['name']; ?></td>
                        <td><?php echo $productItem['description']; ?></td>
                        <td><?php echo $productItem['price']; ?></td>
                        <td><img style="height: 100px;" class="image-prod" src="<?php  echo $productItem['img']; ?>" alt="product image"></td>
                    </tr>
            <?php
                }
            }
            ?>
        </tbody>
    </table>
    
    <a href="products.php">
        <button class="addbtn" name="submit" style="background-color:#808000;">View Products</button>
    </a>
</div>
    </tbody>
</table>
</div>

<?php include 'footer.php'; ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>