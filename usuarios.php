<?php
require 'conexion.php';
//Configuracion de la conexion a base de datos
$con = mysql_connect($host, $user, $pwd);
mysql_select_db($db, $con);

//consulta todos los empleados
$sql=mysql_query("SELECT * FROM tblusuarios ORDER BY nombres ASC",$con);
?>
<div id="usuarios">
	<table class="datos_table" width="80%" border="0" align="center" bordercolor="#57B1DD" cellspacing="0" cellpadding="0" border-collapse:collapse >
	<tr>
		<th>Usuario</th>
		<th>Nombres</th>
		<th>Apellidos</th>
		<th>Correo</th>
		<th>Clave</th>
	</tr>
	<?php
	while($row = mysql_fetch_array($sql))
	{
		echo "<tr>";
		echo "<td align='center'>".$row['usuario']."</td>";
		echo "<td align='center'>".$row['nombres']."</td>";
		echo "<td align='center'>".$row['apellidos']."</td>";
		echo "<td align='center'>".$row['correo']."</td>";
		echo "<td align='center'>".$row['clave']."</td>";
		echo "</tr>";
	}
	?>
	</table>
</div>
