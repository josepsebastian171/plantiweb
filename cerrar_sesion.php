<?php
session_start();
session_destroy();
$url="index.php";
echo "<script type='text/javascript'>
              alert('La sesión ha finalizado');
              window.location='$url';
       </script>";
?>
