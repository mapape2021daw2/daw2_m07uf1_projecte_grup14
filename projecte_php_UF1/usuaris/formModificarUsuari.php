<?php
    session_start();
    $nom = $_POST["nom_usuari"];

    echo "<html>
            <form action='modificarUsuari.php' method='POST'>
            <p>Canviar dades => $nom</p>
            <p>Nova contrasenya:</p>
            <input name='ctsnya' type='password'><br>
            <p>Nou nom:</p>
            <input name='nom' type='text'><br>
            <p>Cognoms:</p>
            <input name='cognoms' type=text'><br>
            <p>Adreça:</p>
            <input name='adreca' type='text'><br>
            <p>Email:</p>
            <input name='email' type='email'><br>
            <p>Telefon:</p>
            <input name='telf' type='tel'><br>
            <p>VISA:</p>
            <input name='visa' type='visa'><br>
            <input name='nom_usuari' type='hidden' value=".$nom."><br>
            <input type='submit' value='Modificar'>
            </form>
         </html>"
?>