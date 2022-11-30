    <html>
    <head>
    <meta charset="Utf-8">
    <title>sklep_bk</title>
    <link rel="stylesheet" href="style.css">  //nwm cz bd stl
    <?php 
    $con = new mysqli("127.0.0.1","root"," ","zsp-sklep");
    ?>
    <head>
    <body>
    <div class="sr">
    <h2>Zarejestruj sie</h2>
    </div>
    <div class="main">
    <form method="POST">
    <p>Name: <input type="text" name="name"></p>  // dl txt
    <p>Login: <input type="text" name="login"></p>
    <p>Password: <input type="password" name="Password"></p>
    <p>button type="submit"><b>Zarejestruj sie</b></p> 
    </form>
    <?php
    if(isset($_POST['name']) && isset($_POST['login']) && isset($_POST['password']))
    {
    $user_add = 'INSERT INTO Users (name, login, password) VALUES ("'.$_POST["name"].'", "'.$_POST["login"].'", "'.$_POST["password"].'")'; 
    $db -> query ($user_add); 
    } 
    ?> 
    </div> 
    <div class="sr"> 
    <h4>zsp-sklep</h4> 
    </div> 
    </body> 
    </html>


    
    
    
    
