<?php
    session_start();

    if ((isset($_SESSION['zalogowany'])) && ($_SESSION['zalogowany']==true))
    {
        header('Location: index6.2.php');
        exit();
    }
?>
<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <title>Supreme</title>
        <link href="style6.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class="container">
            <form class="kurw" action="zaloguj.php" method="post">
                <input class="inp" type="text" placeholder="login" name="login"> 
                <br/><br/>
                <input class="inp" type="password" placeholder="hasło" name="haslo">
                <br/><br/>
                <input class="zaloguj" type="submit" value="Zaloguj się">
            </form>
            <div class="guwno">
             <?php 
                 if(isset($_SESSION['blad']))  echo $_SESSION['blad'];
             ?>
            </div>
        </div>
    </body>


</html>
