<?php

$fitxerUsuaris = "../fitxers/usuaris.txt";
$fitxer = fopen($fitxerUsuaris,"r") or die("No s'ha pogut obrir el fitxer");

$f = file_get_contents($fitxerUsuaris);
$usuari = explode(":",$f);

$nomUsuari = $_POST["nom_usuari"];
$nom = $_POST["nom"];
$ctsnya = $_POST["ctsnya"];
$cognoms = $_POST["cognoms"];
$adreca = $_POST["adreca"];
$email = $_POST["email"];
$telefon = $_POST["telf"];
$visa = $_POST["visa"];

foreach ($usuari as $i => $key){
    $comprovar = $usuari[$i];
    $nom_usuari = explode(":",$comprovar);
    if($nom_usuari[0] == $nomUsuari){
        $dades = $nomUsuari.":".$ctsnya.":".$nom.":".$cognoms.":".$adreca.":".$email.":".$telefon.":".$visa.":";
        $usuari[$i] = $dades;
        $modificat = TRUE;
    }
}

$modificacions = implode(":",$usuari);

if($modificat = TRUE){
    $fitxer_write = fopen($fitxerUsuaris,"w") or die ("No s'ha pogut llegir el fitxer");
    fwrite($fitxer_write,$modificacions.":");
    fclose($fitxer_write);
    echo("Usuari modificat.");
    header('Location: /projecte_php_UF1/index_admin.php');
}
?>