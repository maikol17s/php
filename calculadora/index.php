<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora PHP</title>
</head>
<body>
    <form action="Calculadora.php" method="POST">
    <input type="number" name="operador1" value placeholder="Operador 1">
    <input type="number" name="operador2" value placeholder="Operador 2">
    <select name="operacion" id="operacion">
        <option value="sumar">Sumar</option>
        <option value="restar">Restar</option>
        <option value="multiplicar">Multiplicar</option>
        <option value="dividir">Dividir</option>
    </select>
    <input type="submit" value="Enviar" name="Enviar">

    </form>
</body>
</html>