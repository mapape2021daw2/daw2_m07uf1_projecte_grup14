<?php

    $fitxerProductesAct = "../fitxers/productesActius/".$_POST['producte'];
    $codi = $_POST["producte"];
    $seccio = $_POST["seccio"];
    $nom = $_POST["nom"];
    $preu = $_POST["preu"];
    $imatge = $_POST["imatge"];

    $fitxer = fopen($fitxerProductesAct,"w") or die("No s'ha pogut obrir el fitxer");
    fwrite($fitxer,$codi);
    fwrite($fitxer,":");
    fwrite($fitxer,$seccio);
    fwrite($fitxer,":");
    fwrite($fitxer,$nom);
    fwrite($fitxer,":");
    fwrite($fitxer,$preu);
    fwrite($fitxer,":");
    fwrite($fitxer,$imatge);
    fwrite($fitxer,"\n");
    fclose($fitxer);

    $fitxerProductes = "../fitxers/productes.txt";
    $f = fopen($fitxerProductes,"a") or die ("No s'ha pogut obrir el fitxer");
    fwrite($f,$codi);
    fwrite($f,":");
    fwrite($f,$seccio);
    fwrite($f,":");
    fwrite($f,$nom);
    fwrite($f,":");
    fwrite($f,$preu);
    fwrite($f,":");
    fwrite($f,$imatge);
    fwrite($f,"\n");
    fclose($f);

    header('Location: /projecte_php_UF1/index_client.php');
?>