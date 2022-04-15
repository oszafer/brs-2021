<?php
  include "connection.php";
  include "funkcje.php";
  session_start();
?>

<?php

      if(isset($_POST['submit']))
      {
        $imie = zabezpieczenie($_POST['imie']);
        $nazwisko = zabezpieczenie($_POST['nazwisko']);
        $login = zabezpieczenie($_POST['login']);
        $email = zabezpieczenie($_POST['email']);
        $haslo = zabezpieczenie($_POST['haslo']);
        $haslo = md5($_POST['haslo']);
      
        $count = 0;
        $sql = "SELECT login from `librarians`";
        $res = mysqli_query($db,$sql);

        while($row = mysqli_fetch_assoc($res))
        {
          if($row['login'] == $_POST['login'])
          {
            $count = $count+1;
          }
        }
        if($count==0)
        {
          mysqli_query($db,"INSERT INTO `librarians` VALUES('', ''$imie', '$nazwisko', '$login', '$haslo', '$email');");
        ?>
          <script type="text/javascript">
            window.location="admin_log_rej.php" //po zarejestrowaniu przechodzi do strony logowania admina
          </script>
        <?php
        }
        else
        {
          echo '<script language="javascript">';
          echo 'alert("Rejestracja nie powiodła się. Taki użytkownik już istnieje w bazie.")';
          echo '</script>';

          ?>
          <script type="text/javascript">
            window.location="admin_log_rej.php"
          </script>
          <?php
        }
      }
    ?>