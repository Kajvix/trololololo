<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <title>Oblicz sobie proszę</title>
        <link href="style6.css" rel="stylesheet" type="text/css">
        <script src="objętość kuli6.js"></script>
    </head>
    <body>
        <div class="container">
            <div class="kurw">

                <div>
                    <?php
                        echo "<p>Witaj ".$_SESSION['user']."</p>";

                    ?> 
                </div>

                <div class="kalkulator">
                    r = <input onkeydown="return noNumbers(event)" placeholder="Wprowadz promien" id="promien" type="text"  >
                    <button type="submit"id="oblicz" onclick="oblicz()">Oblicz</button>

                    <div class="wynik">
                        V = <input onkeydown="return noNumbers(event)" id="wynik" placeholder="Wynik" type="text">
                        <button type="submit" onclick="clean()">Clear</button>
                    </div>

                    <div class="zapisz">
                        <button onclick="zapisz()" id="zapisz" type="submit">ZAPISZ</button>
                    </div>
                    <a href="logout.php" class="ti">Wyloguj się</a>
                </div>
         </div>
    </body>


</html>
