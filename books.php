<?php
  include "connection.php";
  session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Katalog</title>
	<link rel="stylesheet" href="style_tabela.css">
	<link rel="stylesheet" href="style_contact.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
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

	<div class="searchBox">
		<form class="navbar-center" method="post" name="form1">
				<input class="searchInput" type="text" name="search" placeholder="Szukaj książek" required="">
				<button class="searchButton" type="submit" name ="submit" href="#">
					<i class="fas fa-search"></i>
            	</button>
		</form>
	</div>

	<div class="searchBox1">
		<form class="navbar-center" method="post" name="form1">
				<input class="searchInput" type="text" name="id_k" placeholder="Wpisz ID książki" required="">
				<button class="searchButton" type="submit" name ="submit1" href="#">
					<i class="fas fa-check"></i>
            	</button>
		</form>
	</div>

<br><br><br><br><br><br>

	<?php
	


if(isset($_POST['submit']))
{
	// if(isset($_SESSION['login_user']))
	// {

	$q=mysqli_query($db,"SELECT * from books where tytul like '%$_POST[search]%' ");

	if(mysqli_num_rows($q)==0)
	{
		echo "Nie znaleziono.";
	}
	else
	{
	echo "<table id='my_table' class='table table-bordered table-hover' >";
	echo "<tr>";
		//naglowek tabeli
		echo "<th>"; echo "ID";	echo "</th>";
		echo "<th>"; echo "Tytuł";  echo "</th>";
		echo "<th>"; echo "Autor";  echo "</th>";
		echo "<th>"; echo "Wydawnictwo";  echo "</th>";
		echo "<th>"; echo "Status";  echo "</th>";
	echo "</tr>";	

	while($row=mysqli_fetch_assoc($q))
	{
		echo "<tr>";
		echo "<td>".$row['id_k']."</td>";
		if($row['id_k']==1)
		{
			echo "<td><a href='1.html'>".$row['tytul']."</td>";
		}
		else if($row['id_k']==2)
		{
			echo "<td><a href='2.html'>".$row['tytul']."</td>";
		}
		else if($row['id_k']==3)
		{
			echo "<td><a href='3.html'>".$row['tytul']."</td>";
		}
		else if($row['id_k']==4)
		{
			echo "<td><a href='4.html'>".$row['tytul']."</td>";
		}
		else if($row['id_k']==5)
		{
			echo "<td><a href='5.html'>".$row['tytul']."</td>";
		}
		else if($row['id_k']==6)
		{
			echo "<td><a href='6.html'>".$row['tytul']."</td>";
		}
		else if($row['id_k']==7)
		{
			echo "<td><a href='7.html'>".$row['tytul']."</td>";
		}
		else if($row['id_k']==8)
		{
			echo "<td><a href='8.html'>".$row['tytul']."</td>";
		}
		else if($row['id_k']==9)
		{
			echo "<td><a href='9.html'>".$row['tytul']."</td>";
		}
		echo "<td>".$row['autor']."</td>";
		echo "<td>".$row['wydawnictwo']."</td>";
		echo "<td>".$row['status']."</td>";

		echo "</tr>";
	}
echo "</table>";
	}
}
	/*jak przycisk nie jest wcistniety*/
else
{
	$res=mysqli_query($db,"SELECT * FROM `books` ORDER BY `books`.`tytul` ASC;");

echo "<table class='table table-bordered table-hover' >";
	echo "<tr>";
		//naglowek tabeli
		echo "<th>"; echo "ID";	echo "</th>";
		echo "<th>"; echo "Tytuł";  echo "</th>";
		echo "<th>"; echo "Autor";  echo "</th>";
		echo "<th>"; echo "Wydawnictwo";  echo "</th>";
		echo "<th>"; echo "Status";  echo "</th>";
	echo "</tr>";	

	while($row=mysqli_fetch_assoc($res))
	{
		echo "<tr>";
		echo "<td>".$row['id_k']."</td>";
		if($row['id_k']==1)
		{
			echo "<td><a href='1.html'>".$row['tytul']."</td>";
		}
		else if($row['id_k']==2)
		{
			echo "<td><a href='2.html'>".$row['tytul']."</td>";
		}
		else if($row['id_k']==3)
		{
			echo "<td><a href='3.html'>".$row['tytul']."</td>";
		}
		else if($row['id_k']==4)
		{
			echo "<td><a href='4.html'>".$row['tytul']."</td>";
		}
		else if($row['id_k']==5)
		{
			echo "<td><a href='5.html'>".$row['tytul']."</td>";
		}
		else if($row['id_k']==6)
		{
			echo "<td><a href='6.html'>".$row['tytul']."</td>";
		}
		else if($row['id_k']==7)
		{
			echo "<td><a href='7.html'>".$row['tytul']."</td>";
		}
		else if($row['id_k']==8)
		{
			echo "<td><a href='8.html'>".$row['tytul']."</td>";
		}
		else if($row['id_k']==9)
		{
			echo "<td><a href='9.html'>".$row['tytul']."</td>";
		}
		echo "<td>".$row['autor']."</td>";
		echo "<td>".$row['wydawnictwo']."</td>";
		echo "<td>".$row['status']."</td>";

		echo "</tr>";
	}
echo "</table>";

}

// else 
// {
// 	header("Location: main_page.php");
// }
		if(isset($_POST['submit1']))
		{
			if(isset($_SESSION['login_user']))
			{
				mysqli_query($db,"INSERT INTO issue_book Values('$_SESSION[login_user]', '$_POST[id_k]', '', '', '');");
                header("Location: request.php");
			}
			else
			{
                echo '<script language="javascript">';
				echo 'alert("Zaloguj się, aby zarezerwować książkę.")';
				echo '</script>';
				 ?>
    <script type="text/javascript">
      window.location="log_rej.php"
    </script>
    <?php
			}
		}
	?>
</div>

<div class="stopka">
    Kontakt <br>
    Numer telefonu: 123456789 <br>
    E-mail: biblioteka@biblioteka.pl
    <br>
    Adres: Ulica Akademicka 15<br>
</div>

<script src="app_logowanie.js"></script>
<script src="okno_kontaktu.js"></script>
</body>
</html>