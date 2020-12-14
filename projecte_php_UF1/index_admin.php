<?php
session_name("admin");
session_start();

if (isset($_SESSION["comandes"])){
    $comandes = $_SESSION["comandes"];
}else{
    $comandes = array();
}
?>

<html>
	<head>
		<meta content="text/html; charset=UTF-8" http-equiv="content-type">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="css/estils.css">
        <title>Pàgina de l'administrador</title>
	</head>
<body>
    <nav>
        <ul>
            <li><a href="comandes/comandes.php">Comandes</a></li>
                <ul>
                    <li><a href="comandes/gestionarComandes.php">Gestionar comandes</a></li>
                </ul>           
            <li><a class="active" href="admin.php">Catàleg editable</a></li>
                <ul>
                    <li><a href="productes/formAfegirProducte.php">Afegir productes</a></li>
                    <li><a href="productes/formModificarProducte.php">Modificar productes</a></li>
                    <li><a href="productes/formEsborrarProducte.php">Eliminar productes</a></li>
                </ul>
            <li><a href="usuaris/gestionarUsuaris.php">Gestionar usuaris</a></li>
            <li><a href="logout.php">Tancar sessió</a></li>
        </ul>
    </nav>
    <br><h3>Index de l'administrador: Selecciona alguna de les opcions del menú</h3> 
</body>
</html>