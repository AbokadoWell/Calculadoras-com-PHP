<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../style.css">
    <title>Opções</title>
</head>
<body>
<form action="opcoes.php" method="get">
        <label for="numero 1">Número 1:</label>
        <input type="" id="numero 1" name="n"><br>
        <label for="numero 2">Número 2:</label>
        <input type="" id="numero 2" name="n2"><br><br>
        <select name="operacao" id="operacao">
            <option value="soma">+</option>
            <option value="subt">-</option>
            <option value="mult">×</option>
            <option value="div">÷</option>
        </select>
        <button>Calcular</button>
    </form>

    <?php
    if (isset($_GET['n']) && isset($_GET['n2']) && isset($_GET['operacao'])) {
        if ($_GET['operacao'] == 'soma') {
            $soma = $_GET['n'] + $_GET['n2'];
            echo "<p>$_GET[n] + $_GET[n2] é $soma</p>";
        }
        if ($_GET['operacao'] == 'subt') {
            $subt = $_GET['n'] - $_GET['n2'];
            echo "<p>$_GET[n] - $_GET[n2] é $subt</p>";
        }
        if ($_GET['operacao'] == 'mult') {
            $mult = $_GET['n'] * $_GET['n2'];
            echo "<p>$_GET[n] * $_GET[n2] é $mult</p>";
        }
        if ($_GET['operacao'] == 'div') {
            $div = $_GET['n'] / $_GET['n2'];
            echo "<p>$_GET[n] / $_GET[n2] é $div</p>";
        }
    }
    ?>

<p><a href="../index.php">Voltar</a></p>
</body>
</html>