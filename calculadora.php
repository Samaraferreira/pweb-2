<?php
function calcular($num1, $num2, $operacao)
{
    switch ($operacao) {
        case 'soma':
            return $num1 + $num2;
        case 'subtracao':
            return $num1 - $num2;
        case 'multiplicacao':
            return $num1 * $num2;
        case 'divisao':
            if ($num2 != 0) {
                return $num1 / $num2;
            } else {
                return "Erro: Divisão por zero!";
            }
        default:
            return "Erro: Operação inválida!";
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operacao = $_POST['operacao'];

    $resultado = calcular($num1, $num2, $operacao);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Resultado da Calculadora</title>
</head>
<body>
    <h1>Resultado da Calculadora</h1>
    <?php if (isset($resultado)): ?>
        <p>O resultado da operação é: <?php echo $resultado; ?></p>
    <?php endif; ?>
    <a href="calc.html">Realizar outra operação</a>
</body>
</html>
