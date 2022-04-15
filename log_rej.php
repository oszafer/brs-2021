<?php session_start(); 
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Strona logowania</title>
    <link rel="stylesheet" href="style_log.css">
    <link rel="stylesheet" href="style_contact.css">
    <!--<link rel="stylesheet" href="style.css">-->
</head>
<body>

<header>
            <header1>
                <a href="main_page.php"><img src="logo7.png" class="logo"></a>
            </header1>
            <header2>
                <a href="main_page.php"><img src="agh.png" class="logo2" style="float: right"></a>
            </header2>
    </header>

        <nav>
            <ul>
                <li><a href="main_page.php"><button>Biblioteka</button></a> </li>
                <li><a href="log_rej.php"><button>Katalog</button></a> </li> 
                <li><button id="my_Btn">Kontakt</button><div id="myModal" class="modal-contact">
                    <div class="modal-content-contact"><span class="close-contact">&times;</span>
                        <b>Kontakt</b> <br><br>
                        Numer telefonu: 123456789 <br>
                        E-mail: biblioteka@biblioteka.pl
                        <br><br>
                        <b>Gdzie nas znaleźć?</b><br>
                        <br>
                        Nasza biblioteka znajduje się na ul. Akademickiej 15<br><br>
                        <img src="mapa.png"><br>
                    </div>
                </div>
                </li> 
                <li><a href="log_rej.php"><button>Logowanie / Rejestracja</button> </a></li> 
            </ul>
        </nav>


<div class="logowanie">
    
    <p><b>Logowanie</b></p><br>
    <form  name="login" action="log_red.php" method="post">
        <label for="imie">Login</label><br>
        <input type="text" name="login" required=""><br>
        <label for="haslo">Hasło</label><br>
        <input type="password" name="haslo" required=""><br><br>
        <input type="submit" name="submit" value="Zaloguj"><br><br><br><br><br><br><br><br>
        <button class="button-admin" for="admin"><a href="admin_log_rej.php">Admin</a></button><br>
    </form>
  
</div>

<div class="rejestracja">
    
    <p><b>Rejestracja</b></p><br>
    <form name="Registration" action="rej_red.php" method="post">
        <label for="imie">Imię</label><br>
        <input type="text" name="imie" required=""><br>
        <label for="nazwisko">Nazwisko</label><br>
        <input type="text" name="nazwisko" required=""><br>
        <label for="login">Login</label><br>
        <input type="text" name="login" required=""><br>
        <label for="email">Email</label><br>
        <input type="email" name="email" required=""><br>
        <label for="login">ID</label><br>
        <input type="text" name="user_id" required=""><br>
        <label for="haslo">Hasło</label><br>
        <input type="password" name="haslo" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Hasło musi zawierać conajmniej jeden numer, dużą i małą literę i conajmiej 8 znaków" required=""><br>
        <input type="submit" name="submit" value="Zarejestruj">
    </form>  

</div>

<div class="stopka">
    Kontakt <br>
    Numer telefonu: 123456789 <br>
    E-mail: biblioteka@biblioteka.pl
    <br>
    Adres: Ulica Akademicka 15<br>
</div>

<?php

// if(isset($_POST['submit']))
// {
//     $_SESSION['zalogowany'] = $_POST['user_id'];
//     header("Location: strona_glowna.php");
// }
?>



<script src="app_logowanie.js"></script>
<script src="okno_kontaktu.js"></script>
</body>
</html>