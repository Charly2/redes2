<?php

include 'config/config.php';


$result = $conn->query("SELECT * FROM `actividad` ");
$actividadA=[];
$actividadB=[];
$actividadC=[];
$actividadC=[];
while($cat = $result->fetch_assoc()){
    switch ($cat['estado']) {
      case '1':
        $actividadA[] = $cat;
        break;
       case '2':
        $actividadB[] = $cat;
        break;  
        case '3':
        $actividadC[] = $cat;
        break; 
        case '4':
        $actividadD[] = $cat;
        break; 
      
      default:
        
        break;
    }
    
  
  
}





$view = "_index";

include 'view/layaut.php';

?>