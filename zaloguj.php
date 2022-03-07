<?php

    session_start();

    require_once "connect.php";

    $polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);

    if ($polaczenie->connect_errno!=0) 
    {
        echo "Error:".$polaczenie->connect_errno;
    } 
    
    else
    {
        $login=$_POST['login'];
        $haslo=$_POST['haslo'];

        $sql = "SELECT*FROM users WHERE login='$login' AND hasło='$haslo'";

        if ($rezultat = @$polaczenie->query($sql))
        {
            $ilu_userow = $rezultat->num_rows;
            if($ilu_userow>0)
            {
                $_SESSION['zalogowany'] = true;

                $wiersz = $rezultat->fetch_assoc();
                $_SESSION['id'] = $wiersz['id'];
                $_SESSION['user'] = $wiersz['login'];

                unset($_SESSION['blad']);
                $rezultat->free_result();
                header('Location: index6.2.php');


            } else {
                $_SESSION['blad'] = '<span style="color:goldenrod">Nieprawidłowy login lub hasło</span>';
                header('Location: index6.php');

            }
        }

        $polaczenie->close();       
    }

?>