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
            $c1->cor = 'Azul';
            $c1->ponto = 0.5;
            $c1->tampada = false;
            $c1->destampar();
            
            
            $c2 = new Caneta();
            $c2->cor = "Verde";
            $c2->carga = 50;
            $c2->tampada = true;
            
            print_r($c2);
            //$c1->rabisca();
            
            //print_r($c1);
        ?>
    </body>
</html>
