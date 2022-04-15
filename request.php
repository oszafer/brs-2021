<?php
  include "connection.php";
  session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Book Request</title>
	<link rel="stylesheet" href="style_tabela.css">
	<link rel="stylesheet" href="style_contact.css">
	
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
                <li><a href="main_page_logged.php"><button class="button">Biblioteka</button></a> </li>
                <li><a href="books.php"><button class="button">Katalog</button></a> </li> 
                <li><button class="button" id="my_Btn">Kontakt</button><div id="myModal" class="modal-contact">
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
                <li><a href="profile.php"><button class="button">Profil</button></a> </li>  
                <li><a href="main_page.php"><button class="button">Wyloguj</button> </a></li> 
            </ul>
        </nav>

		<h3 style="text-align: center;">Zarezerwowane książki oczekujące na zatwierdzenie</h3><br>

	<?php

	if(isset($_SESSION['login_user']))
		{
			$q=mysqli_query($db,"SELECT * from issue_book where login ='$_SESSION[login_user]' and akceptacja='' ;");

			if(mysqli_num_rows($q)==0)
			{
				echo "Brak książek oczekujących na zatwierdzenie.";
			}
			else
			{
		echo "<table class='table table-bordered table-hover' >";
			echo "<tr><tr>";
				//Table header
				echo "<th>"."ID"."</th>";
				//echo "<th>"."Status"."</th>";
				//echo "<th>"."Data wypożyczenia"."</th>";
				//echo "<th>"."Data zwrotu"."</th>";
				
			echo "</tr>";	

			while($row=mysqli_fetch_assoc($q))
			{
				echo "<tr>";
				echo "<td>".$row['id_k']."</td>";
				//echo "<td>".$row['akceptacja']."</td>";
				//echo "<td>".$row['wypozyczono']."</td>";
				//echo "<td>".$row['zwrot']."</td>";
				
				echo "</tr>";
			}
		echo "</table>";
			}
		}
		else
		{
			echo "</br></br></br>"; 
			echo "<h2><b>";
			echo " Please login first to see the request information.";
			echo "</b></h2>";
		}
		?>
	</div>
</div>

<div class="stopka">
    Kontakt <br>
    Numer telefonu: 123456789 <br>
    E-mail: biblioteka@biblioteka.pl
    <br>
    Adres: Ulica Akademicka 15<br>
</div>

<script src="okno_kontaktu.js"></script>

</body>
</html>