<?php 
session_start();
if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $img = $_POST['img'];

    // $_SESSION['name'] = $name;
    // $_SESSION['description'] = $description;
    // $_SESSION['price'] = $price;
    // $_SESSION['img'] = $img;


// Create an array
$product = array(
    'name' => $name,
    'description' => $description,
    'price' => $price,
    'img' => $img
);
// Store the array in the session
$_SESSION['product'][] = $product;
}
else{$product = array();
$_SESSION['product'][] = $product;
}
header ('Location:home.php');
// print_r($product);

?>