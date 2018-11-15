<?php
session_start(); 
include_once 'controllers/config.php';
$config = new Site();
// echo "Session: ".$_SESSION['nombre'];
if ($_SESSION['user']=='') {
	header('location:./');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title><?php $config->SitePar(); ?></title>
	<?php $config->Class(); ?>
</head>
<body>

<?php $config->Scripts(); ?>
</body>
</html>