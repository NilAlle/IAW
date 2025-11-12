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
        <input type="number" name="numero1" required>
        <input type="number" name="numero2" required>
        <button type="submit">Comprova</button>
    </form>
 <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero = $_POST["numero"];
        $numero1 = $_POST["numero1"];
        $numero2 = $_POST["numero2"];

        if (is_numeric($numero)) {
            if ($numero > $numero1 && $numero > $numero2) {
                echo "<p>El número més gran és el primer</p>";
         } if($numero1 > $numero2 && $numero1 > $numero) {
                echo "<p>El número més gran és el segon</p>";
            }
        }  if($numero2 > $numero && $numero2 > $numero1)  {
            echo "<p>El número més gran és el tercer</p>";
        }
    }
    ?>
</body>
</html>