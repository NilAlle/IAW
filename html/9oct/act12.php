<?php
class Coche {
    function Coche() {
        $this->modelo = "Tesla";
    }
}

// crea un objeto
$objeto_coche= new Coche();

// muestra las propiedades del objeto
echo $objeto_coche->modelo;
?>
