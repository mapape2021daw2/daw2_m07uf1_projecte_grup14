<?php
    session_start();
    $nom = $_POST["nom_usuari"];   
?>

<html>
    <head>
        <script type='text/javascript' src='esborrarUsuari.js'></script>   
    <head>     
    <form>
        <h1>Vols esborrar l'usuari ? => <?php echo $nom ?></h1>
        <p>Per a esborrar l'usuari, introdueïx l'usuari i la contrasenya:</p>
        Nom d'usuari <input type="text" name="nom_usuari"><br>
        Contrasenya <input type="password" name="ctsnya"><br>
        <input type='button' value="Esborra" onclick="esbUsuari();"/>
    </form>
</html>