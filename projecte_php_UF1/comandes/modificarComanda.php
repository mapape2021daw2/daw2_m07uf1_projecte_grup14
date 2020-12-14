<?php
    $fitxer_comandesActives = "../fitxers/comandesActives/".$_POST['comanda'];
    $codi = $_POST["comanda"];
    $producte = $_POST["producte"];
    $quantitat = $_POST["quantitat"];

    $f = fopen($fitxer_comandesActives,"w") or die ("No s'ha pogut obrir el fitxer");
    fwrite($f,$codi);
    fwrite($f,":");
    fwrite($f,$producte);
    fwrite($f,":");
    fwrite($f,$quantitat);
    fwrite($f,"\n");
    fclose($f);

    $fitxer_comandes = "../fitxers/comandes.txt";
    $file = fopen($fitxer_comandes,"a") or die ("No s'ha pogut obrir el fitxer");
    fwrite($file,$codi);
    fwrite($file,":");
    fwrite($file,$producte);
    fwrite($file,":");
    fwrite($file,$quantitat);
    fwrite($file,"\n");
    fclose($file);

    header('Location: comandes.php');
?>