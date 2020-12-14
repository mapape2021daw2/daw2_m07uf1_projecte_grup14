<?php
//session_name("nom_usuari");
session_start();

if (isset($_SESSION["carret"])){
    $comandes = $_SESSION["carret"];
}else{
    $comandes = array();
}

if (isset($_SESSION["seccio"])){
    $seccio = $_SESSION["seccio"];
}else{
    $seccio = "Llista_sencera";
}

?>

<html>
	<head>
		<meta content="text/html; charset=UTF-8" http-equiv="content-type">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="css/estils.css">
        <title>Pàgina del client</title>
	</head>
<body>
    <nav>
        <ul>
            <li><a href="comandes/comandes.php">Comandes</a></li>
                <ul>
                    <li><a href="comandes/visualitzarComanda.php">Visualitzar una comanda</a></li>
                    <li><a href="#">Modificar una comanda</a></li>
                    <li><a href="comandes/formEsborrarComanda.php">Eliminar una comanda</a></li>
                </ul>           
            <li><a class="active" href="cataleg_usuari.html">Catàleg</a></li>
                <ul>
                    <li><a href="productes/formAfegirProducte.php">Afegir productes</a></li>
                    <li><a href="productes/formModificarProducte.php">Modificar productes</a></li>
                    <li><a href="productes/formEsborrarProducte.php">Eliminar productes</a></li>
                </ul>
            <li><a href="zona_personal.php">Zona personal</a></li>
            <li><a href="logout.php">Tancar sessió</a></li>
            <li>
                <a href="cistella.php">
                <img id="carret" src="img_productes/carret.png" width="50" height="50"/>
                </a>
            </li>
        </ul>
    </nav>

    <form name="llistaSeccions" action="seccions.php" method="POST">
        <p>Llista de seccions:</p>
        <select name="seccio">
        <option value="Llista_sencera">Llista sencera</option>
            <?php

            $productes = "fitxers/productes.txt";
            $fitxer_productes = fopen($productes, "r") or die("No s'ha pogut obrir el fitxer");

            $f = file_get_contents($productes);
            $prods = explode("\n", $f);
            $infoProds = array();

            foreach ($prods as $i) {
                $verificar = explode(':', $i);
                if (!in_array($verificar[0], $infoProds)) {
                    echo '<option value="' . $verificar[0] . '">' . $verificar[0] . '</option>';
                    $infoProds[] = $verificar[0];
                }
            }
            ?>
        </select>
        <p><input type="submit" value="Filtrar"></p>
    </form>


    <div>
        <form name="afegirCarret" action="afegirCarret.php" method="POST">
            <?php
            $productes = "fitxers/productes.txt";
            $fitxer_productes = fopen($productes,"r") or die("No s'ha pogut obrir el fitxer");
            $f = file_get_contents($productes);
            $producte = explode("\n",$f);

            foreach($producte as $i){
                $nomProducte = explode(":",$i);
                echo '<form name="afegirCarret" action="afegirCarret.php" method="POST">';
                echo '<div>';
                echo '<h1>'.$nomProducte[1].'<h1>';
                echo '<p>'.$nomProducte[3].' €</p></div>';
                echo '<img src='.$nomProducte[4].' width="200"><br><br>';
                echo '<input type="hidden" name="codi" value="'.$nomProducte[2].'"/>';
                echo '<input type="submit" name="$this->cookie" value="Afegir al carret"/>';
            }
            ?>
        </form>
    </div>

    <div class="m1-2">
    <br><h1>Tens els següents productes a la cistella:</h1>
        <?php
            $productes = "fitxers/productes.txt";
            $fitxer_productes = fopen($productes,"r") or die("No s'ha pogut obrir el fitxer");
            $f = file_get_contents($productes);
            $producte = explode("\n",$f);
    
            foreach($producte as $i){
                $nomProducte = explode(":",$i);

                if(isset($nomProducte[1])){
                    setcookie($nomProducte[5],$_COOKIE[$nomProducte[5]]+1,time()+3600*24);
                }
                if($_COOKIE[$nomProducte[5]]!=0){
                    $missatge = $_COOKIE[$nomProducte[0]];
                    echo $missatge .'<br>';
                }
            }
        ?>
    </div>
</body>
</html>