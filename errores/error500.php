<!DOCTYPE html="es">
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Error 500 - Problema Interno del Servidor</title>
<body>
	<h1>Error 500</h1>
	<p>Ha ocurrido un prblema interno en el servidor</p>
</body>
</html>
<?php
trigger_error("Error for testing", E_USER_ERROR);
?>
