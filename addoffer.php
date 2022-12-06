<html> 
<head> 
<title>zsp-sklep</title> 
<meta charset="utf-8"> 
<link rel="stylesheet" href="styl.css"> 
<?php 
$con = new mysqli("127.0.0.1","root","","zsp-sklep"); 
?> 
</head> 
<body> 
<div class="sr"> 
<h2>Stwórz nowa oferte</h2>      
<?php 
echo "<b>Zalogowany jako: </b>".$_COOKIE["User"].'<br>'; 
?>  
</div> 
<div class="main"> 
<form method="post"> 
<p><label>Name: <input type="text" name="name"></label></p> 
<p><label>Description: <input type="text" name="Description"></label></p> 
<p><label>Price: <input type="text" name="Price"></label></p>  
<p> 
<button type="submit"><b>Stwórz</b></button>   
<a href="listaofert.php" class="a2"><b>Cofnij się do ofert.</b></a>                 
</p> 
</form>              
<?php 
if(isset($_POST["name"]) && isset($_POST["description"]) && isset($_POST["price"])) 
{
$order_add = 'INSERT INTO Products (name, description, price) VALUES ("'.$_POST["name"].'", "'.$_POST["description"].'", "'.$_POST["pricr"].'")';  
$db -> query($order_add); 
} 
?> 
</div> 
<div class="sr"> 
<h4>zsp-sklep</h4> 
</div> 
</body> 
</html> 
