<?php
	header("HTTP/1.1 405 Method Not Allowed");
	header("Allow: DELETE");
	//D'acord amb RFC 7231 el servidor ha d'enviar una llista
	//de mètodes permsesos quan respon amb un 405 
?>
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>Error 405 : El mètode no és DELETE</title>
	</head>
	<body>
		<h2>Error 405: El mètode enviat no és DELETE. La comanda no s'esborrarà</h2>		
		<a href="EsbCom.html"><input type=button value='OK'></a>	
	</body>
</html>
