<?php
 require 'conexion.php';
 
 $usuario=$_POST['txtusr'];
 $clave=$_POST['txtclave'];

//Configuracion de la conexion a base de datos
 $con = mysql_connect($host, $user, $pwd);
 mysql_select_db($db, $con);	
 $sql=mysql_query("select * from tblusuarios where usuario='$usuario' and clave='$clave'",$con);
 $nreg=mysql_num_rows($sql);
 
if ($nreg>0)
     {
       $mensaje="$usuario ha iniciado sesión"; 
       $url="inicio_sesion.php?usuario=$usuario";
     }
   else
     {
       $mensaje="Usuario o contraseña incorrectos. Sesión no iniciada"; 
       $url="ingreso.html";
     }

echo "<script type='text/javascript'>
              alert('$mensaje');
              window.location='$url';
           </script>"; 

mysql_free_result($sql);
mysql_close($con);

?>