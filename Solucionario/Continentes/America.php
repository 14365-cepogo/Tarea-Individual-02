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
	<title> AMERICA </title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 1.31" />
</head>

<body>


<?php



//INDICES NUMERICOS
	 $cantones=array(array("QUITO","CAYAMBE","RUMIÑAHUI"),
	                 array("GUAYAQUIL","DAULE","SAMBORONDON","BAEZA"),
	                 array("CUENCA","LOJA"),
	                 array("ROCAFUERTE","CHONE"));


     $America= array (
	                   
					   'ECUADOR' => array('Pichincha' => array("QUITO","CAYAMBE","RUMIÑAHUI"),
											 'Guayas' => $cantones[1],
									          'Azuay' => ["Cuenca"],
									         'Manabi' => $cantones[3],
											 'Tunguragua' => array ("Ambato")), 
				         
		        		'ESTADOS UNIDOS' =>array('NEW YORK' => ["BUFALO","ALBANY","TROY","NEW YORK"],
											'PENSILVANNIA' => ["FILALDEFIA","PISTBURG"],
												 'FLORIDA' => ["MIAMI","ORLANDO","TAMPA","FORT LOUDARLE"],
												'COLORADO' =>["GOLDEN","AVON","DURANGO","COMMERCECITY","STERLING","PUEBLOWEST"]),
							  
				     'COLOMBIA' => array('ANTIOQUIA' => ["MEDELLIN","PASTO","CARTAGENA","CALI"],
											'ARAUCA' => ["RUMBA","BOGOTA","BARANQUILLA"] )
			    
					   );



					   
	

?>                    

</body>
                       
</html>