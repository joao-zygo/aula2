<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
    <title>Cálculo da Área de um Triângulo</title>
</head>
<body>
    <h1>Calculadora de Área de Triângulo</h1>

    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $base = $_POST['base'];
        $altura = $_POST['altura'];

        // Calculando a área do triângulo
        $area = ($base * $altura) / 2;

        $valorLimite = 100;

        if ($area > $valorLimite) {
            echo "<p>A área do triângulo (".number_format($area, 2, ',', '.').") é maior que $valorLimite.</p>";
        } else {
            echo "<p>A área do triângulo (".number_format($area, 2, ',', '.').") é menor ou igual a $valorLimite.</p>";
        }
    } else {
    ?>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="base">Digite a base do triângulo:</label>
        <input type="number" name="base" id="base" required>
        <br>
        <label for="altura">Digite a altura do triângulo:</label>
        <input type="number" name="altura" id="altura" required>
        <br>
        <input type="submit" value="Calcular">
    </form>
    <?php } ?>
    <a href="javascript:history.go(-1)"><button>Voltar</button></a>
</body>
</html>