<?php
  include "connection.php";
  session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>admin Request</title>
	<link rel="stylesheet" href="admin_style.css">
	<link rel="stylesheet" href="style_tabela.css">
	<link rel="stylesheet" href="style_contact.css">
	<link rel="stylesheet" href="style_searchBox2.css">
        <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
	</head>
<body>
        <header>
            <header1>
                <a href=main_page.php><img src="logo7.png" class="logo"></a>
            </header1>
            <header2>
                <a href=main_page.php><img src="agh.png" class="logo2"></a>
            </header2>
    </header>

        <nav>
            <ul>
                <li><a href=main_page.php><button>Biblioteka</button></a> </li>
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
                <li><a href=wyloguj.php><button>Wyloguj</button> </a></li> 
            </ul>
        </nav>

        <nav>
            <ul>
                <li><a href = "books.php"><button>Katalog</button></a> </li>
                <li>||</li> 
                <li><a href = "admin_request.php"><button>Prośby o rezerwacje</button></a> </li> 
                <li>||</li> 
                <li><a href = "admin_issue_info.php"><button>Wypożyczone książki</button></a> </li> 
            </ul>
        </nav>

		<br>
		<div class="searchBox2">

		<form class="form" method="post" action="" name="form1">
		<input type="text" name="login" class="searchInput" placeholder="Użytkownik" required="">
		<input type="text" name="id_k" class="searchInput" placeholder="ID" required="">
		<button class="button-submit" name="submit" type="submit">Submit</button><br>
		</form>
		</div>
	<h3 style="text-align: center;">Rezerwacje książek</h3>

	<?php
	
	if(isset($_SESSION['login_user']))
	{
		$sql= "SELECT users.login,user_id,books.id_k,tytul,autor,wydawnictwo,status FROM users inner join issue_book ON users.login=issue_book.login inner join books ON issue_book.id_k=books.id_k WHERE issue_book.akceptacja =''";
		$res= mysqli_query($db,$sql);

		if(mysqli_num_rows($res)==0)
			{
				echo "<h2><b>";
				echo "Brak oczekujących rezerwacji do zatwierdzenia.";
				echo "</h2></b>";
			}
		else
		{
			echo "<table class='table table-bordered table-hover' >";
			echo "<tr>";
				//Table header
				
				echo "<th>"; echo "Użytkownik";  echo "</th>";
				echo "<th>"; echo "ID";  echo "</th>";
				echo "<th>"; echo "Tytul";  echo "</th>";
				echo "<th>"; echo "Autor";  echo "</th>";
				echo "<th>"; echo "Wydawnictwo";  echo "</th>";
				echo "<th>"; echo "Status";  echo "</th>";
				
			echo "</tr>";	

			while($row=mysqli_fetch_assoc($res))
			{
				echo "<tr>";
				echo "<td>"; echo $row['login']; echo "</td>";
				echo "<td>"; echo $row['id_k']; echo "</td>";
				echo "<td>"; echo $row['tytul']; echo "</td>";
				echo "<td>"; echo $row['autor']; echo "</td>";
				echo "<td>"; echo $row['wydawnictwo']; echo "</td>";
				echo "<td>"; echo $row['status']; echo "</td>";
				
				echo "</tr>";
			}
		echo "</table>";
		}
	}
	else
	{
		echo '<script language="javascript">';
    	echo 'alert("Zaloguj się, aby zobaczyć oczekujące rezerwacje.")';
    	echo '</script>';
    	?>
    	<script type="text/javascript">
      	window.location="admin_log_rej.php"
    	</script>
    	<?php
	}

	if(isset($_POST['submit']))
	{
		$_SESSION['tytul']=$_POST['login'];
		$_SESSION['id_k']=$_POST['id_k'];

		?>
			<script type="text/javascript">
				window.location="approve.php"
			</script>
		<?php
	}

	?>
	</div>
</div>

<div class="stopka">
            Kontakt <br>
            Numer telefonu: 123456789 <br>
            E-mail: biblioteka@biblioteka.pl
            <br>
            Adres: ul. Akademicka 15<br>
        
        </div>

</body>
</html>