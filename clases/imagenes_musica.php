<?php
	require_once 'raiz.php';
	class Imagenes_musica extends raiz{
		private $imagen;
		private $tImg;	//total de imagenes musica
		
		public function __construct(){
			//la variable imagen la convertimos en array
			$this->imagen = array();
		}
		// Traemos las imagenes para el index
		public function getImagenes($inicio,$cantImg){
			$enlace=parent::Conectar();
			$query = sprintf(
						"select
						idimagen,
						titulo,
						imagen
						from
						tblplantillamusica
						order by idimagen asc
						limit %s,%s;",
						parent::comillas_inteligentes($inicio),
						parent::comillas_inteligentes($cantImg)
					);
					
			//echo $query;exit;
			$result = mysqli_query($enlace,$query);
			
			if(!$result)
				die("Regrese más tarde");

			while ($reg = mysqli_fetch_assoc($result)) {
				$this->imagen[] = $reg;
			}

			return $this->imagen;	
		}	
		//*****************************************************************************
		public function TotalImagenes(){
			$enlace=parent::Conectar();
			$query = "select count(*) as total from tblplantillamusica";
			$result = mysqli_query($enlace,$query);
			
			if ($reg = mysqli_fetch_array($result)) {
				$this->tImg = $reg["total"];
			}
			
			return $this->tImg;
		}
		
                           
	}	//Fin clase
?>