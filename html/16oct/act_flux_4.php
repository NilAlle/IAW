
<?php
//Fes un programa que et demani un número de l’1 al 10 i segons la nota et digui: “Aprovat” o “Suspès”.

$nota = 3;


if ($nota >= 1 && $nota <= 10) {
    
    if ($nota >= 5) {
        echo "Aprovat\n";
    } else {
        echo "Suspès\n";
    }
} else {
    echo "La nota introduïda no és vàlida. Introdueix un número entre 1 i 10.\n";
}
?>
