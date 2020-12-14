<?php
session_start();

class Comanda{
    private $codi;
    private $producte;
    private $quantitat;

    public function __construct($codi,$producte,$quantitat){
        $this->$codi;
        $this->$producte;
        $this->$quantitat;
    }

    public function __get($propietat){
        if(property_exists($this,$propietat)){
            return $this->$propietat;
        }else{
            return -1;
        }
    }

    public function __set($propietat,$valor){
        if(property_exists($this,$propietat)){
            $this->$propietat=$valor;
        }
    }

    public function writeArxiu($arxiu,$text){
        fwrite($arxiu,$text);
        fwrite($arxiu,"\n");
        fclose($arxiu);
    }
}

$numComanda = rand(999,9999);
$codi = $_SESSION['nom_usuari']."-".$numComanda;
$producte = $_POST['producte'];
$quantitat = $_POST['quantitat'];

$comanda = new Comanda($codi,$producte,$quantitat);

$fitxerComandes = "../fitxers/comandes.txt";
$fitxer = fopen($fitxerComandes,"a") or die ("No s'ha pogut obrir el fitxer");
$info = $comanda->codi.":".$comanda->producte.":".$comanda->quantitat;
$comanda->writeArxiu($fitxer,$info);
fclose($fitxer);

$fitxerComandesActives = "../fitxers/comandesActives/".$codi;
$fitxer = fopen($fitxerComandesActives,"w") or die ("No s'ha pogut obrir el fitxer");
$infoAct = $comanda->codi.":".$comanda->producte.":".$comanda->quantitat;
$infoCompra->writeArxiu($fitxer,$infoAct);
fclose($fitxerComandesActives);

header('Location: http://localhost/projecte_php_UF1/comandes/comandes.php');

?>