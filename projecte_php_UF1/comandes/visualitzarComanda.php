<?php session_start(); ?>
<html>
	<head>
    <meta content="text/html; charset=UTF-8" http-equiv="content-type">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="../css/estils.css">
        <title>Visualitzar comanda</title>
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
        <div class="comandes_noves">
            <h3>Comandes meves</h3>
                <table>
                    <tr>
                        <td>Codi</td>
                        <td>Producte</td>
                        <td>Quantitat</td>
                    </tr>
                <?php
                    $fitxer_comandes = "../fitxers/comandes.txt";
                    $fitxer = fopen($fitxer_comandes,"r") or die ("No s'ha pogut obrir el fitxer.");
                    if ($fitxer){
                        $cont_fitxer = filesize($fitxer_comandes);
                        $comandes = explode(PHP_EOL,fread($fitxer,$cont_fitxer));
                    }
                    foreach($comandes as $comanda){
                        $separacio = explode(":",$comanda);
                        $numComanda = expldoe("-",$comanda);
                        if($numComanda[0] == $_SESSION['nom_usuari']){
                            $codi = $separacio[0];
                            $producte = $separacio[1];
                            $quantitat = $separacio[2];
                ?>
                            <tr>
                                <td><?php echo $codi; ?></td>
                                <td><?php echo $producte; ?></td>
                                <td><?php echo $quantitat; ?></td>
                            </tr>
                <?php
                        }
                    }
                ?>
                </table>
        </div>
        <div class="comandes_actives">
            <h3>Comandes Actives</h3>
                    <table>
                    <tr>
                        <td>CODI ID</td>
                    </tr>
                    <?php
                        $comandes = "../fitxers/comandes_actives";
                        $llistes = scandir($comandes);
                            foreach($llistes as $comandes){
                                if(substr($comandes,0,4) === $_SESSION['codi']){
                    ?>
                        <tr>
                            <td><?php echo $comandes; ?></td>
                        </tr>
                    <?php
                                }
                            }
                    ?>
                    </table>
        </div>
    </body>
</html>