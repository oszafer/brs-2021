<html>
    <!-- profil.html (stara nazwa)-->
    <head>
        <link rel="shortcut icon" href="logo.png">
        <title>Biblioteka - Profil</title>
        <link rel="stylesheet" href="style.css">
        <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet"> 
    </head>

    <body>
        <header>
            <header1>
                <a href="main_page_logged.php"><img src="logo7.png" class="logo"></a>
            </header1>
            <header2>
                <a href="main_page_logged.php"><img src="agh.png" class="logo2"></a>
            </header2>
    </header>

        <nav>
            <ul>
                <li><a href="main_page_logged.php"><button>Biblioteka</button></a> </li>
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
                <li><a href="main_page.php"><button>Wyloguj</button> </a></li> 
            </ul>
        </nav>

        <nav>
            <ul>
                <li><a href ="books.php"><button>Katalog - ksiażki do rezerwacji</button></a> </li>
                <li>||</li> 
                <li><a href ="user_issue_info.php"><button>Wypożyczone książki</button></a> </li> 
            </ul>
        </nav>

        <br>
            <div class="middle_box">
                <p>Nazwa czytelnika</p>
                <p><img src="user.png" class="logo"></p>
                <p>Tutaj ma się pokazać nazwa</p>
                <p>Imie i nazwisko</p>
                <p>Data urodzenia</p>
                <p>Miejsce zamieszkania</p>
            </div>

        <div class="stopka">
            Kontakt <br>
            Numer telefonu: 123456789 <br>
            E-mail: biblioteka@biblioteka.pl
            <br>
            Adres: ul. Akademicka 15<br>
        
        </div>

        <script src="app_pr.js"></script>
        <script src="okno_kontaktu.js"></script>
        <script src="app2.js"></script>
    </body>

</html>