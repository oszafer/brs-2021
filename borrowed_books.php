<html>
    <!-- wypozyczone_ksiazki.html (stara nazwa)-->
    <head>
        <link rel="shortcut icon" href="logo.png">
        <title>Biblioteka - zwrócone książki</title>
        <link rel="stylesheet" href="style.css">
        <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet"> 
    </head>

    <body>
        <header>
            <header1>
                <a href="main_page.php"><img src="logo7.png" class="logo"></a>
            </header1>
            <header2>
                <a href="main_page.php"><img src="agh.png" class="logo2"></a>
            </header2>
    </header>

        <nav>
            <ul>
                <li><a href=""><button>Biblioteka</button></a> </li>
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
                <li><a href = "profile.php"><button>Powrót do profilu</button></a> </li>
                <li>||</li> 
                <li><a href = "books.php"><button>Katalog - ksiażki do rezerwacji</button></a> </li>
            </ul>
        </nav>

        <br>
        <div class="middle_box">
            <p>Wypożyczone książki</p>
            <p>1. Książka i data</p>
            <p>2. Książka i data</p>
            <p>3. Książka i data</p>
            <p>4. Książka i data</p>
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