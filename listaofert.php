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
echo "twoje oferty<br>"; 
for($i = 0; $i < count($y2); $i++){ 
echo 'Numer ogłoszenia to '.$y2[$i]['id'].'<br>'; 
echo 'Nazwa produktu '.$y2[$i]['product_name'].'<br>'; 
echo 'Cena produktu '.$y2[$i]['price'].'<br>'; 
echo 'Opisz<br>'.$y2[$i]['content'].'<br>'; 
} 
?> 
<form action="add_offer.php"> 
<button type="submit">Dodaj nową oferte</button> 
</form> 
<?php 
$x->close(); 
?> 
</body> 
</html>
