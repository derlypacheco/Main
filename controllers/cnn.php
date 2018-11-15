<?php
/*-------------------------
 Create class for Derly Pacheco
 derlypacheco.mx 
 derly.pacheco@outlook.com
---------------------------*/
$mysqli = new mysqli("advancedcms.us", "msanchez_mainSP", "Gw*56*HKR",  "msanchez_main");
if(mysqli_connect_errno()) {
  printf("Error en conexion: %s\n", $mysqli->connect_error);
  exit();
}
?>
