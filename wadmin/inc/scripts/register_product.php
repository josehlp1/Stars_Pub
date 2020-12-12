<?php 
include_once('../scripts/conexao.php');

$sql_product = "INSERT INTO sp_products (product_name, product_desc, product_price, product_img) VALUES 
                ('".$_POST['product_name']."', '".$_POST['product_desc']."', '".$_POST['product_price']."' , '".$_POST['product_img']."')";   

$sql_product_query =  mysqli_query($conn, $sql_product);

header("Location: ../../index.php");    


?>