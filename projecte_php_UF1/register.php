<html>
<head>
	<meta content="text/html; charset=UTF-8" http-equiv="content-type">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<title>Registre d'usuari</title>
</head>
<body>
<?php
    require_once("classes/usuaris.php");

    $fitxer_usuaris="fitxers/usuaris.txt";
    $usuari = $_POST["nom_usuari"];
    $ctsnya = $_POST["ctsnya"];
    $nom = $_POST["nom"];
    $cognoms = $_POST["cognoms"];
    $adreca = $_POST["adreca"];
    $email = $_POST["email"];
    $telf = $_POST["telf"];
    $visa = $_POST["visa"];

    $usuari_nou = new Usuari($usuari,$ctsnya,$nom,$cognoms,$adreca,$email,$telf,$visa);
    $usuari_nou -> afegirUsuari();
    echo "S'ha afegit l'usuari ".$_POST["nom_usuari"]." a la llista d'usuaris de la web.<br>";
    echo "Per a iniciar sessió, ves a <a href=login.html class='btn btn-dark m1-2'>Fes click</a>";
?>
</body>
</html>