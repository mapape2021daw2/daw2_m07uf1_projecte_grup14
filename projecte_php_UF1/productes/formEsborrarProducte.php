<?php session_start(); ?>
<html>
	<head>
		<meta content="text/html; charset=UTF-8" http-equiv="content-type">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="../css/estils.css">
        <script language="javascript" src="esborrarProducte.js"></script>
        <title>Eliminar producte</title>
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
                <li><a href="../logout.php">Tancar sessió</a></li>
            </ul>
        </nav>
        <div>
            <h1>ELIMINAR PRODUCTE</h1>
            <fieldset>
                <legend>
                    <h4>Anul·lar producte</h4>
                </legend>
                <form id="frmEsbPro">
                    <table>
						<tr>
							<td>Codi de producte:</td>
							<td><select name="nomPro" id="nomPro">
							<?php
							$productes="../fitxers/productesActius";
							$llista = scandir($productes);
							foreach($llista as $producte){
							?>
								<option><?php echo $producte; ?></option>					
							<?php
								}
							?>
							</select></td>
						</tr>
					</table>
					<input type="button" name="bEsbPro" id="bEsbPro" value="Esborra producte" onclick="esbProducte();">
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