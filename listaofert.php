<html>  
 <head>   
 <title>zsp-sklep</title>         
<meta charset="utf-8">     
    <link rel="stylesheet" href="style.css">     
   <?php
session_start();
$con = new mysqli("127.0.0.1" , " root", " ", "zsp-sklep");
$announcement = ("SELECT name, description, price FROM products");
$Orders = ("SELECT products_id, users_id FROM Orders");
&sql =("SELECT products.id, products.name, products.description, Orders.products_id, Orders.users_id FROM `products` LEFT JOIN Orders ON products.id = Orders.products_id WHERE Users_id IS NULL");
$offers= $res->fetch_all(MYSQLI_ASSOC);
?>
</head>
<body>
<?php
echo "Twoje oferty";
for($i = 0; $i
