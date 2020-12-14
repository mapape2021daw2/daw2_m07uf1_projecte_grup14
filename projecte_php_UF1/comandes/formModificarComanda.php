<?php session_start(); ?>
<html>
	<head>
    <meta content="text/html; charset=UTF-8" http-equiv="content-type">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="../css/estils.css">
        <title>Modificar comanda</title>
	</head>
	<body>
        <nav>
            <ul>
                <li><a href="comandes.php">Comandes</a></li>
                    <ul>
                        <li><a href="crearComanda.php">Crear una comanda</a>
                        <li><a href="visualitzarComanda.php">Visualitzar una comanda</a></li>
                        <li><a href="formModificarComanda.php">Modificar una comanda</a></li>
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
        <div class="comanda_modify">
            <h3>Modificar comanda</h3>
            <form action="formModificarComanda.php" method="POST">
                Comanda a ser modificada <select name="comanda">
                <?php
                    $comandes = "../fitxers/comandes_actives.txt";
                    $llistes = scandir($comandes);
                    foreach($llistes as $comandes){
                        if(substr($comandes,0,4) === $_SESSION['codi']){
                ?>
                            <option><?php echo $comandes; ?></option>
                <?php
                        }
                    }
                ?>
                </select>
                Identificador del producte <select name="producte">
                    <?php
                        $productes = "..fitxers/productes.txt";
                        $llistes = scandir($productes);
                        foreach($llistes as $productes){
                    ?>
                            <option><?php echo $productes; ?></option>
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