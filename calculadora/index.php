<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calculadora PHP</title>
</head>
<body>

    <?php 
        if(isset($_GET["total"])){
            echo "<hr>Resultado: ".$_GET["total"]."<br><hr>";
        }  ?>
    
<?php 
?>
    <form action="calcular.php" method="post">
        <label for="n1">
            Número 1:
        </label>
        <input type="text" name="numero1">
        <br>
        <label for="n2">
            Número 2:
            <input type="text" name="numero2">
        </label>

        <br><br>
        Operações: <br>
        <input type="radio" name="operacao" value="somar">
        <label for="operacao">
            +
        </label>
            
        <input type="radio" name="operacao" value="subtrair">
        <label for="operacao">
            -
        </label>
            <input type="radio" name="operacao" value="dividir">
        <label for="operacao">
            /
        </label>
            <input type="radio" name="operacao" value="multiplicar">
        <label for="operacao">
            *
        </label>
        <br><br>
        <input type="submit" value="calcular">
    </form>
    <a href='../pages/index.php'>Voltar</a> 
    
</body>
</html>