<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../style.css">
    <title>Botões</title>
</head>
<body>
<form action="botoes.php" method="get">
        <label for="numero 1">Número 1:</label>
        <input type="" id="numero 1" name="n"><br>
        <label for="numero 2">Número 2:</label>
        <input type="" id="numero 2" name="n2"><br><br>
        <button id="soma" name="+">+</button>
        <button id="subt" name="-">-</button>
        <button id="mult" name="x">×</button>
        <button id="div" name="/">÷</button>
    </form>
    
    
    <?php
    if(isset($_GET['n']) && isset($_GET['n2']) && isset($_GET['+'])){
        $soma = $_GET['n'] + $_GET['n2'];
        echo "<p>$_GET[n] + $_GET[n2] é $soma</p>";
    }
    if(isset($_GET['n']) && isset($_GET['n2']) && isset($_GET['-'])){
        $subt = $_GET['n'] - $_GET['n2'];
        echo "<p>$_GET[n] - $_GET[n2] é $subt</p>";
    }
    if(isset($_GET['n']) && isset($_GET['n2']) && isset($_GET['x'])){
        $mult = $_GET['n'] * $_GET['n2'];
        echo "<p>$_GET[n] * $_GET[n2] é $mult</p>";
    }
    if(isset($_GET['n']) && isset($_GET['n2']) && isset($_GET['/'])){
        $div = $_GET['n'] / $_GET['n2'];
        echo "<p>$_GET[n] / $_GET[n2] é $div</p>";
    }
    ?>
<p><a href="../index.php">Voltar</a></p>
</body>
</html>