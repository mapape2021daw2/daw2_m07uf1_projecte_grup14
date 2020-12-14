<?php session_start() ?>
<html>
	<head>
		<meta content="text/html; charset=UTF-8" http-equiv="content-type">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="../css/estils.css">
        <title>Modificar producte</title>
    </head>
    <body>
        <nav>
            <ul>
                <li><a href="../comandes/comandes.php">Comandes</a></li>
                    <ul>
                        <li><a href="../comandes/visualitzarComanda.php">Visualitzar una comanda</a></li>
                        <li><a href="#">Modificar una comanda</a></li>
                        <li><a href="../comandes/formEsborrarComanda.php">Eliminar una comanda</a></li>
                    </ul>           
                <li><a href="../admin.php">Catàleg editable</a></li>
                    <ul>
                        <li><a href="formAfegirProducte.php">Afegir productes</a></li>
                        <li><a href="formModificarProducte.php">Modificar productes</a></li>
                        <li><a href="formEsborrarProducte.php">Eliminar productes</a></li>
                    </ul>
                <li><a href="../usuaris/gestionarUsuaris.php">Gestionar usuaris</a></li>
            </ul>
        </nav>
        <div>
            <h1>MODIFICAR PRODUCTE</h1>
            <form action="modificarProducte.php" method="POST">
                Producte que es vol modificar:<select name="producte">
                <?php
                $productes = "../fitxers/productesActius";
                $info = scandir($productes);
                foreach($info as $product){
                ?>
                    <option><?php echo $product; ?></option>
                <?php
                }
                ?>
                </select>
                <br><br>
                <label>Secció</label>
                <input id="seccio" name="seccio" type="text"><br>
                <label>Nom</label>
                <input id="nom" name="nom" type="text"><br>
                <label>Preu:</label>
                <input id="preu" name="preu" type="text"><br>
                <label>Imatge</label>
                <input id="imatge" name="imatge" type="text"><br>
                <input type="submit" value="Modificar"><br>
            </form>
        </div>
    </body>
</html>