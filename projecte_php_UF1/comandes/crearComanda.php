<?php session_start(); ?>
<html>
	<head>
    <meta content="text/html; charset=UTF-8" http-equiv="content-type">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="../css/estils.css">
        <title>Crear comanda</title>
	</head>
	<body>
        <nav>
            <ul>
                <li><a href="comandes.php">Comandes</a></li>
                    <ul>
                        <li><a href="visualitzarComanda.php">Visualitzar una comanda</a></li>
                        <li><a href="#">Modificar una comanda</a></li>
                        <li><a href="formEsborrarComanda.php">Eliminar una comanda</a></li>
                    </ul>           
                <li><a href="../admin.php">Catàleg editable</a></li>
                    <ul>
                        <li><a href="../productes/formAfegirProducte.php">Afegir productes</a></li>
                        <li><a href="../productes/formModificarProducte.php">Modificar productes</a></li>
                        <li><a href="../productes/formEsborrarProducte.php">Eliminar productes</a></li>
                    </ul>
                <li><a href="../usuaris/gestionarUsuaris.php">Gestionar usuaris</a></li>
                <li><a href="../logout.php">Tancar sessió</a></li>
            </ul>
        </nav>
        <h2>LES MEVES COMANDES, <?php echo $_SESSION['nom_usuari']; ?></h2>
        <div>
            <h3>Crear comanda</h3>
                <form action="../classes/comanda.php" method="POST">
                Codi producte: <select name="producte">

                <?php
                $fitxerProductes = "../fitxers/productesActius";
                $llistes = scandir($fitxerProductes);
                foreach($llistes as $producte){
                ?>
                    <option><?php echo $producte; ?></option>
                <?php
                }
                ?>
                </select>
                Quantitat <input type="text" name="quantitat"><br>
                <input type="submit" value="Tramet"/>
                </form>
        </div>
    </body>
</html>