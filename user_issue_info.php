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
                <li><a href="main_page_logged.php"><button class="button">Katalog</button></a> </li> 
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
                <li><a href="main_page_logged.php"><button class="button">Wyloguj</button> </a></li> 
            </ul>
        </nav>

    <h3 style="text-align: center;">Wypożyczone książki</h3><br>
    <?php
    $c=0;

      if(isset($_SESSION['login_user']))
      {
        $sql="SELECT users.login,user_id,books.id_k,tytul,autor,wydawnictwo,wypozyczono,issue_book.zwrot FROM users inner join issue_book ON users.login=issue_book.login inner join books ON issue_book.id_k=books.id_k WHERE issue_book.login ='$_SESSION[login_user]' and issue_book.akceptacja !='' ORDER BY `issue_book`.`zwrot` ASC";
        $res=mysqli_query($db,$sql);
        
        
        echo "<table id='my_table' table class='table table-bordered table-hover' >";
        //Table header
        
        echo "<tr>";
        echo "<th>"; echo "Użytkownik";  echo "</th>";
        echo "<th>"; echo "Ilość";  echo "</th>";
        echo "<th>"; echo "ID";  echo "</th>";
        echo "<th>"; echo "Tytul";  echo "</th>";
        echo "<th>"; echo "Autor";  echo "</th>";
        echo "<th>"; echo "Wydawnictwo";  echo "</th>";
        echo "<th>"; echo "Data wypożyczenia";  echo "</th>";
        echo "<th>"; echo "Data zwrotu";  echo "</th>";

      echo "</tr>"; 

      while($row=mysqli_fetch_assoc($res))
      {
       
        echo "<tr>";
          echo "<td>"; echo $row['login']; echo "</td>";
          echo "<td>"; echo $row['user_id']; echo "</td>";
          echo "<td>"; echo $row['id_k']; echo "</td>";
          echo "<td>"; echo $row['tytul']; echo "</td>";
          echo "<td>"; echo $row['autor']; echo "</td>";
          echo "<td>"; echo $row['wydawnictwo']; echo "</td>";
          echo "<td>"; echo $row['wypozyczono']; echo "</td>";
          echo "<td>"; echo $row['zwrot']; echo "</td>";
        echo "</tr>";
      }
    echo "</table>";

       
      }
      else
      {
        echo '<script language="javascript">';
          echo 'alert("Zaloguj się, aby zobaczyć wypożyczone książki.")';
          echo '</script>';
          ?>
          <script type="text/javascript">
            window.location="log_rej.php"
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
    Adres: Ulica Akademicka 15<br>
</div>

<script src="okno_kontaktu.js"></script>

</body>
</html>