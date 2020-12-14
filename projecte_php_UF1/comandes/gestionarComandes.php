<?php session_start() ?>
<html>
	<head>
    <meta content="text/html; charset=UTF-8" http-equiv="content-type">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="../css/estils.css">
        <script language="javascript" src="esborrarComanda.js"></script>
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
                        <li><a href="gestionarComandes.php">Gestionar comandes</a></li>
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

        <h2>GESTIONAR COMANDES</h2>
        <div class="comandes">
            <h3>COMANDES REALITZADES</h3>
            <table>
                <tr>
                    <td>Codi</td>
                    <td>Producte</td>
                    <td>Quantitat</td>
                </tr>
                <?php 
                    $fitxer_comandes = "../fitxers/comandes.txt";
                    $file = fopen($fitxer_comandes,"r") or die ("No s'ha pogut obrir el fitxer");
                    if($file){
                        $mida = filesize($fitxer_comandes);
                        $comandes = explode(PHP_EOL,fread($file,$mida));
                    }
                    foreach ($comandes as $comanda){
                        $verificar = explode(":",$comanda);
                            $codi = $verificar[0];
                            $producte = $verificar[1];
                            $quantitat = $verificar[2];
                ?>
                    <tr>
                        <td><?php echo $codi; ?></td>
                        <td><?php echo $producte; ?></td>
                        <td><?php echo $quantitat; ?></td>
                    </tr>
                <?php
                    }
                ?>
            </table>
        </div>
        <br><br>			
			<div class="comandes">
			    <h3>Comandes actives</h3>
			        <table>
				        <tr>
					        <td>Codi comandes actives</td>
				        </tr>
				    <?php
					    $comandes="../fitxers/comandesActives.txt";
					    $llista = scandir($comandes);
					    foreach($llista as $comanda){
				    ?>
					    <tr>
						    <td><?php echo $comanda; ?></td>
					    </tr>					
				    <?php
					    }
				    ?>
			        </table>
			</div>			
			<br><br>
            <div class="comandes">
                <h3>Petició eliminar comandes</h3>
                <fieldset>
				<legend>
					<h3>Petició per a anular una comanda</h3>
				</legend>		
				<form id="frmEsbCom">
					<table>
						<tr>
							<td>Codi de la comanda:</td>
							<td><select name="nomCom" id="nomCom">
								<?php
									$fitxer_comandes="../fitxers/eliminarCom.txt";
									$f=fopen($fitxer_comandes,"r") or die ("No s'ha pogut obrir el fitxer");
									if ($f) {
										$mida=filesize($fitxer_comandes);	
										$comandes = explode(PHP_EOL, fread($f,$mida));
									}
									foreach ($comandes as $comanda) {
								?>
									    <option><?php echo $comanda; ?></option>		
								<?php
									}
								?>
							</select></td>
						</tr>
					</table>
					<input type="button" name="bEsbCom" id="bEsbCom" value="Esborra Comanda" onclick="esbComanda();">
					<input type="button" name="bNet" id="bNet" value="Neteja formulari" onclick="netForm();">
				</form>
			    </fieldset>
			    <fieldset>
				    <legend>
					    <h3>Resposta a la petició</h3>
				    </legend>
				    <p id="resp"></p>
			    </fieldset>	
			</div>
    </body>
</html>