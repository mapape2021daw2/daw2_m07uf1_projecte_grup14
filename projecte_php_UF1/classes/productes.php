<?php

class Producte{
    private $codi;
    private $seccio;
    private $nom;
    private $preu;
    private $imatge;

    public function __construct($codi,$seccio,$nom,$preu,$imatge){
        $this->codi = $codi;
        $this->seccio = $seccio;
        $this->nom = $nom;
        $this->preu = $preu;
        $this->imatge = $imatge;
    }

    public function __get($value){
        if(property_exists($this,$value)){
            return $this->$value;
        }else{
            return -1;
        }
    }

    public function __set($value,$n_value){
        if(property_exists($this,$value)){
            $this->$value = $n_value;
        }
    }

    public function writeArxiu($arxiu,$text){
        fwrite($arxiu,$text);
        fwrite($arxiu,"\n");
        fclose($arxiu);
    }

    /*public function afegirProducte(){
        $producte=$_POST["codi"].":".$_POST["seccio"].":".$_POST["nom"].":".$_POST["preu"].":".$_POST["imatge"]."\n";
        $fitxer_productes = "../fitxers/productes.txt";
        $fitxer_p = fopen($fitxer_productes,"a") or die ("No s'ha pogut afegir un nou article a la llista.");
        fwrite($fitxer_p,$producte);
        fclose($fitxer_p);

        $codi = $_POST['codi'];
        $fitxer_productes_actius = "../fitxers/productesActius/".$codi;
        $fitxer_p_act = fopen($fitxer_productes_actius,"w") or die ("No s'ha pogut obrir el fitxer.");
        fwrite($fitxer_p_act,$producte);
        fclose($fitxer_p_act);
    }*/
}

$codi = $_POST['codi'];
$seccio = $_POST['seccio'];
$nom = $_POST['nom'];
$preu = $_POST['preu'];
$imatge = $_POST['imatge'];

$producte = new Producte($codi,$seccio,$nom,$preu,$imatge);

$fitxer_productes = "../fitxers/productes.txt";
$fitxer_p = fopen($fitxer_productes,"a") or die ("No s'ha pogut afegir un nou article a la llista.");
$infoProd = $producte->codi.":".$producte->seccio.":".$producte->nom.":".$producte->preu.":".$producte->imatge;
$producte->writeArxiu($fitxer_p,$infoProd);
fclose($fitxer_p);

$fitxer_productesAct = "../fitxers/productesActius/".$codi;
$fitxerAct = fopen($fitxer_productesAct,"w") or die ("No s'ha pogut crear un fitxer");
$infoProdAct = $producte->codi.":".$producte->seccio.":".$producte->nom.":".$producte->preu.":".$producte->imatge;
$producte->writeArxiu($fitxerAct,$infoProdAct);
fclose($fitxerAct);

header('Location: http://localhost/projecte_php_UF1/index_client.php');

?>