<?php

class Usuari{

    public function __construct($nom_usuari, $ctsnya,$nom,$cognoms,$adreca,$email,$telf,$visa){
        $this->nom_usuari = $nom_usuari;
        $this->ctsnya = $ctsnya;
        $this->nom = $nom;
        $this->cognoms = $cognoms;
        $this->adreca = $adreca;
        $this->email = $email;
        $this->telf = $telf;
        $this->visa = $visa;
    }

    public function afegirUsuari(){
        $usuari=$_POST["nom_usuari"].":".$_POST["ctsnya"].":".$_POST["nom"].":".$_POST["cognoms"].":".$_POST["adreca"].":".$_POST["email"].":".$_POST["telf"].":".$_POST["visa"].":"."\r\n";
        $fitxer_usuaris = "fitxers/usuaris.txt";
        $fitxer = fopen($fitxer_usuaris,"a") or die ("No s'ha pogut afegir un nou usuari a la llista d'usuaris de web");
        fwrite($fitxer,$usuari);
        fclose($fitxer);
    }
}
?>