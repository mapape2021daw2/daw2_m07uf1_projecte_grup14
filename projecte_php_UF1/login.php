<html>
	<head>
		<meta content="text/html; charset=UTF-8" http-equiv="content-type">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <title>Verificació del login</title>
	</head>
<body>

<?php
session_start();

	if(($_POST["nom_usuari"]!="")&&($_POST["ctsnya"]!="")){
		$fitxer_usuaris="fitxers/usuaris.txt";
		if(file_exists($fitxer_usuaris)){
			$fitxer = fopen($fitxer_usuaris,"r") or die ("No es pot llegir la llista d'usuaris");
			$usuari_valid = FALSE;
			while(!feof($fitxer) && ($usuari_valid == FALSE)){
				$verificar = explode(":",fgets($fitxer));
				if (($_POST["nom_usuari"] == $verificar[0]) && ($_POST["ctsnya"] == $verificar[1])){
					$usuari_valid = TRUE;
				}
			}
			fclose($fitxer);

			if($usuari_valid){
				$_SESSION['acces']=1;
				$_SESSION["nom_usuari"] = $_POST["nom_usuari"];
					if($_SESSION["nom_usuari"] == "admin"){
						header('Location: /projecte_php_UF1/index_admin.php');
					}else{
						header('Location: /projecte_php_UF1/index_client.php');
					}
			}else{
				echo "Usuari o contrasenya incorrecte, torna-ho a intentar de nou.";
			}
		}else{
			echo "La llista d'usuaris encara no ha sigut creada. No es pot validar l'usuari ".$_POST["nom_usuari"]."<br>";
		}
	}else{
		echo "No hi ha dades per a la validació de l'usuari.<br>";
	}
?>
</body>
</html> 