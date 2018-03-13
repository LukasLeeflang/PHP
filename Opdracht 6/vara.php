<?php
   session_start();

   $_SESSION['user'] = "Lukas";
   echo $_SESSION['user'];
?>

<p><a href="varb.php">Naar varb.php</a></p>
