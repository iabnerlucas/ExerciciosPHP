<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício PHP</title>
    <link rel="stylesheet" href="../ex004/style.css">
</head>
<body>
    <main>
        <h1>Somador de Valores</h1>
        <?php 

        //Capturando os dados do formulario

        $valor1 = $_GET['v1']??0;
        $valor2 = $_GET['v2']??0;

        ?>
         <form action="<?php echo $_SERVER['PHP_SELF']?> " method="get"> <!--manda os dados da página para ela mesma  -->
            <label for="v1">Valor 1</label>
            <input type="number" name="v1" id="v1" value="<?=$valor1?>"> <!--Recebe o valor 1-->
            <label for="v2">Valor 2</label>
            <input type="number" name="v2" id="v2" value="<?=$valor2?>"> <!--Recebe o valor 2-->
             <input type="submit" value="somar"> <!--Botão de Somar -->
        </form>
    </main>

    <section id="resultado">
    <h2>Resultado da Soma</h2>
    <?php 
    
    $soma = $valor1 + $valor2;

    print "<p>A soma de <strong>$valor1</strong> e <strong>$valor 2</strong> é igual a <strong>$soma</strong></p>";
    ?>
    </section>
</body>
</html>