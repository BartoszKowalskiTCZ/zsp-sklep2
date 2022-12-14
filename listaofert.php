<html>  
 <head>   
 <title>zsp-sklep</title>         
<meta charset="utf-8">     
    <link rel="stylesheet" href="style.css">     
   <?php
session_start();
$con = new mysqli("127.0.0.1" , "root", "", "zsp-sklep");
$offer = ("SELECT name, description, price FROM products");
$Orders = ("SELECT products_id, users_id FROM Orders");
&sql =("SELECT products_id, products_name, products_description, Orders_products_id, Orders_users_id FROM `products` LEFT JOIN Orders ON products.id = Orders_products_id WHERE Users_id IS NULL");
$con = $res->fetch_all(MYSQLI_ASSOC);
?>
</head>
<body>
<?php 
echo "TWOJE OFERTY <br>"; 
for($i = 0; $i < count($offers); $i++){ 
echo 'Numer ogłoszenia '.$con[$i]['id'].'<br>'; 
echo 'Nazwa produktu '.$con[$i]['product_name'].'<br>'; 
echo 'Cena produktu '.$con[$i]['price'].'<br>'; 
echo 'Opis produktu '.$com[$i]['description'].'<br>'; 
} 
?> 
<form action="addoffer.php"> 
<button type="submit">DODAJ NOWA OFERTE</button> 
</form> 
<?php 
$con->close(); 
?> 
</body> 
</html>
