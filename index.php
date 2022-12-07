        <html>
        <head>
        <meta charset="Utf-8">
        <title>sklep_bk</title>
        <?php 
        $con = new mysqli("127.0.0.1","root","","zsp-sklep");
        $sql = ("SELECT id, name, login, password, is_admin FROM Users");
        $res = $con->query($sql);
        session_start();
        ?>
        </head>
        <body>
        <form method="POST">
        Name: <input type="text" name="name">
        <br>    
        Login: <input type="text" name="login">
        <br>   
        password: <input type="password" name="password">
        <br>   
        <button type="submit">Ok</button>
        </form>
        <form action="register.php" method="POST">
        <button type="submit">Zarejestruj sie</button>
        </form>
        <?php
        if(isset($_POST['name']) && isset($_POST['login']) && isset($_POST['password']))
        {
        while($row=$res->fetch_assoc())
        {
        if($_POST['name'] == $row['name'])
        {
        if($_POST['login'] == $row['login'])
        {
        if($_POST['password'] == $row['password'])
        { 
        $_SESSION['login']=$row['login'];
        $_POST = array();
        header("Location: listaofert.php"); 
        } 
        } 
        }  
        }
        }  
        mysqli_close($con);
        ?>
        </body> 
        </html>
                
            
            
            
            
            
            
            
