<?php
	//require_once("configuracion.php");

	$ipss = $_SERVER["REMOTE_ADDR"];

	if ($ipss == '10.3.74.6') {
	  $ips = 'Administrador';
	}else{
	  $ips = 'Invitado';
	}

	require_once("nomPag.php");
?>
<!DOCTYPE html>
<html lang="es-MX">
<head>
	<meta charset="UTF-8">
	<link rel="apple-touch-icon" sizes="76x76" href="img/apple-icon.png">
	<link rel="icon" type="image/png" href="<?php echo $itiz->img?>/itiz.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Instituto Tecnológico de Iztapalapa</title>

	<link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
	<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
	<link href="assets/css/itiz.css" rel="stylesheet">

	<script src="vendor/jquery/jquery.min.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="vendor/jquery-easing/jquery.easing.min.js"></script>
</head>
