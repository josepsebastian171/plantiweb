<?php
	require_once 'raiz.php';
	class Imagenes extends raiz{
		private $imagen;
		private $tImg;	//total de imagenes
		
		public function __construct(){
			//la variable imagen la convertimos en array
			$this->imagen = array();
		}
		// Traemos las imagenes para el index
		public function getImagenes($inicio,$cantImg){
			parent::Conectar();
			$query = sprintf(
						"select
						idimagen,
						titulo,
						imagen
						from
						imagenes
						order by idimagen desc
						limit %s,%s;",
						parent::comillas_inteligentes($inicio),
						parent::comillas_inteligentes($cantImg)
					);
					
			//echo $query;exit;
			$result = mysql_query($query);
			
			if(!$result)
				die("Regrese más tarde");

			while ($reg = mysql_fetch_assoc($result)) {
				$this->imagen[] = $reg;
			}

			return $this->imagen;	
		}	
		//*****************************************************************************
		public function TotalImagenes(){
			$query = "select count(*) as total from imagenes";
			$result = mysql_query($query,parent::Conectar());
			
			if ($reg = mysql_fetch_array($result)) {
				$this->tImg = $reg["total"];
			}
			
			return $this->tImg;
		}
		//*****************************************************************************
                public function add($titulo, $imagen){
		
			parent::Conectar();

                                    $consulta = sprintf(
								"INSERT INTO imagenes values(
									null, %s, %s
								);",
								parent::comillas_inteligentes($titulo),
                                                parent::comillas_inteligentes($imagen)

								);
					//echo $consulta;exit;
					mysql_query($consulta);
		
			
                }
                //*****************************************************************************
                public function del($id){
			parent::Conectar();

				$query = sprintf(
						"DELETE FROM imagenes WHERE idimagen = %s;",
						parent::comillas_inteligentes($id)
					);
				mysql_query($query);
				header("Location: index.php");
			
		}
	}	//Fin clase
?>