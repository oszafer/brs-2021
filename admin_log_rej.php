<?php session_start(); 
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Admin</title>
    <link rel="stylesheet" href="style_log.css">
    
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
                <li><a href=""><button>Biblioteka</button></a> </li>
                <li><a href=""><button>Katalog</button></a> </li> 
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


<div class="logowanie1">
    <br>
    <p><b>Admin - Logowanie</b></p><br>
    <form  name="login" action="admin_log_red.php" method="post">
        <label for="imie">Login</label><br>
        <input type="text" name="login" required=""><br>
        <label for="haslo">Hasło</label><br>
        <input type="password" name="haslo" required=""><br><br>
        <input type="submit" name="submit" value="Zaloguj">
    </form>
</div>


<?php
// if(isset($_POST['submit']))
// {
//     $_SESSION['zalogowany'] = $_POST['user_id'];
//     header("Location: strona_glowna.php");
// }
?>
<div class="stopka">
    Kontakt <br>
    Numer telefonu: 123456789 <br>
    E-mail: biblioteka@biblioteka.pl
    <br>
    Adres: Ulica Akademicka 15<br>
</div>

<script src="app_logowanie.js"></script>

</body>
</html>