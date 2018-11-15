<?php 
include_once 'controllers/config.php';
$config = new Site();
?>
<?php
session_start();
if ($_SESSION['user']!='') {
	header('location:home.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title><?php $config->SitePar(); ?></title>
	<?php $config->Class(); ?>
</head>
<body class="bg-dark">

<div class="cont-login">
	<form method="post" id="formLogin">
		<div class="form-group">
			<div class="col-xs-12">
				<img src="http://www.cegea.upv.es/files/2018/10/cropped-Sin-ti%CC%81tulo-11.png" class="col-xs-12 logo">
			</div>
		</div>
		<div class="form-group">
			<div class="col-xs-12">
				<label>User</label>
				<input class="form-control" type="text" required autocomplete="false" maxlength="15"></input>
			</div>
			<div class="col-xs-12">
				<label>Password</label>
				<input class="form-control" required type="password"></input>
			</div>
			<div class="col-xs-12">
				<label></label>
				<button type="submit" class="btn btn-success btn-block">Login</button>
			</div>
		</div>
		<div class="clear"></div>
	</form>
</div>
<?php $config->Scripts(); ?>
</body>
</html>