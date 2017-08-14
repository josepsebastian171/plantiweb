<?php
class raiz {
//Conectar con la base de datos
    public function Conectar() {
        $servidor = "localhost";
        $user = "root";
        $password = "";
		$bd = "plantillas";

        $link = mysqli_connect($servidor, $user, $password, $bd);
		
		//$link  = new mysqli("localhost","root","","plantillas");

        if (!$link)
            die("Tenemos problemas, regrese en unos minutos: " . mysqli_error());

     		
		if (!mysqli_set_charset($link, "utf8")) 
			{
				printf("Error cargando el conjunto de caracteres utf8: %s\n", mysqli_error($link));
				exit();
			} 


        

        
        return $link;
    }

    //*****************************************************************************
    public function comillas_inteligentes($valor) {
        // Retirar las barras
        if (get_magic_quotes_gpc()) {
            $valor = stripslashes($valor);
        }

        // Colocar comillas si no es entero
        if (!is_numeric($valor)) {
            $valor = "'" . mysqli_real_escape_string($valor) . "'";
        }
        return $valor;
    }

    //*****************************************************************************
    // Obtengo los textos limpios para usarlos como url
    public static function limpiaUrl($entra) {
        $traduce = array('á' => 'a', 'é' => 'e', 'í' => 'i', 'ó' => 'o', 'ú' => 'u', 'Á' => 'A', 'É' => 'E', 'Í' => 'I', 'Ó' => 'O', 'Ú' => 'U',
            'ñ' => 'n', 'Ñ' => 'N',
            'ä' => 'a', 'ë' => 'e', 'ï' => 'i', 'ö' => 'o', 'ü' => 'u', 'Ä' => 'A', 'Ë' => 'E', 'Ï' => 'I', 'Ö' => 'O', 'Ü' => 'U');
        $sale = strtr($entra, $traduce);

        $texto = str_replace(" ", "-", $sale);

        return $texto;
    }

}

?>