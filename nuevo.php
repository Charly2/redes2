<?php
include 'config/config.php';
function guardar($data,$table,$conn)
{
	$keys = array_keys($data);
	$query = "INSERT INTO $table (";
	$keysmap = "";$i=0;$valuesmap ="";
	foreach ($keys as $key) {
		$i++;
		$keysmap .= $key;
		$valuesmap .= "'".$data[$key]."'";
		if ( $i< sizeof($keys)) {
			$keysmap .= ',';
			$valuesmap .= ',';
		}	
	}
	$query.=$keysmap;
	$query.=') VALUES (';
	$query.=$valuesmap;
	$query.=')';
	/*echo $query;
	print_r($reporte);*/

	$result = $conn->query($query);

	if ($result) {
		return $conn->insert_id;
	}else{
		return  0;
	}
}

$reporte['titulo'] = $_POST['titu'];
$reporte['body'] = $_POST['des'];
$reporte['estado'] = 1;
$reporte['user'] = 'Juan Carlos';

$dato = guardar($reporte,'actividad',$conn);


if ($dato) {
	echo "se guardo con el id $dato";
	header("Location: index.php");
	die();

}else{
	header("Location: nueva.php");
}


?>