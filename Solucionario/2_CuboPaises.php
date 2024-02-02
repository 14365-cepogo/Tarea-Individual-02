<?php
/*
 * provincias.php
 * 
 * Copyright 2017 ESPE <ESPE@LAPTOP_DELL>
 
 */

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title> TALLER CUBOS</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 1.31" />
</head>

<body>
<h1> TALLER - PAISES </h1>

<?php
	 
	 //INDICES NUMERICOS
	 $cantones=array(array("QUITO","CAYAMBE","RUMIÑAHUI"),
	                 array("GUAYAQUIL","DAULE","SAMBORONDON","BAEZA"),
	                 array("CUENCA","LOJA"),
	                 array("ROCAFUERTE","CHONE"));

	      
// MATRICES ASOCIATIVAS	           
     $Pais= array (
	                   
					   'ECUADOR' => array('Pichincha' => array("QUITO","CAYAMBE","RUMIÑAHUI"),
											 'Guayas' => $cantones[1],
									          'Azuay' => ["Cuenca"],
									         'Manabi' => $cantones[3],
											 'Tunguragua' => array ("Ambato")), 
				         
		        		'ESTADOS UNIDOS' =>array('NEW YORK' => ["BUFALO","ALBANY","TROY","NEW YORK"],
											'PENSILVANNIA' => ["FILALDEFIA","PISTBURG"],
												 'FLORIDA' => ["MIAMI","ORLANDO","TAMPA","FORT LOUDARLE"],
												'COLORADO' =>["GOLDEN","AVON","DURANGO","COMMERCECITY","STERLING","PUEBLOWEST"]),
					         
				      'ARGENTINA' =>array('BUENOS AIRES' => ["BUFALO","ALBANY","TROY","NEW YORK"],
											       'JUJUY' => ["FILALDEFIA","PISTBURG"],
												'LA PAMPA' => ["MIAMI","ORLANDO","TAMPA"]),
							  
				     'COLOMBIA' => array('ANTIOQUIA' => ["MEDELLIN","PASTO"],
											'ARAUCA' => ["RUMBA","BOGOTA","BARANQUILLA"] )
			    
					   );
					   
	 //$titulo = ["ECUADOR","ESTADOS UNIDOS","ARGENTINA"];
					   
/*				 
echo "<pre>";
    print_r($Pais);
echo "</pre>";
*/

					 
//PRIMERA CARA ECUADOR
foreach ($Pais as $cara=>$info){        
	
// ALGORITMO PARA LA CABECERA				   
$html='
    <table border=1 alingn="center">
    <tr>';
    
	
	// PRUEBA DE ESCRITORIO
	echo "<br><br>";
	//$cara = "ECUADOR";
	//$info = $Pais['ECUADOR'];
	echo "PAIS : $cara  <br>  ";
	

	/* echo "<pre>";
      print_r($info);
      echo "</pre>";
    echo "<br><br>"; */

			
    //CALCULO EL MAXIMO DE LAS COLUMAS DE LA MATRIZ
    $maxColum=null;
    foreach($info as $prov=>$arreglo) {
		$tam=count($info[$prov]);
		/*				 
			echo "<pre>";
			    print_r($info[$prov]);
			echo "</pre>";
		    echo "<br><br>";
		*/	
		$maxColum=($maxColum >= $tam) ? $maxColum : $tam;
	
    }
 
     // PRUEBA DE ESCRITORIO
	echo "MAXCOLUM: $maxColum <br> ";
	
    // TITULO DE LA TABLA
	$tam = count ($info);
	echo "NUMERO DE PROVINCIAS: $tam <br> ";
	
	
	
    $html.=' <tr>  
             <th colspan=" ' . $tam . '" bgcolor="#EC7063"> ' . $cara . ' </th>
             </tr>';
             
    // IMPRIMIR LA CABECERA
     foreach($info as $prov=>$arreglo){
         $html.="<th> $prov </th>"; 
     }
	 
  // ALGORITMO PARA IMPRIMIR LA TABLA EN HTML 
    for($f=0;$f < $maxColum; $f++){   // $max para recorrer hacia abajo
		$html.='<tr>';
		 foreach($info as $data){
			 $html.=( isset($data[$f]) ) ? '<td bgcolor="#D6FAF2">' . $data[$f] . '</td>' : '<td bgcolor="#D6DEFA">&nbsp;</td>';     
		  
		  //  PRUEBA DE ESCRITORIO
		     /*
				echo "FILA Nro: $f <br>"; 
				if ( isset($data[$f]) ){
					echo "<pre>";
						print_r($data[$f]);
					echo "</pre>";
				}else{
					echo "NO HAY DATA";
				}
				echo "<br><br>";
			*/
			
		 }
		$html.='</tr>';
	}	
    
    $html .= "</tr>";
    $html .= "</table>"; 
    $html .= "<br> <br>";
  
    echo $html;
	
}

?>  


	
</body>

</html>
