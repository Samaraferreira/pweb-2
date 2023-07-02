<?php
function calcular($numero1, $numero2, $operacao)
{
    switch ($operacao) {
        case 'soma':
            return $numero1 + $numero2;
        case 'subtracao':
            return $numero1 - $numero2;
        case 'multiplicacao':
            return $numero1 * $numero2;
        case 'divisao':
            if ($numero2 != 0) {
                return $numero1 / $numero2;
            } else {
                return "Erro: Divisão por zero!";
            }
        default:
            return "Erro: Operação inválida!";
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $numero1 = $_POST['numero1'];
    $numero2 = $_POST['numero2'];
    $operacao = $_POST['operacao'];

    $resultado = calcular($numero1, $numero2, $operacao);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Resultado</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
  <main>
    <?php if (isset($resultado)): ?>
        <h1>O resultado da operação é: <?php echo $resultado; ?></h1>
    <?php endif; ?>
    <a href="calculadora.html"><- Realizar outra operação</a>
  </main>
</body>
</html>
