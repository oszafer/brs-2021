<?php
include "connection.php";
include "funkcje.php";
session_start();

      if(isset($_POST['submit']))
      {
        $imie = zabezpieczenie($_POST['imie']);
        $nazwisko = zabezpieczenie($_POST['nazwisko']);
        $login = zabezpieczenie($_POST['login']);
        $user_id = zabezpieczenie($_POST['user_id']);
        $email = zabezpieczenie($_POST['email']);
        $haslo = zabezpieczenie($_POST['haslo']);
        $haslo = md5($_POST['haslo']);
        $count = 0;

        $sql="SELECT login from `users`";
        $res=mysqli_query($db,$sql);

        while($row = mysqli_fetch_assoc($res))
        {
          if($row['login']==$_POST['login'])
          {
            $count = $count + 1;
          }
        }
        if($count == 0)
        {
          mysqli_query($db,"INSERT INTO `users` VALUES('$imie', '$nazwisko', '$login', '$haslo', '$user_id', '$email');");
        ?>
          <script type="text/javascript">
            window.location="log_rej.php" //po zarejestrowaniu należy się zalogować
          </script>
        <?php
        }
        else
        {
          echo '<script language="javascript">';
          echo 'alert("Rejestracja nie powiodła się. Taki użytkownik istnieje już w bazie.")';
          echo '</script>';

          ?>
          <script type="text/javascript">
            window.location="log_rej.php"
          </script>
        <?php
        }
      }
?>