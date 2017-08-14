<?php
session_start();

$_SESSION["usuario"] = $_GET["usuario"];
$url="index.php";
print "<script type='text/javascript'>
        parent.location.href='$url';
       </script>"; 
?>
