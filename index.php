<?php

session_start();

//codigo para plantilla alimentos

require_once 'clases/imagenes_alimento.php';

$obj_alimento = new imagenes_alimento();

$cantImg = "4"; //Plantillas por fila

if (isset($_GET["pos"]))
    $inicio = $_GET["pos"];
else
    $inicio = 0;

$datos = $obj_alimento->getImagenes($inicio, $cantImg);

$total = $obj_alimento->TotalImagenes();

$cantPag = $total / $cantImg;

if (isset($_GET["pos"]) and $_GET["pos"] > 0)
    $actual = $_GET["pos"] / $cantImg + 1;
else
    $actual = 1;

//fin codigo para plantilla alimentos

//********************************************************************

//codigo para plantilla animales

require_once 'clases/imagenes_animal.php';

$obj_animal = new Imagenes_animal();

$cantImg_animal = "4"; //Plantillas por fila

if (isset($_GET["pos_animal"]))
    $inicio_animal = $_GET["pos_animal"];
else
    $inicio_animal = 0;

$datos_animal = $obj_animal->getImagenes($inicio_animal, $cantImg_animal);

$total_animal = $obj_animal->TotalImagenes();

$cantPag_animal = $total_animal / $cantImg_animal;

if (isset($_GET["pos_animal"]) and $_GET["pos_animal"] > 0)
    $actual_animal = $_GET["pos_animal"] / $cantImg_animal + 1;
else
    $actual_animal = 1;

//fin codigo para plantilla animales

//*********************************************************************

//codigo para plantilla arte

require_once 'clases/imagenes_arte.php';

$obj_arte = new Imagenes_arte();

$cantImg_arte = "4"; //Plantillas por fila

if (isset($_GET["pos_arte"]))
    $inicio_arte = $_GET["pos_arte"];
else
    $inicio_arte = 0;

$datos_arte = $obj_arte->getImagenes($inicio_arte, $cantImg_arte);

$total_arte = $obj_arte->TotalImagenes();

$cantPag_arte = $total_arte / $cantImg_arte;

if (isset($_GET["pos_arte"]) and $_GET["pos_arte"] > 0)
    $actual_arte = $_GET["pos_arte"] / $cantImg_arte + 1;
else
    $actual_arte = 1;

//fin codigo para plantilla arte

//*********************************************************************

//*********************************************************************

//codigo para plantilla musica

require_once 'clases/imagenes_musica.php';

$obj_musica = new Imagenes_musica();

$cantImg_musica = "4"; //Plantillas por fila

if (isset($_GET["pos_musica"]))
    $inicio_musica = $_GET["pos_musica"];
else
    $inicio_musica = 0;

$datos_musica = $obj_musica->getImagenes($inicio_musica, $cantImg_musica);

$total_musica = $obj_musica->TotalImagenes();

$cantPag_musica = $total_musica / $cantImg_musica;

if (isset($_GET["pos_musica"]) and $_GET["pos_musica"] > 0)
    $actual_musica = $_GET["pos_musica"] / $cantImg_musica + 1;
else
    $actual_musica = 1;

//fin codigo para plantilla musica

//*********************************************************************

//codigo para plantilla paisajes

require_once 'clases/imagenes_paisaje.php';

$obj_paisaje = new Imagenes_paisaje();

$cantImg_paisaje = "4"; //Plantillas por fila

if (isset($_GET["pos_paisaje"]))
    $inicio_paisaje = $_GET["pos_paisaje"];
else
    $inicio_paisaje = 0;

$datos_paisaje = $obj_paisaje->getImagenes($inicio_paisaje, $cantImg_paisaje);

$total_paisaje = $obj_paisaje->TotalImagenes();

$cantPag_paisaje = $total_paisaje / $cantImg_paisaje;

if (isset($_GET["pos_paisaje"]) and $_GET["pos_paisaje"] > 0)
    $actual_paisaje = $_GET["pos_paisaje"] / $cantImg_paisaje + 1;
else
    $actual_paisaje = 1;

//fin codigo para plantilla paisaje

//*********************************************************************


//*********************************************************************

//codigo para plantilla Tecnologia

require_once 'clases/imagenes_tecnologia.php';

$obj_tec = new Imagenes_tecnologia();

$cantImg_tec = "4"; //Plantillas por fila

if (isset($_GET["pos_tec"]))
    $inicio_tec = $_GET["pos_tec"];
else
    $inicio_tec = 0;

$datos_tec = $obj_tec->getImagenes($inicio_tec, $cantImg_tec);

$total_tec = $obj_tec->TotalImagenes();

$cantPag_tec = $total_tec / $cantImg_tec;

if (isset($_GET["pos_tec"]) and $_GET["pos_tec"] > 0)
    $actual_tec = $_GET["pos_tec"] / $cantImg_tec + 1;
else
    $actual_tec = 1;

//fin codigo para plantilla paisaje

//*********************************************************************


//*********************************************************************

//codigo para plantilla Turismo

require_once 'clases/imagenes_turismo.php';

$obj_tur = new Imagenes_turismo();

$cantImg_tur = "4"; //Plantillas por fila

if (isset($_GET["pos_tur"]))
    $inicio_tur = $_GET["pos_tur"];
else
    $inicio_tur = 0;

$datos_tur = $obj_tur->getImagenes($inicio_tur, $cantImg_tur);

$total_tur = $obj_tur->TotalImagenes();

$cantPag_tur = $total_tur / $cantImg_tur;

if (isset($_GET["pos_tur"]) and $_GET["pos_tur"] > 0)
    $actual_tur = $_GET["pos_tur"] / $cantImg_tur + 1;
else
    $actual_tur = 1;

//fin codigo para plantilla turismo

//*********************************************************************


?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Plantillas para la Web</title>
<link rel="stylesheet" href="estilos.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.0.47/jquery.fancybox.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.0.47/jquery.fancybox.min.js"></script>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

</head>

<body>


	<!--INICIO CONTENEDOR-->
		<div id="container">
			<header>
				<a href="index.html"><img src="imagenes/Header_PlantiWeb.png" alt="Planti Web"></a>
			</header>

			<nav>
				<ul>
					<li><a href="index.php">Inicio</a></li>
					<li><a href="registro.php">Registro</a></li>
					<li><a href="ingreso.html">Ingreso</a></li>
					<li><a href="carrito.html">Carrito</a></li>
					<!--<li><a href="cerrar_sesion.php">Cerrar Sesión</a></li>-->
				</ul>
			</nav>
				
			<p align="right">
				<span style="color:#070000;">
					<?php
    
						if (!isset($_SESSION["usuario"]))
						  {
						   echo "Usuario desconectado";
								
						  }
						else
								 
						  {
							  echo "Usuario conectado: " ;
							  print $_SESSION["usuario"];
						  }
					?>
				</span>
			</p>
			<p align="right">
				<a href="cerrar_sesion.php">Cerrar Sesión</a>
			</p>

					
			<div id="articulo">
								
					<div class="galeria">
						<header>
							<h1>Plantillas de Alimentos</h1>
						</header>
						<div class="contenido">

							<?php
								foreach ($datos as $d) {
							?>
								<div class="plantilla">
									<!--aqui va el encavezado de cada plantilla, contien nombre y valor de la plantilla-->
									<div class="tituloPost">
										<?php echo $d['titulo']; ?>
										<br>
										$<?php echo $d['precio'];?>
									</div>
									<!--fin del encavezado de la plantilla-->
									
									
									<!--aqui va la imagen de la plantilla de la galería correspondiente-->
									<a class="fancybox" data-fancybox="images" href="<?php echo $d['imagen']; ?>" data-fancybox-group="gallery" title="<?php echo $d['titulo']; ?>">
										<img width="264" height="344" src="<?php echo $d["imagen"]; ?>"/>
									</a>
									<!--fin de la imagen-->
									
									<div class="tituloPost">
										<form class="form-inline" method="post" action="adicionar_carrito.php">
											<input type="hidden" name="product_id" value="<?php echo $r->id; ?>">
			  								<div class="form-group">
												<input type="number" name="q" value="1" style="width:100px;" min="1" class="form-control" placeholder="Cantidad">
			  								</div>
											<button type="submit" class="btn btn-primary">Agregar al carrito</button>
										</form>
									</div>

								</div>
							<?php
								}
							?>

							<!-- ******************************************************** -->
							<div style="clear:both; height:1px;font-size:0px; line-height: 0px;"></div>
							<!-- paginacion -->
							<div class="paginacion">
								<?php
								if ($inicio == 0) {
									?>
									<span class="negrita">Anterior</span>
									<?php
								} else {
									?>
									<a href="?pos=<?php echo $inicio - $cantImg; ?>">Anterior</a>
									<?php
								}
								?>

								<?php
								$a = 0;
								$ultimaPag = 0;

								if ($actual > 6) {
									echo "...";
								}

								for ($i = 1; $i <= $cantPag; $i++) {
									if ($i >= $actual - 5 && $i <= $actual + 5) {
										if ($i == $actual) {
											?>	
											<span> <?php echo $i; ?> </span>
											<?php
										} else {
											?>
											<a href="?pos=<?php echo $a; ?>"> <?php echo $i . " "; ?> </a>
											<?php
										}
									}
									$a+=$cantImg;
									$ultimaPag++;
								}

								$final = $ultimaPag * $cantImg;
								$resto = $total - $final;

								if ($final < $total) {
									$ultimaPag++;

									if ($actual == $ultimaPag) {
										?>
										<span><?php echo $ultimaPag; ?></span>
										<?php
									} else {
										?>
										<a href="?pos=<?php echo $final; ?>"><?php echo $ultimaPag; ?></a>
										<?php
									}
								}

								if ($ultimaPag - $actual > 5) {
									echo "...";
								}
								?>

								<?php
								if ($ultimaPag == $actual) {
									?>
									<span>Siguiente</span>
									<?php
								} else {
									?>
									<a href="?pos=<?php echo $inicio + $cantImg; ?>">Siguiente</a>
									<?php
								}
								?>

							</div>
							<!-- Fin paginacion -->
							<!-- ****************************************************** -->
							
						</div>	<!-- Fin #contenido -->

        			</div>	<!-- Fin #Galeria Alimento -->
        			
        			
        			<div class="galeria">
						<header>
							<h1>Plantillas de Animales</h1>
						</header>
						<div class="contenido">

							<?php
								foreach ($datos_animal as $d) {
							?>
								<div class="plantilla">
									<div class="tituloPost">
										<?php echo $d['titulo']; ?>
									</div>

									<a class="fancybox" data-fancybox="images" href="<?php echo $d['imagen']; ?>" data-fancybox-group="gallery" title="<?php echo $d['titulo']; ?>">
										<img width="264" height="344" src="<?php echo $d["imagen"]; ?>"/>
									</a>


								</div>
							<?php
								}
							?>

							<!-- ******************************************************** -->
							<div style="clear:both; height:1px;font-size:0px; line-height: 0px;"></div>
							
							<!-- paginacion -->
							<div class="paginacion">
								<?php
								if ($inicio_animal == 0) {
									?>
									<span class="negrita">Anterior</span>
									<?php
								} else {
									?>
									<a href="?pos_animal=<?php echo $inicio_animal - $cantImg_animal; ?>">Anterior</a>
									<?php
								}
								?>

								<?php
								$a_animal= 0;
								$ultimaPag_animal = 0;

								if ($actual_animal > 6) {
									echo "...";
								}

								for ($i = 1; $i <= $cantPag_animal; $i++) {
									if ($i >= $actual_animal - 5 && $i <= $actual_animal + 5) {
										if ($i == $actual_animal) {
											?>	
											<span> <?php echo $i; ?> </span>
											<?php
										} else {
											?>
											<a href="?pos_animal=<?php echo $a_animal; ?>"> <?php echo $i . " "; ?> </a>
											<?php
										}
									}
									$a_animal+=$cantImg_animal;
									$ultimaPag_animal++;
								}

								$final_animal = $ultimaPag_animal * $cantImg_animal;
								$resto_animal = $total_animal - $final_animal;

								if ($final_animal < $total_animal) {
									$ultimaPag_animal++;

									if ($actual_animal == $ultimaPag_animal) {
										?>
										<span><?php echo $ultimaPag_animal; ?></span>
										<?php
									} else {
										?>
										<a href="?pos_animal=<?php echo $final_animal; ?>"><?php echo $ultimaPag_animal; ?></a>
										<?php
									}
								}

								if ($ultimaPag_animal - $actual_animal > 5) {
									echo "...";
								}
								?>

								<?php
								if ($ultimaPag_animal == $actual_animal) {
									?>
									<span>Siguiente</span>
									<?php
								} else {
									?>
									<a href="?pos_animal=<?php echo $inicio_animal + $cantImg_animal; ?>">Siguiente</a>
									<?php
								}
								?>

							</div>
							<!-- Fin paginacion -->
							<!-- ****************************************************** -->
							
						</div>	<!-- Fin #contenido -->

        			</div>	<!-- Fin #Galeria Animales -->
						
					
					<div class="galeria">
						<header>
							<h1>Plantillas de Arte</h1>
						</header>
						<div class="contenido">

							<?php
								foreach ($datos_arte as $d) {
							?>
								<div class="plantilla">
									<div class="tituloPost">
										<?php echo $d['titulo']; ?>
									</div>

									<a class="fancybox" data-fancybox="images" href="<?php echo $d['imagen']; ?>" data-fancybox-group="gallery" title="<?php echo $d['titulo']; ?>">
										<img width="264" height="344" src="<?php echo $d["imagen"]; ?>"/>
									</a>


								</div>
							<?php
								}
							?>

							<!-- ******************************************************** -->
							<div style="clear:both; height:1px;font-size:0px; line-height: 0px;"></div>
							<!-- paginacion -->
							<div class="paginacion">
								<?php
								if ($inicio_arte == 0) {
									?>
									<span class="negrita">Anterior</span>
									<?php
								} else {
									?>
									<a href="?pos_arte=<?php echo $inicio_arte - $cantImg_arte; ?>">Anterior</a>
									<?php
								}
								?>

								<?php
								$a_arte = 0;
								$ultimaPag_arte = 0;

								if ($actual_arte > 6) {
									echo "...";
								}

								for ($i = 1; $i <= $cantPag_arte; $i++) {
									if ($i >= $actual_arte - 5 && $i <= $actual_arte + 5) {
										if ($i == $actual_arte) {
											?>	
											<span> <?php echo $i; ?> </span>
											<?php
										} else {
											?>
											<a href="?pos_arte=<?php echo $a_arte; ?>"> <?php echo $i . " "; ?> </a>
											<?php
										}
									}
									$a+=$cantImg_arte;
									$ultimaPag_arte++;
								}

								$final_arte = $ultimaPag_arte * $cantImg_arte;
								$resto_arte = $total_arte - $final_arte;

								if ($final_arte < $total_arte) {
									$ultimaPag_arte++;

									if ($actual_arte == $ultimaPag_arte) {
										?>
										<span><?php echo $ultimaPag_arte; ?></span>
										<?php
									} else {
										?>
										<a href="?pos_arte=<?php echo $final_arte; ?>"><?php echo $ultimaPag_arte; ?></a>
										<?php
									}
								}

								if ($ultimaPag_arte - $actual_arte > 5) {
									echo "...";
								}
								?>

								<?php
								if ($ultimaPag_arte == $actual_arte) {
									?>
									<span>Siguiente</span>
									<?php
								} else {
									?>
									<a href="?pos_arte=<?php echo $inicio_arte + $cantImg_arte; ?>">Siguiente</a>
									<?php
								}
								?>

							</div>
							<!-- Fin paginacion -->
							<!-- ****************************************************** -->
							
						</div>	<!-- Fin #contenido -->

        			</div>	<!-- Fin #Galeria Arte -->
        			
        			
					<div class="galeria">
						<header>
							<h1>Plantillas de Música</h1>
						</header>
						<div class="contenido">					<?php
								foreach ($datos_musica as $d) {
							?>
								<div class="plantilla">
									<div class="tituloPost">
										<?php echo $d['titulo']; ?>
									</div>

									<a class="fancybox" data-fancybox="images" href="<?php echo $d['imagen']; ?>" data-fancybox-group="gallery" title="<?php echo $d['titulo']; ?>">
										<img width="264" height="344" src="<?php echo $d["imagen"]; ?>"/>
									</a>


								</div>
							<?php
								}
							?>

							<!-- ******************************************************** -->
							<div style="clear:both; height:1px;font-size:0px; line-height: 0px;"></div>
							<!-- paginacion -->
							<div class="paginacion">
								<?php
								if ($inicio_musica == 0) {
									?>
									<span class="negrita">Anterior</span>
									<?php
								} else {
									?>
									<a href="?pos_musica=<?php echo $inicio_musica - $cantImg_musica; ?>">Anterior</a>
									<?php
								}
								?>

								<?php
								$a_musica = 0;
								$ultimaPag_musica = 0;

								if ($actual_musica > 6) {
									echo "...";
								}

								for ($i = 1; $i <= $cantPag_musica; $i++) {
									if ($i >= $actual_musica - 5 && $i <= $actual_musica + 5) {
										if ($i == $actual_musica) {
											?>	
											<span> <?php echo $i; ?> </span>
											<?php
										} else {
											?>
											<a href="?pos_musica=<?php echo $a_musica; ?>"> <?php echo $i . " "; ?> </a>
											<?php
										}
									}
									$a+=$cantImg_musica;
									$ultimaPag_musica++;
								}

								$final_musica = $ultimaPag_musica * $cantImg_musica;
								$resto_musica = $total_musica - $final_musica;

								if ($final_musica < $total_musica) {
									$ultimaPag_musica++;

									if ($actual_musica == $ultimaPag_musica) {
										?>
										<span><?php echo $ultimaPag_musica; ?></span>
										<?php
									} else {
										?>
										<a href="?pos_musica<?php echo $final_musica; ?>"><?php echo $ultimaPag_musica; ?></a>
										<?php
									}
								}

								if ($ultimaPag_musica - $actual_musica > 5) {
									echo "...";
								}
								?>

								<?php
								if ($ultimaPag_musica == $actual_musica) {
									?>
									<span>Siguiente</span>
									<?php
								} else {
									?>
									<a href="?pos_musica=<?php echo $inicio_musica + $cantImg_musica; ?>">Siguiente</a>
									<?php
								}
								?>

							</div>
							<!-- Fin paginacion -->
							<!-- ****************************************************** -->
							
						</div>	<!-- Fin #contenido -->

        			</div>	<!-- Fin #Galeria Musica -->
        			
        			
        			<div class="galeria">
						<header>
							<h1>Plantillas de Paisajes</h1>
						</header>
						<div class="contenido">

							<?php
								foreach ($datos_paisaje as $d) {
							?>
								<div class="plantilla">	
													
									<div class="tituloPost">
										<?php echo $d['titulo']; ?>
									</div>

									<a class="fancybox" data-fancybox="images" href="<?php echo $d['imagen']; ?>" data-fancybox-group="gallery" title="<?php echo $d['titulo']; ?>">
										<img width="264" height="344" src="<?php echo $d["imagen"]; ?>"/>
									</a>


								</div>
							<?php
								}
							?>

							<!-- ******************************************************** -->
							<div style="clear:both; height:1px;font-size:0px; line-height: 0px;"></div>
							<!-- paginacion -->
							<div class="paginacion">
								<?php
								if ($inicio_paisaje == 0) {
									?>
									<span class="negrita">Anterior</span>
									<?php
								} else {
									?>
									<a href="?pos_arte=<?php echo $inicio_paisaje - $cantImg_paisaje; ?>">Anterior</a>
									<?php
								}
								?>

								<?php
								$a_paisaje = 0;
								$ultimaPag_paisaje = 0;

								if ($actual_paisaje > 6) {
									echo "...";
								}

								for ($i = 1; $i <= $cantPag_paisaje; $i++) {
									if ($i >= $actual_paisaje - 5 && $i <= $actual_paisaje + 5) {
										if ($i == $actual_paisaje) {
											?>	
											<span> <?php echo $i; ?> </span>
											<?php
										} else {
											?>
											<a href="?pos_arte=<?php echo $a_paisaje; ?>"> <?php echo $i . " "; ?> </a>
											<?php
										}
									}
									$a_paisaje+=$cantImg_paisaje;
									$ultimaPag_paisaje++;
								}

								$final_paisaje = $ultimaPag_paisaje * $cantImg_paisaje;
								$resto_paisaje = $total_paisaje - $final_paisaje;

								if ($final_paisaje < $total_paisaje) {
									$ultimaPag_paisaje++;

									if ($actual_paisaje == $ultimaPag_paisaje) {
										?>
										<span><?php echo $ultimaPag_paisaje; ?></span>
										<?php
									} else {
										?>
										<a href="?pos_paisaje=<?php echo $final_paisaje; ?>"><?php echo $ultimaPag_paisaje; ?></a>
										<?php
									}
								}

								if ($ultimaPag_paisaje - $actual_paisaje > 5) {
									echo "...";
								}
								?>

								<?php
								if ($ultimaPag_paisaje == $actual_paisaje) {
									?>
									<span>Siguiente</span>
									<?php
								} else {
									?>
									<a href="?pos_paisaje=<?php echo $inicio_paisaje+ $cantImg_paisaje; ?>">Siguiente</a>
									<?php
								}
								?>

							</div>
							<!-- Fin paginacion -->
							<!-- ****************************************************** -->
							
						</div>	<!-- Fin #contenido -->

        			</div>	<!-- Fin #Galeria Paisaje -->
        			       				
										
					<div class="galeria">
						<header>
							<h1>Plantillas de Tecnología</h1>
						</header>
						<div class="contenido">

							<?php
								foreach ($datos_tec as $d) {
							?>
								<div class="plantilla">
									<div class="tituloPost">
										<?php echo $d['titulo']; ?>
									</div>

									<a class="fancybox" data-fancybox="images" href="<?php echo $d['imagen']; ?>" data-fancybox-group="gallery" title="<?php echo $d['titulo']; ?>">
										<img width="264" height="344" src="<?php echo $d["imagen"]; ?>"/>
									</a>


								</div>
							<?php
								}
							?>

							<!-- ******************************************************** -->
							<div style="clear:both; height:1px;font-size:0px; line-height: 0px;"></div>
							<!-- paginacion -->
							<div class="paginacion">
								<?php
								if ($inicio_tec == 0) {
									?>
									<span class="negrita">Anterior</span>
									<?php
								} else {
									?>
									<a href="?pos_arte=<?php echo $inicio_tec - $cantImg_tec; ?>">Anterior</a>
									<?php
								}
								?>

								<?php
								$a_tec = 0;
								$ultimaPag_tec = 0;

								if ($actual_tec > 6) {
									echo "...";
								}

								for ($i = 1; $i <= $cantPag_tec; $i++) {
									if ($i >= $actual_tec - 5 && $i <= $actual_tec + 5) {
										if ($i == $actual_tec) {
											?>	
											<span> <?php echo $i; ?> </span>
											<?php
										} else {
											?>
											<a href="?pos_tec=<?php echo $a_tec; ?>"> <?php echo $i . " "; ?> </a>
											<?php
										}
									}
									$a_tec+=$cantImg_tec;
									$ultimaPag_tec++;
																		
								}

								$final_tec = $ultimaPag_tec * $cantImg_tec;
								$resto_tec = $total_tec - $final_tec;

								if ($final_tec < $total_tec) {
									$ultimaPag_tec++;

									if ($actual_tec == $ultimaPag_tec) {
										?>
										<span><?php echo $ultimaPag_tec; ?></span>
										<?php
									} else {
										?>
										<a href="?pos_tec=<?php echo $final_tec; ?>"><?php echo $ultimaPag_tec; ?></a>
										<?php
									}
								}

								if ($ultimaPag_tec - $actual_tec> 5) {
									echo "...";
								}
								?>

								<?php
								if ($ultimaPag_tec == $actual_tec) {
									?>
									<span>Siguiente</span>
									<?php
								} else {
									?>
									<a href="?pos_tec=<?php echo $inicio_tec + $cantImg_tec; ?>">Siguiente</a>
									<?php
								}
								?>

							</div>
							<!-- Fin paginacion -->
							<!-- ****************************************************** -->
							
						</div>	<!-- Fin #contenido -->

        			</div>	<!-- Fin #Galeria Tecnología -->
																																																																	
					<div class="galeria">
						<header>
							<h1>Plantillas de Turismo</h1>
						</header>
						<div class="contenido">					<?php
								foreach ($datos_tur as $d) {
							?>
								<div class="plantilla">
									<div class="tituloPost">
										<?php echo $d['titulo']; ?>
									</div>

									<a class="fancybox" data-fancybox="images" href="<?php echo $d['imagen']; ?>" data-fancybox-group="gallery" title="<?php echo $d['titulo']; ?>">
										<img width="264" height="344" src="<?php echo $d["imagen"]; ?>"/>
									</a>


								</div>
							<?php
								}
							?>

							<!-- ******************************************************** -->
							<div style="clear:both; height:1px;font-size:0px; line-height: 0px;"></div>
							<!-- paginacion -->
							<div class="paginacion">
								<?php
								if ($inicio_tur == 0) {
									?>
									<span class="negrita">Anterior</span>
									<?php
								} else {
									?>
									<a href="?pos_tur=<?php echo $inicio_tur - $cantImg_tur; ?>">Anterior</a>
									<?php
								}
								?>

								<?php
								$a_tur = 0;
								$ultimaPag_tur = 0;

								if ($actual_tur > 6) {
									echo "...";
								}

								for ($i = 1; $i <= $cantPag_tur; $i++) {
									if ($i >= $actual_tur - 5 && $i <= $actual_tur + 5) {
										if ($i == $actual_tur) {
											?>	
											<span> <?php echo $i; ?> </span>
											<?php
										} else {
											?>
											<a href="?pos_tur=<?php echo $a_tur ?>"> <?php echo $i . " "; ?> </a>
											<?php
										}
									}
									$a_tur+=$cantImg_tur;
									$ultimaPag_tur++;
								}

								$final_tur = $ultimaPag_tur * $cantImg_tur;
								$resto_tur = $total_tur - $final_tur;

								if ($final_tur < $total_tur) {
									$ultimaPag_tur++;

									if ($actual_tur == $ultimaPag_tur) {
										?>
										<span><?php echo $ultimaPag_tur; ?></span>
										<?php
									} else {
										?>
										<a href="?pos_tur<?php echo $final_tur; ?>"><?php echo $ultimaPag_tur; ?></a>
										<?php
									}
								}

								if ($ultimaPag_tur - $actual_tur > 5) {
									echo "...";
								}
								?>

								<?php
								if ($ultimaPag_tur == $actual_tur) {
									?>
									<span>Siguiente</span>
									<?php
								} else {
									?>
									<a href="?pos_tur=<?php echo $inicio_tur + $cantImg_tur; ?>">Siguiente</a>
									<?php
								}
								?>

							</div>
							<!-- Fin paginacion -->
							<!-- ****************************************************** -->
							
						</div>	<!-- Fin #contenido -->

        			</div>	<!-- Fin #Galeria Turismo -->																												
													
			</div>



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
	
		

</body>
</html>