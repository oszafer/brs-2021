<?php
  include "connection.php";
  session_start();
?>


<?php

    if(isset($_POST['submit']))
    {
      $count=0;
      $res=mysqli_query($db,"SELECT * FROM `librarians` WHERE login='$_POST[login]' && haslo='$_POST[haslo]';");

      $row= mysqli_fetch_assoc($res);

      $count=mysqli_num_rows($res);

      if($count==0)
      {
        echo '<script language="javascript">';
          echo 'alert("Login lub hasło nieprawidłowe.")';
          echo '</script>';
          ?>
          <script type="text/javascript">
            window.location="admin_log_rej.php"
          </script>
          <?php
      }
      else
      {
        /*-------------if username & password matches---*/

        $_SESSION['login_user'] = $_POST['login']; 
        

        ?>
          <script type="text/javascript">
            window.location="admin_request.php"
          </script>
        <?php
      }
    }

  ?>
