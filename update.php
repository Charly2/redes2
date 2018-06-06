
<?php 

include 'config/config.php'; 




	$query = "UPDATE actividad SET estado ='".$_POST['estado']."' WHERE idactividad ='".$_POST['id']."'";
	//echo $query;
	$result = $conn->query($query);
	//echo $result;
	if ($result) {
		echo 1;
	}else{
		echo 0;
	}

	exit(1);


?>