<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Comprovació de número</title>
</head>
<body>
    <h2>Introdueix un número</h2>
    <form method="post">
        <input type="number" name="numero" required>
        <button type="submit">Comprova</button>
    </form>
 <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero = $_POST["numero"];


        if (is_numeric($numero)) {
            if ($numero >= 5 && $numero <= 10 ) 
                echo "<p>Aprovat</p>";
            if($numero < 5 && $numero >= 0) 
                echo "<p>Susupés</p>";
            if ($numero < 0)
                echo "<p> ERROR, introdueix un número més gran que 0 </p>";
            if ($numero > 10)
                echo "<p> ERROR, introdueix un número més petit que 10 </p>";
            
        
    }}


    /*
En posar -2 el programa me retorna: ERROR, introdueix un número més gran que 0 
En posar 1 el programa me retorna: suspés
En posar 5 el programa me retorna: aprovat
En posar 10 el programa me retorna: aprovat
En posar 16 el programa me retorna: ERROR, introdueix un número més petit que 10 
El programa no em permet posar una lletra
*/

?>
</body>
</html>

