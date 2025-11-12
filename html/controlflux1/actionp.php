
 <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero = $_POST["numero"];

        if (is_numeric($numero)) {
            if ($numero > 0) {
                echo "<p>✅ El número és més gran que zero.</p>";
            } else {
                echo "<p>❌ El número NO és més gran que zero.</p>";
            }
        } else {
            echo "<p>⚠️ No has introduït un número vàlid.</p>";
        }
    }
    ?>
