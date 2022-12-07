    <html>
    <head>
    <meta charset="Utf-8">
    <title>sklep_bk</title>
    <link rel="stylesheet" href="style.css">  //nwm cz bd stl
    <?php 
    $db = new mysqli("127.0.0.1","root","","zsp-sklep");
    ?>
    <head>
    <body>
    <div class="sr">
    <h2>Zarejestruj sie</h2>
    </div>
    <div class="main">
    <form method="POST">
    <p>Name: <input type="text" name="Name"></p>  // dl txt
    <p>Login: <input type="text" name="Login"></p>
    <p>Password: <input type="password" name="Password"></p>
    <p>button type="submit"><b>Zarejestruj sie</b></p> 
    </form>
    <?php
    if(isset($_POST['name']) && isset($_POST['login']) && isset($_POST['password'])){
    $sql = ('INSERT INTO `users` (`Name`, `Login`, `Password`) VALUES ("'.$_POST["Name"].'", "'.$_POST["Login"].'", "'.$_POST["Password"].'")'); 
    $db->query($sql);
    $db->close();
    } 
    ?> 
    </div> 
    <div class="sr"> 
    <h4>zsp-sklep</h4> 
    </div> 
    </body> 
    </html>


    
    
    
    
