<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Registro Usuarios</title>
<link rel="stylesheet" href="estilos.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
		  $('#actualizar').click(function(){

		        //Obtenemos el valor del campo txtnombre
		        var usr = $(".txtusuario").val();
		        //Validamos el campo txtnombre, simplemente miramos que no esté vacío
		        if (usr == "") {
		            alert('Debe Introducir un usuario');
		            $("input").focus();
		            return false;
		        }
		        var nombre = $(".txtnombres").val();
		        //Validamos el campo txtnombres, simplemente miramos que no esté vacío
		        if (nombre == "") {
		            alert('Debe Introducir los Nombres');
		            $("input").focus();
		            return false;
		        }
			  
			    //Obtenemos el valor del campo txtapellidos
			  var nombre = $(".txtapellidos").val();
		        //Validamos el campo txtapellidos, simplemente miramos que no esté vacío
		        if (nombre == "") {
		            alert('Debe Introducir los Apellidos');
		            $("input").focus();
		            return false;
		        }
		        var correo = $(".txtcorreo").val();
		        //Validamos el campo txtcorreo, simplemente miramos que no esté vacío
		        if (correo == "") {
		            alert('Debe Introducir un correo');
		            $("input").focus();
		            return false;
		        }

		        //Creamos la Variable que recibira el "Value" de todos los Input que esten dentro del Form
		        var obtener = $("#form1").serialize();

		        $.ajax({
		            type: "POST",
		            url: "insertar.php",
		            data: obtener,
		            success: function() {
		                alert('Tus datos han sido insertados correctamente!'); //Mensaje de Datos Correctamente Insertados
		                $('#tabla_usuarios').load("usuarios.php"); //Recargamos la Tabla(Para que se muestren los Nuevos Resultados)
		                //$(".nombre, .apellidos").val(""); //Limpiamos los Input
		                $(".txtsuario, .txtnombres, .txtapellidos, .txtcorreo, .txtpassword").val(""); //Limpiamos los Input
		            }
		        }); //Terminamos la Funcion Ajax
		        return false; //Agregamos el Return para que no Recargue la Pagina al Enviar el Formulario
		    }); //Terminamos la Funcion Click
		}); //Terminamos la Funcion Ready
	</script>

</head>

<style type="text/css">
	div#tabla_usuarios{
		padding-bottom: 80px;
	}

	
</style>

<body>
<!--Inicio sombrea-->	


	<!--INICIO CONTENEDOR-->
		<div id="container">
			<header>
				<a href="index.php"><img src="imagenes/Header_PlantiWeb.png" alt="Planti Web"></a>
			</header>
			
		<!--Inicio formulario-->	

		<div id="formulario">
		
			<h1 class="form" align="center">Registro Usuarios</h1>
			
			
			
			<form name="form1" id="form1" class="form1" method="post" action="adicionar_registro.php" onSubmit="return validar(this)"> 
				<center> 

					<table class="form1" width="290" border="0">
						<tr> 
							<td width="103">Usuario</td> 
							<td width="152">
								<input name="txtusuario" class="txtusuario" type="text" id="txtusuario" required> 
							</td> 
						</tr> 
						<tr> 
							<td width="103">Nombres</td> 
							<td width="152">
								<input name="txtnombres" class="txtnombres" type="text" id="txtnombres" required> 
							</td> 
						</tr>
						<tr> 
							<td width="103">Apellidos</td> 
							<td width="152">
								<input name="txtapellidos" class="txtapellidos" type="text" id="txtapellidos" required> 
							</td> 
						</tr>		 			
						<tr> 
							<td width="103" >Correo</td> 
							<td width="152">
								<input name="txtcorreo" class="txtcorreo" type="text" id="txtcorreo" required> 
							</td> 
						</tr>  
						<tr>
							<td>Password</td>
							<td>
								<input name="txtpassword" class="txtpassword" type="password" id="txtpassword" required>
							</td> 
						</tr>
						<tr>
							<td colspan="2">
								<div align="center">
									<input type="button" id="actualizar" name="actualizar" value="Registrarse"> 
									<!--<input name="Reset" type="reset" id="Reset" value="Restablecer">-->
								 </div>
							</td>
						</tr>
					</table>
				</center>
		 	</form>
		 	
		 	<div id="tabla_usuarios">
		 		<?php include('usuarios.php'); ?>
		 	</div>
		 	
		 	
		 	
		</div>
		 
		<!--Fin formulario-->			
		 
			 <footer>

					<section id="acerca">
					<h3>Acerca de nosotros</h3>
						<article>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente rerum aspernatur, dolorum, fugiat doloribus voluptate dolore veritatis. 
						</article>
					</section>

					<section id="redes">
						<div class="email"><a href="#"></a></div>
						<div class="twitter"><a href="https://twitter.com/"></a></div>
						<div class="youtube"><a href="#"></a></div>
						<div class="facebook"><a href="https://www.facebook.com/"></a></div>
					</section>

			</footer>
			
			<div id="copyright">
				<p>
					Copyright 2017 www.plantiweb.com
					<br>
					Aviso legal, política de privacidad 
				</p>
			</div>
			
		</div>
	<!--FIN CONTENEDOR-->	
	
		
<!--Fin sombra-->
</body>
</html>
