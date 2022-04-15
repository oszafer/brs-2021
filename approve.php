<?php
  include "connection.php";
  session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Zatwierdź rezerwację</title>
    <link rel="stylesheet" href="style_logowanie.css">
	

</head>

<body>
<header>
            <header1>
                <a href="main_page_logged.php"><img src="logo7.png" class="logo"></a>
            </header1>
            <header2>
                <a href="main_page_logged.php"><img src="agh.png" class="logo2" style="float: right"></a>
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
                <li><a href="wyloguj.php"><button>Wyloguj</button> </a></li> 
            </ul>
        </nav>

        <nav>
            <ul>
                <li><a href ="books.php"><button>Katalog</button></a> </li>
                <li>||</li> 
                <li><a href ="admin_request.php"><button>Prośby o rezerwacje</button></a> </li> 
                <li>||</li> 
                <li><a href ="admin_issue_info.php"><button>Wypożyczone książki</button></a> </li> 
            </ul>
        </nav>

  <div>
    <br><h3 style="text-align: center;">Akceptacja rezerwacji</h3><br><br>
    
    <form action="" method="post">
        <input class="form-control" type="text" name="akceptacja" placeholder="Tak/Nie" required=""><br>

        Data wypożyczenia<br><input type="text" name="wypozyczono" placeholder="yyyy-mm-dd" required="" class="form-control"><br>

        Data zwrotu<br><input type="text" name="zwrot" placeholder="yyyy-mm-dd" required="" class="form-control"><br>
        <button class="btn btn-default" type="submit" name="submit">Zatwierdź</button>
    </form>
  
  </div>
</div>

<?php

if(isset($_POST['submit']))
{
    mysqli_query($db,"UPDATE  `issue_book` SET  `akceptacja` =  '$_POST[akceptacja]', `wypozyczono` =  '$_POST[wypozyczono]', `zwrot` =  '$_POST[zwrot]' WHERE login='$_SESSION[tytul]' and id_k='$_SESSION[id_k]';");

    mysqli_query($db,"UPDATE books SET status = 'Niedostępna' where id_k='$_SESSION[id_k]' ;");

    $res=mysqli_query($db,"SELECT status from books where id_k='$_SESSION[id_k];");

    if($res)
    {
        while($row=mysqli_fetch_assoc($res))
        {
            if($row['status']== 'Niedostępna')
            {
                mysqli_query($db,"UPDATE books SET status='Niedostępna' where id_k='$_SESSION[id_k]';");
            }
        }
    }
    header("Location: admin_request.php");
}
?>
</body>
</html>