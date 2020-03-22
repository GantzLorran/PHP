<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Aula 2 - Criando classes e objetos</title>
    </head>
    <body>
        <?php
            require_once 'Caneta.php';
            $c1 = new Caneta();
            $c1 -> modelo = "Bic Cristal";
            $c1 -> cor = "Azul";
            //$c1 -> ponta = 0.5;
            //$c1 -> tampada = true;
            var_dump($c1);
            
                    
        ?>
    </body>
</html>
