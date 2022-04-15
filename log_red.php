<?php
  include "connection.php";
  include "funkcje.php";
  session_start();
?>

<?php

if(isset($_POST['submit']))
{
  $login = zabezpieczenie($_POST['login']);
  $haslo = zabezpieczenie($_POST['haslo']);
  $haslo = $_POST['haslo'];

  $count=0;
  $res=mysqli_query($db,"SELECT * FROM `users` WHERE login='$login' && haslo='$haslo';");
  
  $row= mysqli_fetch_assoc($res);
  $count=mysqli_num_rows($res);

  if($count==0)
  {
    echo '<script language="javascript">';
    echo 'alert("E-mail lub hasło nieprawidłowe.")';
    echo '</script>';
    ?>
    <script type="text/javascript">
      window.location="log_rej.php"
    </script>
    <?php
  }
  else
  {
    $_SESSION['login_user'] = $login;
    header("Location: books.php");
  }
}

?>